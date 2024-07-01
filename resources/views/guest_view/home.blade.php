@extends('guestlayout.layout')

@section('title')
    Beranda
@endsection

@section('content')
    <div class="main-banner">
        <div class="owl-carousel owl-banner">
            <div class="item item-1">
                <div class="header-text">
                    <span class="category">Banyumas, <em>Jawa Tengah</em></span>
                    <h2>Segera !<br>Rawat Kendaraan Anda</h2>
                </div>
            </div>
            <div class="item item-2">
                <div class="header-text">
                    <span class="category">Banyumas, <em>Jawa Tengah</em></span>
                    <h2>Jangan Tunda!<br>Rasakan Layanan Perawatan Terbaik</h2>
                </div>
            </div>
            <div class="item item-3">
                <div class="header-text">
                    <span class="category">Banyumas, <em>Jawa Tengah</em></span>
                    <h2>Ayo Segera!<br>Dapatkan Perbaikan dan Perawatan Ahli</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Section -->
    <div class="properties section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="section-heading text-center">
                        <h6>| Blog & Tips</h6>
                        <h2>Temukan Artikel dan Tips Menarik</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 blog">
                    <div class="item align-items-center">
                        <a href="#"><img src="assets/images/blog.png" alt=""></a>
                        <div class=" d-flex justify-content-between">
                            <span class="category">Blog / Artikel</span>
                            <h6 class="fs-6">26 May 2024</h6>
                        </div>
                        <h4 class="text-capitalize mb-3"><a href="#">mengapa harus service rutin?</a></h4>
                        <p class="mb-4 border-bottom pb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Consectetur pariatur optio atque, quibusdam ab fugiat perferendis sint ipsa voluptatum rem odio,
                            eius similique tenetur minus voluptatem perspiciatis illum ullam magnam.</p>
                        <div class="main-button">
                            <a href="#">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 tips">
                    <div class="item align-items-center">
                        <a href="#"><img src="assets/images/tips.png" alt=""></a>
                        <div class=" d-flex justify-content-between">
                            <span class="category">Tips & Trick</span>
                            <h6 class="fs-6">26 May 2024</h6>
                        </div>
                        <h4 class="text-capitalize mb-3"><a href="#">mengapa harus service rutin?</a></h4>
                        <p class="mb-4 border-bottom pb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Consectetur pariatur optio atque, quibusdam ab fugiat perferendis sint ipsa voluptatum rem odio,
                            eius similique tenetur minus voluptatem perspiciatis illum ullam magnam.</p>
                        <div class="main-button">
                            <a href="#">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 blog">
                    <div class="item align-items-center">
                        <a href="#"><img src="assets/images/blog.png" alt=""></a>
                        <div class=" d-flex justify-content-between">
                            <span class="category">Blog / Artikel</span>
                            <h6 class="fs-6">26 May 2024</h6>
                        </div>
                        <h4 class="text-capitalize mb-3"><a href="#">mengapa harus service rutin?</a></h4>
                        <p class="mb-4 border-bottom pb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Consectetur pariatur optio atque, quibusdam ab fugiat perferendis sint ipsa voluptatum rem odio,
                            eius similique tenetur minus voluptatem perspiciatis illum ullam magnam.</p>
                        <div class="main-button">
                            <a href="#">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Promo Section -->
    <div class="section">
        <div class="container">
            <img src="/assets/images/promo.png" alt="">
        </div>
    </div>

    <div class="featured section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-image">
                        <img src="assets/images/featured.png" alt="">
                        <a href="#"><img src="assets/images/featured-icon.png" alt=""
                                style="max-width: 60px; padding: 0px;"></a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="section-heading">
                        <h6>| Harga</h6>
                        <h2>Harga Terbaik Untuk Anda</h2>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Dimana Lokasi Bengkel Santosa Motor?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Bengkel Tunas Santosa Mandiri terletak di Jln. Raya Inpres Klapasawit No.07 Purwojati,
                                    Kodepos 53175, Kabupaten Banyumas
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Bagaimana Cara Booking Service Online?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <span class="fw-bold">Cara Booking Online Untuk Service Kendaraan</span>
                                    <ol>
                                        <li>Kunjungi halaman website</li>
                                        <li>Klik Booking Service di bagian kanan atas</li>
                                        <li>Login Untuk Memasuki Akun Anda</li>
                                        <li>Jika belum memiliki akun, daftar terlebih dahulu</li>
                                        <li>Isi form untuk booking online</li>
                                        <li>Pesanan Anda Telah diterima Admin Bengkel</li>
                                        <li>Tungu maksimal 1 hari untuk mendapatkan konfirmasi admin</li>
                                        <li>Proses Booking Selesai</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="info-table">
                        <ul>
                            <li>
                                <img src="assets/images/info-icon-01.png" alt="" style="max-width: 52px;">
                                <h4>xxxxxxx<br><span>Alamat</span></h4>
                            </li>
                            <li>
                                <img src="assets/images/info-icon-02.png" alt="" style="max-width: 52px;">
                                <h4>xxxxx<br><span>Kontak</span></h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="video section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="section-heading text-center">
                        <h2>Mengapa Harus Service Rutin ?</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="video-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="video-frame">
                        <img src="assets/images/video-frame.png" alt="">
                        <a href="https://www.youtube.com/watch?v=FyqdgilCiTY" target="_blank"><i
                                class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="150" data-speed="1000"></h2>
                                    <p class="count-text ">Jenis <br> Sparepart</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="20" data-speed="1000"></h2>
                                    <p class="count-text ">Tenaga Ahli<br>Berpengalaman</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="5" data-speed="1000"></h2>
                                    <p class="count-text ">Proses<br>Cepat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="contact section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="section-heading text-center">
                        <h6>| Kontak</h6>
                        <h2>Hubungi Agen Kami</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.0908230582827!2d109.28013677528575!3d-7.455204173477224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655b239b9985a7%3A0xe0843b416a69233c!2sBENGKEL%20SANTOSA%20MOTOR!5e0!3m2!1sid!2sid!4v1716043334794!5m2!1sid!2sid"
                            width="100%" height="500px" frameborder="0"
                            style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);"
                            allowfullscreen=""></iframe>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="item phone">
                                <img src="assets/images/phone-icon.png" alt="" style="max-width: 52px;">
                                <h6>xxxxx<br><span>Booking Via WhatsApp</span></h6>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item email">
                                <img src="assets/images/email-icon.png" alt="" style="max-width: 52px;">
                                <h6>xxx@xxx.com<br><span>Email</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
