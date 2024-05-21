<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Katalog extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('KatalogModel');
    }

    public function index()
    {
        // $id_kategori = $this->input->get('id_kategori');
        // $nama_kategori = urldecode($this->input->get('kategori'));

        $id = $this->input->get('id_kategori');
        $idsub = $this->input->get('id_subkategori');
        $search = $this->input->get('search');
        $id_kate = $this->input->get('id_kate');
        $idmerk = $this->input->get('id_merk');

        // $idnew = $this->input->get('id_katego');

        // $id_merk = $this->input->get('id_merk');
        // $nama_merk = urldecode($this->input->get('merk'));

        // $data['semuaproduk'] = $this->KatalogModel->allproduk();
        $data['semuakategori'] = $this->KatalogModel->allkategori($id);
        // $data['semuasubkategori'] = $this->KatalogModel->allsubkategori($id_kate);
        $data['semuamerk'] = $this->KatalogModel->allmerk($idsub, $id, $idmerk);
        $data['tittlekategori'] = $this->KatalogModel->judulkategori();

        $this->load->view('katalog', $data);
    }

    public function subkategori($id_kate)
    {
        $id_kate = $this->input->get('id_kate');

        $data[] = $this->KatalogModel->allsubkategori($id_kate);
    }


    public function allproduk($page)
    {
        $id = $this->input->get('id_kategori');
        $id_subkategori = $this->input->get('idSub');
        $id_merk = $this->input->get('merk');
        $nama_produk = $this->input->get('nama_produk') === 'null' ? 'keramik' : $this->input->get('nama_produk');

        $convert = str_replace('20%', ' ', $nama_produk);

        $this->load->library('pagination');

        $config['base_url']         = site_url('Katalog');
        $config['per_page']         = 16;
        $config["uri_segmen"]      = 3;
        $config["use_page_numbers"] = TRUE;

        $page = $this->uri->segment(3);
        $start = ($page - 1) * $config['per_page'];
        $config['total_rows'] = $this->KatalogModel->jmltotalproduk($convert, $id_subkategori, $id_merk, $id);

        $config['full_tag_open']    = '<div class="pagging"><nav><ul class="pagination justify-content-center barang_pagination">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tag_close']     = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tag_close']      = '</span></li>';
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tag_close']      = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_link']        = 'Prev';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tag_close']      = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['num_links'] = 2;

        $this->pagination->initialize($config);

        $data = $this->KatalogModel->allproduk($config["per_page"], $start, $convert, $id_subkategori, $id_merk, $id);
        $paginationku = $this->pagination->create_links();
        $res = count($data) > 0 ?
            array(
                'status' => true,
                'data' => $data,
                'message' => 'get product succesfully',
                'code' => 200,
                'link' => $paginationku,
                'total_rows' => $config['total_rows']
            ) :
            array(
                'status' => false,
                'data' => [],
                'message' => 'product not found',
                'code' => 200
            );
        $this->output->set_content_type('application/json')->set_output(json_encode($res));
    }
}

/* End of file Controllername.php */
