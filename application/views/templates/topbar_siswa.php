<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>



            <div class="ml-4">
                <h3><?= $judul; ?></h3>
                <!-- <h3><?= $this->session->userdata['username']; ?></h3> -->
            </div>


            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="<?= base_url('auth/logout'); ?>" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><b><?= $this->session->userdata['nis']; ?>-<?= $this->session->userdata['username']; ?></b></span>
                        <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/default1.jpg'); ?>">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profil
                        </a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="">
                            <i class="fas fa-user-edit fa-sm fa-fw mr-2 text-gray-400"></i>
                            Ubah Profil
                        </a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('Authentication/logout') ?>" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar