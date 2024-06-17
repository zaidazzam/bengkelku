@extends('homelayout.layout')

@section('title')
    Invoice
@endsection

@section('content')

    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="float-start">Daftar Invoice</h3>
            </div>
            <div class="card-body">
                @if ($orderlist->isEmpty())
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
                                <th scope="col">Tanggal Booking</th>
                                <th scope="col">Pemilik</th>
                                <th scope="col">Tipe Kendaran</th>
                                <th scope="col">Nama Kendaraan</th>
                                <th scope="col">Transmisi</th>
                                <th scope="col">Catatan</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Status</th>
                                <th scope="col">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orderlist as $index => $order)
                                <tr>
                                    <td><strong>{{ $index + 1 }}.</strong></td>
                                    <td>{{ \Carbon\Carbon::parse($order->date)->translatedFormat('d F Y') }}</td>
                                    <td>{{ $order->user->fullname }}</td>
                                    <td>{{ str_replace('motorcycle', 'Motor', $order->vehicle_type) }}</td>
                                    <td>{{ $order->name }}</td>
                                    <td>{{ $order->transmission === 'automatic' ? 'Matic' : $order->transmission }}</td>
                                    <td>
                                        @if ($order->notes == null)
                                            <p>-</p>
                                        @else
                                            <p>{{ $order->notes }}</p>
                                        @endif
                                    </td>
                                    <td>{{ 'Rp ' . number_format($order->ammount, 0, ',', '.') }}</td>
                                    <td>
                                        @if ($order->status == 'stand_by')
                                            <span class="badge bg-warning text-dark">Stand By</span>
                                        @elseif ($order->status == 'on_process')
                                            <span class="badge bg-info text-white">On Process</span>
                                        @elseif ($order->status == 'done')
                                            <span class="badge bg-success text-white">Done</span>
                                        @endif
                                    </td>
                                    @if (Auth::user()->role_id == 1)
                                        <td>
                                            <a href="{{ route('booking.invoice', $order->id) }}"
                                                class="btn btn-primary text-white"><i class="fas fa-file-invoice"></i></a>
                                        </td>
                                    @else
                                        <td>
                                            <a href="{{ route('booking.invoiceUser', $order->id) }}"
                                                class="btn btn-primary text-white"><i class="fas fa-file-invoice"></i></a>
                                        </td>
                                    @endif
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
