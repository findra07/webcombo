<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="<?php echo base_url('Home') ?>" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="<?php echo base_url('assets/img/') . 'logomerah.png' ?>" alt="">
            <!-- <h1>Combo Putra<span></span></h1> -->
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="<?php echo base_url('Home') ?>">Beranda</a></li>
                <li><a href="<?php echo base_url('About') ?>">Tentang Kami</a></li>
                <li><a href="<?php echo base_url('Katalog') ?>" class="">Produk</a></li>
                <li class="dropdown"><a href="#"><span>Galeri</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="<?php echo base_url('gallery') ?>">Outbond</a></li>
                        <li class="dropdown"><a href="#"><span>Combo Putra</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="#">17 Agustus</a></li>
                                <li><a href="#">Iduk Fitri</a></li>
                                <!-- <li><a href="#">Deep Dropdown 3</a></li> -->
                                <!-- <li><a href="#">Deep Dropdown 4</a></li> -->
                                <!-- <li><a href="#">Deep Dropdown 5</a></li> -->
                            </ul>
                        </li>
                        <!-- <li><a href="#">Dropdown 2</a></li> -->
                        <!-- <li><a href="#">Dropdown 3</a></li> -->
                        <!-- <li><a href="#">Dropdown 4</a></li> -->
                    </ul>
                </li>
                <li><a href="<?php echo base_url('contact') ?>">Hubungi Kami</a></li>
            </ul>
        </nav><!-- .navbar -->

    </div>
</header>