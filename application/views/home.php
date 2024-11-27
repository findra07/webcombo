<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>COMBO PUTRA - Beranda</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url('assets/') ?>img/combo-logo.png" rel="icon">
    <link href="<?php echo base_url('assets/') ?>img/combo-logo.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('assets/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/') ?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/') ?>vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/') ?>vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/') ?>vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url('assets/') ?>css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: UpConstruction
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<style>
    .hero .info h2 {
        font-size: 80px;
    }

    .tittlecombo {
        font-family: oswald;
        font-size: 70px;
    }

    .tren-img {
        padding: 5%;
    }

    .img-paint {
        height: 196px;
        padding: 10%;
    }

    .center-paint {
        text-align: center;
    }

    .background-paint {
        background-color: white;
        border-radius: 5px;
    }

    .features .tab-pane h3:after {
        height: 0px;
    }

    .btncatbymerk {
        padding: 1%;
        text-align: center;
        background-color: white;
        border-radius: 5px;
        width: 26%;
        font-size: 15px;
        font-weight: 500;
        box-shadow: 0px 2px 20px rgba(0, 0, 0, 0.06);
        float: inline-end;
        transition: transform 0.5s ease;
        font-family: Lato medium;
    }

    .btncatbymerk:hover {
        background-color: #337ab7;
        text-decoration: underline;
        color: white;
        font-weight: bold;
        /* text-align: right; */
        transform: translateX(8px);
    }

    .btnprodukbykategori {
        margin-top: 5%;
        margin-bottom: 0;
        padding: 1%;
        text-align: center;
        /* color: black; */
        background-color: #f5f6f7;
        box-shadow: 0px 2px 20px rgba(0, 0, 0, 0.06);
        border-radius: 5px;
        width: 20%;
        font-size: 14px;
        float: inline-start;
        transition: transform 0.5s ease;
    }

    .btnprodukbykategori:hover {
        background-color: #337ab7;
        text-decoration: underline;
        color: white;
        font-weight: bold;
        /* text-align: right; */
        transform: translateX(8px);
    }

    .btnrightprodukbykategori {
        margin-top: 5%;
        margin-bottom: 0;
        padding: 1%;
        text-align: center;
        /* color: black; */
        background-color: white;
        box-shadow: 0px 2px 20px rgba(0, 0, 0, 0.06);
        border-radius: 5px;
        width: 20%;
        font-size: 14px;
        float: inline-end;
        transition: transform 0.5s ease;
    }

    .btnrightprodukbykategori:hover {
        background-color: #337ab7;
        text-decoration: underline;
        color: white;
        font-weight: bold;
        /* text-align: right; */
        transform: translateX(8px);
    }

    .statusstok {
        margin-left: 5%;
        margin-right: 5%;
        font-style: italic;
        font-size: 13px
    }

    .tren-slide {
        display: none;
    }

    .tren-item {
        padding-left: 0px !important;
    }

    .tren-single {
        width: 15.15%;
        margin: 24px 10px;
        height: 372px;
    }

    .merk-slide {
        width: 100%;
        height: 400px;
    }

    .alt-services .garisbawah:after {
        content: "";
        position: absolute;
        display: block;
        width: 50px;
        height: 3px;
        background: var(--color-primary);
        right: 0;
        left: auto !important;
        bottom: 0;
    }


    @media screen and (max-width: 1180px) {
        .tren-slideview {
            display: none;
        }

        .tren-slide {
            display: block;
        }
    }

    @media screen and (max-width: 1366px) {

        .tren-single {
            width: 15.15%;
            margin: 10px 7px;
            height: 360px;
        }
    }

    @media screen and (max-width: 1000px) {

        .merk-tab {
            height: auto !important;
        }
    }

    @media screen and (min-width:933px) and (max-width: 1180px) {
        .merk-tab {
            height: 300px !important;
        }

        .merk-slide {
            height: 300px;
        }
    }

    @media screen and (max-width: 960px) {

        .tren-single {
            width: 22.95%;
            margin: 10px 7px;
            height: 360px;
        }

        .merk-slide {
            padding: 12px;
            height: 400px;
        }
    }

    @media screen and (max-width: 740px) {

        .tren-single {
            width: 30.7%;
            margin: 10px 7px;
            height: 360px;
        }

        .merk-slide {
            padding: 12px;
            height: 400px;
        }
    }

    @media screen and (max-width: 430px) {

        .tren-single {
            width: 47%;
            margin: 10px 5px;
            height: 370px;
        }

        .merk-slide {
            padding: 12px;
            height: 250px;
        }

        .flex-merk {
            height: 150px !important;
        }

        .alt-services {
            padding: 40PX 0;
        }

        .section-header h2 {
            font-size: 28PX !important;
        }

        .section-header h2:before {
            margin: 0;
            width: 0;
        }

        .section-header h2:after {
            margin: 0;
            width: 0;
        }

    }


    @media screen and (max-width: 1400px) {

        .btnprodukbykategori,
        .btnrightprodukbykategori,
        .btncatbymerk {
            width: auto;
        }

        .responsiv-cat {
            width: 33.3%;
        }

        /* .img-paint {
            height: auto;
        } */

        .responsiv-cat {
            padding: 0 1%;
        }
    }

    @media screen and (min-width: 1000px) and (max-width: 1400px) {
        .img-paint {
            height: 150px;
        }

    }

    @media screen and (min-width: 1000px) and (max-width: 1180px) {
        .responsiv {
            width: 50%;
        }

    }

    @media screen and (max-width: 960px) {
        .hero .info h2 {
            font-size: 45px;
        }

        .tittlecombo {
            font-size: 40px;
        }
    }

    @media screen and (max-width: 932px) {
        .hero .info h2 {
            font-size: 45px;
        }

        .tittlecombo {
            font-size: 40px;
        }

        .hero .info p {
            font-size: 13px;
        }

        .hero .info .btn-get-started {
            padding: 10px 30px;
        }

        .text-center {
            padding-top: 5%;
        }

        .hero .carousel-control-prev-icon,
        .hero .carousel-control-next-icon {
            font-size: 20px;
            width: 40px;
            height: 40px;
        }

        .img-hidden {
            display: block;
        }

        .img-hidden2 {
            display: none;
        }



        .stats-counter .stats-item p {
            font-size: 16px;
        }
    }

    @media screen and (min-width:933px) {
        .img-hidden {
            display: none;
        }

        .img-hidden2 {
            display: block;
        }
    }


    @media screen and (min-width: 450px) and (max-width: 960px) {
        .responsiv {
            width: 50%;
        }

        .responsiv-cat {
            width: 33.3%;
        }

        .btnprodukbykategori,
        .btnrightprodukbykategori,
        .btncatbymerk {
            width: auto;
        }


    }

    @media screen and (max-width: 450px) {

        .btnprodukbykategori,
        .btnrightprodukbykategori,
        .btncatbymerk {
            width: auto;
        }

        .flex-kategori {
            display: inline;
        }

        .flex-tampilnormal {
            display: none;
        }

        /* .flex-tampilsmall {  
            display: block;
        } */

    }

    @media screen and (min-width:450px) {
        .flex-tampilsmall {
            display: none;
        }
    }



    @media screen and (max-width:750px) {
        .img-paint {
            height: 160px;
        }
    }

    @media screen and (max-width:450px) {
        .img-paint {
            height: 120px;
        }

        .recent-blog-posts .post-item .post-title {
            font-size: 13px;
        }

        .recent-blog-posts .post-item .meta span {
            font-size: 15px;
        }

        .hero {
            height: 653px;
        }

        .hero .carousel-item {
            height: 653px;
        }

        .tittlecombo {
            font-size: 21px;
        }

        .hero .info {
            height: 653px;
        }

        .hero .info h2 {
            font-size: 30px;
        }

        .hero .info p {
            font-size: 12px;
        }

        .carousel-control-prev,
        .carousel-control-next {
            height: 653px;

        }

        .hero .carousel-control-prev-icon,
        .hero .carousel-control-next-icon {
            font-size: 20px;
            width: 40px;
            height: 40px;
        }

        .recent-blog-posts {
            padding: 50px 0px;
        }
    }

    @media screen and (max-width:400px) {
        .img-paint {
            height: 105px;
        }
    }

    @media screen and (max-width:375px) {

        .recent-blog-posts .post-item .post-title {
            font-size: 13px;

        }

        .recent-blog-posts .post-item .meta span {
            font-size: 13px;
        }
    }

    @media screen and (max-width:345px) {

        .recent-blog-posts .post-item .post-title {
            font-size: 11px;
        }

        .recent-blog-posts .post-item .meta span {
            font-size: 11px;
        }
    }


    @media screen and (max-width:360px) {

        .tittlecombo {
            font-size: 18px;
        }

        .hero .info h2 {
            font-size: 25px;
        }

        .section-header h2 {
            font-size: 24PX !important;
        }
    }

    @media screen and (min-width: 768px) and (max-width: 912px) and (orientation: portrait) {
        .tittle1 {
            font-size: 65px !important;
        }

        .tittlecombo {
            font-size: 50px !important;
        }

        .hero .info p {
            font-size: 16px !important;
        }
    }

    @media screen and (min-width: 540px) and (max-width: 740px) {
        .flex-harga {
            font-size: 16px;
        }
    }

    @media screen and (min-width: 1250px) and (max-width: 1370px) {
        .alt-services .icon-box h4 {
            font-size: 16px;
        }

        .alt-services .icon-box i,
        .flex-img {
            width: 110px !important;
            height: 110px !important;
        }

        .alt-services .icon-box p {
            font-size: 14px !important;
        }
    }

    .border-produk {
        border: 0.5px solid rgba(82, 86, 94, 0.3);
        border-radius: 5px;
    }

    .border-produk:hover {
        border: 1px solid #337ab7;
    }

    .hero .container {
        padding-left: 0;
        padding-right: 0;
    }

    .mobile-nav-show {
        padding-right: 0;
    }

    @media screen and (min-width: 970px) {
        .padding-merk {
            padding-left: 0;
            padding-right: 0;
        }
    }

    @media screen and (max-width:960px) {
        padding-merk2 {
            padding-left: 0;
            padding-right: 0;
        }

        .padding-merk {
            margin-left: 0;
            padding-left: 0 !important;
            padding-right: 0 !important;
        }
    }

    .section-header {
        /* text-align: center; */
        padding-bottom: 40px;
    }

    .recent-blog-posts .post-item {
        background-color: white;
    }
</style>

<body>

    <!-- ======= Header ======= -->
    <?php $this->load->view('header'); ?>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">

        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h2 class="tittle1" data-aos="fade-down">COMBO PUTRA <br><span class="tittlecombo">Solusi Bahan Bangunan Anda</span></h2>
                        <!-- <p data-aos="fade-up">Salah satu toko pertama yang hadir melayani penjualan bahan bangunan di Perumnas Banyumanik. Sedangkan Perumnas Banyumanik adalah proyek perumahan yang dibangun pada pertengahan dekade 1970an dan diresmikan oleh Presiden Soeharto pada tahun 1979</p> -->
                        <p data-aos="fade-up">Toko Bangunan Pertama di Perumnas Banyumanik yang sudah terpercaya melayani kebutuhan bahan bangunan sejak tahun 1979.</p>
                        <a data-aos="fade-up" data-aos-delay="200" href="<?php echo base_url('Katalog') ?>" class="btn-get-started" style="font-family: lato; font-weight:700; font-size:20px; padding: 8px 30px; border-radius:8px">Cari Barang</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">


            <div class="carousel-item active" style="background-image: url(<?php echo base_url('assets/') ?>img/tokobanner.jpg)"></div>
            <div class="carousel-item" style="background-image: url(<?php echo base_url('assets/') ?>img/bannerkeramik.jpg)"></div>
            <div class="carousel-item" style="background-image: url(<?php echo base_url('assets/') ?>img/bannerarmada.jpg)"></div>
            <div class="carousel-item" style="background-image: url(<?php echo base_url('assets/') ?>img/bannercat.jpg)"></div>
            <div class="carousel-item" style="background-image: url(<?php echo base_url('assets/') ?>img/bannerkran.jpg)"></div>

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div> -->

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="">
                <?php foreach ($carouselImages as $index => $imageUrl) : ?>
                    <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>" style="background-image: url('<?php echo $imageUrl; ?>');">
                        <!-- Optional: You can add content inside the carousel-item here -->
                    </div>
                <?php endforeach; ?>
            </div>

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                <!-- <span class="visually-hidden">Previous</span> -->
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                <!-- <span class="visually-hidden">Next</span> -->
            </a>
        </div>


    </section><!-- End Hero Section -->

    <main id="main">

        <!-- <section id="alt-services" class="alt-services">
            <div class="" data-aos="fade-up">
                <div class="col-lg-12 ">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.4659810412295!2d110.42158575061426!3d-7.071847094867467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70894c93cfe3c3%3A0xc685bad895a17ade!2sTB.%20Combo%20Putra!5e0!3m2!1sid!2sid!4v1618369884871!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>

                </div>
            </div>
        </section> -->

        <!-- ======= Recent Blog Posts Section ======= -->

        <section id="recent-blog-posts" class="recent-blog-posts tren-slideview section-bg">
            <div class="container" data-aos="fade-up">

                <div class=" section-header">
                    <h2>Tren Penjualan</h2>
                    <p>Jenis barang dengan jumlah pembelian terbanyak di setiap kategori</p>
                </div>

                <div class="row gy-4">
                    <?php foreach ($trenproduk as $tren) { ?>
                        <?php

                        if ($tren->nama_foto_barang !== null) {
                            $img = "https://sicoraerp.comboputra.co.id/public/img/thumb/" . $tren->nama_foto_barang;
                        } else {
                            $img = "https://sicora.comboputra.co.id/assets/images/o-redlogo.png";
                        } ?>

                        <div class="col-xl-2 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="post-item position-relative h-100">

                                <div class="post-img position-relative overflow-hidden">
                                    <img src="<?php echo $img ?>" class="img-fluid tren-img" alt="">

                                </div>

                                <div class="post-content d-flex flex-column">

                                    <h3 class="post-title" style="font-family: Lato; font-weight:700;  font-size: 16px;"><?php echo $tren->nama_barang ?></h3>

                                    <div class="meta align-items-center" style="font-family: Lato; font-weight:300;">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-tags-fill"></i> <span class="ps-2"><?php echo $tren->nama_kategori ?></span>
                                        </div>

                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-coin"></i> <span class="ps-2">Rp <?php echo number_format($tren->harga_jual) ?></span>
                                        </div>
                                    </div>

                                    <hr>

                                    <a style="font-family: Lato; font-weight:900;" href="<?php echo base_url('ProdukSingle?id_barang=') . $tren->id_barang; ?>" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                                </div>

                            </div>
                        </div>

                    <?php } ?>
                </div>
            </div>
        </section>

        <!-- End Recent Blog Posts Section -->

        <section id="project-details" class="project-details recent-blog-posts tren-slide section-bg">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="section-header">
                    <h2>Tren Penjualan</h2>
                    <!-- <p>In commodi voluptatem excepturi quaerat nihil error autem voluptate ut et officia consequuntu</p> -->
                </div>
                <div class="position-relative h-100">

                    <div class="slides-1 portfolio-details-slider swiper col-lg-12" style="border-radius: 5px;">
                        <div class="swiper-wrapper align-items-center gy-4">

                            <?php foreach ($trenproduk as $tren) { ?>
                                <?php

                                if ($tren->nama_foto_barang !== null) {
                                    $img = "https://sicoraerp.comboputra.co.id/public/img/thumb/" . $tren->nama_foto_barang;
                                } else {
                                    $img = "https://sicora.comboputra.co.id/assets/images/o-redlogo.png";
                                } ?>

                                <div class="swiper-slide col-xl-2 col-md-6 tren-single" data-aos="fade-up" data-aos-delay="100">
                                    <div class="post-item position-relative h-100">

                                        <div class="post-img position-relative overflow-hidden">
                                            <img class="img-fluid tren-img" style="width: 100%; height: 100%; border-radius: 5px;" src="<?php echo $img ?>" alt="">
                                        </div>
                                        <div class="post-content d-flex flex-column">

                                            <h3 class="post-title" style="font-family: Lato; font-weight:700;"><?php echo $tren->nama_barang ?></h3>

                                            <div class="meta align-items-center" style="font-family: Lato; font-weight:300;">
                                                <div class="d-flex align-items-center">
                                                    <i class="bi bi-tags-fill"></i> <span class="ps-2"><?php echo $tren->nama_kategori ?></span>
                                                </div>
                                                <!-- <span class="px-3 text-black-50">/</span> -->
                                                <div class="d-flex align-items-center">
                                                    <i class="bi bi-coin"></i> <span class="ps-2">Rp <?php echo number_format($tren->harga_jual) ?></span>
                                                </div>
                                            </div>

                                            <hr>

                                            <a style="font-family: Lato; font-weight:900;" href="<?php echo base_url('ProdukSingle?id_barang=') . $tren->id_barang; ?>" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                                        </div>

                                    </div>
                                </div>
                            <?php } ?>

                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Stats Counter Section ======= -->
        <!-- <section id="stats-counter" class="stats-counter section-bg">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-tags color-blue flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="<?php echo $jml_penjualan->jml ?>" data-purecounter-duration="1" class="purecounter"></span>
                                <p style="font-family: lato; font-weight:300;">Penjualan Hari Ini </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-truck color-orange flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="<?php echo $jml_pengiriman->jml ?>" data-purecounter-duration="1" class="purecounter"></span>
                                <p style="font-family: lato; font-weight:300;">Pengiriman Hari Ini</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-people color-pink flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="<?php echo $today_visit_count; ?>" data-purecounter-duration="1" class="purecounter"></span>
                                <p style="font-family: lato; font-weight:300;">Kunjungan Web Hari Ini</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item d-flex align-items-center w-100 h-100">
                            <i class="bi bi-journal-bookmark color-green flex-shrink-0"></i>
                            <div>
                                <span data-purecounter-start="0" data-purecounter-end="<?php echo $jml_kritiksaran->jml ?>" data-purecounter-duration="1" class="purecounter"></span>
                                <p style="font-family: lato; font-weight:300;">Kritik & Saran Hari ini</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section> -->
        <!-- End Stats Counter Section -->

        <!-- ======= Alt Services Section ======= -->
        <section id="alt-services" class="alt-services">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4 flex-kategori">
                    <div class="col-lg-4 img-bg" style="background-image: url(<?php echo base_url('assets/') ?>img/granitup.png); border-radius: 5px " data-aos="zoom-in" data-aos-delay="100"></div>

                    <div style="padding-left: 2%;" class="col-lg-8 d-flex flex-column justify-content-center">
                        <h3>KERAMIK & GRANIT</h3>
                        <!-- <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus.</p> -->
                        <div class="row flex-tampilnormal">
                            <?php foreach ($section1 as $tampil) { ?>
                                <?php
                                if ($tampil->nama_foto_barang !== null) {
                                    $fotosection1 = "https://sicoraerp.comboputra.co.id/public/img/thumb/" . $tampil->nama_foto_barang;
                                } else {
                                    $fotosection1 = "https://sicora.comboputra.co.id/assets/images/o-redlogo.png";
                                }
                                ?>

                                <div style="margin-top: 30px;" class="icon-box d-flex position-relative col-lg-4 show responsiv" data-aos="fade-up" data-aos-delay="100">
                                    <a href="<?php echo base_url('ProdukSingle?id_barang=') . $tampil->id_barang; ?>">
                                        <i class="bi flex-shrink-0" style="width:130px; height:130px; margin-right:15px"><img class="flex-img" style="padding: 2%;" src="<?php echo $fotosection1 ?>" width="130px" height="130px" alt=""></i>
                                    </a>
                                    <div>
                                        <h4><a class="flex-harga" style="font-family: Lato; font-weight:500;" href="<?php echo base_url('ProdukSingle?id_barang=') . $tampil->id_barang; ?>" class="stretched-link">Rp <?php echo number_format($tampil->harga_jual) ?></a></h4>
                                        <p style="font-family: Lato; font-weight:300; font-size: 15px;"><?php echo $tampil->nama_barang ?></p>
                                    </div>

                                </div><!-- End Icon Box -->
                            <?php } ?>

                        </div>
                        <div class="row flex-tampilsmall" style="--bs-gutter-x: 0.5rem; margin-top: calc(-1* var(--bs-gutter-y));">
                            <?php foreach ($section1 as $tampil) { ?>
                                <?php
                                if ($tampil->nama_foto_barang !== null) {
                                    $fotosection1 = "https://sicoraerp.comboputra.co.id/public/img/thumb/" . $tampil->nama_foto_barang;
                                } else {
                                    $fotosection1 = "https://sicora.comboputra.co.id/assets/images/o-redlogo.png";
                                }
                                ?>

                                <div style="margin-top: 15px; width:50%;" class="icon-box d-flex position-relative col-lg-4 show responsiv" data-aos="fade-up" data-aos-delay="100">
                                    <div class="border-produk">
                                        <i class="bi flex-shrink-0" style="width:130px; height:130px; margin-right:15px; margin: 5% auto 10%;"><img style="" src="<?php echo $fotosection1 ?>" width="130px" height="130px" alt=""></i>

                                        <h4 style="margin: 0 10%; font-family: Lato; font-weight:500;"><a href="<?php echo base_url('ProdukSingle?id_barang=') . $tampil->id_barang; ?>" class="stretched-link">Rp <?php echo number_format($tampil->harga_jual) ?></a></h4>
                                        <p style="margin: 5% 10%; font-family: Lato; font-weight:300; font-size: 15px; line-height: 21px;"><?php echo $tampil->nama_barang ?></p>
                                    </div>
                                </div><!-- End Icon Box -->
                            <?php } ?>

                        </div>
                        <div data-aos="fade-up" data-aos-delay="100">
                            <a href="<?php echo base_url('Katalog?id_kategori=') . $tampil->id_kategori . '&nama_kategori=' . $tampil->nama_kategori ?>">
                                <p class="btnprodukbykategori"><i style="font-style: normal; font-family: Lato Medium; font-size: 15px;" class="bi-collection-fill"> Tampilkan Semua</i></p>
                            </a>
                        </div>
                        <!-- <div class="icon-box d-flex position-relative col-lg-6" data-aos="fade-up" data-aos-delay="400">
                            <img src="<?php echo base_url('assets/') ?>img/browse.png" width="50px" alt="">
                        </div> -->
                    </div>
                </div>

            </div>
        </section>
        <!-- End Alt Services Section -->

        <section id="alt-services-2" class="alt-services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4 flex-kategori">
                    <div class="col-lg-4 img-bg img-hidden" style=" background-image: url(<?php echo base_url('assets/') ?>img/sanitaryup.jpg); border-radius: 5px" data-aos="zoom-in" data-aos-delay="100"></div>


                    <div style="padding-right: 2%;" class="col-lg-8 d-flex flex-column justify-content-center">
                        <h3 class="garisbawah" style="text-align:right">SANITARY</h3>
                        <!-- <p style="text-align:right">Maxime quia dolorum alias perspiciatis. Earum voluptatem sint at non. Ducimus maxime minima iste magni sit praesentium assumenda minus. </p> -->

                        <div class="row flex-tampilnormal">
                            <?php foreach ($section2 as $tampil2) { ?>
                                <?php
                                if ($tampil2->nama_foto_barang !== null) {
                                    $fotosection2 = "https://sicoraerp.comboputra.co.id/public/img/thumb/" . $tampil2->nama_foto_barang;
                                } else {
                                    $fotosection2 = "https://sicora.comboputra.co.id/assets/images/o-redlogo.png";
                                }
                                ?>
                                <div style="margin-top: 30px;" class="icon-box d-flex position-relative col-lg-4 responsiv" data-aos="fade-up" data-aos-delay="100">

                                    <div style="text-align: right;">
                                        <h4><a class="flex-harga" style="font-family: Lato; font-weight:500;" href="<?php echo base_url('ProdukSingle?id_barang=') . $tampil2->id_barang; ?>" class="stretched-link">Rp <?php echo number_format($tampil2->harga_jual) ?></a></h4>
                                        <p style="font-family: Lato; font-weight:300; font-size: 15px;"><?php echo $tampil2->nama_barang ?></p>
                                    </div>
                                    <a href="<?php echo base_url('ProdukSingle?id_barang=') . $tampil2->id_barang; ?>">
                                        <i class="bi flex-shrink-0 " style="width:130px; height:130px; margin-left:15px; margin-right:auto"><img class="flex-img" style="padding: 2%;" src="<?php echo $fotosection2 ?>" width="130px" height="130px" alt=""></i>
                                    </a>
                                </div><!-- End Icon Box -->
                            <?php } ?>
                        </div>
                        <div class="row flex-tampilsmall" style="--bs-gutter-x: 0.5rem; margin-top: calc(-1* var(--bs-gutter-y));">
                            <?php foreach ($section2 as $tampil2) { ?>
                                <?php
                                if ($tampil2->nama_foto_barang !== null) {
                                    $fotosection2 = "https://sicoraerp.comboputra.co.id/public/img/thumb/" . $tampil2->nama_foto_barang;
                                } else {
                                    $fotosection2 = "https://sicora.comboputra.co.id/assets/images/o-redlogo.png";
                                }
                                ?>
                                <div style="margin-top: 15px; width:50%;" class="icon-box d-flex position-relative col-lg-4 responsiv" data-aos="fade-up" data-aos-delay="100">
                                    <div style="text-align: right;" class="border-produk">
                                        <i class="bi flex-shrink-0 " style="width:130px; height:130px; margin-left:15px; margin: 5% auto 10%;"><img style="" src="<?php echo $fotosection2 ?>" width="130px" height="130px" alt=""></i>

                                        <h4 style="margin: 0 10%; font-family: Lato; font-weight:500; text-align: left;"><a href="<?php echo base_url('ProdukSingle?id_barang=') . $tampil2->id_barang; ?>" class="stretched-link">Rp <?php echo number_format($tampil2->harga_jual) ?></a></h4>
                                        <p style="margin: 5% 10%; font-family: Lato; font-weight:300; font-size: 15px; line-height: 21px; text-align: left;"><?php echo $tampil2->nama_barang ?></p>

                                    </div>
                                </div><!-- End Icon Box -->
                            <?php } ?>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="100">
                            <a href="<?php echo base_url('Katalog?id_kategori=') . $tampil2->id_kategori . '&nama_kategori=' . $tampil2->nama_kategori ?>">
                                <p class="btnrightprodukbykategori"><i style="font-style: normal; font-family: Lato Medium; font-size: 15px;" class="bi-collection-fill"> Tampilkan Semua</i></p>
                            </a>
                        </div>
                        <!-- <div class="icon-box d-flex position-relative" style="margin-left:auto;" data-aos="fade-up" data-aos-delay="400">
                            <img src="<?php echo base_url('assets/') ?>img/browse.png" width="50px" alt="">
                        </div> -->
                    </div>

                    <div class="col-lg-4 img-bg img-hidden2" style=" background-image: url(<?php echo base_url('assets/') ?>img/sanitaryup.jpg); border-radius: 5px" data-aos="zoom-in" data-aos-delay="100"></div>

                </div>

            </div>
        </section><!-- End Alt Services Section 2 -->
        <section id="alt-services" class="alt-services">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4 flex-kategori">
                    <div class="col-lg-4 img-bg" style="background-image: url(<?php echo base_url('assets/') ?>img/listrik.jpg); border-radius: 5px " data-aos="zoom-in" data-aos-delay="100"></div>

                    <div style="padding-left: 2%;" class="col-lg-8 d-flex flex-column justify-content-center">
                        <h3>ALAT LISTRIK</h3>
                        <!-- <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. </p> -->
                        <div class="row flex-tampilnormal">
                            <?php foreach ($section3 as $tampil3) { ?>
                                <?php
                                if ($tampil3->nama_foto_barang !== null) {
                                    $fotosection3 = "https://sicoraerp.comboputra.co.id/public/img/thumb/" . $tampil3->nama_foto_barang;
                                } else {
                                    $fotosection3 = "https://sicora.comboputra.co.id/assets/images/o-redlogo.png";
                                }
                                ?>

                                <div style="margin-top: 30px;" class="icon-box d-flex position-relative col-lg-4 show responsiv" data-aos="fade-up" data-aos-delay="100">
                                    <a href="<?php echo base_url('ProdukSingle?id_barang=') . $tampil3->id_barang; ?>">
                                        <i class="bi flex-shrink-0" style="width:130px; height:130px; margin-right:15px"><img class="flex-img" style="padding: 2%;" src="<?php echo $fotosection3 ?>" width="130px" height="130px" alt=""></i>
                                    </a>
                                    <div>
                                        <h4><a class="flex-harga" style="font-family: Lato; font-weight:500;" href="<?php echo base_url('ProdukSingle?id_barang=') . $tampil3->id_barang; ?>" class="stretched-link">Rp <?php echo number_format($tampil3->harga_jual) ?></a></h4>
                                        <p style="font-family: Lato; font-weight:300; font-size: 15px;"><?php echo $tampil3->nama_barang ?></p>
                                    </div>
                                </div><!-- End Icon Box -->
                            <?php } ?>
                        </div>
                        <div class="row flex-tampilsmall" style="--bs-gutter-x: 0.5rem; margin-top: calc(-1* var(--bs-gutter-y));">
                            <?php foreach ($section3 as $tampil3) { ?>
                                <?php
                                if ($tampil3->nama_foto_barang !== null) {
                                    $fotosection3 = "https://sicoraerp.comboputra.co.id/public/img/thumb/" . $tampil3->nama_foto_barang;
                                } else {
                                    $fotosection3 = "https://sicora.comboputra.co.id/assets/images/o-redlogo.png";
                                }
                                ?>

                                <div style="margin-top: 15px; width:50%;" class="icon-box d-flex position-relative col-lg-4 show responsiv" data-aos="fade-up" data-aos-delay="100">
                                    <div class="border-produk">
                                        <i class="bi flex-shrink-0" style="width:130px; height:130px; margin-right:15px; margin: 5% auto 10%;"><img style="" src="<?php echo $fotosection3 ?>" width="130px" height="130px" alt=""></i>

                                        <h4 style="margin: 0 10%; font-family: Lato; font-weight:500;"><a href="<?php echo base_url('ProdukSingle?id_barang=') . $tampil3->id_barang; ?>" class="stretched-link">Rp <?php echo number_format($tampil3->harga_jual) ?></a></h4>
                                        <p style="margin: 5% 10%; font-family: Lato; font-weight:300; font-size: 15px; line-height: 21px;"><?php echo $tampil3->nama_barang ?></p>
                                    </div>
                                </div><!-- End Icon Box -->
                            <?php } ?>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="100">
                            <a href="<?php echo base_url('Katalog?id_kategori=') . $tampil3->id_kategori . '&nama_kategori=' . $tampil3->nama_kategori ?>">
                                <p class="btnprodukbykategori"><i style="font-style: normal; font-family: Lato Medium; font-size: 15px;" class="bi-collection-fill"> Tampilkan Semua</i></p>
                            </a>
                        </div>
                        <!-- <div class="icon-box d-flex position-relative col-lg-6" data-aos="fade-up" data-aos-delay="400">
                            <img src="<?php echo base_url('assets/') ?>img/browse.png" width="50px" alt="">
                        </div> -->
                    </div>
                </div>

            </div>
        </section>
        <!-- End Alt Services Section -->

        <section id="alt-services-2" class="alt-services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4 flex-kategori">
                    <div class="col-lg-4 img-bg img-hidden" style="background-image: url(<?php echo base_url('assets/') ?>img/doorup.jpg); border-radius: 5px" data-aos="zoom-in" data-aos-delay="100"></div>


                    <div style="padding-right: 2%;" class="col-lg-8 d-flex flex-column justify-content-center">

                        <h3 class="garisbawah" style="text-align:right">DOOR & WINDOW</h3>


                        <!-- <p style="text-align:right">Maxime quia dolorum alias perspiciatis. Earum voluptatem sint at non. Ducimus maxime minima iste magni sit praesentium assumenda minus. </p> -->

                        <div class="row flex-tampilnormal">
                            <?php foreach ($section4 as $tampil4) { ?>
                                <?php
                                if ($tampil4->nama_foto_barang !== null) {
                                    $fotosection4 = "https://sicoraerp.comboputra.co.id/public/img/thumb/" . $tampil4->nama_foto_barang;
                                } else {
                                    $fotosection4 = "https://sicora.comboputra.co.id/assets/images/o-redlogo.png";
                                }
                                ?>

                                <div style="margin-top: 30px;" class="icon-box d-flex position-relative col-lg-4 responsiv" data-aos="fade-up" data-aos-delay="100">
                                    <div style="text-align: right;">
                                        <h4><a class="flex-harga" style="font-family: Lato; font-weight:500;" href="<?php echo base_url('ProdukSingle?id_barang=') . $tampil4->id_barang; ?>" class="stretched-link">Rp <?php echo number_format($tampil4->harga_jual) ?></a></h4>
                                        <p style="font-family: Lato; font-weight:300; font-size: 15px;"><?php echo $tampil4->nama_barang ?></p>
                                    </div>
                                    <a href="<?php echo base_url('ProdukSingle?id_barang=') . $tampil4->id_barang; ?>">
                                        <i class="bi flex-shrink-0" style="width:130px; height:130px; margin-left:15px; margin-right:auto"><img class="flex-img" style="padding: 2%;" src="<?php echo $fotosection4 ?>" width="130px" height="130px" alt=""></i>
                                    </a>
                                </div><!-- End Icon Box -->
                            <?php } ?>

                        </div>
                        <div class="row flex-tampilsmall" style="--bs-gutter-x: 0.5rem; margin-top: calc(-1* var(--bs-gutter-y));">
                            <?php foreach ($section4 as $tampil4) { ?>
                                <?php
                                if ($tampil4->nama_foto_barang !== null) {
                                    $fotosection4 = "https://sicoraerp.comboputra.co.id/public/img/thumb/" . $tampil4->nama_foto_barang;
                                } else {
                                    $fotosection4 = "https://sicora.comboputra.co.id/assets/images/o-redlogo.png";
                                }
                                ?>

                                <div style="margin-top: 15px; width:50%;" class="icon-box d-flex position-relative col-lg-4 responsiv" data-aos="fade-up" data-aos-delay="100">
                                    <div style="text-align: right;" class="border-produk">
                                        <i class="bi flex-shrink-0" style="width:130px; height:130px; margin-left:15px; margin: 5% auto 10%;"><img style="" src="<?php echo $fotosection4 ?>" width="130px" height="130px" alt=""></i>

                                        <h4 style="margin: 0 10%; font-family: Lato; font-weight:500; text-align: left;"><a href="<?php echo base_url('ProdukSingle?id_barang=') . $tampil4->id_barang; ?>" class="stretched-link">Rp <?php echo number_format($tampil4->harga_jual) ?></a></h4>
                                        <p style="margin: 5% 10%; font-family: Lato; font-weight:300; font-size: 15px; line-height: 21px; text-align: left;"><?php echo $tampil4->nama_barang ?></p>

                                    </div>
                                </div><!-- End Icon Box -->
                            <?php } ?>

                        </div>
                        <div data-aos="fade-up" data-aos-delay="100">
                            <a href="<?php echo base_url('Katalog?id_kategori=') . $tampil4->id_kategori . '&nama_kategori=' . $tampil4->nama_kategori ?>">
                                <p class="btnrightprodukbykategori"><i style="font-style: normal; font-family: Lato Medium; font-size: 15px;" class="bi-collection-fill"> Tampilkan Semua</i></p>
                            </a>
                        </div>
                        <!-- <div class="icon-box d-flex position-relative" style="margin-left:auto;" data-aos="fade-up" data-aos-delay="400">
                            <img src="<?php echo base_url('assets/') ?>img/browse.png" width="50px" alt="">
                        </div> -->
                    </div>

                    <div class="col-lg-4 img-bg img-hidden2" style="background-image: url(<?php echo base_url('assets/') ?>img/doorup.jpg); border-radius: 5px" data-aos="zoom-in" data-aos-delay="100"></div>

                </div>

            </div>
        </section><!-- End Alt Services Section 2 -->
        <section id="alt-services" class="alt-services">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4 flex-kategori">
                    <div class="col-lg-4 img-bg" style="background-image: url(<?php echo base_url('assets/') ?>img/teknikup.jpg); border-radius: 5px " data-aos="zoom-in" data-aos-delay="100"></div>

                    <div style="padding-left: 2%;" class="col-lg-8 d-flex flex-column justify-content-center">
                        <h3>TEKNIK & PERTUKANGAN</h3>
                        <!-- <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. </p> -->
                        <div class="row flex-tampilnormal">
                            <?php foreach ($section5 as $tampil5) { ?>
                                <?php
                                if ($tampil5->nama_foto_barang !== null) {
                                    $fotosection5 = "https://sicoraerp.comboputra.co.id/public/img/thumb/" . $tampil5->nama_foto_barang;
                                } else {
                                    $fotosection5 = "https://sicora.comboputra.co.id/assets/images/o-redlogo.png";
                                }
                                ?>

                                <div style="margin-top: 30px;" class="icon-box d-flex position-relative col-lg-4 show responsiv" data-aos="fade-up" data-aos-delay="100">
                                    <a href="<?php echo base_url('ProdukSingle?id_barang=') . $tampil5->id_barang; ?>">
                                        <i class="bi flex-shrink-0" style="width:130px; height:130px; margin-right:15px"><img class="flex-img" style="padding: 2%;" src="<?php echo $fotosection5 ?>" width="130px" height="130px" alt=""></i>
                                    </a>
                                    <div>
                                        <h4><a class="flex-harga" style="font-family: Lato; font-weight:500;" href="<?php echo base_url('ProdukSingle?id_barang=') . $tampil5->id_barang; ?>" class="stretched-link">Rp <?php echo number_format($tampil5->harga_jual) ?></a></h4>
                                        <p style="font-family: Lato; font-weight:300; font-size: 15px;"><?php echo $tampil5->nama_barang ?></p>
                                    </div>
                                </div><!-- End Icon Box -->
                            <?php } ?>

                        </div>
                        <div class="row flex-tampilsmall" style="--bs-gutter-x: 0.5rem; margin-top: calc(-1* var(--bs-gutter-y));">
                            <?php foreach ($section5 as $tampil5) { ?>
                                <?php
                                if ($tampil5->nama_foto_barang !== null) {
                                    $fotosection5 = "https://sicoraerp.comboputra.co.id/public/img/thumb/" . $tampil5->nama_foto_barang;
                                } else {
                                    $fotosection5 = "https://sicora.comboputra.co.id/assets/images/o-redlogo.png";
                                }
                                ?>

                                <div style="margin-top: 15px; width:50%;" class="icon-box d-flex position-relative col-lg-4 show responsiv" data-aos="fade-up" data-aos-delay="100">
                                    <div class="border-produk">
                                        <i class="bi flex-shrink-0" style="width:130px; height:130px; margin-right:15px; margin: 5% auto 10%;"><img style="" src="<?php echo $fotosection5 ?>" width="130px" height="130px" alt=""></i>

                                        <h4 style="margin: 0 10%; font-family: Lato; font-weight:500;"><a href="<?php echo base_url('ProdukSingle?id_barang=') . $tampil5->id_barang; ?>" class="stretched-link">Rp <?php echo number_format($tampil5->harga_jual) ?></a></h4>
                                        <p style="margin: 5% 10%; font-family: Lato; font-weight:300; font-size: 15px; line-height: 21px;"><?php echo $tampil5->nama_barang ?></p>
                                    </div>
                                </div><!-- End Icon Box -->
                            <?php } ?>

                        </div>
                        <div data-aos="fade-up" data-aos-delay="100">
                            <a href="<?php echo base_url('Katalog?id_kategori=') . $tampil5->id_kategori . '&nama_kategori=' . $tampil5->nama_kategori ?>">
                                <p class="btnprodukbykategori"><i style="font-style: normal; font-family: Lato Medium; font-size: 15px;" class="bi-collection-fill"> Tampilkan Semua</i></p>
                            </a>
                        </div>
                        <!-- <div class="icon-box d-flex position-relative col-lg-6" data-aos="fade-up" data-aos-delay="400">
                            <img src="<?php echo base_url('assets/') ?>img/browse.png" width="50px" alt="">
                        </div> -->
                    </div>
                </div>

            </div>
        </section>
        <!-- End Alt Services Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features section-bg recent-blog-posts">
            <div class="container" data-aos="fade-up">

                <!-- <div class="section-header">
                    <h2>Produk Paint</h2>
                    <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto accusamus fugit aut qui distinctio</p>
                </div> -->

                <!-- <ul class="nav nav-tabs row  g-2 d-flex">
                    <?php
                    $displayedBrands = array();
                    foreach ($catsection as $cat) {
                        if (!isset($displayedBrands[$cat->nama_merk])) {
                    ?>
                            <li class="nav-item col-1">
                                <a href="<?php echo base_url('Home?id_merk=') . $cat->id_merk ?>" class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-<?php echo $cat->id_merk ?>">
                                    <h4><?php echo $cat->nama_merk ?></h4>
                                </a>
                            </li>
                    <?php
                            $displayedBrands[$cat->nama_merk] = true;
                        }
                    }
                    ?>
                </ul> -->

                <ul class="nav nav-tabs row  g-2 d-flex">

                    <li class="nav-item col-1">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <h4>Dulux</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item col-1">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            <h4>Avian</h4>
                        </a><!-- End tab nav item -->

                        <!-- <li class="nav-item col-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                            <h4>Jotun</h4>
                        </a>
                    </li>  -->
                        <!-- End tab nav item -->

                    <li class="nav-item col-1">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                            <h4>Propan</h4>
                        </a>
                    </li><!-- End tab nav item -->
                    <li class="nav-item col-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
                            <h4>Nippon Paint</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item col-1">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-6">
                            <h4>Premio</h4>
                        </a>
                    </li><!-- End tab nav item -->
                    <li class="nav-item col-1">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-7">
                            <h4>Shintex</h4>
                        </a>
                    </li><!-- End tab nav item -->
                    <li class="nav-item col-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-8">
                            <h4>Mowilex</h4>
                        </a>
                    </li><!-- End tab nav item -->
                    <li class="nav-item col-1">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-9">
                            <h4>Decolith</h4>
                        </a>
                    </li><!-- End tab nav item -->
                    <li class="nav-item col-1">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-10">
                            <h4>Taka</h4>
                        </a>
                    </li><!-- End tab nav item -->
                    <li class="nav-item col-1">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-11">
                            <h4>Altex</h4>
                        </a>
                    </li><!-- End tab nav item -->
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                                <h3 style="margin-bottom: 0px; padding-bottom:0px;">CAT DULUX</h3>
                                <p class="fst-italic">
                                    Tidak hanya mengubah dinding, namun juga menyempurnakan kehidupan jutaan manusia di dunia.
                                </p>

                                <div class="row gy-4">
                                    <?php foreach ($catdulux as $catbydulux) { ?>
                                        <?php
                                        if ($catbydulux->nama_foto_barang !== null) {
                                            $img = "https://sicoraerp.comboputra.co.id/public/img/thumb/" . $catbydulux->nama_foto_barang;
                                        } else {
                                            $img = "https://sicora.comboputra.co.id/assets/images/o-redlogo.png";
                                        } ?>

                                        <?php
                                        if ($catbydulux->stok_update >= '5') {
                                            $stok = "Tersedia";
                                        } elseif ($catbydulux->stok_update < '5' && $catbydulux > '0') {
                                            $stok = "Hampir Habis";
                                        } else {
                                            $stok = "Preorder";
                                        }
                                        ?>
                                        <div class="col-xl-4 col-md-6 responsiv-cat" data-aos="fade-up" data-aos-delay="100">
                                            <div class="post-item position-relative h-100 background-paint">
                                                <div class="post-img position-relative overflow-hidden center-paint">
                                                    <a href="<?php echo base_url('ProdukSingle?id_barang=') . $catbydulux->id_barang ?>"><img src="<?php echo $img ?>" class="img-fluid img-paint" alt=""></a>

                                                </div>

                                                <div class="post-content d-flex flex-column">
                                                    <h3 style="margin-left: 5%; margin-right:5%; height:40px; font-family: lato; font-weight:300; color: #364d59;" class="post-title"><?php echo $catbydulux->nama_barang ?></h3>
                                                    <hr style="margin-bottom: 10px;">
                                                    <div class="meta align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="margin-left: 5%; margin-right:5%; font-family: lato; font-weight:500; color:#000000;" class="">Rp <?php echo number_format($catbydulux->harga_jual) ?> </span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="font-family: lato; font-weight:300; color: #364d59;" class="statusstok"><?php echo $stok ?> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End post item -->
                                    <?php } ?>

                                    <div data-aos="fade-up" data-aos-delay="100">
                                        <a href="<?php echo base_url('Katalog?id_kategori=') . $catbydulux->id_kategori . '&nama_kategori=' . $catbydulux->nama_kategori . '&id_subkategori=' . $catbydulux->id_subkategori . '&nama_subkategori=' . $catbydulux->nama_subkategori . '&id_merk=' . $catbydulux->id_merk . '&merk=' . $catbydulux->nama_merk ?>">
                                            <p class="btncatbymerk"><i style="font-style: normal;" class="bi-palette2"> Tampilkan Semua</i></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                                <img style="margin-top: 10px; border-radius:8px" src="<?php echo base_url('assets/') ?>img/dulux.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-2">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3 style="margin-bottom: 0px; padding-bottom:0px;">CAT AVIAN BRANDS</h3>
                                <p class="fst-italic">
                                    Memberikan nilai tambah bagi pemangku kepentingan melalui pengembangan beragam cat berkualitas.
                                </p>
                                <div class="row gy-4">
                                    <?php foreach ($catavian as $catbyavian) { ?>
                                        <?php
                                        if ($catbyavian->nama_foto_barang !== null) {
                                            $img = "https://sicoraerp.comboputra.co.id/public/img/thumb/" . $catbyavian->nama_foto_barang;
                                        } else {
                                            $img = "https://sicora.comboputra.co.id/assets/images/o-redlogo.png";
                                        } ?>

                                        <?php
                                        if ($catbyavian->stok_update >= '5') {
                                            $stok = "Tersedia";
                                        } elseif ($catbyavian->stok_update < '5' && $catbyavian > '0') {
                                            $stok = "Hampir Habis";
                                        } else {
                                            $stok = "Preorder";
                                        }
                                        ?>
                                        <div class="col-xl-4 col-md-6 responsiv-cat" data-aos="fade-up" data-aos-delay="100">
                                            <div class="post-item position-relative h-100 background-paint">
                                                <div class="post-img position-relative overflow-hidden center-paint">
                                                    <a href="<?php echo base_url('ProdukSingle?id_barang=') . $catbyavian->id_barang ?>"><img src="<?php echo $img ?>" class="img-fluid img-paint" alt=""></a>
                                                </div>
                                                <div class="post-content d-flex flex-column">

                                                    <h3 style="margin-left: 5%; margin-right:5%; height:40px; font-family: lato; font-weight:300; color: #364d59;" class="post-title"><?php echo $catbyavian->nama_barang ?></h3>
                                                    <hr style="margin-bottom: 10px;">
                                                    <div class="meta align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="margin-left: 5%; margin-right:5%; font-family: lato; font-weight:500; color:#000000;" class="">Rp <?php echo number_format($catbyavian->harga_jual) ?> </span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="font-family: lato; font-weight:300; color: #364d59;" class="statusstok"><?php echo $stok ?> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End post item -->

                                    <?php } ?>
                                    <div data-aos="fade-up" data-aos-delay="100">
                                        <a href="<?php echo base_url('Katalog?id_kategori=') . $catbyavian->id_kategori . '&nama_kategori=' . $catbyavian->nama_kategori . '&id_subkategori=' . $catbyavian->id_subkategori . '&nama_subkategori=' . $catbyavian->nama_subkategori . '&id_merk=' . $catbyavian->id_merk . '&merk=' . $catbyavian->nama_merk ?>">
                                            <p class="btncatbymerk"><i style="font-style: normal;" class="bi-palette2"> Tampilkan Semua</i></p>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img style="margin-top: 10px; border-radius:8px" src="<?php echo base_url('assets/') ?>img/avian.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <!-- <div class="tab-pane" id="tab-3">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3 style="margin-bottom: 0px; padding-bottom:0px;">Voluptatibus commodi accusamu</h3>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                </p>
                                <div class="row gy-4">
                                    <?php foreach ($catjotun as $catbyjotun) { ?>
                                        <?php
                                        if ($catbyjotun->nama_foto_barang !== null) {
                                            $img = "https://sicoraerp.comboputra.co.id/public/img/thumb/" . $catbyjotun->nama_foto_barang;
                                        } else {
                                            $img = "https://sicora.comboputra.co.id/assets/images/o-redlogo.png";
                                        } ?>

                                        <?php
                                        if ($catbyjotun->stok_update >= '5') {
                                            $stok = "Tersedia";
                                        } elseif ($catbyjotun->stok_update < '5' && $catbyjotun > '0') {
                                            $stok = "Hampir Habis";
                                        } else {
                                            $stok = "Preorder";
                                        }
                                        ?>
                                        <div class="col-xl-4 col-md-6 responsiv-cat" data-aos="fade-up" data-aos-delay="100">
                                            <div class="post-item position-relative h-100 background-paint">
                                                <div class="post-img position-relative overflow-hidden center-paint">
                                                    <a href="<?php echo base_url('ProdukSingle?id_barang=') . $catbyjotun->id_barang ?>"><img src="<?php echo $img ?>" class="img-fluid img-paint" alt=""></a>
                                                </div>
                                                <div class="post-content d-flex flex-column">

                                                    <h3 style="margin-left: 5%; margin-right:5%; height:40px; font-family: lato; font-weight:300; color: #364d59;" class="post-title"><?php echo $catbyjotun->nama_barang ?></h3>
                                                    <hr style="margin-bottom: 10px;">
                                                    <div class="meta align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="margin-left: 5%; margin-right:5%; font-family: lato; font-weight:500; color:#000000;" class="">Rp <?php echo number_format($catbyjotun->harga_jual) ?> </span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="font-family: lato; font-weight:300; color: #364d59;" class="statusstok"><?php echo $stok ?> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php } ?>
                                    <div data-aos="fade-up" data-aos-delay="100">
                                        <a href="<?php echo base_url('Katalog?id_kategori=') . $catbyjotun->id_kategori . '&nama_kategori=' . $catbyjotun->nama_kategori . '&id_subkategori=' . $catbyjotun->id_subkategori . '&nama_subkategori=' . $catbyjotun->nama_subkategori . '&id_merk=' . $catbyjotun->id_merk . '&merk=' . $catbyjotun->nama_merk ?>">
                                            <p class="btncatbymerk"><i style="font-style: normal;" class="bi-palette2"> Tampilkan Semua</i></p>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img style="margin-top: 10px; border-radius:8px" src="<?php echo base_url('assets/') ?>img/jotun1.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div> -->

                    <!-- End tab content item -->

                    <div class="tab-pane" id="tab-4">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3 style="margin-bottom: 0px; padding-bottom:0px;">CAT PROPAN</h3>
                                <p class="fst-italic">
                                    Menyediakan produk yang bernilai tambah tinggi dan menjadi solusi bagi seluruh pelanggan berdasarkan Kualitas kesesuaian, Kualitas keandalan, Kualitas konsistensi, Kualitas pelayanan, Kualitas penggunaan
                                </p>
                                <div class="row gy-4">
                                    <?php foreach ($catpropan as $catbypropan) { ?>
                                        <?php
                                        if ($catbypropan->nama_foto_barang !== null) {
                                            $img = "https://sicoraerp.comboputra.co.id/public/img/thumb/" . $catbypropan->nama_foto_barang;
                                        } else {
                                            $img = "https://sicora.comboputra.co.id/assets/images/o-redlogo.png";
                                        } ?>

                                        <?php
                                        if ($catbypropan->stok_update >= '5') {
                                            $stok = "Tersedia";
                                        } elseif ($catbypropan->stok_update < '5' && $catbypropan > '0') {
                                            $stok = "Hampir Habis";
                                        } else {
                                            $stok = "Preorder";
                                        }
                                        ?>
                                        <div class="col-xl-4 col-md-6 responsiv-cat" data-aos="fade-up" data-aos-delay="100">
                                            <div class="post-item position-relative h-100 background-paint">
                                                <div class="post-img position-relative overflow-hidden center-paint">
                                                    <a href="<?php echo base_url('ProdukSingle?id_barang=') . $catbypropan->id_barang ?>"><img src="<?php echo $img ?>" class="img-fluid img-paint" alt=""></a>
                                                </div>
                                                <div class="post-content d-flex flex-column">

                                                    <h3 style="margin-left: 5%; margin-right:5%; height:40px; font-family: lato; font-weight:300; color: #364d59;" class="post-title"><?php echo $catbypropan->nama_barang ?></h3>
                                                    <hr style="margin-bottom: 10px;">
                                                    <div class="meta align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="margin-left: 5%; margin-right:5%; font-family: lato; font-weight:500; color:#000000;" class="">Rp <?php echo number_format($catbypropan->harga_jual) ?> </span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="font-family: lato; font-weight:300; color: #364d59;" class="statusstok"><?php echo $stok ?> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End post item -->

                                    <?php } ?>
                                    <div data-aos="fade-up" data-aos-delay="100">
                                        <a href="<?php echo base_url('Katalog?id_kategori=') . $catbypropan->id_kategori . '&nama_kategori=' . $catbypropan->nama_kategori . '&id_subkategori=' . $catbypropan->id_subkategori . '&nama_subkategori=' . $catbypropan->nama_subkategori . '&id_merk=' . $catbypropan->id_merk . '&merk=' . $catbypropan->nama_merk ?>">
                                            <p class="btncatbymerk"><i style="font-style: normal;" class="bi-palette2"> Tampilkan Semua</i></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img style="margin-top: 10px; border-radius:8px" src="<?php echo base_url('assets/') ?>img/propan.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->
                    <div class="tab-pane" id="tab-5">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3 style="margin-bottom: 0px; padding-bottom:0px;">CAT NIPPON PAINT</h3>
                                <p class="fst-italic">
                                    Merek terkemuka yang menghadirkan warna & kegembiraan dalam kehidupan sehari-hari melalui
                                    solusi pelapisan yang inovatif.
                                </p>
                                <div class="row gy-4">
                                    <?php foreach ($catnippon as $catbynippon) { ?>
                                        <?php
                                        if ($catbynippon->nama_foto_barang !== null) {
                                            $img = "https://sicoraerp.comboputra.co.id/public/img/thumb/" . $catbynippon->nama_foto_barang;
                                        } else {
                                            $img = "https://sicora.comboputra.co.id/assets/images/o-redlogo.png";
                                        } ?>

                                        <?php
                                        if ($catbynippon->stok_update >= '5') {
                                            $stok = "Tersedia";
                                        } elseif ($catbynippon->stok_update < '5' && $catbynippon > '0') {
                                            $stok = "Hampir Habis";
                                        } else {
                                            $stok = "Preorder";
                                        }
                                        ?>
                                        <div class="col-xl-4 col-md-6 responsiv-cat" data-aos="fade-up" data-aos-delay="100">
                                            <div class="post-item position-relative h-100 background-paint">
                                                <div class="post-img position-relative overflow-hidden center-paint">
                                                    <a href="<?php echo base_url('ProdukSingle?id_barang=') . $catbynippon->id_barang ?>"><img src="<?php echo $img ?>" class="img-fluid img-paint" alt=""></a>
                                                </div>
                                                <div class="post-content d-flex flex-column">

                                                    <h3 style="margin-left: 5%; margin-right:5%; height:40px; font-family: lato; font-weight:300; color: #364d59;" class="post-title"><?php echo $catbynippon->nama_barang ?></h3>
                                                    <hr style="margin-bottom: 10px;">
                                                    <div class="meta align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="margin-left: 5%; margin-right:5%; font-family: lato; font-weight:500; color:#000000;" class="">Rp <?php echo number_format($catbynippon->harga_jual) ?> </span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="font-family: lato; font-weight:300; color: #364d59;" class="statusstok"><?php echo $stok ?> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End post item -->

                                    <?php } ?>
                                    <div data-aos="fade-up" data-aos-delay="100">
                                        <a href="<?php echo base_url('Katalog?id_kategori=') . $catbynippon->id_kategori . '&nama_kategori=' . $catbynippon->nama_kategori . '&id_subkategori=' . $catbynippon->id_subkategori . '&nama_subkategori=' . $catbynippon->nama_subkategori . '&id_merk=' . $catbynippon->id_merk . '&merk=' . $catbynippon->nama_merk ?>">
                                            <p class="btncatbymerk"><i style="font-style: normal;" class="bi-palette2"> Tampilkan Semua</i></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img style="margin-top: 10px; border-radius:8px" src="<?php echo base_url('assets/') ?>img/nippon.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->
                    <div class="tab-pane" id="tab-6">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3 style="margin-bottom: 0px; padding-bottom:0px;">CAT PREMIO</h3>
                                <p class="fst-italic">
                                    Memiliki daya tahan yang baik terhadap cuaca.
                                </p>
                                <div class="row gy-4">
                                    <?php foreach ($catpremio as $catbypremio) { ?>
                                        <?php
                                        if ($catbypremio->nama_foto_barang !== null) {
                                            $img = "https://sicoraerp.comboputra.co.id/public/img/thumb/" . $catbypremio->nama_foto_barang;
                                        } else {
                                            $img = "https://sicora.comboputra.co.id/assets/images/o-redlogo.png";
                                        } ?>

                                        <?php
                                        if ($catbypremio->stok_update >= '5') {
                                            $stok = "Tersedia";
                                        } elseif ($catbypremio->stok_update < '5' && $catbypremio > '0') {
                                            $stok = "Hampir Habis";
                                        } else {
                                            $stok = "Preorder";
                                        }
                                        ?>
                                        <div class="col-xl-4 col-md-6 responsiv-cat" data-aos="fade-up" data-aos-delay="100">
                                            <div class="post-item position-relative h-100 background-paint">
                                                <div class="post-img position-relative overflow-hidden center-paint">
                                                    <a href="<?php echo base_url('ProdukSingle?id_barang=') . $catbypremio->id_barang ?>"><img src="<?php echo $img ?>" class="img-fluid img-paint" alt=""></a>
                                                </div>
                                                <div class="post-content d-flex flex-column">

                                                    <h3 style="margin-left: 5%; margin-right:5%; height:40px; font-family: lato; font-weight:300; color: #364d59;" class="post-title"><?php echo $catbypremio->nama_barang ?></h3>
                                                    <hr style="margin-bottom: 10px;">
                                                    <div class="meta align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="margin-left: 5%; margin-right:5%; font-family: lato; font-weight:500; color:#000000; " class="">Rp <?php echo number_format($catbypremio->harga_jual) ?> </span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="font-family: lato;" class="statusstok"><?php echo $stok ?> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End post item -->

                                    <?php } ?>
                                    <div data-aos="fade-up" data-aos-delay="100">
                                        <a href="<?php echo base_url('Katalog?id_kategori=') . $catbypremio->id_kategori . '&nama_kategori=' . $catbypremio->nama_kategori . '&id_subkategori=' . $catbypremio->id_subkategori . '&nama_subkategori=' . $catbypremio->nama_subkategori . '&id_merk=' . $catbypremio->id_merk . '&merk=' . $catbypremio->nama_merk ?>">
                                            <p class="btncatbymerk"><i style="font-style: normal;" class="bi-palette2"> Tampilkan Semua</i></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img style="margin-top: 10px; border-radius:8px" src="<?php echo base_url('assets/') ?>img/premio.jpeg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->
                    <div class="tab-pane" id="tab-7">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3 style="margin-bottom: 0px; padding-bottom:0px;">CAT SHINTEX</h3>
                                <p class="fst-italic">
                                    Menciptakan produk unggulan sesuai perkembangan pasar nasional yang aman bagi lingkungan.
                                </p>
                                <div class="row gy-4">
                                    <?php foreach ($catshintex as $catbyshintex) { ?>
                                        <?php
                                        if ($catbyshintex->nama_foto_barang !== null) {
                                            $img = "https://sicoraerp.comboputra.co.id/public/img/thumb/" . $catbyshintex->nama_foto_barang;
                                        } else {
                                            $img = "https://sicora.comboputra.co.id/assets/images/o-redlogo.png";
                                        } ?>

                                        <?php
                                        if ($catbyshintex->stok_update >= '5') {
                                            $stok = "Tersedia";
                                        } elseif ($catbyshintex->stok_update < '5' && $catbyshintex > '0') {
                                            $stok = "Hampir Habis";
                                        } else {
                                            $stok = "Preorder";
                                        }
                                        ?>
                                        <div class="col-xl-4 col-md-6 responsiv-cat" data-aos="fade-up" data-aos-delay="100">
                                            <div class="post-item position-relative h-100 background-paint">
                                                <div class="post-img position-relative overflow-hidden center-paint">
                                                    <a href="<?php echo base_url('ProdukSingle?id_barang=') . $catbyshintex->id_barang ?>"><img src="<?php echo $img ?>" class="img-fluid img-paint" alt=""></a>
                                                </div>
                                                <div class="post-content d-flex flex-column">

                                                    <h3 style="margin-left: 5%; margin-right:5%; height:40px; font-family: lato; font-weight:300; color: #364d59;" class="post-title"><?php echo $catbyshintex->nama_barang ?></h3>
                                                    <hr style="margin-bottom: 10px;">
                                                    <div class="meta align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="margin-left: 5%; margin-right:5%; font-family: lato; font-weight:500; color:#000000; " class="">Rp <?php echo number_format($catbyshintex->harga_jual) ?> </span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="font-family: lato;" class="statusstok"><?php echo $stok ?> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End post item -->

                                    <?php } ?>
                                    <div data-aos="fade-up" data-aos-delay="100">
                                        <a href="<?php echo base_url('Katalog?id_kategori=') . $catbyshintex->id_kategori . '&nama_kategori=' . $catbyshintex->nama_kategori . '&id_subkategori=' . $catbyshintex->id_subkategori . '&nama_subkategori=' . $catbyshintex->nama_subkategori . '&id_merk=' . $catbyshintex->id_merk . '&merk=' . $catbyshintex->nama_merk ?>">
                                            <p class="btncatbymerk"><i style="font-style: normal;" class="bi-palette2"> Tampilkan Semua</i></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img style="margin-top: 10px; border-radius:8px" src="<?php echo base_url('assets/') ?>img/shintex2.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-8">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3 style="margin-bottom: 0px; padding-bottom:0px;">CAT MOWILEX</h3>
                                <p class="fst-italic">
                                    Menjadi produsen cat pertama yang memproduksi cat berbahan dasar air, menjual cat dalam bentuk volume, bukan berat.
                                </p>
                                <div class="row gy-4">
                                    <?php foreach ($catmowilex as $catbymowilex) { ?>
                                        <?php
                                        if ($catbymowilex->nama_foto_barang !== null) {
                                            $img = "https://sicoraerp.comboputra.co.id/public/img/thumb/" . $catbymowilex->nama_foto_barang;
                                        } else {
                                            $img = "https://sicora.comboputra.co.id/assets/images/o-redlogo.png";
                                        } ?>

                                        <?php
                                        if ($catbymowilex->stok_update >= '5') {
                                            $stok = "Tersedia";
                                        } elseif ($catbymowilex->stok_update < '5' && $catbymowilex > '0') {
                                            $stok = "Hampir Habis";
                                        } else {
                                            $stok = "Preorder";
                                        }
                                        ?>
                                        <div class="col-xl-4 col-md-6 responsiv-cat" data-aos="fade-up" data-aos-delay="100">
                                            <div class="post-item position-relative h-100 background-paint">
                                                <div class="post-img position-relative overflow-hidden center-paint">
                                                    <a href="<?php echo base_url('ProdukSingle?id_barang=') . $catbymowilex->id_barang ?>"><img src="<?php echo $img ?>" class="img-fluid img-paint" alt=""></a>
                                                </div>
                                                <div class="post-content d-flex flex-column">

                                                    <h3 style="margin-left: 5%; margin-right:5%; height:40px; font-family: lato; font-weight:300; color: #364d59;" class="post-title"><?php echo $catbymowilex->nama_barang ?></h3>
                                                    <hr style="margin-bottom: 10px;">
                                                    <div class="meta align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="margin-left: 5%; margin-right:5%; font-family: lato; font-weight:500; color:#000000; " class="">Rp <?php echo number_format($catbymowilex->harga_jual) ?> </span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="font-family: lato;" class="statusstok"><?php echo $stok ?> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End post item -->

                                    <?php } ?>
                                    <div data-aos="fade-up" data-aos-delay="100">
                                        <a href="<?php echo base_url('Katalog?id_kategori=') . $catbymowilex->id_kategori . '&nama_kategori=' . $catbymowilex->nama_kategori . '&id_subkategori=' . $catbymowilex->id_subkategori . '&nama_subkategori=' . $catbymowilex->nama_subkategori . '&id_merk=' . $catbymowilex->id_merk . '&merk=' . $catbymowilex->nama_merk ?>">
                                            <p class="btncatbymerk"><i style="font-style: normal;" class="bi-palette2"> Tampilkan Semua</i></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img style="margin-top: 10px; border-radius:8px" src="<?php echo base_url('assets/') ?>img/mowilex.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-9">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3 style="margin-bottom: 0px; padding-bottom:0px;">CAT DECOLITH</h3>
                                <p class="fst-italic">
                                    Memastikan kepuasan pelanggan dengan produk yang berkualitas, inovatif dan konsisten serta pelayanan yang dapat diandalkan.
                                </p>
                                <div class="row gy-4">
                                    <?php foreach ($catdecolith as $catbydecolith) { ?>
                                        <?php
                                        if ($catbydecolith->nama_foto_barang !== null) {
                                            $img = "https://sicoraerp.comboputra.co.id/public/img/thumb/" . $catbydecolith->nama_foto_barang;
                                        } else {
                                            $img = "https://sicora.comboputra.co.id/assets/images/o-redlogo.png";
                                        } ?>

                                        <?php
                                        if ($catbydecolith->stok_update >= '5') {
                                            $stok = "Tersedia";
                                        } elseif ($catbydecolith->stok_update < '5' && $catbydecolith > '0') {
                                            $stok = "Hampir Habis";
                                        } else {
                                            $stok = "Preorder";
                                        }
                                        ?>
                                        <div class="col-xl-4 col-md-6 responsiv-cat" data-aos="fade-up" data-aos-delay="100">
                                            <div class="post-item position-relative h-100 background-paint">
                                                <div class="post-img position-relative overflow-hidden center-paint">
                                                    <a href="<?php echo base_url('ProdukSingle?id_barang=') . $catbydecolith->id_barang ?>"><img src="<?php echo $img ?>" class="img-fluid img-paint" alt=""></a>
                                                </div>
                                                <div class="post-content d-flex flex-column">

                                                    <h3 style="margin-left: 5%; margin-right:5%; height:40px; font-family: lato; font-weight:300; color: #364d59;" class="post-title"><?php echo $catbydecolith->nama_barang ?></h3>
                                                    <hr style="margin-bottom: 10px;">
                                                    <div class="meta align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="margin-left: 5%; margin-right:5%; font-family: lato; font-weight:500; color:#000000; " class="">Rp <?php echo number_format($catbydecolith->harga_jual) ?> </span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="font-family: lato;" class="statusstok"><?php echo $stok ?> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End post item -->

                                    <?php } ?>
                                    <div data-aos="fade-up" data-aos-delay="100">
                                        <a href="<?php echo base_url('Katalog?id_kategori=') . $catbydecolith->id_kategori . '&nama_kategori=' . $catbydecolith->nama_kategori . '&id_subkategori=' . $catbydecolith->id_subkategori . '&nama_subkategori=' . $catbydecolith->nama_subkategori . '&id_merk=' . $catbydecolith->id_merk . '&merk=' . $catbydecolith->nama_merk ?>">
                                            <p class="btncatbymerk"><i style="font-style: normal;" class="bi-palette2"> Tampilkan Semua</i></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img style="margin-top: 10px; border-radius:8px" src="<?php echo base_url('assets/') ?>img/decolith.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-10">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3 style="margin-bottom: 0px; padding-bottom:0px;">CAT TAKA</h3>
                                <p class="fst-italic">
                                    Hadir untuk memberikan pilihan terbaik untuk ruangan Anda.
                                </p>
                                <div class="row gy-4">
                                    <?php foreach ($cattaka as $catbytaka) { ?>
                                        <?php
                                        if ($catbytaka->nama_foto_barang !== null) {
                                            $img = "https://sicoraerp.comboputra.co.id/public/img/thumb/" . $catbytaka->nama_foto_barang;
                                        } else {
                                            $img = "https://sicora.comboputra.co.id/assets/images/o-redlogo.png";
                                        } ?>

                                        <?php
                                        if ($catbytaka->stok_update >= '5') {
                                            $stok = "Tersedia";
                                        } elseif ($catbytaka->stok_update < '5' && $catbytaka > '0') {
                                            $stok = "Hampir Habis";
                                        } else {
                                            $stok = "Preorder";
                                        }
                                        ?>
                                        <div class="col-xl-4 col-md-6 responsiv-cat" data-aos="fade-up" data-aos-delay="100">
                                            <div class="post-item position-relative h-100 background-paint">
                                                <div class="post-img position-relative overflow-hidden center-paint">
                                                    <a href="<?php echo base_url('ProdukSingle?id_barang=') . $catbytaka->id_barang ?>"><img src="<?php echo $img ?>" class="img-fluid img-paint" alt=""></a>
                                                </div>
                                                <div class="post-content d-flex flex-column">

                                                    <h3 style="margin-left: 5%; margin-right:5%; height:40px; font-family: lato; font-weight:300; color: #364d59;" class="post-title"><?php echo $catbytaka->nama_barang ?></h3>
                                                    <hr style="margin-bottom: 10px;">
                                                    <div class="meta align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="margin-left: 5%; margin-right:5%; font-family: lato; font-weight:500; color:#000000; " class="">Rp <?php echo number_format($catbytaka->harga_jual) ?> </span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="font-family: lato;" class="statusstok"><?php echo $stok ?> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End post item -->

                                    <?php } ?>
                                    <div data-aos="fade-up" data-aos-delay="100">
                                        <a href="<?php echo base_url('Katalog?id_kategori=') . $catbytaka->id_kategori . '&nama_kategori=' . $catbytaka->nama_kategori . '&id_subkategori=' . $catbytaka->id_subkategori . '&nama_subkategori=' . $catbytaka->nama_subkategori . '&id_merk=' . $catbytaka->id_merk . '&merk=' . $catbytaka->nama_merk ?>">
                                            <p class="btncatbymerk"><i style="font-style: normal;" class="bi-palette2"> Tampilkan Semua</i></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img style="margin-top: 10px; border-radius:8px" src="<?php echo base_url('assets/') ?>img/taka.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-11">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3 style="margin-bottom: 0px; padding-bottom:0px;">CAT ALTEX</h3>
                                <p class="fst-italic">
                                    Tahan terhadap segala cuaca, baik panas maupun hujan, diformulasikan khusus anti karat, anti rayap, dan anti jamur
                                </p>
                                <div class="row gy-4">
                                    <?php foreach ($cataltex as $catbyaltex) { ?>
                                        <?php
                                        if ($catbyaltex->nama_foto_barang !== null) {
                                            $img = "https://sicoraerp.comboputra.co.id/public/img/thumb/" . $catbyaltex->nama_foto_barang;
                                        } else {
                                            $img = "https://sicora.comboputra.co.id/assets/images/o-redlogo.png";
                                        } ?>

                                        <?php
                                        if ($catbyaltex->stok_update >= '5') {
                                            $stok = "Tersedia";
                                        } elseif ($catbyaltex->stok_update < '5' && $catbyaltex > '0') {
                                            $stok = "Hampir Habis";
                                        } else {
                                            $stok = "Preorder";
                                        }
                                        ?>
                                        <div class="col-xl-4 col-md-6 responsiv-cat" data-aos="fade-up" data-aos-delay="100">
                                            <div class="post-item position-relative h-100 background-paint">
                                                <div class="post-img position-relative overflow-hidden center-paint">
                                                    <a href="<?php echo base_url('ProdukSingle?id_barang=') . $catbyaltex->id_barang ?>"><img src="<?php echo $img ?>" class="img-fluid img-paint" alt=""></a>
                                                </div>
                                                <div class="post-content d-flex flex-column">

                                                    <h3 style="margin-left: 5%; margin-right:5%; height:40px; font-family: lato; font-weight:300; color: #364d59;" class="post-title"><?php echo $catbyaltex->nama_barang ?></h3>
                                                    <hr style="margin-bottom: 10px;">
                                                    <div class="meta align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="margin-left: 5%; margin-right:5%; font-family: lato; font-weight:500; color:#000000; " class="">Rp <?php echo number_format($catbyaltex->harga_jual) ?> </span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="font-family: lato;" class="statusstok"><?php echo $stok ?> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End post item -->

                                    <?php } ?>
                                    <div data-aos="fade-up" data-aos-delay="100">
                                        <a href="<?php echo base_url('Katalog?id_kategori=') . $catbyaltex->id_kategori . '&nama_kategori=' . $catbyaltex->nama_kategori . '&id_subkategori=' . $catbyaltex->id_subkategori . '&nama_subkategori=' . $catbyaltex->nama_subkategori . '&id_merk=' . $catbyaltex->id_merk . '&merk=' . $catbyaltex->nama_merk ?>">
                                            <p class="btncatbymerk"><i style="font-style: normal;" class="bi-palette2"> Tampilkan Semua</i></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img style="margin-top: 10px; border-radius:8px" src="<?php echo base_url('assets/') ?>img/altex.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->
                </div>

            </div>
        </section><!-- End Features Section -->

        <section id="project-details" class="project-details">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="section-header">
                    <h2>Belanja Berdasarkan Merk</h2>
                    <p>Tinggal pilih merk apa yang anda cari, kami menyediakan kebutuhan bahan bangunan dengan berbagai macam merk.</p>
                </div>
                <div class="position-relative h-100 row">
                    <div class="slides-1 portfolio-details-slider swiper col-lg-6 row merk-tab padding-merk" style="border-radius:5px; margin-right: 0px;">
                        <div class="swiper-wrapper align-items-center padding-merk2" style="padding-left: 0%;">

                            <div class="swiper-slide">
                                <a href="<?php echo base_url('Katalog?id_merk=000000000326&merk=Ace Oldfields'); ?>"><img class="merk-slide" src="assets/img/projects/ace.png" alt=""></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?php echo base_url('Katalog?id_merk=000000000004&merk=Dynamix'); ?>"><img class="merk-slide" src="assets/img/projects/dynamix.png" alt=""></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?php echo base_url('Katalog?id_merk=000000000174&merk=Toho'); ?>"><img class="merk-slide" src="assets/img/projects/toho.png" alt=""></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?php echo base_url('Katalog?id_merk=000000000009&merk=Sika'); ?>"><img class="merk-slide" src="assets/img/projects/sika.png" alt=""></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?php echo base_url('Katalog?id_merk=000000000169&merk=Tekiro'); ?>"><img class="merk-slide" src="assets/img/projects/tekiro2.png" alt=""></a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>

                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                    <div class="col-lg-6 merk-tab" style="height: 400px;">
                        <div class="slides-1 portfolio-details-slider swiper col-lg-12" style="height: 49%; margin-bottom:2%; border-radius:5px;">
                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <a href="<?php echo base_url('Katalog?id_merk=000000000151&merk=Bosch'); ?>"><img src="assets/img/projects/bosch2.png" alt=""></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="<?php echo base_url('Katalog?id_merk=000000000355&merk=Dekson'); ?>"><img src="assets/img/projects/dekson2.png" alt=""></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="<?php echo base_url('Katalog?id_merk=000000000163&merk=Shimizu'); ?>"><img src="assets/img/projects/shimizu.png" alt=""></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="<?php echo base_url('Katalog?id_merk=000000000137&merk=Platinum'); ?>"><img src="assets/img/projects/platinum2.png" alt=""></a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="<?php echo base_url('Katalog?id_merk=000000000012&merk=Lemkra'); ?>"><img src="assets/img/projects/lemkra2.png" alt=""></a>
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>

                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                        <div class="slides-1 portfolio-details-slider swiper col-lg-12" style="height: 48%; border-radius: 5px;">
                            <div class="swiper-wrapper align-items-center">


                                <div class="swiper-slide" style="width: 51%;">
                                    <a href="<?php echo base_url('Katalog?id_merk=000000000419&merk=Rucika'); ?>"><img class="flex-merk" style="width: 98%; height: 100%; border-radius: 5px; " src=" assets/img/projects/rucika.png" alt=""></a>
                                </div>
                                <div class="swiper-slide" style="width: 51%;">
                                    <a href="<?php echo base_url('Katalog?id_merk=000000000442&merk=Turtle Wax'); ?>"><img class="flex-merk" style="width: 98%; height: 100%; border-radius: 5px;" src=" assets/img/projects/turtle.png" alt=""></a>
                                </div>
                                <div class="swiper-slide" style="width: 51%;">
                                    <a href="<?php echo base_url('Katalog?id_merk=000000000154&merk=Onda'); ?>"><img class="flex-merk" style="width: 98%; height: 100%; border-radius: 5px;" src=" assets/img/projects/onda2.png" alt=""></a>
                                </div>
                                <div class="swiper-slide" style="width: 51%;">
                                    <a href="<?php echo base_url('Katalog?id_merk=000000000296&merk=Alderon'); ?>"><img class="flex-merk" style="width: 98%; height: 100%; border-radius: 5px; " src=" assets/img/projects/alderon.png" alt=""></a>
                                </div>
                            </div>


                            <div class="swiper-pagination"></div>

                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Testimonials</h2>
                    <!-- <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p> -->
                </div>

                <div class="slides-2 swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide" style="width: 20%;">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="<?php echo base_url('assets/') ?>img/orang.png" class="testimonial-img" width="90px" height="90px" alt="">
                                    <h3>Wahyu</h3>
                                    <h4>Local Guide</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Toko bangunan terlengkap dan murah bahkan lebih murah dari yang A. Tutupnya tapi cepet jam 16.30
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="<?php echo base_url('assets/') ?>img/orang.png" class="testimonial-img" width="90px" height="90px" alt="">
                                    <h3>Rafael Evano Widi Adyatama</h3>
                                    <h4>Local Guide</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Lengkap, harga bersaing, sekarang juga sudah terkomputerisasi.. Jadi kalau mau tanya stok dan harga bisa cepat dijawab oleh pelayannya.. Good job 👍👍
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="<?php echo base_url('assets/') ?>img/orang.png" class="testimonial-img" width="90px" height="90px" alt="">
                                    <h3>Usman Dwi Santosa</h3>
                                    <h4>Local Guide</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Recomended buat membeli keperluan bangunan rumah. Dengan harga terjangkau dan terlengkap di banyumanik. Letaknya juga stradegis di pusat banyumanik. Parkirnya juga luas. Terbaik dan terbagus di kelasnya. Maju terus Combo Putra
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="<?php echo base_url('assets/') ?>img/orang.png" class="testimonial-img" width="90px" height="90px" alt="">
                                    <h3>Herwindo Oktavian</h3>
                                    <h4></h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Super komplit, one stop shoping utk semua keperluan bangunan, hampir semua karyawan mengerti semua produk yg dijual
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="<?php echo base_url('assets/') ?>img/orang.png" class="testimonial-img" width="90px" height="90px" alt="">
                                    <h3>Yunita Imahetty</h3>
                                    <h4>Local Guide</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Tk bangunan dr masa kecil smpe sekarang, terkenal dg patung jari ✌ mjd suatu icon 😁 tetep solid en makin komplit, lebih besar jg tempatnya sekarang. Jaya trs Tb.Combo 👍🙏
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <section id="alt-services" class="alt-services">
            <div class="section-header">
                <h2>Lokasi Toko</h2>
                <!-- <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p> -->
            </div>

            <div class="" data-aos="fade-up">
                <div class="col-lg-12 ">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.4659810412295!2d110.42158575061426!3d-7.071847094867467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70894c93cfe3c3%3A0xc685bad895a17ade!2sTB.%20Combo%20Putra!5e0!3m2!1sid!2sid!4v1618369884871!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>

                </div>
            </div>

        </section>


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php $this->load->view('footer'); ?>
    <!-- End Footer -->

    <?php $this->load->view('scroll'); ?>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>vendor/aos/aos.js"></script>
    <script src="<?php echo base_url('assets/') ?>vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?php echo base_url('assets/') ?>vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url('assets/') ?>js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

</body>

</html>