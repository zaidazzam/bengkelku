<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Sparepart;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{

    public function index()
{
    $user = auth()->user();
    $role = $user->role_id;

    // Default values for regular user
    $countMotorcycleRepairOnProcess = 0;
    $countMotorcycleRepairStandBy = 0;
    $countMotorcycleRepairDone = 0;
    $totalBookings = 0;
    $totalKendaraan = 0;
    $totalSpareparts = 0;
    $totalDoneBookingsSpareparts = 0;
    $totalAmount = 0;

    if ($role == 1) { // Admin
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

        $totalAmount = Booking::where('status', 'done')->sum('ammount');
    } else if ($role == 2) { // Regular user
        $vehicle = Vehicle::where('id_user', $user->id)->get();
        $history = Booking::where('id_user', $user->id)->get();

        // Set empty collection for admin-only variables
        $totalBookings = 0;
        $totalSpareparts = 0;
        $totalDoneBookingsSpareparts = 0;
        $totalAmount = 0;
    }

    // Pastikan $vehicle dan $history selalu koleksi
    if ($vehicle->isEmpty()) {
        $vehicle = collect([]);
    }
    if ($history->isEmpty()) {
        $history = collect([]);
    }

    $count = $vehicle->count();

    // Hitungan lainnya
    $countCarRepair = Booking::where('service_type', 'repair')
        ->where('status', 'on_process')
        ->where('vehicle_type', 'car')
        ->count();
    $countCarWash = Booking::where('service_type', 'wash')
        ->where('status', 'on_process')
        ->where('vehicle_type', 'car')
        ->count();
    $countMotorcycleRepair = Booking::where('service_type', 'repair')
        ->where('status', 'on_process')
        ->where('vehicle_type', 'motorcycle')
        ->count();
    $countMotorcycleWash = Booking::where('service_type', 'wash')
        ->where('status', 'on_process')
        ->where('vehicle_type', 'motorcycle')
        ->count();

    $data = [
        'vehicle' => $vehicle,
        'count' => $count,
        'history' => $history,
        'countCarRepair' => $countCarRepair,
        'countCarWash' => $countCarWash,
        'countMotorcycleRepair' => $countMotorcycleRepair,
        'countMotorcycleWash' => $countMotorcycleWash,
        'countMotorcycleRepairOnProcess' => $countMotorcycleRepairOnProcess,
        'countMotorcycleRepairStandBy' => $countMotorcycleRepairStandBy,
        'countMotorcycleRepairDone' => $countMotorcycleRepairDone,
        'totalAmount' => $totalAmount,
        'totalBookings' => $totalBookings,
        'totalSpareparts' => $totalSpareparts,
        'totalDoneBookingsSpareparts' => $totalDoneBookingsSpareparts,
        'totalKendaraan' => $totalKendaraan,
    ];

    return view('homepage_view.home', $data);
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
}
