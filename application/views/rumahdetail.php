<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>COMBO PUTRA - Detail Rumah</title>
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
    .blog .blog-details .post-img {
        display: flex;
        justify-content: center;
    }

    .blog .blog-details .content h3 {
        margin-top: 0px;
    }

    .spasi {
        width: 40%;
    }

    .hr {
        width: 85%;
        margin: 0.5% 0% 1% 0%;
    }

    .blog .blog-details .meta-bottom {
        border-top: 0PX;
    }

    .hubungipenjual {
        color: white;
        padding: 1%;
        text-align: center;
        background-color: #337ab7;
        border-radius: 5px;
        width: 26%;
        font-size: 15px;
        font-weight: 500;
        box-shadow: 0px 2px 20px rgba(0, 0, 0, 0.06);
        /* float: inline-end; */
        transition: transform 0.5s ease;
        font-family: Lato medium;
    }

    .hubungipenjual:hover {
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
    <!-- End Header -->

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('<?php echo base_url('assets/') ?>img/rumah/rumah bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Detail Rumah</h2>
            <ol>
                <li><a href="<?php echo base_url('Home') ?>">Beranda</a></li>
                <li>Rumah Dijual</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Our Team Section ======= -->

    <main id="main">


        <!-- ======= Blog Details Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-5">

                    <div class="col-lg-8">

                        <article class="blog-details">

                            <div class="post-img">
                                <img src="<?php echo base_url('assets/') ?>img/Rumah/rumah.jpg" alt="" class="img-fluid">
                            </div>

                            <h2 class="title" style="font-family: lato; font-weight: 700;">Rp 500.000.000 ,-</h2>
                            <h2 class="title" style="margin-top: 0px; font-size: 40px; font-family: lato; font-weight: 900;">Perumahan Griya Residence</h2>

                            <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">John Doe</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01">Jan 1, 2022</time></a></li>
                                    <li class="d-flex align-items-center"><i class="bi-telephone"></i> <a href="blog-details.html">081 225 3750021</a></li>
                                </ul>
                            </div><!-- End meta top -->

                            <div class="content">
                                <p>
                                    Perumahan baru yang terletak di tengah kota semarang, cocok sekali untuk anda pasangan muda yang baru saja membina rumah tangga dengan susasana khas kota semarang tetapi tidak meninggalkan unsur desa terlihat adanya banyak area hijau di sekitar perumahan. Segera ambil jangan sampai kehabisan.
                                </p>

                                <!-- <blockquote>
                                    <p>
                                        Et vero doloremque tempore voluptatem ratione vel aut. Deleniti sunt animi aut. Aut eos aliquam doloribus minus autem quos.
                                    </p>
                                </blockquote> -->

                                <img src="assets/img/blog/blog-inside-post.jpg" class="img-fluid" alt="">
                                <div style="display: flex">
                                    <div style="width: 50%;">
                                        <h3>Fasilitas</h3>
                                        <div class="d-flex align-items-center" style="font-family: lato; font-weight: 500; padding: 3px 0px 3px 0px;">
                                            <span class="spasi"> Kamar Mandi </span> : <span class="ps-2">2</span>
                                        </div>
                                        <hr class="hr">
                                        <div class="d-flex align-items-center" style="font-family: lato; font-weight: 500; padding: 3px 0px 3px 0px;">
                                            <span class="spasi"> Kamar Tidur </span> : <span class="ps-2">3</span>
                                        </div>
                                        <hr class="hr">
                                        <div class="d-flex align-items-center" style="font-family: lato; font-weight: 500; padding: 3px 0px 3px 0px;">
                                            <span class="spasi"> Carport </span> : <span class="ps-2">1</span>
                                        </div>
                                        <hr class="hr">
                                        <div class="d-flex align-items-center" style="font-family: lato; font-weight: 500; padding: 3px 0px 3px 0px;">
                                            <span class="spasi"> Jumlah Lantai </span> : <span class="ps-2">2</span>
                                        </div>
                                        <hr class="hr">
                                        <div class="d-flex align-items-center" style="font-family: lato; font-weight: 500; padding: 3px 0px 3px 0px;">
                                            <span class="spasi"> Luas Tanah </span> : <span class="ps-2">60 m2</span>
                                        </div>
                                        <hr class="hr">
                                        <div class="d-flex align-items-center" style="font-family: lato; font-weight: 500; padding: 3px 0px 3px 0px;">
                                            <span class="spasi"> Luas Bangunan </span> : <span class="ps-2">120 m2</span>
                                        </div>
                                        <hr class="hr">
                                        <div class="d-flex align-items-center" style="font-family: lato; font-weight: 500; padding: 3px 0px 3px 0px;">
                                            <span class="spasi"> Sertifikat </span> : <span class="ps-2">SHM</span>
                                        </div>
                                        <hr class="hr">
                                    </div>
                                    <div style="width: 50%;">
                                        <h3>Spesifikasi</h3>
                                        <div class="d-flex align-items-center" style="font-family: lato; font-weight: 500; padding: 3px 0px 3px 0px;">
                                            <span class="spasi"> Listrik </span> : <span class="ps-2">1300</span>
                                        </div>
                                        <hr class="hr">
                                        <div class="d-flex align-items-center" style="font-family: lato; font-weight: 500; padding: 3px 0px 3px 0px;">
                                            <span class="spasi"> Air </span> : <span class="ps-2">PDAM</span>
                                        </div>
                                        <hr class="hr">
                                        <div class="d-flex align-items-center" style="font-family: lato; font-weight: 500; padding: 3px 0px 3px 0px;">
                                            <span class="spasi"> </span> : <span class="ps-2"></span>
                                        </div>
                                        <hr class="hr">
                                        <div class="d-flex align-items-center" style="font-family: lato; font-weight: 500; padding: 3px 0px 3px 0px;">
                                            <span class="spasi"> </span> : <span class="ps-2"></span>
                                        </div>
                                        <hr class="hr">
                                        <div class="d-flex align-items-center" style="font-family: lato; font-weight: 500; padding: 3px 0px 3px 0px;">
                                            <span class="spasi"> </span> : <span class="ps-2"></span>
                                        </div>
                                        <hr class="hr">
                                        <div class="d-flex align-items-center" style="font-family: lato; font-weight: 500; padding: 3px 0px 3px 0px;">
                                            <span class="spasi"> </span> : <span class="ps-2"></span>
                                        </div>
                                        <hr class="hr">
                                    </div>
                                </div>

                                <h3 style="margin-top: 5%;">Keterangan Tambahan</h3>
                                <!-- <p>
                                    Rerum ea est assumenda pariatur quasi et quam. Facilis nam porro amet nostrum. In assumenda quia quae a id praesentium. Quos deleniti libero sed occaecati aut porro autem. Consectetur sed excepturi sint non placeat quia repellat incidunt labore. Autem facilis hic dolorum dolores vel.
                                    Consectetur quasi id et optio praesentium aut asperiores eaque aut. Explicabo omnis quibusdam esse. Ex libero illum iusto totam et ut aut blanditiis. Veritatis numquam ut illum ut a quam vitae.
                                </p> -->
                                <p>
                                    Akses mudah 10 menit menuju Kota, dekat dengan sekolah, rumah sakit, taman bermain dan sudah terbentuk fasum.
                                </p>

                            </div><!-- End post content -->


                            <p class="hubungipenjual"><i style="font-style: normal;" class="bi-palette2"> Hubungi Penjual</i></p>

                            <div class="meta-bottom">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li><a href="#">Business</a></li>
                                </ul>

                                <i class="bi bi-tags"></i>
                                <ul class="tags">
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Tips</a></li>
                                    <li><a href="#">Marketing</a></li>
                                </ul>
                            </div><!-- End meta bottom -->

                        </article><!-- End blog post -->

                        <!-- <div class="post-author d-flex align-items-center">
                            <img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
                            <div>
                                <h4>Jane Smith</h4>
                                <div class="social-links">
                                    <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                                    <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                                    <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                                </div>
                                <p>
                                    Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                                </p>
                            </div>
                        </div>  -->
                        <!-- End post author -->


                    </div>

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <div class="sidebar-item search-form">
                                <h3 class="sidebar-title">Search</h3>
                                <form action="" class="mt-3">
                                    <input type="text">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->

                            <div class="sidebar-item categories">
                                <h3 class="sidebar-title">Categories</h3>
                                <ul class="mt-3">
                                    <li><a href="#">General <span>(25)</span></a></li>
                                    <li><a href="#">Lifestyle <span>(12)</span></a></li>
                                    <li><a href="#">Travel <span>(5)</span></a></li>
                                    <li><a href="#">Design <span>(22)</span></a></li>
                                    <li><a href="#">Creative <span>(8)</span></a></li>
                                    <li><a href="#">Educaion <span>(14)</span></a></li>
                                </ul>
                            </div><!-- End sidebar categories-->

                            <div class="sidebar-item recent-posts">
                                <h3 class="sidebar-title">Recent Posts</h3>

                                <div class="mt-3">

                                    <div class="post-item mt-3">
                                        <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                                        <div>
                                            <h4><a href="blog-details.html">Nihil blanditiis at in nihil autem</a></h4>
                                            <time datetime="2020-01-01">Jan 1, 2020</time>
                                        </div>
                                    </div><!-- End recent post item-->

                                    <div class="post-item">
                                        <img src="assets/img/blog/blog-recent-2.jpg" alt="">
                                        <div>
                                            <h4><a href="blog-details.html">Quidem autem et impedit</a></h4>
                                            <time datetime="2020-01-01">Jan 1, 2020</time>
                                        </div>
                                    </div><!-- End recent post item-->

                                    <div class="post-item">
                                        <img src="assets/img/blog/blog-recent-3.jpg" alt="">
                                        <div>
                                            <h4><a href="blog-details.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                                            <time datetime="2020-01-01">Jan 1, 2020</time>
                                        </div>
                                    </div><!-- End recent post item-->

                                    <div class="post-item">
                                        <img src="assets/img/blog/blog-recent-4.jpg" alt="">
                                        <div>
                                            <h4><a href="blog-details.html">Laborum corporis quo dara net para</a></h4>
                                            <time datetime="2020-01-01">Jan 1, 2020</time>
                                        </div>
                                    </div><!-- End recent post item-->

                                    <div class="post-item">
                                        <img src="assets/img/blog/blog-recent-5.jpg" alt="">
                                        <div>
                                            <h4><a href="blog-details.html">Et dolores corrupti quae illo quod dolor</a></h4>
                                            <time datetime="2020-01-01">Jan 1, 2020</time>
                                        </div>
                                    </div><!-- End recent post item-->

                                </div>

                            </div><!-- End sidebar recent posts-->

                            <div class="sidebar-item tags">
                                <h3 class="sidebar-title">Tags</h3>
                                <ul class="mt-3">
                                    <li><a href="#">App</a></li>
                                    <li><a href="#">IT</a></li>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Mac</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Office</a></li>
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Studio</a></li>
                                    <li><a href="#">Smart</a></li>
                                    <li><a href="#">Tips</a></li>
                                    <li><a href="#">Marketing</a></li>
                                </ul>
                            </div><!-- End sidebar tags-->

                        </div><!-- End Blog Sidebar -->

                    </div>
                </div>

            </div>
        </section><!-- End Blog Details Section -->

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