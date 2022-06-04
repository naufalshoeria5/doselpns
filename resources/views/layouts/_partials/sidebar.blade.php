<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true"
    data-img="{{ asset('app-assets/images/backgrounds/02.jpg') }}">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('/') }}"><img class="brand-logo"
                        alt="Chameleon admin logo" src="{{ asset('app-assets/images/logo/logo1.png') }}" />
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
            <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a href="{{ route('/') }}"><i
                        class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
            </li>
            @role('karyawan')
                <li class="nav-item {{ request()->is('pensiun') ? 'active' : '' }}">
                    <a href="{{ route('pensiun.index') }}" class="menu-item"><i class="ft-briefcase"></i><span>Berkas
                            Pensiun</span></a>
                </li>
                <li class="nav-item {{ request()->is('kenaikan') ? 'active' : '' }}">
                    <a href="{{ route('kenaikan.index') }}" class="menu-item">
                        <i class="ft-award"></i><span>Berkas KP</span></a>
                </li>
                <li class="nav-item {{ request()->is('tahor') ? 'active' : '' }}">
                    <a href="{{ route('tahor.index') }}" class="menu-item"><i class="ft-layers"></i><span>Berkas
                            Tahor</span></a>
                </li>
            @endrole
            @role('super-admin|admin')
                <li class=" nav-item {{ request()->is('pegawai*') ? 'active' : '' }}"><a href="#"><i
                            class="ft-users"></i><span class="menu-title" data-i18n="">Mutasi</span></a>
                    <ul class="menu-content">
                        <li class="{{ request()->is('pegawai') ? 'active' : '' }}">
                            <a href="{{ route('pegawai.index') }}" class="menu-item" href="">Data Pegawai</a>
                        </li>
                        <li
                            class="{{ Request::segment(1) == 'pegawai' && Request::segment(2) == 'create' ? 'active' : '' }}">
                            <a href="{{ route('pegawai.create') }}" class="menu-item" href="">Tambah Pegawai</a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item dropdown {{ request()->is('tahor') && request()->is('pensiun') ? 'active' : '' }}">
                    <a href="#"><i class="ft-file"></i><span class="menu-title" data-i18n="">Berkas</span></a>
                    <ul class="menu-content">
                        <li class="{{ request()->is('pensiun') ? 'active' : '' }}">
                            <a href="{{ route('pensiun.index') }}" class="menu-item">Data Pensiun</a>
                        </li>
                        <li class="{{ request()->is('kenaikan') ? 'active' : '' }}">
                            <a href="{{ route('kenaikan.index') }}" class="menu-item">
                                Data Kenaikan Pangkat</a>
                        </li>
                        <li class="{{ request()->is('tahor') ? 'active' : '' }}">
                            <a href="{{ route('tahor.index') }}" class="menu-item">Data Tahor</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ request()->is('user*') ? 'active' : '' }}"">
                        <a href=" {{ route('user.index') }}"><i class="ft-user"></i>
                    <span class="menu-title" data-i18n="">User</span>
                    </a>
                </li>
            @endrole
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
