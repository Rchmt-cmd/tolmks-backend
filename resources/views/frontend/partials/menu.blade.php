<ul class="navigation-main nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
    <li class="nav-item">
        <a class="nav-link d-flex align-items-center" href="{{ route('homes') }}">
            <i class="ft-home"></i>
            <span data-i18n="Home">Beranda</span>
        </a>
    </li>
    <li class="dropdown nav-item" data-menu="dropdown">
        <a class="dropdown-toggle nav-link d-flex align-items-center" href="javascript:;" data-toggle="dropdown">
            <i class="ft-users"></i>
            <span data-i18n="Dashboard">Tentang Kami</span>
        </a>
        <ul class="dropdown-menu">
            <li data-menu="" class="has-sub dropdown dropdown-submenu">
                <a class="dropdown-item d-flex align-items-center dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                    <span data-i18n="Dashboard 1">Gambaran Umum</span>
                </a>
                <ul class="dropdown-menu">
                    <li data-menu="">
                        <a class="dropdown-item d-flex align-items-center" href="{{route('profile')}}" data-toggle="dropdown">
                            <!-- <i class="ft-arrow-right submenu-icon"></i> -->
                            <span data-i18n="Feather Icon">Profil Perusahaan</span>
                        </a>
                    </li>
                    <li data-menu="">
                        <a class="dropdown-item d-flex align-items-center" href="{{route('sejarah')}}" data-toggle="dropdown">
                            <span data-i18n="Feather Icon">Sejarah Perusahaan</span>
                        </a>
                    </li>
                    <li data-menu="">
                        <a class="dropdown-item d-flex align-items-center" href="{{route('visi-misi')}}" data-toggle="dropdown">
                            <span data-i18n="Feather Icon">Visi & Misi dan Nilai Perusahaan</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- <li data-menu="">
                <a class="dropdown-item d-flex align-items-center" href="{{route('dewan')}}" data-toggle="dropdown">
                    <span data-i18n="Dashboard 2">Dewan Komisaris & Direksi</span>
                </a>
            <li data-menu="">
                <a class="dropdown-item d-flex align-items-center" href="{{route('struktur')}}" data-toggle="dropdown">
                    <span data-i18n="Dashboard 2">Struktur Kepemilikan</span>
                </a>
            </li>
            <li data-menu="">
                <a class="dropdown-item d-flex align-items-center" href="#" data-toggle="dropdown">
                    <span data-i18n="Dashboard 2">Kebijakan Manajemen Sistem</span>
                </a>
            </li> -->
            <li data-menu="">
                <a class="dropdown-item d-flex align-items-center" href="{{route('csr')}}" data-toggle="dropdown">
                    <span data-i18n="Dashboard 2">CSR</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="dropdown nav-item" data-menu="dropdown">
        <a class="dropdown-toggle nav-link d-flex align-items-center " href="javascript:;" data-toggle="dropdown">
            <i class="ft-thumbs-up"></i>
            <span data-i18n="Dashboard">Layanan Jalan Tol</span>
        </a>
        <ul class="dropdown-menu">
            <li data-menu="">
                <a class="dropdown-item d-flex align-items-center" href="{{ route('struk') }}" data-toggle="dropdown">
                    <!-- <i class="ft-arrow-right submenu-icon"></i> -->
                    <span data-i18n="Dashboard 2">Cetak Struk</span>
                </a>
            </li>
            <!-- <li data-menu="">
                <a class="dropdown-item d-flex align-items-center" href="#" data-toggle="dropdown">
                    <i class="ft-arrow-right submenu-icon"></i>
                    <span data-i18n="Dashboard 2">CCTV</span>
                </a>
            </li> -->
            <li data-menu="">
                <a class="dropdown-item d-flex align-items-center" href="{{ route('tarif') }}" data-toggle="dropdown">
                    <!-- <i class="ft-arrow-right submenu-icon"></i> -->
                    <span data-i18n="Dashboard 2">Info Tarif</span>
                </a>
            </li>
            <li data-menu="">
                <a class="dropdown-item d-flex align-items-center" href="{{ route('call-center') }}" data-toggle="dropdown">
                    <!-- <i class="ft-arrow-right submenu-icon"></i> -->
                    <span data-i18n="Dashboard 2">Pelayanan Lalu Lintas</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link d-flex align-items-center " href="{{ route('nearby') }}">
            <i class="ft-map-pin"></i>
            <span data-i18n="nearby">Lokasi Terdekat</span>
        </a>
    </li>
    <li class="dropdown nav-item" data-menu="dropdown">
        <a class="dropdown-toggle nav-link d-flex align-items-center " href="javascript:;" data-toggle="dropdown">
            <i class="ft-rss"></i>
            <span data-i18n="Dashboard">Media</span>
        </a>
        <ul class="dropdown-menu">
            <!-- <li data-menu="">
                <a class="dropdown-item d-flex align-items-center" href="{{ route('billboard') }}" data-toggle="dropdown">
                    <span data-i18n="Dashboard 1">Billboard</span>
                </a>
            </li> -->
            <!-- <li data-menu="">
                <a class="dropdown-item d-flex align-items-center" href="{{ route('media') }}" data-toggle="dropdown">
                    <span data-i18n="Dashboard 1">Artikel</span>
                </a>
            </li> -->
            <li data-menu="">
                <a class="dropdown-item d-flex align-items-center" href="#" data-toggle="dropdown">
                    <span data-i18n="Dashboard 1">Press Release</span>
                </a>
            </li>
            <li data-menu="">
                <a class="dropdown-item d-flex align-items-center" href="{{ route('media') }}" data-toggle="dropdown">
                    <span data-i18n="Dashboard 1">Artikel</span>
                </a>
            </li>
        </ul>
    </li>
    <li class="dropdown nav-item" data-menu="dropdown">
        <a class="dropdown-toggle nav-link d-flex align-items-center " href="javascript:;" data-toggle="dropdown">
            <i class="fa fa-handshake-o"></i>
            <span data-i18n="Dashboard">Kerjasama</span>
        </a>
        <ul class="dropdown-menu">
            <li data-menu="">
                <a class="dropdown-item d-flex align-items-center" href="{{ route('billboard') }}" data-toggle="dropdown">
                    <!-- <i class="ft-arrow-right submenu-icon"></i> -->
                    <span data-i18n="Dashboard 1">Billboard</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- <li class="nav-item">
        <a class="nav-link d-flex align-items-center " href="#">
            <i class="fa fa-handshake-o"></i>
            <span data-i18n="billboard">Karir</span>
        </a>
    </li> -->
    <li class="nav-item">
        <a class="nav-link d-flex align-items-center " href="{{ route('contact-us') }}">
            <i class="ft-phone"></i>
            <span data-i18n="billboard">Hubungi Kami</span>
        </a>
    </li>
    @guest
    <li class="nav-item">
        <a class="nav-link d-flex align-items-center red" id="red" href="{{ route('login') }}">
            <i class="ft-award"></i>
            <span data-i18n="billboard">Membership</span>
        </a>
    </li>
    @else
    <li class="nav-item">
        <a class="nav-link d-flex align-items-center " href="{{ route('home') }}">
            <i class="ft-user"></i>
            <span data-i18n="billboard">Profil</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link d-flex align-items-center " href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <i class="ft-log-out"></i>
            <span data-i18n="billboard">Keluar</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li>
    @endguest
</ul>
    