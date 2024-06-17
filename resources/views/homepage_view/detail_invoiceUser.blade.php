@extends('homelayout.layout')

@section('title')
    Invoice
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 mt-5">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3>Invoice</h3>
                        <div class="text-end">
                            <a href="{{ url()->previous() }}" class="btn btn-primary text-white"><i
                                     class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4>Invoice #{{ $booking->id }}</h4>
                        <div class="row">
                            <div class="col">
                                <table class="table table-bordered">
                                    <tr>
                                        <th scope="col">Pemilik</th>
                                        <td>{{ $booking->user->fullname }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Tipe Kendaraan</th>
                                        <td>{{ $booking->vehicle_type }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Nama Kendaraan</th>
                                        <td>{{ $booking->name }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Transmisi</th>
                                        <td>{{ $booking->transmission }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Nomor Polisi</th>
                                        <td>{{ $booking->license_plate }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Tanggal Booking</th>
                                        <td>{{ \Carbon\Carbon::parse($booking->date)->translatedFormat('d F Y') }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Catatan</th>
                                        <td>
                                            @if ($booking->notes == null)
                                                <p>-</p>
                                            @else
                                                <p>{{ $booking->notes }}</p>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Price</th>
                                        <td>Rp {{ number_format($booking->ammount, 0, ',', '.') }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col">
                                @if (count($booking->spareparts) > 0)
                                    <table class="table table-bordered">
                                        <tr>
                                            <th scope="col">Sparepart</th>
                                            <th scope="col">Harga</th>
                                        </tr>
                                        @foreach ($booking->spareparts as $sparepart)
                                            <tr>
                                                <td>{{ $sparepart->name }}</td>
                                                <td>Rp {{ number_format($sparepart->price, 0, ',', '.') }}</td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <th scope="col">Total</th>
                                            <td>Rp {{ number_format($priceSparepart, 0, ',', '.') }}</td>
                                        </tr>
                                    </table>
                                @else
                                    <p>Tidak ada suku cadang yang ditambahkan ke pemesanan ini.</p>
                                @endif
                            </div>
                        </div>
                        <h5 class="mt-3">Total</h5>
                        <table class="table table-bordered">
                            <tr>
                                <td scope="col">Service</td>
                                <td>Rp {{ number_format($booking->ammount, 0, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <td scope="col">Sparepart</td>
                                <td>Rp {{ number_format($priceSparepart, 0, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Sub Total</th>
                                <th>Rp {{ number_format($total_price, 0, ',', '.') }}</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
