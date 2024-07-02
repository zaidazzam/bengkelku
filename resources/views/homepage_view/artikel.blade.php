@extends('homelayout.layout')

@section('title')
    Artikel
@endsection

@section('content')
    <!-- Small table -->
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card mt-5">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="float-start">Daftar Artikel</h3>
                    <a href="" class="btn btn-primary float-end text-white" data-bs-toggle="modal"
                        data-bs-target="#modalAddSparepart">Tambah Artikel / Tips</a>
                </div>

                <div class="card-body">
                    @if ($artikel->isEmpty())
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading text-center">Tidak Ada Artikel / Tips & Trik</h4>
                            <p class="text-center">Data Kosong</p>
                        </div>
                    @else
                        <!-- table -->
                        <table class="table datatables table-hover table-bordered " id="dataTable-1">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($artikel as $index => $artikel)
                                    <tr>
                                        <td><strong>{{ $index + 1 }}.</strong></td>
                                        <td><img src="{{ asset('storage/' . $artikel->image) }}" alt="Image"
                                                width="10%"></td>
                                        <td>{{ $artikel->judul }}</td>
                                        <td>{{ $artikel->kategori }}</td>
                                        <td>{{ $artikel->deskripsi }}</td>
                                        <td>
                                            {{-- <a href="" class="btn btn-primary text-white" data-bs-toggle="modal"
                                                data-bs-target="#modalEditArtikel" data-id="{{ $artikel->id }}"
                                                data-name="{{ $artikel->judul }}" data-category="{{ $artikel->kategori }}"
                                                data-deksripsi="{{ $artikel->deskripsi }}"
                                                data-image="{{ $artikel->image }}">
                                                <i class="fas fa-edit"></i></a> --}}
                                            <form action="{{ route('artikel.destroy', $artikel->id) }}" method="post"
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
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Artikel / Tips</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('artikel.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Kategori</label>
                            <select class="form-control mt-2" id="category" name="kategori">
                                <option value="artikel">Artikel</option>
                                <option value="tips">Tips</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input class="form-control" name="image" type="file" placeholder="Pilih gambar"
                                id="inputImage" multiple />
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

    {{-- Modal Edit artikel --}}

@endsection
