<!-- Sidebar -->
<ul class="navbar-nav bg-primary sidebar sidebardark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center
justify-content-center" href="index.html">

        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book fa-fw d-inline-block"></i>
        </div>
        <div class="sidebar-brand-text mx-3 text-white">Pustaka
            Booking</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Looping Menu-->

    <!-- Heading -->
    <div class="sidebar-heading text-white">
        Master Data
    </div>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link pb-0 " href="<?=
                                        base_url('kategori'); ?>">
            <i class="fa fa-fw fa book"></i>
            <span class="text-white">Kategori Buku</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0 " href="<?=
                                        base_url('buku'); ?>">
            <i class="fa fa-fw fa book"></i>
            <span class="text-white">Data Buku</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?=
                                        base_url('admin/anggota'); ?>">
            <i class="fa fa-fw fa book"></i>
            <span class="text-white">Data Anggota</span></a>
    </li>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider mt-3">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>

    </div>
</ul>
<!-- End of Sidebar -- > 