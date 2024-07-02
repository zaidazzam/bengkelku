@extends('guestlayout.layout')

@section('title')
    Harga
@endsection

@section('content')
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="breadcrumb"><a href="#">Beranda</a> / Harga</span>
                    <h3>harga service & sparepart</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="section properties">
        <div class="container">
            <ul class="properties-filter">
                <li>
                    <a href="#!" class="is_active" data-filter=".service">Service</a>
                </li>
                <li>
                    <a href="#!" data-filter=".sparepart">Sparepart</a>
                </li>
            </ul>
            <div class="row properties-box">
                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 service">
                    <div class="item">
                        <a href=""><img src="assets/images/motor.png" alt=""></a>
                        <span class="category">Service</span>
                        <span class="category bg-primary-subtle">Standart</span>
                        <h6>Rp 900.000</h6>
                        <h4><a href="#">Service Motor Manual</a></h4>
                        <p class="mb-4 border-bottom pb-3">Start From Rp 90.000. Garansi bla bla</p>
                        <div class="main-button">
                            <a href="{{ route('login') }}">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 service">
                    <div class="item">
                        <a href=""><img src="assets/images/motor.png" alt=""></a>
                        <span class="category">Service</span>
                        <span class="category bg-primary-subtle">Full Service</span>
                        <h6>Rp 1.900.000</h6>
                        <h4><a href="#">Service Motor Matic</a></h4>
                        <p class="mb-4 border-bottom pb-3">Start From Rp 1.900.000. Garansi bla bla</p>
                        <div class="main-button">
                            <a href="{{ route('login') }}">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 service">
                    <div class="item">
                        <a href=""><img src="assets/images/motor.png" alt=""></a>
                        <span class="category">Service</span>
                        <span class="category bg-primary-subtle">Premium</span>
                        <h6>Rp 200.000</h6>
                        <h4><a href="#">Service Mobil Manual</a></h4>
                        <p class="mb-4 border-bottom pb-3">Start From Rp 90.000. Garansi bla bla</p>
                        <div class="main-button">
                            <a href="{{ route('login') }}">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>

                @foreach ($sparepart as $index => $sparepart)
                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 sparepart">
                    <div class="item">
                        <a href="{{ route('login') }}"><img src="assets/images/sparepart.png" alt=""></a>
                        <span class="category">{{$sparepart->category}}</span>
                        <h6>{{ 'Rp ' . number_format($sparepart->price, 0, ',', '.') }}</h6>
                        <h4><a href="{{ route('login') }}">{{$sparepart->name}}</a></h4>
                        <div class="main-button">
                            <a href="{{ route('login') }}">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
