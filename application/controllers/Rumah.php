<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rumah extends CI_Controller
{

    public function index()
    {
        $this->load->view('rumah');
    }

    function rumahdetail()
    {
        $this->load->view('rumahdetail');
    }
}

/* End of file Rumah.php */
