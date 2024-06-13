<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>COMBO PUTRA - Produk Detail</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url('assets/') ?>img/combo-logo.png" rel="icon">
    <link href="<?php echo base_url('assets/') ?>img/combo-logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url() ?>assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: UpConstruction
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<style>
    .border-img {
        border: 1px solid #d5d7da;
        border-radius: 5px;
        /* padding: 3%; */
    }

    .service-details .hrgproduk {
        font-family: lato;
        font-weight: 700;
        font-size: 150%;
    }

    .hrgproduk {
        margin-left: 0.5%;
    }

    .detail {
        background-color: #f5f6f7;
        padding: 25px;
    }

    .back {
        margin-top: 3%;
    }

    .btnbackkatalog {
        margin-top: 20%;
        padding: 5%;
        text-align: center;
        background-color: #f5f6f7;
        border-radius: 5px;
        /* border: 0.5px solid black; */
        width: 180px;
        font-size: 15px !important;
        font-family: lato !important;
        font-weight: 500;
        /* box-shadow: 0px 2px 20px rgba(0, 0, 0, 0.06); */
        float: inline-start;
        transition: transform 0.5s ease;
    }

    .btnbackkatalog:hover {
        background-color: #337ab7;
        text-decoration: underline;
        color: white;
        /* font-weight: bold; */
        /* text-align: right; */
        transform: translateX(-8px);
    }

    @media screen and (max-width: 430px) {
        .breadcrumbs h2 {
            font-size: 48px;
        }
    }

    @media screen and (max-width: 1366px) {
        .btnbackkatalog {
            margin-top: 12%;
        }
    }
</style>

<body>

    <!-- ======= Header ======= -->
    <?php $this->load->view('header'); ?>
    <!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/tokobanner.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Produk Details</h2>
                <ol>
                    <li><a href="<?php echo base_url('home') ?>">Beranda</a></li>
                    <li>Produk Details</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Service Details Section ======= -->
        <section id="service-details" class="service-details project-details about">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-6">
                    <div class="col-lg-6">


                        <div class="position-relative h-100">
                            <div class="portfolio-details-slider">
                                <div class="align-items-center">

                                    <?php
                                    if ($detail->nama_foto_barang !== null) {
                                        $foto = "https://sicora.comboputra.co.id/assets/foto/barang/thumb/" . $detail->nama_foto_barang;
                                    } else {
                                        $foto = "https://sicora.comboputra.co.id/assets/images/o-redlogo.png";
                                    } ?>

                                    <div class="swiper-slide">
                                        <img src="<?php echo $foto ?>" alt="" class="img-fluid services-img border-img">
                                    </div>

                                </div>
                                <!-- <div class="swiper-pagination"></div> -->
                            </div>
                            <!-- <div class="swiper-button-prev"></div> -->
                            <!-- <div class="swiper-button-next"></div> -->
                            <img src="" width="100" alt="" class="img-fluid services-img">
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <h1 style="font-family: lato; font-weight:900;"><?php echo $detail->nama_barang ?></h1>
                        <p class="hrgproduk">
                            Rp <?php echo number_format($detail->harga_jual) ?>
                        </p>
                        <div class="services-list ">


                            <!-- <a href="#" class="active">Remodeling</a> -->
                            <!-- <a href="#">Construction</a> -->
                            <a style="font-family: lato; font-weight:500; font-size:18px;" href="<?php echo base_url('Katalog?id_kategori=') . $detail->id_kategori . '&nama_kategori=' . $detail->nama_kategori . '&id_subkategori=' . $detail->id_subkategori . '&nama_subkategori=' . $detail->nama_subkategori ?>">Kategori &nbsp : &nbsp<?php echo $detail->nama_kategori ?> -
                                <?php echo $detail->nama_subkategori ?></a>
                            <a style="font-family: lato; font-weight:500; font-size:18px;" href="<?php echo base_url('Katalog?id_kategori=') . $detail->id_kategori . '&nama_kategori=' . $detail->nama_kategori . '&id_subkategori=' . $detail->id_subkategori . '&nama_subkategori=' . $detail->nama_subkategori . '&id_merk=' . $detail->id_merk . '&merk=' . $detail->nama_merk ?>">Merk &nbsp; &nbsp; &nbsp; &nbsp; &nbsp: &nbsp<?php echo $detail->nama_merk ?></a>
                        </div>

                        <div class="detail">
                            <h4 style="font-family: lato; font-weight:700; font-size:20px;">Detail Produk</h4>
                            <p>Nam voluptatem quasi numquam quas fugiat ex temporibus quo est. Quia aut quam quod facere ut non occaecati ut aut. Nesciunt mollitia illum tempore corrupti sed eum reiciendis. Maxime modi rerum.</p>
                            <ul>
                                <li><i class="bi bi-check-circle"></i> <span>Aut eum totam accusantium voluptatem.</span></li>
                                <li><i class="bi bi-check-circle"></i> <span>Assumenda et porro nisi nihil nesciunt voluptatibus.</span></li>
                                <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
                            </ul>
                            <p>
                                Est reprehenderit voluptatem necessitatibus asperiores neque sed ea illo. Deleniti quam sequi optio iste veniam repellat odit. Aut pariatur itaque nesciunt fuga.
                            </p>
                            <p>
                                Sunt rem odit accusantium omnis perspiciatis officia. Laboriosam aut consequuntur recusandae mollitia doloremque est architecto cupiditate ullam. Quia est ut occaecati fuga. Distinctio ex repellendus eveniet velit sint quia sapiente cumque. Et ipsa perferendis ut nihil. Laboriosam vel voluptates tenetur nostrum. Eaque iusto cupiditate et totam et quia dolorum in. Sunt molestiae ipsum at consequatur vero. Architecto ut pariatur autem ad non cumque nesciunt qui maxime. Sunt eum quia impedit dolore alias explicabo ea.
                            </p>
                        </div>

                        <div style="display:table;" data-aos="fade-up" data-aos-delay="100">
                            <a href="<?php echo base_url('Katalog?id_kategori=') . $detail->id_kategori . '&nama_kategori=' . $detail->nama_kategori . '&id_subkategori=' . $detail->id_subkategori . '&nama_subkategori=' . $detail->nama_subkategori . '&id_merk=' . $detail->id_merk . '&merk=' . $detail->nama_merk ?>">

                                <p class="btnbackkatalog"><i style="font-style: normal;" class="bi-folder-fill"> Kembali Ke Katalog </i></p>

                            </a>
                        </div>
                        <div style="display:table; margin-top:-6%" data-aos="fade-up" data-aos-delay="100">
                            <a href="<?php echo base_url('Home') ?>">
                                <p class="btnbackkatalog"><i style="font-style: normal;" class="bi-house-fill"> Kembali Ke Beranda</i></p>
                            </a>
                        </div>
                        <!-- <a href="<?php echo base_url('Katalog?id_kategori=') . $detail->id_kategori . '&nama_kategori=' . $detail->nama_kategori . '&id_subkategori=' . $detail->id_subkategori . '&nama_subkategori=' . $detail->nama_subkategori . '&id_merk=' . $detail->id_merk . '&merk=' . $detail->nama_merk ?>"><img class="back" src="<?php echo base_url('assets/') ?>img/back.png" width="50" alt=""></a> -->

                    </div>

                </div>

            </div>
        </section><!-- End Service Details Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php $this->load->view('footer'); ?>
    <!-- End Footer -->

    <?php $this->load->view('scroll'); ?>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/aos/aos.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>

</body>

</html>