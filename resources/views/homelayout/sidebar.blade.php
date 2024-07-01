<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- Navbar brand -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Deskripsi gambar" class="navbar-brand-img" style="width: 200px; height: auto;">
            </a>
        </div>

        <!-- Navigation items -->
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link {{ request()->is('/home') ? 'active' : '' }}" href="{{ route('home') }}">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">Dashboard</span>
                </a>
            </li>
            <p class="text-muted nav-heading mt-4 mb-1">
                <span>Pembayaran</span>
            </p>
            @if (Auth::user()->role_id == 1)
                <li class="nav-item w-100">
                    <a class="nav-link {{ request()->is('home/invoice') ? 'active' : '' }}"
                        href="{{ route('home.invoice') }}">
                        <i class="fas fa-file-invoice-dollar"></i>
                        <span class="ml-3 item-text">Invoice</span>
                    </a>
                </li>
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Kendaraan</span>
                </p>
                <li class="nav-item w-100">
                    <a class="nav-link {{ request()->is('home/daftar_kendaraan') ? 'active' : '' }}"
                        href="{{ route('home.daftar_kendaraan') }}">
                        <i class="fas fa-motorcycle"></i>
                        <span class="ml-3 item-text">Data Kendaraan</span>
                    </a>
                </li>
                <li class="nav-item w-100">
                    <a class="nav-link {{ request()->is('home/orderlist') ? 'active' : '' }}"
                        href="{{ route('home.orderlist') }}">
                        <i class="fe fe-check-circle fe-16"></i>
                        <span class="ml-3 item-text">Data Booking</span>
                    </a>
                </li>
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Sparepart</span>
                </p>
                <li class="nav-item w-100">
                    <a class="nav-link {{ request()->is('home/sparepart') ? 'active' : '' }}"
                        href="{{ route('home.sparepart') }}">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                        <span class="ml-3 item-text">Daftar Sparepart</span>
                    </a>
                </li>
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>Artikel</span>
                </p>
                <li class="nav-item w-100">
                    <a class="nav-link {{ request()->is('home/artikel') ? 'active' : '' }}"
                        href="{{ route('home.artikel') }}">
                        <i class="fa-brands fa-blogger-b"></i>
                        <span class="ml-3 item-text">Daftar Artikel</span>
                    </a>
                </li>
            @else
                <li class="nav-item w-100">
                    <a class="nav-link {{ request()->is('home/invoiceUser/' . Auth::user()->id) ? 'active' : '' }}"
                        href="{{ route('home.invoiceUser', Auth::user()->id) }}">
                        <i class="fe fe-file-invoice fe-16"></i>
                        <span class="ml-3 item-text">Transaksi</span>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
</aside>
