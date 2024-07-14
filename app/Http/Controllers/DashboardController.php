<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Booking;
use App\Models\Vehicle;
use App\Models\Sparepart;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $role = $user->role_id;

        // Default data
        $data = [
            'vehicle' => collect([]),
            'history' => collect([]),
            'count' => 0,
            'countCarRepair' => 0,
            'countCarWash' => 0,
            'countMotorcycleRepair' => 0,
            'countMotorcycleWash' => 0,
            'countMotorcycleRepairOnProcess' => 0,
            'countMotorcycleRepairStandBy' => 0,
            'countMotorcycleRepairDone' => 0,
            'totalAmount' => 0,
            'totalBookings' => 0,
            'totalSpareparts' => 0,
            'totalDoneBookingsSpareparts' => 0,
            'totalKendaraan' => 0,
        ];

        // Fetch data based on user role
        if ($role == 1) { // Admin
            $data = $this->getAdminDashboardData($user);
        } else if ($role == 2) { // Regular user
            $data = $this->getUserDashboardData($user);
        }

        // Chart Data (Fetch data based on your requirements)
        $data['hariChartData'] = $this->getChartData('today', $role);
        $data['ahadChartData'] = $this->getChartData('week', $role);
        $data['bulanChartData'] = $this->getChartData('month', $role);

        // Determine the appropriate view based on the user's role
        $view = ($role == 1) ? 'homepage_view.home1' : 'homepage_view.home1_user';

        return view($view, $data);
    }


    public function kendaraan()
    {
        $kendaraan = Vehicle::all();
        return view('homepage_view.daftar_kendaraan', compact('kendaraan'));
    }



    public function orderlist()
    {
        $orderlist = Booking::orderBy('status', 'asc')
            ->orderByRaw("FIELD(status, 'stand_by', 'on_process', 'done')")
            ->get();
        $spareparts = Sparepart::all();
        return view('homepage_view.orderlist', compact('orderlist', 'spareparts'));
    }

    public function sparepart()
    {
        $sparepart = Sparepart::all();
        return view('homepage_view.sparepart', compact('sparepart'));
    }
    public function artikel()
    {
        $artikel = Blog::all();
        return view('homepage_view.artikel', compact('artikel'));
    }

    public function invoice()
    {
        $orderlist = Booking::with('user')->where('status', 'done')->get();
        return view('homepage_view.invoice', compact('orderlist'));
    }

    public function invoiceUser($id)
    {
        $orderlist = Booking::with(['user', 'spareparts'])->where('id_user', $id)->where('status', 'done')->get();
        return view('homepage_view.invoice', compact('orderlist'));
    }

    public function profile($id)
    {
        $user = User::find($id);
        return view('homepage_view.profil', compact('user'));
    }

    private function getAdminDashboardData($user)
    {
        $vehicle = Vehicle::all();
        $history = Booking::all();

        $countMotorcycleRepairOnProcess = Booking::where([
            ['service_type', '=', 'repair'],
            ['vehicle_type', '=', 'motorcycle'],
            ['status', '=', 'on_process']
        ])->count();

        $countMotorcycleRepairStandBy = Booking::where([
            ['service_type', '=', 'repair'],
            ['vehicle_type', '=', 'motorcycle'],
            ['status', '=', 'stand_by']
        ])->count();

        $countMotorcycleRepairDone = Booking::where([
            ['service_type', '=', 'repair'],
            ['vehicle_type', '=', 'motorcycle'],
            ['status', '=', 'done']
        ])->count();

        $totalBookings = Booking::count();
        $totalKendaraan = Vehicle::count();
        $totalSpareparts = Sparepart::count();

        $totalDoneBookingsSpareparts = DB::table('booking_sparepart')
            ->join('bookings', 'booking_sparepart.booking_id', '=', 'bookings.id')
            ->join('spareparts', 'booking_sparepart.sparepart_id', '=', 'spareparts.id')
            ->where('bookings.status', 'done')
            ->sum('spareparts.price');

        $totalAmount = Booking::where('status', 'done')->sum('ammount'); // Perhatikan: nama kolom mungkin 'ammount' bukan 'total_price'

        return [
            // Data yang akan digunakan di view untuk admin
            'vehicle' => $vehicle,
            'history' => $history,
            'countMotorcycleRepairOnProcess' => $countMotorcycleRepairOnProcess,
            'countMotorcycleRepairStandBy' => $countMotorcycleRepairStandBy,
            'countMotorcycleRepairDone' => $countMotorcycleRepairDone,
            'totalBookings' => $totalBookings,
            'totalKendaraan' => $totalKendaraan,
            'totalSpareparts' => $totalSpareparts,
            'totalDoneBookingsSpareparts' => $totalDoneBookingsSpareparts,
            'totalAmount' => $totalAmount,
        ];
    }

    private function getChartData($period, $role)
    {
        if ($period == 'today') {
            $startDate = Carbon::today();
            $endDate = $startDate->copy()->endOfDay();
        } elseif ($period == 'week') {
            $startDate = Carbon::now()->startOfWeek(); // Start of the week (Sunday)
            $endDate = Carbon::now()->endOfWeek();     // End of the week (Saturday)
        } else { // month
            $startDate = Carbon::now()->startOfMonth();
            $endDate = Carbon::now()->endOfMonth();
        }

        $query = Booking::where('status', 'done')
            ->whereBetween('created_at', [$startDate, $endDate]);

        if ($role == 2) { // If the user is a regular user, filter by their ID
            $query->where('id_user', auth()->user()->id);
        }

        $bookings = $query->selectRaw('DATE(created_at) as date, SUM(ammount) as total')
            ->groupBy('created_at') // Include created_at in the GROUP BY
            ->get();

        // Prepare data for Chart.js
        $labels = $bookings->pluck('date');
        $totals = $bookings->pluck('total');

        return compact('labels', 'totals');
    }
}
