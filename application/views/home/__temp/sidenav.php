<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-menusamping sidebar sidebar-dark accordion " id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon ">
                    <img src="<?= base_url() ?>assets/img/logo-smk.png" width="40px" alt="">
                </div>
                <div class="text-dark ml-2 d-none d-md-block">sipSEKO</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading text-dark">
                Administrator
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link text-black-50" href="<?= base_url('index.php/dashboard') ?>">
                    <img src="<?= base_url() ?>assets/img/icon/speedometer.png" width="40px" alt="">
                    <span class="text-black-50">Dashboard</span></a>
            </li>
            <hr class="sidebar-divider ">
            <!-- Heading -->
            <div class="sidebar-heading text-dark">
                Menu
            </div>

            <li class="nav-item active">
                <a href="<?= base_url('index.php/inp_sasaran') ?>" class="nav-link">
                    <img src="<?= base_url() ?>assets/img/icon/data.png" width="40px" alt="">
                    <span class="text-black-50">Input Sasaran</span>
                </a>
            </li>
            <li class="nav-item active">
                <a href="<?= base_url('index.php/inp_kegiatan') ?>" class="nav-link">
                    <img src="<?= base_url() ?>assets/img/icon/data1.png" width="40px" alt="">
                    <span class="text-black-50">Input Kegiatan</span>
                </a>
            </li>

            <li class="nav-item active">
                <a href="<?= base_url('index.php/inp_kegiatan') ?>" class="nav-link">
                    <img src="<?= base_url() ?>assets/img/icon/files.png" width="40px" alt="">
                    <span class="text-black-50">Upload Berkas</span>
                </a>
            </li>

            <hr class="sidebar-divider ">
            <!-- Heading -->
            <div class="sidebar-heading text-dark">
                Backup Kagiatan
            </div>

            <li class="nav-item active">
                <a href="<?= base_url('index.php/back_up') ?>" class="nav-link">
                    <img src="<?= base_url() ?>assets/img/icon/printer.png" width="40px" alt="">
                    <span class="text-black-50">Backup dan Print</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                    <img src="<?= base_url() ?>assets/img/icon/exit.png" width="40px" alt="">
                    <span class=" text-black-50">Logout</span></a>
                </l>
                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

        </ul>
        <!-- End of Sidebar -->