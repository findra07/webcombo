<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('KatalogModel');
        $this->load->model('CatModel');
    }


    public function index()
    {


        $data['trenproduk'] = $this->KatalogModel->trenpenjualan();
        $data['section1'] = $this->KatalogModel->sectionbarang1();
        $data['section2'] = $this->KatalogModel->sectionbarang2();
        $data['section3'] = $this->KatalogModel->sectionbarang3();
        $data['section4'] = $this->KatalogModel->sectionbarang4();
        $data['section5'] = $this->KatalogModel->sectionbarang5();

        // $data['catsection'] = $this->CatModel->catexplore();
        $data['catdulux'] = $this->CatModel->merkdulux();
        $data['catavian'] = $this->CatModel->merkavian();
        $data['catjotun'] = $this->CatModel->merkjotun();
        $data['catpropan'] = $this->CatModel->merkpropan();
        $data['catnippon'] = $this->CatModel->merknippon();
        $data['catpremio'] = $this->CatModel->merkpremio();


        $this->load->view('home', $data);
    }
}

/* End of file Home.php */
