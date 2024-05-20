<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white
topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-mdnone rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800"><?= $judul; ?></h1>
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                <div class="topbar-divider d-none d-sm-block"></div>
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" ariahaspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline textgray-600 small"><?= $anggota['nama']; ?> </span>
                        <img class="img-profile rounded-circle" src="<?php echo 'http://localhost:8080/' . $anggota['image'] ?>">
                    </a>

                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right
shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?=
                                                        base_url('admin/myprofil'); ?>">
                            <i class="fas fa-user fa-sm fa-fw mr-2
text-gray-400"></i>
                            Profile Saya
                        </a>
                        <a class="dropdown-item" href="<?=
                                                        base_url('auth/logoutkan'); ?>">
                            <i class="fas fa-user fa-sm fa-fw mr-2
text-gray-400"></i>
                            Logout
                        </a>
                        <div class="dropdown-divider"></div>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- End of Topbar -->