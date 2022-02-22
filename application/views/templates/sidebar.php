<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('welcome') ?>">
                <div class="sidebar-brand-icon">
                    <img src="<?= base_url('assets/img/icon.ico') ?>" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">Warung Bahren</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('welcome') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Kategori
            </div>


            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('kategori/makanan') ?>">
                    <i class="fas fa-utensils"></i>
                    <span>Makanan</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('kategori/minuman') ?>">
                    <i class="fas fa-glass-martini"></i>
                    <span>Minuman</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

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

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="POST" action="">
                        <div class="input-group">
                            <input type="search" class="form-control bg-light border-0 small" placeholder="Apa yang Anda cari ?..." name="keyword" aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="navbar">
                            <ul class="nav navbar-nav navbar-right">

                                <!-- notif on top -->
                                <li class="nav-item dropdown no-arrow mx-1">
                                    <a href="<?= base_url('dashboard/detail_keranjang') ?>" class="nav-link" id="detail_cart" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-shopping-cart fa-fw fa-lg"><?php $keranjang =  $this->cart->total_items()  ?></i>

                                        <!-- jika ada data yang dikirimkan tampilkan notif -->
                                        <!-- jika tidak ada data dikirimkan, maka notif tidak muncul -->
                                        <?php if ($keranjang > 0) {
                                            echo '<span class="badge badge-danger badge-counter">' . $keranjang . '</span>';
                                        }else{
                                            echo '<span style="display:none;" class="badge badge-danger badge-counter">0</span>';
                                        } 
                                        
                                        ?>
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </ul>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <ul class="nav navbar-nav navbar-right">

                        <?php if ($this->session->userdata('username')) { ?>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('username') ?></span>
                                    <img class="img-profile rounded-circle" src="<?= base_url() ?>assets/img/user_profile.png">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profil
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Pengaturan
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Aktivitas
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>

                        <?php } else { ?>

                            <li><?= anchor('auth/login', '<div class="btn btn-primary btn-sm">Login</div>') ?></li>

                        <?php } ?>

                    </ul>

                </nav>
                <!-- End of Topbar -->