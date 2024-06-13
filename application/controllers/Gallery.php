<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{

    public function index()
    {
        $this->load->view('gallery');
    }

    public function galeri2()
    {
        $this->load->view('gallery2');
    }
}

/* End of file Gallery.php */
