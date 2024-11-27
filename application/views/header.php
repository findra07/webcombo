<style>
    @media screen and (max-width: 932px) {
        .header .logo img {
            max-height: 35px !important;
            width: 50px !important;
            margin-left: 2%;
        }
    }

    .fullnav {
        display: block;
    }

    .sidenav {
        display: none;
    }

    @media screen and (max-width: 1270px) {
        .fullnav {
            display: none;
        }

        .sidenav {
            display: block;
            float: inline-start;
        }

    }


    .list-gall:hover {
        background-color: #337ab7;
    }

    .tittle-gall:hover {
        color: white !important;
    }

    .header .logo img {
        max-height: 62px
    }

    .align-item-flex-start {
        align-items: flex-start;
    }

    .social-links a {
        font-size: 18px;
        /* display: inline-block; */
        background: rgba(255, 255, 255, 0.1);
        color: #fff;
        line-height: 1;
        margin-right: 5px;
        border-radius: 4px;
        width: 36px;
        height: 36px;
        transition: 0.3s;
    }

    .navbar a i,
    .navbar a:focus i {
        font-size: 18px;
    }
</style>


<header id="header" class="header d-flex align-items-center">
    <!-- <div class="container-fluid container-xl d-flex align-items-center justify-content-between"> -->
    <div class="container-fluid container-xl d-flex align-item-center justify-content-between">

        <a href="<?php echo base_url('Home') ?>" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img class="logosingle" src="<?php echo base_url('assets/img/') . 'logocombokotak.png' ?>" alt="" width="65px">
            <!-- <h1>Combo Putra<span></span></h1> -->
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        <nav id="navbar" class="navbar fullnav" style="display: inline;">
            <ul style="margin-right: 2px;">
                <li><a href="<?php echo base_url('Home') ?>">Beranda</a></li>
                <li><a href="<?php echo base_url('About') ?>">Tentang Kami</a></li>
                <li><a href="<?php echo base_url('Katalog') ?>" class="">Produk</a></li>
                <li><a href="<?php echo base_url('Rumah') ?>" class="">Rumah Dijual</a></li>
                <li><a href="<?php echo base_url('Contact') ?>">Hubungi Kami</a></li>
            </ul>
            <ul style="display:flex; float:inline-end;">
                <div class="social-links d-flex">
                    <a href="https://www.instagram.com/tokocomboputra/?igshid=rmxoc7or9osl" target="_blank" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.facebook.com/comboputra79" target="_blank" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.tokopedia.com/comboputra" target="_blank" class="d-flex align-items-center justify-content-center"><i class="bi"><img src="<?php echo base_url('assets/') ?>img/tokopedia.png" alt="" width="22px"></i></a>
                    <a href="https://shopee.co.id/comboputra" target="_blank" class="d-flex align-items-center justify-content-center"><i class="bi"><img src="<?php echo base_url('assets/') ?>img/shopee.png" alt="" width="28px"></i></a>

                </div>
            </ul>
        </nav>

        <nav id="navbar" class="navbar sidenav">
            <ul style="margin-right: 2px;">
                <li><a href="<?php echo base_url('Home') ?>">Beranda</a></li>
                <li><a href="<?php echo base_url('About') ?>">Tentang Kami</a></li>
                <li><a href="<?php echo base_url('Katalog') ?>" class="">Produk</a></li>
                <li><a href="<?php echo base_url('Rumah') ?>" class="">Rumah Dijual</a></li>
                <li><a href="<?php echo base_url('Contact') ?>">Hubungi Kami</a></li>

                <div style="display:flex; float:inline-start; margin-top: 10px">
                    <div class="social-links d-flex" style="margin-left: 10px;">
                        <a href="https://www.instagram.com/tokocomboputra/?igshid=rmxoc7or9osl" target="_blank" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.facebook.com/comboputra79" target="_blank" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.tokopedia.com/comboputra" target="_blank" class="d-flex align-items-center justify-content-center"><i class="bi"><img src="<?php echo base_url('assets/') ?>img/tokopedia.png" alt="" width="22px"></i></a>
                        <a href="https://shopee.co.id/comboputra" target="_blank" class="d-flex align-items-center justify-content-center"><i class="bi"><img src="<?php echo base_url('assets/') ?>img/shopee.png" alt="" width="28px"></i></a>

                    </div>
                </div>
            </ul>
        </nav>


        <!-- .navbar -->

    </div>

</header>

<!-- <li class="dropdown"><a href="#"><span>Galeri</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li class="list-gall"><a class="tittle-gall" href="<?php echo base_url('Gallery') ?>">Outbond</a></li>
                        <li class="dropdown list-gall"><a class="tittle-gall" href="#"><span>Combo Putra</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li class="list-gall"><a class="tittle-gall" href="#">17 Agustus</a></li>
                                <li class="list-gall"><a class="tittle-gall" href="#">Iduk Fitri</a></li>
                                <li><a href="#">Deep Dropdown 3</a></li>
                                <li><a href="#">Deep Dropdown 4</a></li>
                                <li><a href="#">Deep Dropdown 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dropdown 2</a></li>
                        <li><a href="#">Dropdown 3</a></li>
                        <li><a href="#">Dropdown 4</a></li>
                    </ul>
                </li> -->

<!-- <ul style="display:flex; float:inline-end; ">
                <div class="social-links d-flex">
                    <a href="https://www.instagram.com/tokocomboputra/?igshid=rmxoc7or9osl" target="_blank" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.facebook.com/comboputra79" target="_blank" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.tokopedia.com/comboputra" target="_blank" class="d-flex align-items-center justify-content-center"><i class="bi"><img src="<?php echo base_url('assets/') ?>img/tokopedia.png" alt="" width="22px"></i></a>
                    <a href="https://shopee.co.id/comboputra" target="_blank" class="d-flex align-items-center justify-content-center"><i class="bi"><img src="<?php echo base_url('assets/') ?>img/shopee.png" alt="" width="28px"></i></a>
                    <a href="https://www.bukalapak.com/u/combo_putra_82495" target="_blank" class="d-flex align-items-center justify-content-center"><i class="bi"><img src="<?php echo base_url('assets/') ?>img/bukalapak.png" alt="" width="25px"></i></a>
                </div>
</ul> -->