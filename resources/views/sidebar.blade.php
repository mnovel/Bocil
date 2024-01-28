<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
        <a href="../gallery.html" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
                Dashboard
            </p>
        </a>
    </li>
    <li class="nav-item {{ Route::is('pj.*') ? 'active' : '' }}">
        <a href="{{ route('pj.index') }}" class="nav-link {{ Route::is('pj.*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-user-shield"></i>
            <p>
                Penanggung Jawab
            </p>
        </a>
    </li>
    <li class="nav-item {{ Route::is('asset.*') ? 'active' : '' }}">
        <a href="{{ route('asset.index') }}" class="nav-link {{ Route::is('asset.*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-building"></i>
            <p>
                Asset
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="../gallery.html" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p>
                Sewa
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="../gallery.html" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p>
                SKD
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="../gallery.html" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p>
                Pembayaran
            </p>
        </a>
    </li>
    <li class="nav-item {{ preg_match('/(jabatan|kategori|jenis)/i',request()->route()->getName())? 'menu-open': '' }}">
        <a href="#"
            class="nav-link {{ preg_match('/(jabatan|kategori|jenis)/i',request()->route()->getName())? 'active': '' }}">
            <i class="nav-icon fas fa-cogs"></i>
            <p>
                Setting
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('jabatan.index') }}" class="nav-link {{ Route::is('jabatan.*') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Jabatan</p>
                </a>
            </li>
        </ul>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('kategori.index') }}"
                    class="nav-link {{ Route::is('kategori.*') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kategori</p>
                </a>
            </li>
        </ul>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('jenis.index') }}" class="nav-link {{ Route::is('jenis.*') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Jenis</p>
                </a>
            </li>
        </ul>
    </li>
</ul>
