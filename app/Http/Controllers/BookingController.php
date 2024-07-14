<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Sparepart;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $service_type)
    {
        $credentials = $request->validate([
            'vehicle' => 'required',
        ]);
        if ($credentials) {
            $booking = new Booking([
                'id_user' => Auth::user()->id,
                'service_type' => $service_type,
                'name' => $request->get('vehicle'),
                'vehicle_type' => $request->get('vehicle_type'),
                'transmission' => $request->get('transmission'),
                'license_plate' => $request->get('license_plate'),
                'date' => $request->get('date'),
                'notes' => $request->get('notes'),
                'ammount' => $request->get('package'),
                'status' => 'pending'
            ]);
            $booking->save();
            return redirect('/home')->with('success', 'Booking saved!');
        }else{
            return redirect('/home')->with('error', 'Please Add Vehicle First!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'statusEdit' => 'required'
        ]);
        $booking = Booking::find($id);
        if ($request->get('statusEdit') == '1') {
            $booking->status = 'stand_by';
        } else if ($request->get('statusEdit') == '2') {
            $booking->status = 'on_process';
        } else if ($request->get('statusEdit') == '3') {
            $booking->status = 'done';
        }
        $booking->save();
        return redirect('/home/orderlist')->with('success', 'Booking updated!');
    }

    public function updateSparepart(Request $request) // Hilangkan parameter $sparepart
    {
        $request->validate([
            'sparepart_id' => 'required|array',
            'booking_id' => 'required|exists:bookings,id',
        ]);

        $booking = Booking::findOrFail($request->booking_id);
        $sparepartIds = $request->sparepart_id;

        // Hitung total harga dengan benar
        $totalAmmount = $booking->ammount;
        foreach ($sparepartIds as $sparepartId) {
            $sparepart = Sparepart::findOrFail($sparepartId);
            $totalAmmount += $sparepart->price;
        }

        // Update harga total pemesanan
        $booking->ammount = $totalAmmount;
        $booking->save();

        // Gunakan model pivot untuk menyimpan hubungan many-to-many
        $booking->spareparts()->attach($sparepartIds);

        return redirect('/home/orderlist')->with('success', 'Suku cadang telah ditambahkan ke pemesanan.');
    }

    public function invoice(Booking $booking)
    {
        $booking = Booking::with(['user', 'spareparts'])->findOrFail($booking->id);
        $priceSparepart = 0;
        foreach ($booking->spareparts as $sparepart) {
            $priceSparepart += $sparepart->price;
        }
        $total_price = $booking->ammount;
        $pdf = PDF::loadView('homepage_view.detail_invoice', compact('booking', 'total_price', 'priceSparepart'));
        $pdf->setPaper('a4', 'potrait');
        return $pdf->stream('invoice.pdf');
    }

    public function invoiceUser($id)
    {
        $booking = Booking::with(['user', 'spareparts'])->findOrFail($id);
        $priceSparepart = 0;
        foreach ($booking->spareparts as $sparepart) {
            $priceSparepart += $sparepart->price;
        }
        $total_price = $booking->ammount + $priceSparepart;
        return view('homepage_view.detail_invoiceUser', compact('booking', 'total_price', 'priceSparepart'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
        $booking->delete();
        return redirect('/home/orderlist')->with('success', 'Booking deleted!');
    }
}
