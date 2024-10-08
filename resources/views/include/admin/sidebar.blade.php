<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('home') }}" class="app-brand-link">
            <img src="{{ asset('admin/assets/img/avatars/logo.png') }}" alt="logo" width="100%" height="100%">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item mt-2 {{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
            <a href="{{ route('home') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Tabel</span>
        </li>

        <li class="menu-item mt-2 {{ Route::currentRouteName() == 'program.index' ? 'active' : '' }}">
            <a href="{{ route('program.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Program</div>
            </a>
        </li>

        <li class="menu-item mt-2 {{ Route::currentRouteName() == 'fasilitas.index' ? 'active' : '' }}">
            <a href="{{ route('fasilitas.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Fasilitas</div>
            </a>
        </li>

        <li class="menu-item mt-2 {{ Route::currentRouteName() == 'artikel.index' ? 'active' : '' }}">
            <a href="{{ route('artikel.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Artikel</div>
            </a>
        </li>

        <li class="menu-item mt-2 {{ Route::currentRouteName() == 'pendaftaran.index' ? 'active' : '' }}">
            <a href="{{ route('pendaftaran.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Pendaftaran</div>
            </a>
        </li>
    </ul>
</aside>
