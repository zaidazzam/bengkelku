<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <img src="/assets/images/logo.png" alt="Logo Illusttrasi" style="height: 100px; width: auto;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a></li>
                        <li><a class="nav-link {{ Request::is('harga') ? 'active' : '' }}" href="{{ route('harga') }}">Harga</a></li>
                        <li><a class="nav-link {{ Request::is('artikel') ? 'active' : '' }}" href="{{ route('artikel') }}">Blog</a></li>
                        <li><a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Kontak</a></li>
                        <li><a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="{{ route('login') }}"><i class="fa fa-calendar"></i> Booking Service</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>

