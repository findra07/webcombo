<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AboutModel');
    }


    public function index()
    {
        $data['team'] = $this->AboutModel->ourteam();

        $this->load->view('about', $data);
    }
}


/* End of file About.php */
