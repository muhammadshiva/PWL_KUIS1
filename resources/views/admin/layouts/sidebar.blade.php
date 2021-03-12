<div class="sidebar" data-color="purple" data-background-color="white" data-image="assetsAdmin/img/sidebar-3.jpg">
    <div class="logo text-center">Movie Catalog</div>
    <div class="sidebar-wrapper">
        
        <ul class="nav">
        <li class="nav-item {{ Request::is('admin') ? 'active' : ''}}">
            <a class="nav-link" href="{{url('admin/')}}">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item {{ Request::is('admin/pelanggan') ? 'active' : ''}}">
            <a class="nav-link" href="{{url('/admin/pelanggan')}}">
            <i class="material-icons">people</i>
            <p>Pelanggan</p>
            </a>
        </li>
        <li class="nav-item {{ Request::is('admin/barang') ? 'active' : ''}}">
            <a class="nav-link" href="{{url('/admin/barang')}}">
            <i class="material-icons">movie</i>
            <p>Barang</p>
            </a>
        </li>
        <li class="nav-item {{ Request::is('admin/supplier') ? 'active' : ''}}">
            <a class="nav-link" href="{{'/admin/supplier'}}">
            <i class="material-icons">library_books</i>
            <p>Supplier</p>
            </a>
        </li>
        <li class="nav-item {{ Request::is('admin/pegawai') ? 'active' : ''}}">
            <a class="nav-link" href="{{url('/admin/pegawai')}}">
            <i class="material-icons">admin_panel_settings</i>
            <p>Pegawai</p>
            </a>
        </li>
        </ul>
    </div>
</div>