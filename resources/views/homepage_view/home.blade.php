@extends('homelayout.layout')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row bg-primary-light rounded-sm p-2 mx-1 mb-2">
                    <div class="col-md-8 mt-3 mb-2 ">
                        <h3 class="text-white">Halo, {{ Auth::user()->fullname }}</h3>
                        <p class="text-white">Selamat datang di Bengkel Tunas Santosa Mandiri, layanan reservasi bengkel
                            online! Kami siap
                            membantu anda
                            pesan perawatan kendaraan anda dengan mudah dan cepat.</p>
                    </div>
                    <div class="col-md-4 d-flex">
                        <img src="{{ asset('images/illustration_hero.png') }}" alt="home" class="img-fluid" width="251px"
                            height="142px">
                    </div>
                </div>
                @if (Auth::user()->role_id == 1)
                <h2 class="h5 page-title">Informasi Status Booking</h2>
                <div class="row">
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow">
                            <div class="card-header">
                                <span class="card-title">Status On Proses</span>
                            </div>
                            <div class="card-body my-n2">
                                <div class="d-flex">
                                    <div class="flex-fill text-center">
                                        <h4 class="mb-0">{{ $countMotorcycleRepairOnProcess }} <span
                                                class="badge badge-pill badge-info">motor</span></span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow">
                            <div class="card-header">
                                <span class="card-title">Stand By</span>
                            </div>
                            <div class="card-body my-n2">
                                <div class="d-flex">
                                    <div class="flex-fill text-center">
                                        <h4 class="mb-0">{{ $countMotorcycleRepairStandBy }} <span
                                                class="badge badge-pill badge-warning">motor</span></span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow">
                            <div class="card-header">
                                <span class="card-title">Done</span>
                            </div>
                            <div class="card-body my-n2">
                                <div class="d-flex">
                                    <div class="flex-fill text-center">
                                        <h4 class="mb-0">{{ $countMotorcycleRepairDone }} <span
                                                class="badge badge-pill badge-success">motor</span></span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow">
                            <div class="card-header">
                                <span class="card-title">Total Booking</span>
                            </div>
                            <div class="card-body my-n2">
                                <div class="d-flex">
                                    <div class="flex-fill text-center">
                                        <h4 class="mb-0">{{ $totalBookings }} <span
                                                class="badge badge-pill badge-info">motor</span></span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="h5 page-title">Informasi Penjualan</h2>

                <div class="row">
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow bg-primary text-white">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-3 text-center">
                                        <span class="circle circle-sm bg-primary-light">
                                            <i class="fe fe-16 fe-shopping-bag text-white mb-0"></i>
                                        </span>
                                    </div>
                                    <div class="col pr-0">
                                        <p class="small text-light mb-0">Total Penjualan</p>
                                        <span
                                            class="h3 mb-0 text-white">{{ 'Rp' . number_format($totalAmount, 2, ',', '.') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-3 text-center">
                                        <span class="circle circle-sm bg-primary">
                                            <i class="fe fe-check-circle text-white mb-0"></i>
                                        </span>
                                    </div>
                                    <div class="col pr-0">
                                        <p class="small text-muted mb-0">Total Kendaraan</p>
                                        <span class="h3 mb-0">{{ $totalKendaraan }}</span>
                                        <span class="small text-success"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-3 text-center">
                                        <span class="circle circle-sm bg-primary">
                                            <i class="fa-solid fa-screwdriver-wrench text-white mb-0"></i>
                                        </span>
                                    </div>
                                    <div class="col">
                                        <p class="small text-muted mb-0">Total Spareparts</p>
                                        <div class="row align-items-center no-gutters">
                                            <div class="col-auto">
                                                <span class="h3 mr-2 mb-0">{{ $totalSpareparts }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow bg-primary text-white">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-3 text-center">
                                        <span class="circle circle-sm bg-primary-light">
                                            <i class="fe fe-16 fe-shopping-bag text-white mb-0"></i>
                                        </span>
                                    </div>
                                    <div class="col pr-0">
                                        <p class="small text-light mb-0">Total Penjualan Spareparts</p>
                                        <span
                                            class="h3 mb-0 text-white">{{ 'Rp' . number_format($totalDoneBookingsSpareparts, 2, ',', '.') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

                <div class="row">
                    <div class="col-md-6">
                        <div class="card shadow">
                            <div class="card-body">
                                <p class="card-title"><strong>Booking Servis</strong></p>
                                <button type="button" class="btn btn-primary mb-2 " data-bs-toggle="modal"
                                    data-bs-target="#modalRepair" data-whatever="@mdo">Booking</button>
                                {{-- Modal Booking for Repair --}}
                                <div class="modal fade" id="modalRepair" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Booking Servis</h5>
                                                <button type="button" class="close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('booking.store', ['service_type' => 'repair']) }}"
                                                    method="POST">
                                                    @csrf
                                                    <label for="name"><b>Select Your Vehicle</b></label>
                                                    <select name="vehicle" id="selectVehicle" class="form-control mt-2"
                                                        onchange="changeElement(this)" required>
                                                        <option value="" selected disabled>Select Vehicle</option>
                                                        @if ($vehicle != '')
                                                            @foreach ($vehicle as $data)
                                                                <option value="{{ $data->name }}"
                                                                    data-vehicle="{{ $data->vehicle_type }}"
                                                                    data-transmission="{{ $data->transmission }}"
                                                                    data-license-plate="{{ $data->license_plate }}">
                                                                    {{ $data->name }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                    <input type="hidden" name="vehicle_type" id="vehicle_type"
                                                        value="">
                                                    <input type="hidden" name="transmission" id="transmission"
                                                        value="">
                                                    <input type="hidden" name="license_plate" id="license_plate"
                                                        value=""><br>
                                                    <label for="name" class="mt-2"><b>Date</b></label>
                                                    <input type="date" name="date" id="date"
                                                        class="form-control mt-2" min="{{ date('Y-m-d') }}" required>
                                                    <label for="name" class="mt-2"><b>Notes</b></label>
                                                    <input type="text" name="notes" id="notes"
                                                        class="form-control mt-2" placeholder="Notes">
                                                    <label for="name" class="mt-2"><b>Select Package</b></label>
                                                    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center mt-3"
                                                        id="pricingTable">
                                                        <p class="text-center col-md-12" style="color: gray">Please Select
                                                            Vehicle First</p>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Book</button>
                                                </form>
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <strong class="card-title">Daftar Kendaraan</strong>
                                <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                                    data-target="#daftarKendaran" data-whatever="@mdo">Tambah</button>
                                <div class="modal fade" id="daftarKendaran" tabindex="-1" role="dialog"
                                    aria-labelledby="daftarKendaranLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="">Tambah Kendaraan</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('vehicle.store') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                    <div class="form-group">
                                                        <label for="name" class="col-form-label"><b>Merek
                                                                Kendaraan:</b></label>
                                                        <input type="text" name="name" id="name"
                                                            class="form-control" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="vehicle_type_display" class="col-form-label"><b>Tipe
                                                                Kendaraan:</b></label>
                                                        <input type="text" id="vehicle_type_display" value="Motor"
                                                            class="form-control" disabled>
                                                        <input type="hidden" name="vehicle_type" id="vehicle_type"
                                                            value="2">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="transmission"
                                                            class="col-form-label"><b>Transmission:</b></label>
                                                        <select name="transmission" id="transmission"
                                                            class="form-control" required>
                                                            <option value="1">Manual</option>
                                                            <option value="2">Automatic</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="license_number_plate" class="col-form-label"><b>Nomor
                                                                Polisi:</b></label>
                                                        <input type="text" name="license_number_plate"
                                                            id="license_number_plate" class="form-control" required>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn mb-2 btn-primary">Tambah
                                                    Kendaraan</button>
                                                </form>
                                                <button type="button" class="btn mb-2 btn-secondary"
                                                    data-dismiss="modal">Keluar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body">
                                <div class="list-group list-group-flush my-n3">
                                        @foreach ($vehicle as $index => $motorcycle)
                                            <div class="list-group-item">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <strong>{{ $index + 1 }}.</strong> {{-- Display the number, starting from 1 --}}
                                                    </div>
                                                    <div class="col">
                                                        <strong>{{ $motorcycle->name }}</strong>
                                                        <div class="my-0 text-muted small">
                                                            {{ str_replace('motorcycle', 'motor', $motorcycle->vehicle_type) }}
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="{{ route('vehicle.edit', ['vehicle' => $motorcycle->id]) }}"
                                                            class="text-decoration-none" data-bs-toggle="modal"
                                                            data-bs-target="#modalEditVehicle"
                                                            data-id="{{ $motorcycle->id }}"
                                                            data-name="{{ $motorcycle->name }}"
                                                            data-type="{{ $motorcycle->vehicle_type }}"
                                                            data-transmission="{{ $motorcycle->transmission }}"
                                                            data-license-plate="{{ $motorcycle->license_plate }}"><i
                                                                class="fas fa-edit"></i></a>
                                                        <form
                                                            action="{{ route('vehicle.destroy', ['vehicle' => $motorcycle->id]) }}"
                                                            method="post" class="d-inline">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit"
                                                                class="btn btn-link text-decoration-none"
                                                                style="color: black !important"
                                                                onclick="return confirm('Are you sure?')"><i
                                                                    class="fas fa-trash"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card shadow mt-4">
                        <div class="card-body">
                            <h5 class="card-title">Riwayat Booking</h5>
                            <p class="card-text"></p>
                            @if ($history != '')
                                <table class="table table-hover table-bordered mb-0">
                                    <thead class="thead-dark">
                                        <tr class="text-center">
                                            <th>ID</th>
                                            <th>Nama Kendaran</th>
                                            <th>Pelayanan</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($history as $index => $data)
                                            <tr class="text-center">
                                                <td>{{ $index + 1 }}</td> <!-- Ganti $data + 1 dengan $index + 1 -->
                                                <td>{{ $data->name }}</td>
                                                <!-- Sesuaikan nama kolom dengan yang ada di database -->
                                                <td>
                                                    @if ($data->service_type == 'repair')
                                                        Perbaikan
                                                    @else
                                                        {{ $data->service_type }}
                                                    @endif
                                                </td>
                                                <!-- Sesuaikan nama kolom dengan yang ada di database -->
                                                <td>{{ \Carbon\Carbon::parse($data->date)->format('M d, Y') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p class="text-center col-md-12" style="color: gray">You don't have any history yet</p>
                            @endif
                        </div>
                    </div>
                </div> <!-- simple table -->



                {{-- Modal For Queue --}}
                <div class="modal fade" id="modalQueue" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Daftar Antrian</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-3">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-primary elevation-1"><i
                                                    class="fas fa-user"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">{{ $countCarRepair }}</span>
                                                <span class="info-box-number">
                                                    Servis Mobil
                                                </span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-3">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-primary elevation-1"><i
                                                    class="fas fa-user"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">{{ $countMotorcycleRepair }}</span>
                                                <span class="info-box-number">
                                                    Servis Motor
                                                </span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-3">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-primary elevation-1"><i
                                                    class="fas fa-user"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">{{ $countCarWash }}</span>
                                                <span class="info-box-number">
                                                    Cuci Mobil
                                                </span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-3">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-primary elevation-1"><i
                                                    class="fas fa-user"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">{{ $countMotorcycleWash }}</span>
                                                <span class="info-box-number">
                                                    Cuci Motor
                                                </span>
                                            </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    @endsection
    <script>
        function setMinDate() {
            var today = new Date().toISOString().split('T')[0];
            document.getElementById('date').setAttribute('min', today);
        }
    </script>
