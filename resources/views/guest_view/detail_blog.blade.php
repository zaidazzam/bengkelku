@extends('guestlayout.layout')

@section('title')
    Harga
@endsection

@section('content')
<div class="page-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <span class="breadcrumb"><a href="/">Home</a> / Blog Detail</span>
                <h3>Blog Detail</h3>
            </div>
        </div>
    </div>
</div>

<div class="single-property section">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-12 d-flex gap-5 detail-konten mb-5">
                <div class="main-image col-lg-6">
                    <img src="{{ asset('storage/' . $artikel->image) }}" alt="Gambar Ilustrasi">
                </div>
                <div class="col-lg-5 main-content">
                    <h4 class="pb-4 mb-3">{{ $artikel->judul }}</h4>
                    <span class="category">{{ $artikel->kategori }}</span>
                    <span class="category ms-4">{{ \Carbon\Carbon::parse($artikel->created_at)->translatedFormat('d F Y', 'id') }}</span>
                    <div class="main-deskripsi-konten mt-2">
                        <p>{{ $artikel->deskripsi }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
