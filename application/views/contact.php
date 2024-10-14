<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>COMBO PUTRA - Kontak</title>
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
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- =======================================================
  * Template Name: UpConstruction
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<style>
    .center {
        text-align: center;
    }

    .height {
        padding-bottom: 54px !important;
    }

    .contact .info-item i {
        border: 2px dotted #337ab7;
    }

    .button-send:hover {
        background-color: red !important;
    }

    .contact .form-send {
        width: 100%;
        background: #fff;
        box-shadow: 0 0 25px rgba(0, 0, 0, 0.08);
        padding: 30px;
    }

    .contact .form-send .form-group {
        padding-bottom: 20px;
    }

    .contact .form-send input {
        height: 44px;
    }

    .form-control {
        border-radius: 3px !important;
    }

    .contact .form-send button[type=submit] {
        background: #337ab7;
        border: 0;
        padding: 10px 35px;
        color: #fff;
        transition: 0.4s;
        border-radius: 5px;
    }

    .form-control:focus {
        border: #337ab7 solid 0.5px;
        box-shadow: none !important;
    }

    @media screen and (max-width: 430px) {
        .breadcrumbs h2 {
            font-size: 50px;
        }
    }

    .btn-close {
        float: inline-end;
    }

    .modal-dialog-centered {
        align-items: baseline;
        padding-top: 6%;
    }

    .alert-success {
        --bs-alert-bg: var(--bs-primary-bg-subtle);

    }
</style>

<body>

    <!-- ======= Header ======= -->
    <?php $this->load->view('header'); ?>

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/combofooter.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Hubungi Kami</h2>
                <ol>
                    <li><a href="<?php echo base_url('Home') ?>">Beranda</a></li>
                    <li>Hubungi Kami</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-map"></i>
                            <h3 style="font-family: lato; font-weight:700;">Alamat Toko</h3>
                            <p class="center" style="font-family: lato; font-weight:400;">Jl. Trunojoyo X No.2, Padangsari, Kec. Banyumanik, Kota Semarang, Jawa Tengah <br>50267</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center height">
                            <i class="bi bi-envelope"></i>
                            <h3 style="font-family: lato; font-weight:700;">Email</h3>
                            <p style="font-family: lato; font-weight:400;">comboputra@gmail.com</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center height">
                            <i class="bi bi-telephone"></i>
                            <h3 style="font-family: lato; font-weight:700;">No. Telepon</h3>
                            <p style="font-family: lato; font-weight:400;">0853-5747-2345 / (024) 747-2345</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="row gy-4 mt-1">

                    <!-- <div class="col-lg-12 ">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.4659810412295!2d110.42158575061426!3d-7.071847094867467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70894c93cfe3c3%3A0xc685bad895a17ade!2sTB.%20Combo%20Putra!5e0!3m2!1sid!2sid!4v1618369884871!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>

                    </div> -->
                    <!-- End Google Maps -->

                    <div class="col-lg-6">
                        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-clock"></i>
                            <h3 style="font-family: lato; font-weight:700;">Jam Operasional</h3>
                            <p class="center" style="font-family: lato; font-weight:400;">Senin - Kamis : 07.30 am s/d 16.30 pm <br>Jumat : 07.30 am s/d 11.45 pm - 13.00 pm s/d 16.30 pm <br>Sabtu : 07.30 am s/d 16.30 pm <br>Minggu : Tutup</p>
                        </div>
                    </div><!-- End Info Item -->
                    <div class="col-lg-6">
                        <form action="<?php echo base_url('contact') ?>" method="post" role="form" class="form-send">
                            <div class="row gy-4">
                                <div class="col-lg-6 form-group">
                                    <input style="font-family: lato; font-weight:300; font-size:15px" type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <input style="font-family: lato; font-weight:300; font-size:15px" type="email" class="form-control" name="email" id="email" placeholder="Email Anda" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <input style="font-family: lato; font-weight:300; font-size:15px" type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                                <textarea style="font-family: lato; font-weight:300; font-size:15px" class="form-control" name="message" rows="5" placeholder="Pesan" required></textarea>
                            </div>
                            <div class="text-center">
                                <button class="button-send" style="font-family: lato; font-weight:700; font-size:16px" type="submit">Send Message</button>
                            </div>

                        </form>

                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section -->


    </main><!-- End #main -->

    <!-- Modal -->
    <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- <div class="modal-header">
                    <h5 class="modal-title" id="messageModalLabel">Pesan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> -->
                <div class="modal-body">
                    <?php if ($this->session->flashdata('error')) : ?>
                        <div class="alert alert-danger" style="font-family: lato; font-weight:300; font-size:15px" role="alert">
                            <?php echo $this->session->flashdata('error'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success" style="font-family: lato; font-weight:300; font-size:15px" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            <?php if ($this->session->flashdata('error') || $this->session->flashdata('success')) : ?>
                var myModal = new bootstrap.Modal(document.getElementById('messageModal'));
                myModal.show();
            <?php endif; ?>
        });
    </script>

    <!-- ======= Footer ======= -->
    <?php $this->load->view('footer'); ?>

    <?php $this->load->view('scroll'); ?>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>