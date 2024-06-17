@extends('homelayout.layout')

@section('title')
    Spareparts
@endsection

@section('content')
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card mt-5">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="float-start">Daftar Sparepart</h3>
                    <a href="" class="btn btn-primary float-end text-white" data-bs-toggle="modal"
                        data-bs-target="#modalAddSparepart">Tambah Sparepart</a>
                </div>

                <div class="card-body">
                    @if ($sparepart->isEmpty())
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading text-center">Tidak Ada Sparepart</h4>
                            <p class="text-center">Tidak Ada Sparepart</p>
                        </div>
                    @else
                        <!-- table -->
                        <table class="table datatables table-hover table-bordered " id="dataTable-1">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sparepart as $index => $spare)
                                    <tr>
                                        <td><strong>{{ $index + 1 }}.</strong></td>
                                        <td>Ini Gambar</td>
                                        <td>{{ $spare->name }}</td>
                                        <td>{{ $spare->category }}</td>
                                        <td>{{ 'Rp ' . number_format($spare->price, 0, ',', '.') }}</td>
                                        <td>
                                            <a href="" class="btn btn-primary text-white" data-bs-toggle="modal"
                                                data-bs-target="#modalEditSparepart" data-id="{{ $spare->id }}"
                                                data-name="{{ $spare->name }}" data-category="{{ $spare->category }}"
                                                data-price="{{ $spare->price }}"><i class="fas fa-edit"></i></a>
                                            <form action="{{ route('sparepart.destroy', $spare->id) }}" method="post"
                                                class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Are you sure?')"><i
                                                        class="fas fa-trash"></i></button>
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
    </div>



    {{-- Modal Add --}}
    <div class="modal fade" id="modalAddSparepart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Sparepart</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('sparepart.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Sparepart</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Kategori Sparepart</label>
                            <input type="text" class="form-control" id="category" name="category">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Harga Sparepart</label>
                            <input type="number" class="form-control" id="price" name="price">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
@endsection
