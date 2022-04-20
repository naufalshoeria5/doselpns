<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="{{ asset('app-assets/images/backgrounds/02.jpg') }}">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('/') }}"><img class="brand-logo" alt="Chameleon admin logo" src="{{ asset('app-assets/images/logo/logo1.png') }}" />
                    <h3 class="brand-text">Dosel PNS</h3>
                </a></li>
            <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
    </div>
    <div class="navigation-background"></div>
    <div class="main-menu-content">
        {{-- <li class=" nav-item"><a href="https://themeselection.com/support"><i class="ft-life-buoy"></i><span class="menu-title" data-i18n="">Raise Support</span></a>
        </li> --}}
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="{{ route('/') }}"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
            </li>
            <li class=" nav-item {{ request()->is('pegawai*') ? 'active' : '' }}"><a href="#"><i class="ft-users"></i><span class="menu-title" data-i18n="">Pegawai</span></a>
                <ul class="menu-content">
                    <li class="{{ request()->is('pegawai*') ? 'active' : '' }}">
                        <a href="{{ route('pegawai.index') }}" class="menu-item" href="">Data Pegawai</a>
                    </li>
                    <li class="{{ Request::segment(1) == 'pegawai' && Request::segment(2) == 'create' ? 'active' : '' }}">
                        <a href="{{ route('pegawai.create') }}" class="menu-item" href="">Tambah Pegawai</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item dropdown"><a href="#"><i class="ft-file"></i><span class="menu-title" data-i18n="">Berkas</span></a>
                <ul class="menu-content">
                    <li>
                        <a href="{{ route('tahor.index') }}" class="menu-item" href="">Data Pensiun</a>
                    </li>
                    <li>
                        <a href="{{ route('pegawai.create') }}" class="menu-item" href="">Data Kenaikan Pangkat</a>
                    </li>
                    <li>
                        <a href="{{ route('pegawai.create') }}" class="menu-item" href="">Data Tahor</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item"><a href="{{ route('/') }}"><i class="ft-user"></i><span class="menu-title" data-i18n="">User</span></a></li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->