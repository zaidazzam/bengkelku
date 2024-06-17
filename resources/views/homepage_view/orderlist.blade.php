@extends('homelayout.layout')

@section('title')
    Order List
@endsection

@section('content')
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="float-start">Daftar Booking</h3>
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
                                <th scope="col">Tipe Kendaraan</th>
                                <th scope="col">Nama Kendaraan</th>
                                <th scope="col">Transmisi</th>
                                <th scope="col">Catatan</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orderlist as $index => $order)
                                <tr>
                                    <td><strong>{{ $index + 1 }}.</strong></td>
                                    <td>{{ \Carbon\Carbon::parse($order->date)->translatedFormat('d F Y') }}</td>
                                    <td>{{ $order->user->fullname }}</td>
                                    <td>{{ $order->vehicle_type }}</td>
                                    <td>{{ $order->name }}</td>
                                    <td>{{ $order->transmission }}</td>
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
                                    <td>
                                        <a href="" class="btn btn-success text-white" data-bs-toggle="modal"
                                            data-bs-target="#modalSparepart" data-id="{{ $order->id }}"><i
                                                class="fas fa-tools"></i></a>
                                        <a href="" class="btn btn-primary text-white" data-bs-toggle="modal"
                                            data-bs-target="#modalEditBooking" data-id="{{ $order->id }}"
                                            data-status="{{ $order->status }}"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('booking.destroy', $order->id) }}" method="post"
                                            class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return showDeleteConfirmation()">
                                                <i class="fas fa-trash"></i>
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

    {{-- Modal Spareparts --}}
    <div class="modal fade" id="modalSparepart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Spareparts</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> <span
                            aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" id="formAddSparepart">
                        @csrf
                        @method('PUT')
                        <table class="table table-hover table-bordered mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Pilih</th>
                                    <th scope="col">Nama Sparepart</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Kategori</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($spareparts as $sparepart)
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="sparepart_id[]" value="{{ $sparepart->id }}">
                                        </td>
                                        <td>{{ $sparepart->name }}</td>
                                        <td>{{ $sparepart->price }}</td>
                                        <td>{{ $sparepart->category }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <input type="hidden" name="booking_id" id="booking_id">
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Add Sparepart to Bookings
        document.querySelector('#modalSparepart').addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget // Button that triggered the modal
            var bookingId = button.getAttribute('data-id')
            var form = document.querySelector('#formAddSparepart')
            form.action = '/booking/updateSparepart/' + bookingId
            document.querySelector('#booking_id').value = bookingId;
        });
    </script>

    <script>
        function showDeleteConfirmation() {
            // Menggunakan modal konfirmasi Bootstrap
            if (confirm("Apakah Anda yakin ingin menghapus item ini?")) {
                // Jika konfirmasi diterima
                return true;
            } else {
                // Jika konfirmasi ditolak
                return false;
            }
        }
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@endsection
