@extends('guestlayout.layout')

@section('title')
    Harga
@endsection

@section('content')
<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="/">Home</a> / Blog</span>
          <h3>Blog & Tips</h3>
        </div>
      </div>
    </div>
  </div>


  <div class="section properties">
    <div class="container">
      <ul class="properties-filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Semua</a>
        </li>
        <li>
          <a href="#!" data-filter=".artikel">Blog / Artikel</a>
        </li>
        <li>
          <a href="#!" data-filter=".tips">Tips & Trick</a>
        </li>
      </ul>
      <div class="row properties-box">
        @foreach ($artikel as $artikel)
            <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 {{ $artikel->kategori }}">
                <div class="item align-items-center">
                    <a href="{{ route('artikel-detail', ['id' => $artikel->id]) }}"><img src="{{ asset('storage/' . $artikel->image) }}"  style="width: 100%;" alt="Gambar Ilustrasi"></a>
                    <div class="d-flex justify-content-between">
                        <span class="category">
                            @if ($artikel->kategori == 'artikel')
                                Blog / Artikel
                            @elseif ($artikel->kategori == 'tips')
                                Tips & Trick
                            @endif
                        </span>
                        <span class="category ms-4">{{ \Carbon\Carbon::parse($artikel->created_at)->translatedFormat('d F Y', 'id') }}</span>
                    </div>
                    <h4 class="text-capitalize mb-3"><a href="{{ route('artikel-detail', ['id' => $artikel->id]) }}">{{ $artikel->judul }}</a></h4>
                    <p class="mb-4 border-bottom pb-3">
                        {{ \Illuminate\Support\Str::limit($artikel->deskripsi, 200, '...') }}
                    </p>
                                        <div class="main-button">
                        <a href="{{ route('artikel-detail', ['id' => $artikel->id]) }}" class="btn btn-primary">Baca
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    </div>
  </div>
@endsection
