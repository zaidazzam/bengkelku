@extends('homelayout.layout')

@section('title')
    Invoice
@endsection

@section('content')

    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="float-start">Daftar Kendaraan</h3>
            </div>
            <div class="card-body">
                @if ($kendaraan->isEmpty())
                    <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading text-center">Tidak Ada Data</h4>
                        <p class="text-center">Tidak Ada Data</p>
                    </div>
                @else
                    <!-- table -->
                    <table class="table datatables table-hover table-bordered " id="dataTable-1">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Pemilik</th>
                                <th scope="col">Nama Kendaraan</th>
                                <th scope="col">Tipe Kendaraan</th>
                                <th scope="col">Transmisi</th>
                                <th scope="col">Nomor Polisi</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kendaraan as $index => $motorcycle)
                                <tr>
                                    <td><strong>{{ $index + 1 }}.</strong></td>
                                    <td><strong>{{$motorcycle->user->fullname }}</strong></td>
                                    <td> <strong>{{ $motorcycle->name }}</strong>
                                    </td>
                                    <td> {{ str_replace('motorcycle', 'motor', $motorcycle->vehicle_type) }}
                                    </td>
                                    <td><strong>{{ $motorcycle->transmission === 'automatic' ? 'matic' : $motorcycle->transmission }}
                                    </td>
                                    <td><strong>{{ $motorcycle->license_plate }}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#modalEditVehicle" data-id="{{ $motorcycle->id }}"
                                            data-name="{{ $motorcycle->name }}" data-type="{{ $motorcycle->vehicle_type }}"
                                            data-transmission="{{ $motorcycle->transmission }}"
                                            data-license-plate="{{ $motorcycle->license_plate }}">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>
                                    </td>
                                    <td>
                                        <form action="{{ route('vehicle.destroy', ['vehicle' => $motorcycle->id]) }}"
                                            method="post" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are you sure?')">
                                                <i class="fas fa-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif

            </div>
        </div>
    </div>
    <!-- simple table -->
    <script src='js/jquery.dataTables.min.js'></script>
    <script src='js/dataTables.bootstrap4.min.js'></script>
    <script>
        // Datatable Table Invoice
        $(document).ready(function() {
            $('#tableInvoice').DataTable();
        });
    </script>
    <script>
        $('#dataTable-1').DataTable({
            autoWidth: true,
            "lengthMenu": [
                [16, 32, 64, -1],
                [16, 32, 64, "All"]
            ]
        });
    </script>
    <script src="js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');
    </script>
@endsection
