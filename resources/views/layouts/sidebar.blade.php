<div id="sidebar" class="active">
    <div class="sidebar-wrapper active" style="background: #191308;">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{ route('about') }}"><span class="text-light">Lsp polinema</span>  <i class=" text-light"></i></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block text-light"><i class="bi bi-x bi-middle " style="color: #fff !important;"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">

                <li class="sidebar-title text-light">Menu</li>

                <li class="sidebar-item {{ request()->routeIs('arsip.*') ? 'active' : '' }}">
                    <a href="{{ route('arsip.index') }}" class='sidebar-link'>
                        <i class="bi bi-envelope-check text-light"></i>
                        <span class="text-light">Arsip</span>
                    </a>
                </li>

                <li class="sidebar-item {{ request()->routeIs('kategori.*') ? 'active' : '' }}">
                    <a href="{{ route('kategori.index') }}" class='sidebar-link'>
                        <i class="i bi-card-list text-light"></i>
                        <span class="text-light">Kategori Surat</span>
                    </a>
                </li>

                <li class="sidebar-item {{ request()->is('about*') ? 'active' : '' }}">
                    <a href="{{ route('about') }}" class='sidebar-link'>
                        <i class="bi bi-person-bounding-box text-light"></i>
                        <span class="text-light">About</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>