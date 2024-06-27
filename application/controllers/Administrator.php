<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('AuthModel');
        $this->load->model('RekapDataModel');

        date_default_timezone_set('Asia/Jakarta');
    }


    public function index()
    {

        $this->load->view('administrator/login');
    }

    public function dashboard()
    {
        $this->load->library('session');
        $username = $this->session->userdata('username');

        $data['jmlnotajual'] = $this->RekapDataModel->dailysales();
        $data['jmlnotarupiah'] = $this->RekapDataModel->dailysalesrp();

        $data['user'] = $this->AuthModel->get_user($username);
        $this->load->view('administrator/dashboard', $data);
    }

    public function rekap()
    {
        $this->load->library('session');
        $username = $this->session->userdata('username');

        $id_mail = $this->input->get('idmail');

        $data['delete_mail'] = $this->RekapDataModel->delete_mail($id_mail);

        $data['sendmail'] = $this->RekapDataModel->sendmail();

        $this->load->library('pagination');
        $config['base_url'] = base_url('Administrator/rekap');
        $config['total_rows'] = $this->RekapDataModel->count_sendmail();
        $config['per_page'] = 10;
        $config['url_segment'] = 3;
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
        $config['cur_tag_close']    = '<span class="sr-only"></span></span></li>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['num_links'] = 2;

        $this->pagination->initialize($config);

        $offset = $this->uri->segment(3) ? $this->uri->segment(3) : 0;
        $data['sendmail'] = $this->RekapDataModel->get_sendmail($config['per_page'], $offset);
        $data['start_number'] = $offset + 1;

        $data['jmlnotajual'] = $this->RekapDataModel->dailysales();
        $data['jmlnotarupiah'] = $this->RekapDataModel->dailysalesrp();
        $data['user'] = $this->AuthModel->get_user($username);
        $this->load->view('administrator/rekap', $data);
    }

    public function signup()
    {
        $this->load->view('administrator/signup');
    }

    public function register()
    {
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Validasi input
        if (empty($nama) || empty($username) || empty($password)) {
            $this->output->set_content_type('application/json')->set_output(json_encode('Username atau password kosong'));
            return;
        }

        // Hash password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Data pengguna
        $data = array(
            'name' => $nama,
            'username' => $username,
            'password' => $hashed_password,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        );

        // Insert data pengguna ke database
        if ($this->AuthModel->insertUser($data)) {
            $this->output->set_content_type('application/json')->set_output(json_encode('Registrasi berhasil'));
            redirect('Administrator/auth');
        } else {
            $this->output->set_content_type('application/json')->set_output(json_encode('Registrasi gagal'));
            redirect('Administrator');
        }
    }

    public function auth()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if (empty($username) || empty($password)) {
            $this->output->set_content_type('application/json')->set_output(json_encode('Username atau Password Kosong'));
            return;
        }

        $user = $this->AuthModel->getUserByUsername($username);


        if ($user) {

            // error_log('Password yang diinput: ' . $password);
            // error_log('Password hash dari database: ' . $user->password);

            if (password_verify($password, $user->password)) {

                $this->AuthModel->updateLastLogin($username);

                $data_user = array(
                    'username' => $user->username,
                    'password' => $user->password
                );
                $this->session->set_userdata($data_user);

                $this->output->set_content_type('application/json')->set_output(json_encode(array('status' => 'masuk', 'data' => $user)));
                redirect('Administrator/dashboard');
            } else {
                $this->output->set_content_type('application/json')->set_output(json_encode('Password Salah'));
                redirect('Administrator');
            }
        } else {
            $this->output->set_content_type('application/json')->set_output(json_encode('Akun Tidak Ditemukan'));
            redirect('Administrator');
        }
    }
}


/* End of file Login.php */
