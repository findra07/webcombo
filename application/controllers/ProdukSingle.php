<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProdukSingle extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProdukSingleModel');
    }

    public function index()
    {
        $id_barang = $this->input->get('id_barang');


        $data['detail'] = $this->ProdukSingleModel->produkdetail($id_barang);
        $this->load->view('produksingle', $data);
    }
}

/* End of file ProdukSingle.php */
