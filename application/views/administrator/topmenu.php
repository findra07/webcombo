<style>
    .app-brand {
        margin-left: -6px;
    }
</style>

<div class="app-header d-flex align-items-center">

    <!-- Toggle buttons start -->
    <div class="d-flex">
        <button class="btn btn-outline-primary me-2 toggle-sidebar" id="toggle-sidebar">
            <i class="bi bi-text-indent-left fs-5"></i>
        </button>
        <button class="btn btn-outline-primary me-2 pin-sidebar" id="pin-sidebar">
            <i class="bi bi-text-indent-left fs-5"></i>
        </button>
    </div>
    <!-- Toggle buttons end -->


    <!-- App brand sm start -->
    <div class="app-brand-sm d-md-none d-sm-block">
        <a href="index.html">
            <img src="<?php echo base_url('assets_admin/') ?>images/logo-sm.svg" class="logo" alt="Bootstrap Gallery">
        </a>
    </div>
    <!-- App brand sm end -->

    <!-- App header actions start -->
    <div class="header-actions">
        <div class="search-container d-lg-block d-none me-2">
            <!-- Search container start -->
            <input type="text" class="form-control" placeholder="Search" />
            <i class="bi bi-search"></i>
            <!-- Search container end -->
        </div>
        <div class="dropdown ms-2">
            <a class="dropdown-toggle d-flex p-2 border rounded-2" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-grid fs-4 lh-1"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end shadow">
                <!-- Row start -->
                <div class="d-flex gap-2 m-2">
                    <a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
                        <img src="<?php echo base_url('assets_admin/') ?>images/brand-behance.svg" class="img-2x" alt="Admin Themes" />
                    </a>
                    <a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
                        <img src="<?php echo base_url('assets_admin/') ?>images/brand-gatsby.svg" class="img-2x" alt="Admin Themes" />
                    </a>
                    <a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
                        <img src="<?php echo base_url('assets_admin/') ?>images/brand-google.svg" class="img-2x" alt="Admin Themes" />
                    </a>
                    <a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
                        <img src="<?php echo base_url('assets_admin/') ?>images/brand-bitcoin.svg" class="img-2x" alt="Admin Themes" />
                    </a>
                    <a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
                        <img src="<?php echo base_url('assets_admin/') ?>images/brand-dribbble.svg" class="img-2x" alt="Admin Themes" />
                    </a>
                </div>
                <!-- Row end -->
            </div>
        </div>
        <div class="dropdown ms-2">
            <a class="dropdown-toggle d-flex p-2 border rounded-2" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-bell fs-4 lh-1"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end shadow">
                <div class="dropdown-item">
                    <div class="d-flex py-2 border-bottom">
                        <img src="<?php echo base_url('assets_admin/') ?>images/user.png" class="img-4x me-3 rounded-3" alt="Admin Theme" />
                        <div class="m-0">
                            <h6 class="mb-1">Sophie Michiels</h6>
                            <p class="mb-2">Membership has been ended.</p>
                            <p class="small m-0 text-secondary">Today, 07:30pm</p>
                        </div>
                    </div>
                </div>
                <div class="dropdown-item">
                    <div class="d-flex py-2 border-bottom">
                        <img src="<?php echo base_url('assets_admin/') ?>images/user2.png" class="img-4x me-3 rounded-3" alt="Admin Theme" />
                        <div class="m-0">
                            <h6 class="mb-1">Sophie Michiels</h6>
                            <p class="mb-2">Congratulate, James for new job.</p>
                            <p class="small m-0 text-secondary">Today, 08:00pm</p>
                        </div>
                    </div>
                </div>
                <div class="dropdown-item">
                    <div class="d-flex py-2">
                        <img src="<?php echo base_url('assets_admin/') ?>images/user1.png" class="img-4x me-3 rounded-3" alt="Admin Theme" />
                        <div class="m-0">
                            <h6 class="mb-1">Sophie Michiels</h6>
                            <p class="mb-2">Lewis added new schedule release.</p>
                            <p class="small m-0 text-secondary">Today, 09:30pm</p>
                        </div>
                    </div>
                </div>
                <div class="d-grid m-3">
                    <a href="javascript:void(0)" class="btn btn-primary">View all</a>
                </div>
            </div>
        </div>
        <div class="dropdown ms-2">
            <a href="settings.html" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip-info" data-bs-title="Settings" class="d-flex p-2 border rounded-2">
                <i class="bi bi-gear fs-4 lh-1"></i>
            </a>
        </div>
        <div class="dropdown ms-3">
            <a id="userSettings" class="dropdown-toggle d-flex py-2 align-items-center ps-3 border-start" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="d-none d-md-block me-2"><?php echo $user->name; ?></span>
                <img src="<?php echo base_url('assets_admin/') ?>images/user.png" class="rounded-circle img-3x" alt="Bootstrap Gallery" />
            </a>
            <div class="dropdown-menu dropdown-menu-end shadow">
                <a class="dropdown-item d-flex align-items-center" href="profile.html"><i class="bi bi-person fs-4 me-2"></i>Profile</a>
                <a class="dropdown-item d-flex align-items-center" href="settings.html"><i class="bi bi-gear fs-4 me-2"></i>Account Settings</a>
                <a class="dropdown-item d-flex align-items-center" href="login.html"><i class="bi bi-escape fs-4 me-2"></i>Logout</a>
            </div>
        </div>
    </div>
    <!-- App header actions end -->

</div>

<!-- App header ends -->

<!-- App hero header starts -->
<div class="app-hero-header d-flex align-items-start">

    <?php
    $current_url = $this->uri->segment(2); // Mendapatkan segmen URL untuk menentukan halaman saat ini
    switch ($current_url) {
        case 'dashboard':
            $breadcrumb_title = 'Dashboard';
            break;
        case 'rekap':
            $breadcrumb_title = 'Rekap Data';
            break;
    }
    ?>
    <!-- Breadcrumb start -->
    <ol class="breadcrumb d-none d-lg-flex align-items-center">
        <li class="breadcrumb-item">
            <i class="bi bi-house"></i>
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $breadcrumb_title; ?></li>
    </ol>
    <!-- Breadcrumb end -->

    <?php
    // Memastikan variabel $jmlnotajual terdefinisi sebelum digunakan
    if (isset($jmlnotajual)) {
        // Mengambil nilai rupiah dari $jmlnotajual jika tersedia
        $tot_rp = isset($jmlnotajual->rupiah) ? $jmlnotajual->rupiah : '';

        // Memeriksa apakah $tot_rp kosong atau tidak terdefinisi
        if ($tot_rp === "") {
            $rupiah = '0'; // Inisialisasi $rupiah dengan nilai 0 jika $tot_rp kosong
        } else {
            $rupiah = $tot_rp; // Menggunakan nilai $tot_rp jika tidak kosong
        }
    } else {
        $rupiah = '0'; // Inisialisasi $rupiah dengan nilai 0 jika $jmlnotajual tidak terdefinisi
    }
    ?>

    <!-- Sales stats start -->
    <div class="ms-auto d-flex flex-row">
        <div class="d-flex flex-column me-5 text-end">
            <p class="m-0 text-secondary">Nota Hari Ini</p>
            <h3 class="m-0"><?php echo $jmlnotajual->totalnota ?></h3>
        </div>
        <div class="d-flex flex-column text-end">
            <p class="m-0 text-secondary">Penjualan Hari Ini</p>
            <h3 class="m-0">Rp <?php echo $rupiah ?></h3>
        </div>
    </div>
    <!-- Sales stats end -->

</div>