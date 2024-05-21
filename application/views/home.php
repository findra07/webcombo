<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>UpConstruction Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url('assets/') ?>img/favicon.png" rel="icon">
    <link href="<?php echo base_url('assets/') ?>img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url('assets/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/') ?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/') ?>vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/') ?>vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/') ?>vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

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
        width: 23%;
        font-size: small;
        font-weight: 500;
        box-shadow: 0px 2px 20px rgba(0, 0, 0, 0.06);
        float: inline-end;
        transition: transform 0.5s ease;
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
                        <p data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a data-aos="fade-up" data-aos-delay="200" href="<?php echo base_url('Katalog') ?>" class="btn-get-started">Get Started</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

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

        </div>

    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-blog-posts" class="recent-blog-posts">
            <div class="container" data-aos="fade-up">

                <div class=" section-header">
                    <h2>Tren Penjualan</h2>
                    <p>In commodi voluptatem excepturi quaerat nihil error autem voluptate ut et officia consequuntu</p>
                </div>

                <div class="row gy-4">
                    <?php foreach ($trenproduk as $tren) { ?>
                        <?php

                        if ($tren->nama_foto_barang !== null) {
                            $img = "https://sicora.comboputra.co.id/assets/foto/barang/thumb/" . $tren->nama_foto_barang;
                        } else {
                            $img = "https://sicora.comboputra.co.id/assets/images/o-redlogo.png";
                        } ?>

                        <div class="col-xl-2 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="post-item position-relative h-100">

                                <div class="post-img position-relative overflow-hidden">
                                    <img src="<?php echo $img ?>" class="img-fluid tren-img" alt="">
                                    <!-- <span class="post-date">December 12</span> -->
                                </div>

                                <div class="post-content d-flex flex-column">

                                    <h3 class="post-title"><?php echo $tren->nama_barang ?></h3>

                                    <div class="meta align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-tags-fill"></i> <span class="ps-2"><?php echo $tren->nama_kategori ?></span>
                                        </div>
                                        <!-- <span class="px-3 text-black-50">/</span> -->
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-coin"></i> <span class="ps-2">Rp <?php echo number_format($tren->harga_jual) ?></span>
                                        </div>
                                    </div>

                                    <hr>

                                    <a href="<?php echo base_url('ProdukSingle?id_barang=') . $tren->id_barang; ?>" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                                </div>

                            </div>
                        </div><!-- End post item -->

                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- End Recent Blog Posts Section -->

        <!-- ======= Get Started Section ======= -->

        <section id="get-started" class="get-started section-bg">
            <div class="container">

                <div class="row justify-content-between gy-4">

                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
                        <div class="content">
                            <h3>Minus hic non reiciendis ea possimus at quia.</h3>
                            <p>Rem id rerum. Debitis deserunt quidem delectus expedita ducimus dolor. Aut iusto ipsa. Eos ipsum nobis ipsa soluta itaque perspiciatis fuga ipsum perspiciatis. Eum amet fugiat totam nisi possimus ut delectus dicta.
                            <p>Aliquam velit deserunt autem. Inventore et saepe. Tenetur suscipit eligendi labore culpa eos. Deserunt porro magni qui necessitatibus dolorem at animi cupiditate.</p>
                        </div>
                    </div>

                    <div class="col-lg-5" data-aos="fade">
                        <form action="forms/quote.php" method="post" class="php-email-form">
                            <h3>Get a quote</h3>
                            <p>Vel nobis odio laboriosam et hic voluptatem. Inventore vitae totam. Rerum repellendus enim linead sero park flows.</p>
                            <div class="row gy-3">

                                <div class="col-md-12">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>

                                <div class="col-md-12 ">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

                                    <button type="submit">Get a quote</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Quote Form -->

                </div>

            </div>
        </section><!-- End Get Started Section -->



        <!-- ======= Constructions Section ======= -->
        <!-- <section id="constructions" class="constructions">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Constructions</h2>
                    <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
                </div>

                <div class="row gy-4">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="background-image: url(<?php echo base_url('assets/') ?>img/constructions-1.jpg);"></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Eligendi omnis sunt veritatis.</h4>
                                        <p>Fuga in dolorum et iste et culpa. Commodi possimus nesciunt modi voluptatem placeat deleniti adipisci. Cum delectus doloribus non veritatis. Officia temporibus illo magnam. Dolor eos et.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="background-image: url(<?php echo base_url('assets/') ?>img/constructions-2.jpg);"></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Possimus ut sed velit assumenda</h4>
                                        <p>Sunt deserunt maiores voluptatem autem est rerum perferendis rerum blanditiis. Est laboriosam qui iste numquam laboriosam voluptatem architecto. Est laudantium sunt at quas aut hic. Eum dignissimos.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="background-image: url(<?php echo base_url('assets/') ?>img/constructions-3.jpg);"></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Error beatae dolor inventore aut</h4>
                                        <p>Dicta porro nobis. Velit cum in. Nesciunt dignissimos enim molestiae facilis numquam quae quaerat ipsam omnis. Neque debitis ipsum at architecto officia laboriosam odit. Ut sunt temporibus nulla culpa.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="background-image: url(<?php echo base_url('assets/') ?>img/constructions-4.jpg);"></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Expedita voluptas ut ut nesciunt</h4>
                                        <p>Aut est quidem doloremque voluptatem magnam quis excepturi vero quia. Eum eos doloremque architecto illo at beatae dolore. Fugiat suscipit et sint ratione dolores. Aut aliquid ea dolores libero nobis.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section> End Constructions Section -->

        <!-- ======= Services Section ======= -->
        <!-- <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Services</h2>
                    <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti fignissimos eos quam</p>
                </div>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item  position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-mountain-city"></i>
                            </div>
                            <h3>Nesciunt Mete</h3>
                            <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                            </div>
                            <h3>Eosle Commodi</h3>
                            <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-compass-drafting"></i>
                            </div>
                            <h3>Ledo Markt</h3>
                            <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-trowel-bricks"></i>
                            </div>
                            <h3>Asperiores Commodit</h3>
                            <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-helmet-safety"></i>
                            </div>
                            <h3>Velit Doloremque</h3>
                            <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                            </div>
                            <h3>Dolori Architecto</h3>
                            <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section> End Services Section -->

        <!-- ======= Alt Services Section ======= -->
        <section id="alt-services" class="alt-services">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4">
                    <div class="col-lg-4 img-bg" style="background-image: url(<?php echo base_url('assets/') ?>img/Show1.png); border-radius: 5px " data-aos="zoom-in" data-aos-delay="100"></div>

                    <div style="padding-left: 2%;" class="col-lg-8 d-flex flex-column justify-content-center">
                        <h3>KERAMIK & GRANIT</h3>
                        <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus.</p>
                        <div class="row">
                            <?php foreach ($section1 as $tampil) { ?>
                                <?php
                                if ($tampil->nama_foto_barang !== null) {
                                    $fotosection1 = "https://sicora.comboputra.co.id/assets/foto/barang/thumb/" . $tampil->nama_foto_barang;
                                } else {
                                    $fotosection1 = "https://sicora.comboputra.co.id/assets/images/o-redlogo.png";
                                }
                                ?>

                                <div style="margin-top: 30px;" class="icon-box d-flex position-relative col-lg-4 show" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bi flex-shrink-0" style="width:130px; height:130px; margin-right:15px"><img style="padding: 2%;" src="<?php echo $fotosection1 ?>" width="130px" height="130px" alt=""></i>
                                    <div>
                                        <h4><a href="<?php echo base_url('ProdukSingle?id_barang=') . $tampil->id_barang; ?>" class="stretched-link">Rp <?php echo number_format($tampil->harga_jual) ?></a></h4>
                                        <p><?php echo $tampil->nama_barang ?></p>
                                    </div>
                                </div><!-- End Icon Box -->
                            <?php } ?>

                        </div>
                        <div data-aos="fade-up" data-aos-delay="100">
                            <a href="<?php echo base_url('Katalog?id_kategori=') . $tampil->id_kategori . '&nama_kategori=' . $tampil->nama_kategori ?>">
                                <p class="btnprodukbykategori"><i style="font-style: normal;" class="bi-collection-fill"> Tampilkan Semua</i></p>
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

                <div class="row justify-content-around gy-4">


                    <div style="padding-right: 2%;" class="col-lg-8 d-flex flex-column justify-content-center">
                        <h3 style="text-align:right">SANITARY</h3>
                        <p style="text-align:right">Maxime quia dolorum alias perspiciatis. Earum voluptatem sint at non. Ducimus maxime minima iste magni sit praesentium assumenda minus. </p>

                        <div class="row">
                            <?php foreach ($section2 as $tampil2) { ?>
                                <?php
                                if ($tampil2->nama_foto_barang !== null) {
                                    $fotosection2 = "https://sicora.comboputra.co.id/assets/foto/barang/thumb/" . $tampil2->nama_foto_barang;
                                } else {
                                    $fotosection2 = "https://sicora.comboputra.co.id/assets/images/o-redlogo.png";
                                }
                                ?>
                                <div style="margin-top: 30px;" class="icon-box d-flex position-relative col-lg-4" data-aos="fade-up" data-aos-delay="100">
                                    <div style="text-align: right;">
                                        <h4><a href="<?php echo base_url('ProdukSingle?id_barang=') . $tampil2->id_barang; ?>" class="stretched-link">Rp <?php echo number_format($tampil2->harga_jual) ?></a></h4>
                                        <p><?php echo $tampil2->nama_barang ?></p>
                                    </div>
                                    <i class="bi flex-shrink-0" style="width:130px; height:130px; margin-left:15px; margin-right:auto"><img style="padding: 2%;" src="<?php echo $fotosection2 ?>" width="130px" height="130px" alt=""></i>

                                </div><!-- End Icon Box -->
                            <?php } ?>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="100">
                            <a href="<?php echo base_url('Katalog?id_kategori=') . $tampil2->id_kategori . '&nama_kategori=' . $tampil2->nama_kategori ?>">
                                <p class="btnrightprodukbykategori"><i style="font-style: normal;" class="bi-collection-fill"> Tampilkan Semua</i></p>
                            </a>
                        </div>
                        <!-- <div class="icon-box d-flex position-relative" style="margin-left:auto;" data-aos="fade-up" data-aos-delay="400">
                            <img src="<?php echo base_url('assets/') ?>img/browse.png" width="50px" alt="">
                        </div> -->
                    </div>

                    <div class="col-lg-4 img-bg" style="background-image: url(<?php echo base_url('assets/') ?>img/Show2.jpg); border-radius: 5px" data-aos="zoom-in" data-aos-delay="100"></div>

                </div>

            </div>
        </section><!-- End Alt Services Section 2 -->
        <section id="alt-services" class="alt-services">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4">
                    <div class="col-lg-4 img-bg" style="background-image: url(<?php echo base_url('assets/') ?>img/listrik.jpg); border-radius: 5px " data-aos="zoom-in" data-aos-delay="100"></div>

                    <div style="padding-left: 2%;" class="col-lg-8 d-flex flex-column justify-content-center">
                        <h3>ALAT LISTRIK</h3>
                        <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. </p>
                        <div class="row">
                            <?php foreach ($section3 as $tampil3) { ?>
                                <?php
                                if ($tampil3->nama_foto_barang !== null) {
                                    $fotosection3 = "https://sicora.comboputra.co.id/assets/foto/barang/thumb/" . $tampil3->nama_foto_barang;
                                } else {
                                    $fotosection3 = "https://sicora.comboputra.co.id/assets/images/o-redlogo.png";
                                }
                                ?>

                                <div style="margin-top: 30px;" class="icon-box d-flex position-relative col-lg-4 show" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bi flex-shrink-0" style="width:130px; height:130px; margin-right:15px"><img style="padding: 2%;" src="<?php echo $fotosection3 ?>" width="130px" height="130px" alt=""></i>
                                    <div>
                                        <h4><a href="<?php echo base_url('ProdukSingle?id_barang=') . $tampil3->id_barang; ?>" class="stretched-link">Rp <?php echo number_format($tampil3->harga_jual) ?></a></h4>
                                        <p><?php echo $tampil3->nama_barang ?></p>
                                    </div>
                                </div><!-- End Icon Box -->
                            <?php } ?>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="100">
                            <a href="<?php echo base_url('Katalog?id_kategori=') . $tampil3->id_kategori . '&nama_kategori=' . $tampil3->nama_kategori ?>">
                                <p class="btnprodukbykategori"><i style="font-style: normal;" class="bi-collection-fill"> Tampilkan Semua</i></p>
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

                <div class="row justify-content-around gy-4">


                    <div style="padding-right: 2%;" class="col-lg-8 d-flex flex-column justify-content-center">

                        <h3 style="text-align:right">DOOR & WINDOW</h3>


                        <p style="text-align:right">Maxime quia dolorum alias perspiciatis. Earum voluptatem sint at non. Ducimus maxime minima iste magni sit praesentium assumenda minus. </p>

                        <div class="row">
                            <?php foreach ($section4 as $tampil4) { ?>
                                <?php
                                if ($tampil4->nama_foto_barang !== null) {
                                    $fotosection4 = "https://sicora.comboputra.co.id/assets/foto/barang/thumb/" . $tampil4->nama_foto_barang;
                                } else {
                                    $fotosection4 = "https://sicora.comboputra.co.id/assets/images/o-redlogo.png";
                                }
                                ?>

                                <div style="margin-top: 30px;" class="icon-box d-flex position-relative col-lg-4" data-aos="fade-up" data-aos-delay="100">
                                    <div style="text-align: right;">
                                        <h4><a href="<?php echo base_url('ProdukSingle?id_barang=') . $tampil4->id_barang; ?>" class="stretched-link">Rp <?php echo number_format($tampil4->harga_jual) ?></a></h4>
                                        <p><?php echo $tampil4->nama_barang ?></p>
                                    </div>
                                    <i class="bi flex-shrink-0" style="width:130px; height:130px; margin-left:15px; margin-right:auto"><img style="padding: 2%;" src="<?php echo $fotosection4 ?>" width="130px" height="130px" alt=""></i>

                                </div><!-- End Icon Box -->
                            <?php } ?>

                        </div>
                        <div data-aos="fade-up" data-aos-delay="100">
                            <a href="<?php echo base_url('Katalog?id_kategori=') . $tampil4->id_kategori . '&nama_kategori=' . $tampil4->nama_kategori ?>">
                                <p class="btnrightprodukbykategori"><i style="font-style: normal;" class="bi-collection-fill"> Tampilkan Semua</i></p>
                            </a>
                        </div>
                        <!-- <div class="icon-box d-flex position-relative" style="margin-left:auto;" data-aos="fade-up" data-aos-delay="400">
                            <img src="<?php echo base_url('assets/') ?>img/browse.png" width="50px" alt="">
                        </div> -->
                    </div>

                    <div class="col-lg-4 img-bg" style="background-image: url(<?php echo base_url('assets/') ?>img/Show4.jpg); border-radius: 5px" data-aos="zoom-in" data-aos-delay="100"></div>

                </div>

            </div>
        </section><!-- End Alt Services Section 2 -->
        <section id="alt-services" class="alt-services">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4">
                    <div class="col-lg-4 img-bg" style="background-image: url(<?php echo base_url('assets/') ?>img/Show7.jpg); border-radius: 5px " data-aos="zoom-in" data-aos-delay="100"></div>

                    <div style="padding-left: 2%;" class="col-lg-8 d-flex flex-column justify-content-center">
                        <h3>TEKNIK & PERTUKANGAN</h3>
                        <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. </p>
                        <div class="row">
                            <?php foreach ($section5 as $tampil5) { ?>
                                <?php
                                if ($tampil5->nama_foto_barang !== null) {
                                    $fotosection5 = "https://sicora.comboputra.co.id/assets/foto/barang/thumb/" . $tampil5->nama_foto_barang;
                                } else {
                                    $fotosection5 = "https://sicora.comboputra.co.id/assets/images/o-redlogo.png";
                                }
                                ?>

                                <div style="margin-top: 30px;" class="icon-box d-flex position-relative col-lg-4 show" data-aos="fade-up" data-aos-delay="100">
                                    <i class="bi flex-shrink-0" style="width:130px; height:130px; margin-right:15px"><img style="padding: 2%;" src="<?php echo $fotosection5 ?>" width="130px" height="130px" alt=""></i>
                                    <div>
                                        <h4><a href="<?php echo base_url('ProdukSingle?id_barang=') . $tampil5->id_barang; ?>" class="stretched-link">Rp <?php echo number_format($tampil5->harga_jual) ?></a></h4>
                                        <p><?php echo $tampil5->nama_barang ?></p>
                                    </div>
                                </div><!-- End Icon Box -->
                            <?php } ?>

                        </div>
                        <div data-aos="fade-up" data-aos-delay="100">
                            <a href="<?php echo base_url('Katalog?id_kategori=') . $tampil5->id_kategori . '&nama_kategori=' . $tampil5->nama_kategori ?>">
                                <p class="btnprodukbykategori"><i style="font-style: normal;" class="bi-collection-fill"> Tampilkan Semua</i></p>
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

                    <li class="nav-item col-2">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <h4>Dulux</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item col-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            <h4>Avian</h4>
                        </a><!-- End tab nav item -->

                    <li class="nav-item col-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                            <h4>Jotun</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item col-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                            <h4>Propan</h4>
                        </a>
                    </li><!-- End tab nav item -->
                    <li class="nav-item col-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
                            <h4>Nippon Paint</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item col-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-6">
                            <h4>Premio</h4>
                        </a>
                    </li><!-- End tab nav item -->

                </ul>

                <div class="tab-content">
                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                                <h3 style="margin-bottom: 0px; padding-bottom:0px;">Produk Paint</h3>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                </p>

                                <div class="row gy-4">
                                    <?php foreach ($catdulux as $catbydulux) { ?>
                                        <?php
                                        if ($catbydulux->nama_foto_barang !== null) {
                                            $img = "https://sicora.comboputra.co.id/assets/foto/barang/thumb/" . $catbydulux->nama_foto_barang;
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
                                        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                            <div class="post-item position-relative h-100 background-paint">
                                                <div class="post-img position-relative overflow-hidden center-paint">
                                                    <a href="<?php echo base_url('ProdukSingle?id_barang=') . $catbydulux->id_barang ?>"><img src="<?php echo $img ?>" class="img-fluid img-paint" alt=""></a>

                                                </div>

                                                <div class="post-content d-flex flex-column">
                                                    <h3 style="margin-left: 5%; margin-right:5%; height:40px;" class="post-title"><?php echo $catbydulux->nama_barang ?></h3>
                                                    <hr style="margin-bottom: 10px;">
                                                    <div class="meta align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="margin-left: 5%; margin-right:5%;" class="">Rp <?php echo number_format($catbydulux->harga_jual) ?> </span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="margin-left: 5%; margin-right:5%; font-style:italic; font-size:13px" class=""><?php echo $stok ?> </span>
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
                                <h3 style="margin-bottom: 0px; padding-bottom:0px;">Neque exercitationem debitis</h3>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                </p>
                                <div class="row gy-4">
                                    <?php foreach ($catavian as $catbyavian) { ?>
                                        <?php
                                        if ($catbyavian->nama_foto_barang !== null) {
                                            $img = "https://sicora.comboputra.co.id/assets/foto/barang/thumb/" . $catbyavian->nama_foto_barang;
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
                                        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                            <div class="post-item position-relative h-100 background-paint">
                                                <div class="post-img position-relative overflow-hidden center-paint">
                                                    <a href="<?php echo base_url('ProdukSingle?id_barang=') . $catbyavian->id_barang ?>"><img src="<?php echo $img ?>" class="img-fluid img-paint" alt=""></a>
                                                </div>
                                                <div class="post-content d-flex flex-column">

                                                    <h3 style="margin-left: 5%; margin-right:5%; height:40px;" class="post-title"><?php echo $catbyavian->nama_barang ?></h3>
                                                    <hr style="margin-bottom: 10px;">
                                                    <div class="meta align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="margin-left: 5%; margin-right:5%;" class="">Rp <?php echo number_format($catbyavian->harga_jual) ?> </span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="margin-left: 5%; margin-right:5%; font-style:italic; font-size:13px" class=""><?php echo $stok ?> </span>
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

                    <div class="tab-pane" id="tab-3">
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
                                            $img = "https://sicora.comboputra.co.id/assets/foto/barang/thumb/" . $catbyjotun->nama_foto_barang;
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
                                        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                            <div class="post-item position-relative h-100 background-paint">
                                                <div class="post-img position-relative overflow-hidden center-paint">
                                                    <a href="<?php echo base_url('ProdukSingle?id_barang=') . $catbyjotun->id_barang ?>"><img src="<?php echo $img ?>" class="img-fluid img-paint" alt=""></a>
                                                </div>
                                                <div class="post-content d-flex flex-column">

                                                    <h3 style="margin-left: 5%; margin-right:5%; height:40px;" class="post-title"><?php echo $catbyjotun->nama_barang ?></h3>
                                                    <hr style="margin-bottom: 10px;">
                                                    <div class="meta align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="margin-left: 5%; margin-right:5%;" class="">Rp <?php echo number_format($catbyjotun->harga_jual) ?> </span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="margin-left: 5%; margin-right:5%; font-style:italic; font-size:13px" class=""><?php echo $stok ?> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End post item -->

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
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-4">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3 style="margin-bottom: 0px; padding-bottom:0px;">Omnis fugiat ea explicabo sunt</h3>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                </p>
                                <div class="row gy-4">
                                    <?php foreach ($catpropan as $catbypropan) { ?>
                                        <?php
                                        if ($catbypropan->nama_foto_barang !== null) {
                                            $img = "https://sicora.comboputra.co.id/assets/foto/barang/thumb/" . $catbypropan->nama_foto_barang;
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
                                        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                            <div class="post-item position-relative h-100 background-paint">
                                                <div class="post-img position-relative overflow-hidden center-paint">
                                                    <a href="<?php echo base_url('ProdukSingle?id_barang=') . $catbypropan->id_barang ?>"><img src="<?php echo $img ?>" class="img-fluid img-paint" alt=""></a>
                                                </div>
                                                <div class="post-content d-flex flex-column">

                                                    <h3 style="margin-left: 5%; margin-right:5%; height:40px;" class="post-title"><?php echo $catbypropan->nama_barang ?></h3>
                                                    <hr style="margin-bottom: 10px;">
                                                    <div class="meta align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="margin-left: 5%; margin-right:5%;" class="">Rp <?php echo number_format($catbypropan->harga_jual) ?> </span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="margin-left: 5%; margin-right:5%; font-style:italic; font-size:13px" class=""><?php echo $stok ?> </span>
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
                                <h3 style="margin-bottom: 0px; padding-bottom:0px;">Omnis fugiat ea explicabo sunt</h3>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                </p>
                                <div class="row gy-4">
                                    <?php foreach ($catnippon as $catbynippon) { ?>
                                        <?php
                                        if ($catbynippon->nama_foto_barang !== null) {
                                            $img = "https://sicora.comboputra.co.id/assets/foto/barang/thumb/" . $catbynippon->nama_foto_barang;
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
                                        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                            <div class="post-item position-relative h-100 background-paint">
                                                <div class="post-img position-relative overflow-hidden center-paint">
                                                    <a href="<?php echo base_url('ProdukSingle?id_barang=') . $catbynippon->id_barang ?>"><img src="<?php echo $img ?>" class="img-fluid img-paint" alt=""></a>
                                                </div>
                                                <div class="post-content d-flex flex-column">

                                                    <h3 style="margin-left: 5%; margin-right:5%; height:40px;" class="post-title"><?php echo $catbynippon->nama_barang ?></h3>
                                                    <hr style="margin-bottom: 10px;">
                                                    <div class="meta align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="margin-left: 5%; margin-right:5%;" class="">Rp <?php echo number_format($catbynippon->harga_jual) ?> </span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="margin-left: 5%; margin-right:5%; font-style:italic; font-size:13px" class=""><?php echo $stok ?> </span>
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
                                <h3 style="margin-bottom: 0px; padding-bottom:0px;">Omnis fugiat ea explicabo sunt</h3>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                </p>
                                <div class="row gy-4">
                                    <?php foreach ($catpremio as $catbypremio) { ?>
                                        <?php
                                        if ($catbypremio->nama_foto_barang !== null) {
                                            $img = "https://sicora.comboputra.co.id/assets/foto/barang/thumb/" . $catbypremio->nama_foto_barang;
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
                                        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                                            <div class="post-item position-relative h-100 background-paint">
                                                <div class="post-img position-relative overflow-hidden center-paint">
                                                    <a href="<?php echo base_url('ProdukSingle?id_barang=') . $catbypremio->id_barang ?>"><img src="<?php echo $img ?>" class="img-fluid img-paint" alt=""></a>
                                                </div>
                                                <div class="post-content d-flex flex-column">

                                                    <h3 style="margin-left: 5%; margin-right:5%; height:40px;" class="post-title"><?php echo $catbypremio->nama_barang ?></h3>
                                                    <hr style="margin-bottom: 10px;">
                                                    <div class="meta align-items-center">
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="margin-left: 5%; margin-right:5%;" class="">Rp <?php echo number_format($catbypremio->harga_jual) ?> </span>
                                                        </div>
                                                        <div class="d-flex align-items-center">
                                                            <i class=""></i> <span style="margin-left: 5%; margin-right:5%; font-style:italic; font-size:13px" class=""><?php echo $stok ?> </span>
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

                </div>

            </div>
        </section><!-- End Features Section -->

        <section id="project-details" class="project-details">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="section-header">
                    <h2>Belanja Berdasarkan Merk</h2>
                    <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
                </div>
                <div class="position-relative h-100 row">
                    <div class="slides-1 portfolio-details-slider swiper col-lg-6 row" style="border-radius:5px;">
                        <div class="swiper-wrapper align-items-center" style="padding-left: 0%;">

                            <div class="swiper-slide">
                                <img style="width: 100%; height: 400px; " src="assets/img/projects/ace.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img style="width: 100%; height: 400px; " src="assets/img/projects/sika.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img style="width: 100%; height: 400px; " src="assets/img/projects/tekiro.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img style="width: 100%; height: 400px; " src="assets/img/projects/amstard.jpg" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>

                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                    <div class="col-lg-6" style="height: 400px;">
                        <div class="slides-1 portfolio-details-slider swiper col-lg-12" style="height: 49%; margin-bottom:2%; border-radius:5px;">
                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <a href="<?php echo base_url('Katalog?id_merk=000000000151&merk=Bosch'); ?>"><img style=" width: 100%; height: -webkit-fill-available" src="assets/img/projects/bosch.jpg" alt=""></a>
                                </div>
                                <div class="swiper-slide">
                                    <img style=" width: 100%; height: -webkit-fill-available" src="assets/img/projects/wasser.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img style=" width: 100%; height: -webkit-fill-available" src="assets/img/projects/onda.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img style=" width: 100%; height: -webkit-fill-available" src="assets/img/projects/dekson.png" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img style=" width: 100%; height: -webkit-fill-available" src="assets/img/projects/remodeling-1.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img style=" width: 100%; height: -webkit-fill-available" src="assets/img/projects/remodeling-1.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img style=" width: 100%; height: -webkit-fill-available" src="assets/img/projects/remodeling-1.jpg" alt="">
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>

                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                        <div class="slides-1 portfolio-details-slider swiper col-lg-12" style="height: 48%; border-radius: 5px;">
                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide" style="width: 51%;">
                                    <img style="width: 98%; height: 100%; border-radius: 5px;" src=" assets/img/projects/rucika.jpg" alt="">
                                </div>
                                <div class="swiper-slide" style="width: 51%;">
                                    <img style="width: 98%; height: 100%; border-radius: 5px; " src=" assets/img/projects/penguin.jpg" alt="">
                                </div>
                                <div class="swiper-slide" style="width: 51%;">
                                    <img style="width: 98%; height: 100%; border-radius: 5px;" src=" assets/img/projects/dolomite.jpg" alt="">
                                </div>
                                <div class="swiper-slide" style="width: 51%;">
                                    <img style="width: 98%; height: 100%; border-radius: 5px; " src=" assets/img/projects/design-1.jpg" alt="">
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
                    <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
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



    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php $this->load->view('footer'); ?>
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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

</body>

</html>