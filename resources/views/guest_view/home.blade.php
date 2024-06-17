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

    <!-- <div class="section ">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="section-heading">
                <h6>| Best Deal</h6>
                <h2>Find Your Best Deal Right Now!</h2>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="tabs-content">
                <div class="row">
                  <div class="nav-wrapper ">
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="appartment-tab" data-bs-toggle="tab"
                          data-bs-target="#appartment" type="button" role="tab" aria-controls="appartment"
                          aria-selected="true">Appartment</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="villa-tab" data-bs-toggle="tab" data-bs-target="#villa" type="button"
                          role="tab" aria-controls="villa" aria-selected="false">Villa House</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="penthouse-tab" data-bs-toggle="tab" data-bs-target="#penthouse"
                          type="button" role="tab" aria-controls="penthouse" aria-selected="false">Penthouse</button>
                      </li>
                    </ul>
                  </div>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="appartment" role="tabpanel" aria-labelledby="appartment-tab">
                      <div class="row">
                        <div class="col-lg-3">
                          <div class="info-table">
                            <ul>
                              <li>Total Flat Space <span>185 m2</span></li>
                              <li>Floor number <span>26th</span></li>
                              <li>Number of rooms <span>4</span></li>
                              <li>Parking Available <span>Yes</span></li>
                              <li>Payment Process <span>Bank</span></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <img src="assets/images/deal-01.jpg" alt="">
                        </div>
                        <div class="col-lg-3">
                          <h4>Extra Info About Property</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut
                            labore et dolore magna aliqua quised ipsum suspendisse.
                            <br><br>When you need free CSS templates, you can simply type TemplateMo in any search engine
                            website. In addition, you can type TemplateMo Portfolio, TemplateMo One Page Layouts, etc.</p>
                          <div class="icon-button">
                            <a href="#"><i class="fa fa-calendar"></i> Pesan Sekarang</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="villa" role="tabpanel" aria-labelledby="villa-tab">
                      <div class="row">
                        <div class="col-lg-3">
                          <div class="info-table">
                            <ul>
                              <li>Total Flat Space <span>250 m2</span></li>
                              <li>Floor number <span>26th</span></li>
                              <li>Number of rooms <span>5</span></li>
                              <li>Parking Available <span>Yes</span></li>
                              <li>Payment Process <span>Bank</span></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <img src="assets/images/deal-02.jpg" alt="">
                        </div>
                        <div class="col-lg-3">
                          <h4>Detail Info About Villa</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut
                            labore et dolore magna aliqua quised ipsum suspendisse. <br><br>Swag fanny pack lyft blog twee.
                            JOMO ethical copper mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella venmo
                            after messenger poutine next level humblebrag swag franzen.</p>
                          <div class="icon-button">
                            <a href="#"><i class="fa fa-calendar"></i> Pesan Sekarang</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="penthouse" role="tabpanel" aria-labelledby="penthouse-tab">
                      <div class="row">
                        <div class="col-lg-3">
                          <div class="info-table">
                            <ul>
                              <li>Total Flat Space <span>320 m2</span></li>
                              <li>Floor number <span>34th</span></li>
                              <li>Number of rooms <span>6</span></li>
                              <li>Parking Available <span>Yes</span></li>
                              <li>Payment Process <span>Bank</span></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <img src="assets/images/deal-03.jpg" alt="">
                        </div>
                        <div class="col-lg-3">
                          <h4>Extra Info About Penthouse</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut
                            labore et dolore magna aliqua quised ipsum suspendisse. <br><br>Swag fanny pack lyft blog twee.
                            JOMO ethical copper mug, succulents typewriter shaman DIY kitsch twee taiyaki fixie hella venmo
                            after messenger poutine next level humblebrag swag franzen.</p>
                          <div class="icon-button">
                            <a href="#"><i class="fa fa-calendar"></i> Pesan Sekarang</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->

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
                <div class="col-lg-7">
                    <div id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth"
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
                <div class="col-lg-5">
                    <form id="contact-form" action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="name">Nama Lengkap</label>
                                    <input type="name" name="name" id="name" placeholder="Nama ..."
                                        autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="E-mail..." required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="subject">Subjek</label>
                                    <input type="subject" name="subject" id="subject" placeholder="Subjek..."
                                        autocomplete="on">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="message">Pesan</label>
                                    <textarea name="message" id="message" placeholder="Pesan"></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="orange-button">Kirim</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
