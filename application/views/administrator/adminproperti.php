<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Combo Putra - Rekap Data</title>

    <!-- Meta -->
    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">

    <link href="<?php echo base_url('assets/') ?>img/combo-logo.png" rel="icon">
    <link href="<?php echo base_url('assets/') ?>img/combo-logo.png" rel="apple-touch-icon">

    <!-- *************
			************ CSS Files *************
		************* -->
    <link rel="stylesheet" href="<?php echo base_url('assets_admin/') ?>fonts/bootstrap/bootstrap-icons.css" />
    <link rel="stylesheet" href="<?php echo base_url('assets_admin/') ?>css/main.min.css" />

    <!-- *************
			************ Vendor Css Files *************
		************ -->

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets_admin/') ?>vendor/overlay-scroll/OverlayScrollbars.min.css" />
</head>

<style>
    .app-container {
        border-radius: 5px 0 0 5px;
    }

    .btn-info {
        --bs-btn-bg: none;
        --bs-btn-color: none;
    }

    .btn-sm,
    .btn-group-sm>.btn {
        --bs-btn-padding-y: 0.1rem;
        --bs-btn-padding-x: 0.35rem;
        --bs-btn-font-size: 0.8rem;
    }

    .justify-content-center {
        justify-content: right !important;
        margin-top: 20px;
    }
</style>

<body>

    <!-- Page wrapper start -->
    <div class="page-wrapper">

        <!-- Main container start -->
        <div class="main-container">

            <!-- Sidebar wrapper start -->
            <?php $this->load->view('administrator/sidemenu'); ?>
            <!-- Sidebar wrapper end -->

            <!-- App container starts -->
            <div class="app-container">

                <!-- App header starts -->
                <?php $this->load->view('administrator/topmenu'); ?>

                <!-- App Hero header ends -->

                <div class="page-wrapper">


                    <!-- App body starts -->
                    <div class="app-body">

                        <!-- Row start -->
                        <div class="row">
                            <!-- <div class="col-xl-4 col-sm-6 col-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="m-0">

                                            <label class="form-label">Jenis Properti</label>
                                            <select class="form-select mb-3" aria-label="Default select example">
                                                <option selected="">Open this select menu</option>
                                                <option value="1">Rumah</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <div class="m-0 mb-3">
                                                <label class="form-label">Nama</label>
                                                <input type="text" class="form-control" placeholder="Enter text" />
                                            </div>
                                            <div class="m-0 mb-3">
                                                <label class="form-label">Harga</label>
                                                <input type="text" class="form-control" placeholder="Enter text" />
                                            </div>
                                            <div class="m-0">
                                                <label class="form-label">Harga</label>
                                                <input type="text" class="form-control" placeholder="Enter text" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-lg-4 col-sm-6 col-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="m-0 mb-3">
                                            <label class="form-label">Input Field</label>
                                            <input type="text" class="form-control" placeholder="Enter text" />
                                        </div>
                                        <div class="m-0">
                                            <label class="form-label">Input Field</label>
                                            <input type="text" class="form-control" placeholder="Enter text" />
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-lg-4 col-sm-6 col-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="m-0">
                                            <label class="form-label">Disabled Input Field</label>
                                            <input type="text" class="form-control" value="Disabled Field" disabled="" />
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-lg-4 col-sm-6 col-12">
                                <div class="card mb-5">
                                    <div class="card-body">
                                        <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                                        <input class="form-control" type="file" id="formFileMultiple" multiple />
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-lg-4 col-sm-12 col-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="m-0">
                                            <label class="form-label">Readonly Input Field</label>
                                            <input type="text" class="form-control" value="Readonly Field" readonly="" />
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-xl-3 col-sm-6 col-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="m-0">
                                            <label class="form-label">Password Input Field</label>
                                            <input type="password" class="form-control" value="12345" />
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-xl-2 col-sm-4 col-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="m-0">
                                            <label class="form-label">Kamar Mandi</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected="">Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-xl-2 col-sm-4 col-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="m-0">
                                            <label class="form-label">Kamar Tidur</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected="">Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-xl-2 col-sm-4 col-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="m-0">
                                            <label class="form-label">Carport</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected="">Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-xl-2 col-sm-4 col-6">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="m-0">
                                            <label class="form-label">Jumlah Lantai</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected="">Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-xl-3 col-sm-6 col-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="m-0">
                                            <label class="form-label">Disabled Selcet</label>
                                            <select class="form-select" aria-label="Default select example" disabled="">
                                                <option>Open this select menu</option>
                                                <option selected="" value="1">Disabled</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-xl-3 col-sm-6 col-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="m-0">
                                            <label class="form-label">Select Color</label>
                                            <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#5955bd"
                                                title="Choose your color" />
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-xxl-8">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="m-0">
                                            <label class="form-label">Textarea</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-xxl-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="m-0">
                                            <label for="exampleDataList" class="form-label">Datalist example</label>
                                            <input class="form-control" list="datalistOptions" id="exampleDataList"
                                                placeholder="Type to search..." />
                                            <datalist id="datalistOptions">
                                                <option value="San Francisco"></option>
                                                <option value="New York"></option>
                                                <option value="Seattle"></option>
                                                <option value="Los Angeles"></option>
                                                <option value="Chicago"></option>
                                            </datalist>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-xxl-4 col-lg-6 col-sm-12 col-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="input-group">
                                            <span class="input-group-text">@</span>
                                            <input type="text" class="form-control" placeholder="Username" />
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-xxl-4 col-lg-6 col-sm-12 col-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Name" />
                                            <span class="input-group-text">@test.com</span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-xxl-4 col-lg-6 col-sm-12 col-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="input-group">
                                            <span class="input-group-text">$</span>
                                            <input type="text" class="form-control" />
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-xxl-4 col-lg-6 col-sm-12 col-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="input-group">
                                            <span class="input-group-text">$</span>
                                            <span class="input-group-text">0.00</span>
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-xxl-4 col-lg-6 col-sm-12 col-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control" />
                                            <span class="input-group-text">$</span>
                                            <span class="input-group-text">0.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-xxl-4 col-lg-6 col-sm-12 col-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Username" />
                                            <span class="input-group-text">@</span>
                                            <input type="text" class="form-control" placeholder="Server" />
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-xxl-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="input-group">
                                            <span class="input-group-text">Textarea</span>
                                            <textarea class="form-control" aria-label="With textarea"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-xxl-4 col-lg-6 col-sm-12 col-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="input-group">
                                            <button class="btn btn-outline-secondary" type="button">
                                                Button
                                            </button>
                                            <input type="text" class="form-control" placeholder="" />
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-xxl-4 col-lg-6 col-sm-12 col-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="" />
                                            <button class="btn btn-outline-secondary" type="button">
                                                Button
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-xxl-4 col-lg-6 col-sm-12 col-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="input-group">
                                            <button class="btn btn-outline-secondary" type="button">
                                                Button
                                            </button>
                                            <input type="text" class="form-control" placeholder="" />
                                            <button class="btn btn-outline-secondary" type="button">
                                                Button
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-xxl-4 col-lg-6 col-sm-12 col-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="input-group">
                                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider" />
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </li>
                                            </ul>
                                            <input type="text" class="form-control" aria-label="Text input with dropdown button" />
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-xxl-4 col-lg-6 col-sm-12 col-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control" aria-label="Text input with dropdown button" />
                                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider" />
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-xxl-4 col-lg-6 col-sm-12 col-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="input-group">
                                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">Action before</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Another action before</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider" />
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </li>
                                            </ul>
                                            <input type="text" class="form-control" aria-label="Text input with 2 dropdown buttons" />
                                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider" />
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-xxl-4 col-lg-6 col-sm-12 col-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="input-group">
                                            <button type="button" class="btn btn-outline-secondary">
                                                Action
                                            </button>
                                            <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="visually-hidden">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider" />
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </li>
                                            </ul>
                                            <input type="text" class="form-control" aria-label="Text input with segmented dropdown button" />
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="col-xxl-4 col-lg-6 col-sm-12 col-12">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="input-group">
                                            <input type="text" class="form-control" aria-label="Text input with segmented dropdown button" />
                                            <button type="button" class="btn btn-outline-secondary">
                                                Action
                                            </button>
                                            <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="visually-hidden">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </li>
                                                <li>
                                                    <hr class="dropdown-divider" />
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div> -->
                            <!-- Row end -->

                        </div>
                        <!-- App body ends -->

                        <div class="row">
                            <div class="col-xxl-9">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5 class="card-title">Fasilitas</h5>
                                    </div>
                                    <div class="card-body">
                                        <!-- Row start -->
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-4 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Jenis Properti</label>
                                                    <select class="form-select">
                                                        <option value="0">Select</option>
                                                        <option value="1">One</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-4 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Pemilik</label>
                                                    <input type="text" class="form-control" placeholder="Enter fullname" />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-4 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">No. Telp</label>
                                                    <input type="email" class="form-control" placeholder="Enter email address" />
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-4 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Nama Properti</label>
                                                    <input type="text" class="form-control" placeholder="Enter company name" />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-4 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Harga</label>
                                                    <input type="text" class="form-control" placeholder="Enter business address" />
                                                </div>
                                            </div>
                                            <div class="col-sm-8 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Penawaran</label>
                                                    <textarea class="form-control" placeholder="Enter message" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-4 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Phone</label>
                                                    <input type="number" class="form-control" placeholder="Enter phone number" />
                                                </div>
                                            </div>
                                            <!-- <div class="col-lg-3 col-sm-4 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Province/Territory</label>
                                                    <input type="text" class="form-control" placeholder="Enter province/territory" />
                                                </div>
                                            </div> -->

                                            <div class="col-lg-2 col-sm-4 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Kamar Mandi</label>
                                                    <input type="number" class="form-control" placeholder="Enter postal code" />
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-4 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Kamar Tidur</label>
                                                    <input type="number" class="form-control" placeholder="Enter postal code" />
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-4 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Carport</label>
                                                    <input type="number" class="form-control" placeholder="Enter postal code" />
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-4 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Jumlah Lantai</label>
                                                    <input type="number" class="form-control" placeholder="Enter postal code" />
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-4 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Luas Bangunan</label>
                                                    <input type="text" class="form-control" placeholder="Enter business address" />
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-sm-4 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Luas Tanah</label>
                                                    <input type="text" class="form-control" placeholder="Enter business address" />
                                                </div>
                                            </div>

                                            <div class="card-header mt-5">
                                                <h5 class="card-title">Spesifikasi</h5>
                                            </div>

                                            <div class="col-lg-4 col-sm-4 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Jenis Properti</label>
                                                    <select class="form-select">
                                                        <option value="0">Select</option>
                                                        <option value="1">One</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-4 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Pemilik</label>
                                                    <input type="text" class="form-control" placeholder="Enter fullname" />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-4 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">No. Telp</label>
                                                    <input type="email" class="form-control" placeholder="Enter email address" />
                                                </div>
                                            </div>

                                            <div class="col-lg-4 col-sm-4 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Nama Properti</label>
                                                    <input type="text" class="form-control" placeholder="Enter company name" />
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-4 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Harga</label>
                                                    <input type="text" class="form-control" placeholder="Enter business address" />
                                                </div>
                                            </div>
                                            <div class="col-sm-8 col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Penawaran</label>
                                                    <textarea class="form-control" placeholder="Enter message" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Row end -->
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex gap-2 justify-content-end">
                                            <button type="button" class="btn btn-outline-secondary">
                                                Cancel
                                            </button>
                                            <button type="button" class="btn btn-success">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- Page wrapper end -->

                    <!-- App footer start -->
                    <div class="app-footer">
                        <span>© Bootstrap Gallery 2023</span>
                    </div>
                    <!-- App footer end -->

                </div>
                <!-- App container ends -->

            </div>
            <!-- Main container end -->

        </div>
        <!-- Page wrapper end -->

        <!-- *************
			************ JavaScript Files *************
		************* -->
        <!-- Required jQuery first, then Bootstrap Bundle JS -->
        <script src="<?php echo base_url('assets_admin/') ?>js/jquery.min.js"></script>
        <script src="<?php echo base_url('assets_admin/') ?>js/bootstrap.bundle.min.js"></script>

        <!-- *************
			************ Vendor Js Files *************
		************* -->

        <!-- Overlay Scroll JS -->
        <script src="<?php echo base_url('assets_admin/') ?>vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
        <script src="<?php echo base_url('assets_admin/') ?>vendor/overlay-scroll/custom-scrollbar.js"></script>

        <!-- Custom JS files -->
        <script src="<?php echo base_url('assets_admin/') ?>js/custom.js"></script>
</body>

</html>