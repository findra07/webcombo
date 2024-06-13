<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>COMBO PUTRA - Katalog</title>
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

    <!-- Template Collapse Sidebar -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->


    <!-- =======================================================
  * Template Name: UpConstruction
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<style>
    .image-wrapper img {
        width: 223px;
        height: 223px;
        /* border: 1px solid black; */
        border-radius: 5px;
        padding: 10px 10px 10px 10px;
        display: block;
        margin: auto;
    }

    .image-wrapper {
        width: auto;
        height: 350px;
        border: 0.5px solid rgba(82, 86, 94, 0.3);
        border-radius: 5px;

    }

    .h-100::before {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 36.5%;
        background-color: #f5f6f7;
        z-index: -1;
    }

    .uppercase {
        text-transform: uppercase;
    }

    .namabrg {
        padding: 5px 12px 0px 12px;
        /* height: 105px; */
        /* border: 1px solid black; */
        font-size: small;
        /* font-family: Verdana, Geneva, Tahoma, sans-serif; */
        /* background-color: #f5f6f7; */
    }

    .itembrg {
        height: 75%;
        font-family: 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 14px;
        margin-bottom: auto;
    }

    /* .hrgstatus {
        margin-top: -8px;
    } */

    .jenisbrg {
        font-style: italic;
        margin-right: 4%;
        float: right;
    }

    /* .blog .cari {
        padding: 10px;
    } */

    .total {
        margin-top: 1%;
        /* margin-left: 3px; */
        /* margin-bottom: 0; */
        font-size: 15px;
        font-style: italic;
        color: rgba(82, 86, 94, 0.3);
        /* text-decoration: underline; */
        font-family: lato;
        font-weight: 300;
    }

    .loc {
        /* margin-left: 0.5%; */
        /* margin-bottom: 1%; */
        /* margin-top: 1%; */
        padding: 8px 0 0 15px;
    }

    /* .dftrkat {
        border: 1px solid rgba(82, 86, 94, 0.3);
    } */

    /* .col-lg-3 {
        width: 24.3%;
    } */

    .tittlesubkategori {
        margin-left: 8px;
        font-weight: bolder;
        font-size: larger;
    }

    .semua {
        /* margin-left: 10px; */
        font-weight: bold;
        padding: 9px;
    }

    .fontlato {
        font-family: lato;
        font-weight: 500;
        margin-bottom: auto;
        font-size: 18px;
    }

    .categories {
        margin-top: 5px;
    }


    .liskat {
        display: block;
        border-bottom: 1px solid rgba(82, 86, 94, 0.3);
        padding: 3px 0 4px 0;
    }

    .iconpanah {
        float: right;
        color: rgba(82, 86, 94, 0.3);
    }

    .list-collapse {
        font-size: 16px;
        border-bottom: 1px solid rgba(82, 86, 94, 0.3);
        padding: 10px 0 5px 0;
        text-decoration: none !important;
    }

    .list-collapse:hover {
        margin-left: 10px;
        background: #f5f6f7;
        /* font-size: large; */
    }

    .dropdown-item {
        overflow-wrap: break-word;
        /* text-decoration: none !important; */
        font-size: 14px;
    }

    .dropdown-item:hover {
        text-decoration: underline;
        font-weight: bold;
    }

    .accordion-body {
        overflow: auto;
    }

    .btn-toolbar {
        justify-content: flex-end;
        margin-top: 5%;
        font-family: lato;
        font-weight: 500;
    }

    .text-centerloading {
        float: right;
        margin-top: 1.5%;
        margin-right: 1%;
        font-style: italic;
        font-family: lato;
        font-weight: 200;
    }

    .page-link {
        font-size: 14px;
        /* background-color: #337ab7; */
    }

    .load-product {
        /* background: #f5f6f7; */
        box-shadow: 0 0 25px rgba(0, 0, 0, 0.08)
    }

    .sidebar {
        padding-right: 5%;
    }

    .gy-4 {
        padding-bottom: 1.5rem;
    }

    /* .tags {
        background: #f5f6f7;
    } */

    .blog .sidebar .tags ul a:hover {
        background-color: #f5f6f7;
        /* box-shadow: 0 0 25px rgba(0, 0, 0, 0.08); */
        /* font-weight: bold; */
        /* border: none; */
    }

    .accordion-button:not(.collapsed) {
        background-color: #f5f6f7;
    }

    .accordion {
        --bs-accordion-btn-icon-width: 0.75rem;
    }

    .active>.page-link,
    .page-link.active {
        background-color: #337ab7;
    }

    .image-wrapper:hover {
        border: 1px solid #337ab7;
    }


    @media screen and (min-width:1000px) and (max-width:1180px) {
        .img-fluid {
            height: 154px !important;
        }

        .image-wrapper {
            height: 250px;
        }
    }

    @media screen and (min-width:1181px) and (max-width:1368px) {
        .img-fluid {
            height: 188px !important;
        }

        .image-wrapper {
            height: 300px;
        }
    }

    @media screen and (max-width: 1000px) {
        .flex-cari {
            margin-top: 3%;
        }

        .blog .sidebar .search-form form {
            width: 100%;
        }
    }

    @media screen and (max-width: 1920px) {
        .flex-produk {
            /* width: 50%; */
            padding-bottom: 0.5rem;
            margin-top: var(--bs-gutter-y);
            --bs-gutter-y: 0.5rem;
            padding-right: calc(var(--bs-gutter-x)* .5);
            padding-left: calc(var(--bs-gutter-x)* .5);
            --bs-gutter-x: 0.75rem;
        }
    }

    @media screen and (max-width: 1366px) {
        .flex-produk {
            /* width: 50%; */
            padding-bottom: 0.5rem;
            margin-top: var(--bs-gutter-y);
            --bs-gutter-y: 0.5rem;
            padding-right: calc(var(--bs-gutter-x)* .5);
            padding-left: calc(var(--bs-gutter-x)* .5);
            --bs-gutter-x: 0.75rem;
        }
    }

    @media screen and (max-width: 960px) {
        .flex-produk {
            /* width: 50%; */
            padding-bottom: 0.5rem;
            margin-top: var(--bs-gutter-y);
            --bs-gutter-y: 0.5rem;
            padding-right: calc(var(--bs-gutter-x)* .5);
            padding-left: calc(var(--bs-gutter-x)* .5);
            --bs-gutter-x: 0.75rem;
        }
    }

    @media screen and (max-width: 740px) {
        .flex-produk {
            width: 50%;
            padding-bottom: 0.5rem;
            margin-top: var(--bs-gutter-y);
            --bs-gutter-y: 0.5rem;
            padding-right: calc(var(--bs-gutter-x)* .5);
            padding-left: calc(var(--bs-gutter-x)* .5);
            --bs-gutter-x: 0.75rem;
        }
    }

    @media screen and (max-width: 450px) {
        .image-wrapper {
            height: 300px;
        }

        .image-wrapper img {
            height: 189px;
        }

        .accordion {
            height: 400px;
            overflow: scroll;
            padding-right: 3%;
        }
    }

    @media screen and (max-width: 400px) {
        .image-wrapper {
            height: 280px;
        }

        .image-wrapper img {
            height: 160px;
        }

        .h-100::before {
            height: 42%;
        }

        .projects .portfolio-content .portfolio-info {
            height: 58%;
        }
    }

    @media screen and (min-width: 768px) and (max-width:960px) {
        .flex-tabname {
            width: 35%;
        }

        .flex-tab {
            width: 65%;
        }
    }
</style>

<body>
    <!-- ======= Header ======= -->
    <?php $this->load->view('header'); ?>
    <!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/combofooter.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Produk</h2>
                <ol>
                    <li><a href="<?php echo base_url('Home') ?>">Beranda</a></li>
                    <li>Katalog Produk</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Our Projects Section ======= -->
        <section id="projects blog" class="projects blog">
            <div class="container" data-aos="fade-up">
                <div class="row mb-3">
                    <div class="loc col-lg-6" style="font-family: lato; font-weight:500;" data-aos="fade-up" data-aos-delay="100">
                        <a href="<?php echo base_url('Katalog') ?>">Produk |</a>
                        <a href="<?php echo base_url('Katalog?id_kategori=') . $this->input->get('id_kategori') . '&nama_kategori=' . $this->input->get('nama_kategori'); ?>"><?php echo $this->input->get('nama_kategori') . ' |' ?></a>
                        <a href="<?php echo base_url('Katalog?id_kategori=') . $this->input->get('id_kategori') . '&nama_kategori=' . $this->input->get('nama_kategori') . '&id_subkategori=' . $this->input->get('id_subkategori') . '&nama_subkategori=' . $this->input->get('nama_subkategori'); ?>"><?php echo $this->input->get('nama_subkategori') . ' |' ?></a>
                        <?php echo $this->input->get('merk') ?>
                    </div>

                    <div style="padding-right: 0;" class="col-lg-6 flex-cari" data-aos="fade-up" data-aos-delay="100">
                        <div class="cari sidebar">
                            <div class="sidebar-item search-form">
                                <!-- <h3 class=" sidebar-title">Search</h3> -->
                                <form action="" class="">
                                    <input style="font-family: lato; font-weight:400;" type="text" placeholder="masukkan nama barang ..." name="search" id="search"><i class="bi bi-search"></i>
                                    <!-- <button type="submit"><i class="bi bi-search"></i></button> -->
                                </form>
                                <div class="text-centerloading" id="loading" style="display: none; ">
                                    <h6>searching ...</h6>
                                </div>

                            </div>
                        </div>
                    </div><!-- End sidebar search formn-->


                </div>
                <div class="row">
                    <div class="col-md-3 flex-tabname">
                        <div class="sidebar">
                            <div class="sidebar-item categories" data-aos="fade-up" data-aos-delay="200">
                                <h3 class=" sidebar-title dftrkat">KATEGORI</h3>

                                <?php
                                $kategori = $this->KatalogModel->allkategori();
                                $kategori_ditampilkan = [];
                                ?>

                                <ul class="">
                                    <div class="accordion" id="accordionFlushExample">
                                        <?php foreach ($kategori as $kategori_item) : ?>
                                            <div class="dropdown show">
                                                <?php if (!isset($kategori_ditampilkan[$kategori_item->nama_kategori])) : ?>
                                                    <a style="font-family: lato; font-weight:500;" class="list-collapse accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?= $kategori_item->id_kategori ?>" aria-expanded="false" aria-controls="flush-collapseOne">
                                                        <?= $kategori_item->nama_kategori ?>
                                                        <!-- <i class="fa fa-angle-down iconpanah"></i> -->
                                                    </a>
                                                    <?php $kategori_ditampilkan[$kategori_item->nama_kategori] = true; ?>
                                                    <div id="flush-collapse-<?= $kategori_item->id_kategori ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">
                                                            <?php foreach ($kategori as $subkategori) :
                                                                if ($subkategori->id_kategori == $kategori_item->id_kategori) : ?>
                                                                    <a class="dropdown-item" style="font-family: lato; font-weight:300;" href="<?= base_url('Katalog?id_kategori=' . $subkategori->id_kategori) ?>&nama_kategori=<?= $subkategori->nama_kategori ?>&id_subkategori=<?= $subkategori->id_subkategori ?>&nama_subkategori=<?= $subkategori->nama_subkategori ?>">
                                                                        <?= $subkategori->nama_subkategori ?>
                                                                        <span style="font-family: lato; font-weight:300;">(<?= $subkategori->jml_notnull ?>)</span>
                                                                    </a>
                                                            <?php endif;
                                                            endforeach; ?>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </ul>

                            </div><!-- End sidebar categories-->

                            <!-- <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            Accordion Item #1
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                    </div>
                                </div>
                            </div> -->

                            <div class=" sidebar-item tags">
                                <h3 class="sidebar-title dftrkat">MERK</h3>
                                <ul class="mt-3" style="font-family: lato; font-weight:500;">
                                    <?php foreach ($semuamerk as $listmerk) { ?>
                                        <li><a href="<?php echo base_url('Katalog?id_kategori=') . $this->input->get('id_kategori') . '&nama_kategori=' . $this->input->get('nama_kategori') . '&id_subkategori=' . $this->input->get('id_subkategori') .  '&nama_subkategori=' . $this->input->get('nama_subkategori') . '&id_merk=' . urlencode($listmerk->id_merk) . '&merk=' . urlencode($listmerk->nama_merk) ?>">
                                                <?php echo $listmerk->nama_merk ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div><!-- End sidebar tags-->
                        </div><!-- End Blog Sidebar -->
                    </div>
                    <div class="col-md-9 flex-tab portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
                        <div class="total justify-content-start" data-aos="fade-up" data-aos-delay="200">
                            <h6 class="total" id="jmltotalproduk"> Total: 80</h6>
                        </div>
                        <div class="load-product row" id="load-product">
                        </div>
                        <div class="btn-toolbar pull-right">
                            <div class="btn-group" id="pagination_link"></div>
                        </div>
                    </div>

                    <script src="<?php echo base_url() ?>assets/js/jquery-2.2.4.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            const urlParams = new URLSearchParams(window.location.search);
                            // let idKat = urlParams.get('id_kategori');
                            // idKategori = idKat == 'null' ? '000000000169' : idKat;

                            let idSub = urlParams.get('id_subkategori');
                            idSubkategori = idSub == 'null' ? '000000000011' : idSub;

                            // if (idKat == 'null') {
                            //     idKategori = '000000000169';
                            // } else {
                            //     idKategori = urlParams.get('id_kategori');
                            // }


                            let idMerk = urlParams.get('id_merk');

                            let idKat = urlParams.get('id_kategori');
                            idKategori = idKat == 'null' ? '000000000170' : idKat;

                            $('#search').on('keyup', function(event) {
                                let nama_produk = $(this).val();
                                nama_produk.length >= 2 && allproduk(1, idSubkategori, idMerk, nama_produk, idKategori);
                            });

                            $(document).on("click", ".barang_pagination li a", function(event) {
                                event.preventDefault();
                                event.stopPropagation();
                                let page = $(this).data("ci-pagination-page");
                                let nama_produk;
                                nama_produk = $('#search').val();
                                allproduk(page, idSubkategori, idMerk, nama_produk, idKategori);
                            });


                            const showProduct = response => {
                                let html = "";
                                let gambar;
                                let status;

                                response.data.map((value, key) => {
                                    gambar = value.nama_foto_barang === null ? 'https://sicora.comboputra.co.id/assets/images/o-redlogo.png' : `https://sicora.comboputra.co.id/assets/foto/barang/thumb/${value.nama_foto_barang}`;
                                    if (value.stok_update > 0) {
                                        status = "Ready"
                                    } else {
                                        status = "PreOrder"
                                    }

                                    harga = value.harga_jual;

                                    html += `<div class="col-lg-3 col-md-6 gy-4 portfolio-item filter-remodeling portfolio-container flex-produk" data-aos="fade-up" data-aos-delay="200">
                                                    <div class="image-wrapper">
                                                        <div class="portfolio-content h-100">
                                                            <div>
                                                                <img class="img-fluid" src="${gambar}" alt="img">
                                                                <div class="portfolio-info">
                                                                    <!--<h4>${value.kode_barang}</h4>-->
                                                                    <a href="${gambar}" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                                                    <a href="<?php echo base_url('ProdukSingle?id_kategori=') ?>${value.id_kategori}~${value.nama_kategori}&id_subkategori=${value.id_subkategori}~${value.nama_subkategori}&id_barang=${value.id_barang}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                                                </div>
                                                            </div>                                                            
                                                            <div class="namabrg">
                                                                <p class="fontlato"><b>Rp ${harga}</b></p>
                                                                <p class="itembrg" style="font-family: lato; font-weight:300; font-size:15px;">${value.nama_barang}</p>
                                                                <p class="hrgstatus" style="font-family: lato; font-weight:500; font-size:15px;">                                                                    
                                                                    <label class="jenisbrg">
                                                                        ${status}
                                                                    </label>
                                                                </p>
                                                            </div>                                                            
                                                        </div>
                                                    </div>
                                                </div>`;
                                });
                                $('#load-product').html(html);
                            }

                            const allproduk = (page, idSubkategori, idMerk, nama_produk, idKategori) => {
                                const url = `<?php echo base_url('Katalog/allproduk') ?>/${page}?idSub=${idSubkategori}&merk=${idMerk}&nama_produk=${nama_produk}&id_kategori=${idKategori}`;
                                $.ajax({
                                    type: "GET",
                                    dataType: 'json',
                                    processData: false,
                                    contentType: false,
                                    cache: false,
                                    async: true,
                                    crossOrigin: true,
                                    url: url,
                                    beforeSend: function() {
                                        $('#loading').css('display', 'block');
                                    },
                                    success: function(response) {
                                        $('#loading').css('display', 'none');
                                        $('#pagination_link').html(response.link);
                                        $('#jmltotalproduk').html(`Menampilkan ${response.total_rows} Hasil Pencarian`)
                                        showProduct(response);
                                    },
                                    error: function(error) {
                                        alert(error);
                                    }
                                });
                            }
                            allproduk(1, idSubkategori, idMerk, '', idKategori);

                        });
                    </script>
                    <!-- <div class="container" data-aos="fade-up" data-aos-delay="100"> -->

                    <!-- <div class="row g-5"> -->

                </div>
            </div>
            <!-- </div> -->
        </section><!-- End Our Projects Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php $this->load->view('footer'); ?>
    <!-- End Footer -->

    <?php $this->load->view('scroll'); ?>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url() ?>assets/js/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/aos/aos.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>




</body>

</html>