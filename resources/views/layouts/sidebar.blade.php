  <!-- Menu -->

  <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
           <span class="app-brand-logo demo">

        <img src="{{ asset('admin/assets/img/logo/logo-polos-nobg.png') }}" width="" height="64px" alt="">
    </span>
    <span class="app-brand-text demo menu-text fw-bolder ms-2">Admin</span>
</a>

<a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
    <i class="bx bx-chevron-left bx-sm align-middle"></i>
</a>
</div>

<div class="menu-inner-shadow"></div>

<ul class="menu-inner py-1">
<!-- Dashboard -->
<li class="menu-item active">
    <a href="index.html" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
    </a>
</li>

<!-- Bantuan -->
<li class="menu-item ">
    <a href="/bantuan" class="menu-link">
        <i class="menu-icon tf-icons bx bx-crown"></i>
        <div data-i18n="Analytics">Bantuan</div>
    </a>
</li>


<li class="menu-item ">
    <a href="/donatur" class="menu-link">
        <i class="menu-icon tf-icons bx bx-cube-alt"></i>
        <div data-i18n="Analytics">Donatur</div>
    </a>
</li>


<li class="menu-item ">
    <a href="/jenis-bantuan" class="menu-link">
        <i class="menu-icon tf-icons bx bx-collection"></i>
        <div data-i18n="Analytics">Jenis Bantuan</div>
    </a>
</li>

{{-- <li class="menu-item">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div data-i18n="Settings">Settings</div>
    </a>

    <ul class="menu-sub">
        <li class="menu-item">
            <a href="layouts-without-menu.html" class="menu-link">
                <div data-i18n="Without menu">Without menu</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="layouts-without-navbar.html" class="menu-link">
                <div data-i18n="Without navbar">Without navbar</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="layouts-container.html" class="menu-link">
                <div data-i18n="Container">Container</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="layouts-fluid.html" class="menu-link">
                <div data-i18n="Fluid">Fluid</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="layouts-blank.html" class="menu-link">
                <div data-i18n="Blank">Blank</div>
            </a>
        </li>
    </ul>
</li> --}}









<!-- Penerima -->
<li class="menu-item ">
    <a href="/penerima" class="menu-link">
        <i class="menu-icon tf-icons bx bx-copy"></i>
        <div data-i18n="Analytics">Penerima</div>
    </a>
</li>
<!-- Settings -->
<li class="menu-item">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-layout"></i>
        <div data-i18n="Settings">Setting</div>
    </a>

    <ul class="menu-sub">
        <li class="menu-item ">
            <a href="/jenis-bantuan" class="menu-link">
                <div data-i18n="Analytics">Kecamatan</div>
            </a>
        </li>
        <li class="menu-item ">
            <a href="/kecamatan" class="menu-link">
                <div data-i18n="Analytics">kelurahan</div>
            </a>
        </li>

        <li class="menu-item ">
            <a href="/kemiskinan" class="menu-link">
                <div data-i18n="Analytics">Akar Kemiskinan</div>
            </a>
        </li>








    </ul>
    <li class="menu-item ">
        <form action="/logout" method="POST" class="dropdown-item">
            @csrf
            <button type="submit" class="border-0 bg-white">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        Logout
    </button>
</form>
    </li>
</li>
</ul>
</aside>
<!-- / Menu -->







    {{-- <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
            <a class="nav-link" href="/">
                <i class="fa-solid fa-house"></i>
                <span>Home</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>



        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item {{ Request::is('bantuan') ? 'active' : '' }}
        {{ Request::is('details/{bantuan:id}') ? 'active' : '' }}">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fa-solid fa-handshake-angle"></i>
                <span>Bantuan</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="/bantuan">Bantuan</a>
                        <a class="collapse-item" href="/donatur">Donatur</a>
                        <a class="collapse-item" href="/subject-donatur">Subject</a>
                        <a class="collapse-item" href="/jenis-bantuan">Jenis Bantuan</a>
                </div>
            </div>
        </li>


        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities" >
                <i class="fa-sharp fa-solid fa-hand-holding-dollar"></i>
                <span>Penerima</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="/penerima">Penerima</a>
                        <a class="collapse-item" href="/kecamatan">Kecamatan</a>
                        <a class="collapse-item" href="/kelurahan">Kelurahan</a>
                        <a class="collapse-item" href="/kemiskinan">Akar Kemiskinan</a>
                    </div>
                </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Pengaturan
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/user">
                <i class="fa-solid fa-gear"></i>
                <span>Setting</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Dashboard Peta
        </div>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="charts.html">
                <i class="fa-solid fa-map-location-dot"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
           Halaman  Web
        </div>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="tables.html">
                <i class="fa-solid fa-earth-asia"></i>
                <span>Website</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar --> --}}
