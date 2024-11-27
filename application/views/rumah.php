<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>COMBO PUTRA - Rumah Dijual</title>
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
    .blog .posts-list .post-content {
        padding: 15px;
    }

    .blog .posts-list .post-title {
        margin-bottom: 0px;
    }

    .blog .posts-list p {
        margin-top: 0px;
    }

    .img-fluid {
        max-width: 100%;
        height: 340px;
    }

    .overflow-hidden {
        display: flex;
        justify-content: center;
    }
</style>



<body>
    <!-- ======= Header ======= -->
    <?php $this->load->view('header'); ?>
    <!-- End Header -->

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/rumah/rumah bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Rumah Dijual</h2>
            <ol>
                <li><a href="<?php echo base_url('Home') ?>">Beranda</a></li>
                <li>Rumah Dijual</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Team Section ======= -->

    <main id="main">


        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 posts-list">

                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100">

                            <div class="post-img position-relative overflow-hidden">
                                <img src="<?php echo base_url('assets/') ?>img/Rumah/rumah.jpg" class="img-fluid" alt="">
                                <span class="post-date"> <i class="fa fa-location-dot"> Lihat Di Peta </i></span>
                            </div>

                            <div class="post-content d-flex flex-column">

                                <h3 class="post-title" style="font-family: lato; font-weight: 900;">Rp 500.000.000 ,-</h3>

                                <div class="meta d-flex align-items-center" style="font-family: lato; font-weight: 500;">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-house-fill"></i> <span class="ps-2">Cluster</span>
                                    </div>
                                    <!-- <span class="px-3 text-black-50">/</span> -->
                                    <!-- <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                                    </div> -->
                                </div>

                                <p>
                                <h4 style="font-family: lato; font-weight: 900; margin-bottom: -3px;">Perumahan Griya Residence</h4>
                                <label style="font-size: 14px; margin-bottom: 5px; font-family: lato; font-weight: 500;" for="">Banyumanik, Kota Semarang, Jawa Tengah</label>
                                <div class="d-flex align-items-center" style="font-family: lato; font-weight: 500;">
                                    <i class=" fa fa-bath"></i> <span class="ps-2">2 </span>
                                    <i class="fa fa-bed ps-4"></i> <span class="ps-2">3 </span>
                                    <i class="bi bi-car-front-fill ps-4"></i> <span class="ps-2">1 </span>
                                    <i class="ps-3"></i> <span class="ps-2">Type : 60/120 m2 </span>
                                </div>
                                </p>

                                <hr>

                                <a href="<?php echo base_url('Rumah/rumahdetail') ?>" class="readmore stretched-link" style="font-family: lato; font-weight: 500;"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div><!-- End post list item -->

                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100">

                            <div class="post-img position-relative overflow-hidden">
                                <img src="<?php echo base_url('assets/') ?>img/Rumah/rumah 2.jpg" class="img-fluid" alt="">
                                <span class="post-date"><i class="fa fa-location-dot"> Lihat Di Peta </i></span>
                            </div>

                            <div class="post-content d-flex flex-column">

                                <h3 class="post-title" style="font-family: lato; font-weight: 900;">Rp 250.000.000 ,-</h3>

                                <div class="meta d-flex align-items-center" style="font-family: lato; font-weight: 500;">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-house-fill"></i> <span class="ps-2">Rumah</span>
                                    </div>
                                    <!-- <span class="px-3 text-black-50">/</span> -->
                                    <!-- <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                                    </div> -->
                                </div>

                                <p>
                                <h4 style="font-family: lato; font-weight: 900; margin-bottom: -3px;">Griya Indah Permai</h4>
                                <label style="font-size: 14px; margin-bottom: 5px; font-family: lato; font-weight: 500;" for="">Ungaran, Kab Semarang, Jawa Tengah</label>
                                <div class="d-flex align-items-center" style="font-family: lato; font-weight: 500;">
                                    <i class="fa fa-bath"></i> <span class="ps-2">1 </span>
                                    <i class="fa fa-bed ps-4"></i> <span class="ps-2">2 </span>
                                    <i class="bi bi-car-front-fill ps-4"></i> <span class="ps-2">1 </span>
                                    <i class="ps-3"></i> <span class="ps-2">Type : 30/60 m2 </span>
                                </div>
                                </p>

                                <hr>

                                <a href="<?php echo base_url('Rumah/rumahdetail') ?>" class="readmore stretched-link" style="font-family: lato; font-weight: 500;"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                            </div>

                        </div>
                    </div><!-- End post list item -->


                </div><!-- End blog posts list -->

                <div class="blog-pagination">
                    <ul class="justify-content-center">
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </div><!-- End blog pagination -->

            </div>
        </section><!-- End Blog Section -->

    </main><!-- End #main -->

    <!-- ======= Testimonials Section ======= -->

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