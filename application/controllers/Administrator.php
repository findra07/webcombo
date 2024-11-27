<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->helper(array('url', 'form'));
        $this->load->model('AuthModel');
        $this->load->model('RekapDataModel');

        date_default_timezone_set('Asia/Jakarta');

        // Set header untuk mencegah caching
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
        $this->output->set_header('Pragma: no-cache');
    }


    public function index()
    {

        $this->load->view('administrator/login');
    }

    public function dashboard()
    {
        $this->load->library('session');

        // Periksa apakah pengguna sudah login
        if (!$this->session->userdata('logged_in')) {
            redirect('Administrator');
        }

        // Perbarui waktu aktivitas terakhir
        $this->session->set_userdata('last_activity', time());

        // Load data dan tampilkan view dashboard
        $username = $this->session->userdata('username');
        $data['jmlnotajual'] = $this->RekapDataModel->dailysales();
        $data['jmlnotarupiah'] = $this->RekapDataModel->dailysalesrp();
        $data['user'] = $this->AuthModel->get_user($username);

        $this->load->view('administrator/dashboard', $data);


        // if (!$this->session->userdata('logged_in') || (time() - $this->session->userdata('last_activity')) > $this->config->item('sess_expiration')) {
        //     // Hapus session dan redirect ke halaman login jika session timeout
        //     $this->session->unset_userdata('logged_in');
        //     $this->session->sess_destroy();
        //     redirect('Administrator');
        // } else {
        //     // Perbarui waktu aktivitas terakhir
        //     $this->session->set_userdata('last_activity', time());

        //     // Load data untuk dashboard
        //     $username = $this->session->userdata('username');
        //     $data['jmlnotajual'] = $this->RekapDataModel->dailysales();
        //     $data['jmlnotarupiah'] = $this->RekapDataModel->dailysalesrp();
        //     $data['user'] = $this->AuthModel->get_user($username);

        //     $this->load->view('administrator/dashboard', $data);
        // }

        // $username = $this->session->userdata('username');

        // $data['jmlnotajual'] = $this->RekapDataModel->dailysales();
        // $data['jmlnotarupiah'] = $this->RekapDataModel->dailysalesrp();

        // $data['user'] = $this->AuthModel->get_user($username);
        // $this->load->view('administrator/dashboard', $data);
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
                    // 'password' => $user->password
                    'logged_in' => true, // Menambahkan indikator login
                    'last_activity' => time() // Misalnya, untuk session timeout
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

    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        redirect('Administrator');
    }

    public function content()
    {
        $this->load->library('session');
        $username = $this->session->userdata('username');

        $data['jmlnotajual'] = $this->RekapDataModel->dailysales();
        $data['jmlnotarupiah'] = $this->RekapDataModel->dailysalesrp();
        $data['user'] = $this->AuthModel->get_user($username);
        $this->load->view('administrator/content', $data);
    }

    public function do_upload()
    {
        $config['upload_path'] = FCPATH . 'assets/img/uploads/';  // Path absolut dari root aplikasi
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2048;
        // $config['max_width'] = 1024;
        // $config['max_height'] = 768;
        $config['overwrite'] = true;

        $this->load->library('upload', $config);

        $files = $_FILES;
        $count = count($_FILES['photos']['name']);
        $error = array();
        $upload_data = array();

        // Ambil semua file yang ada di folder upload
        $files_in_directory = scandir($config['upload_path']);
        $image_files = array_filter($files_in_directory, function ($file) {
            return preg_match('/\.(gif|jpg|png|jpeg)$/i', $file);
        });

        // Hitung nomor urut terakhir dari file yang ada
        $last_number = 0;
        foreach ($image_files as $file) {
            preg_match('/_(\d+)\./', $file, $matches);
            if (isset($matches[1]) && $matches[1] > $last_number) {
                $last_number = (int)$matches[1];
            }
        }

        $today = date('dmY');

        for ($i = 0; $i < $count; $i++) {
            $_FILES['photos']['name'] = $files['photos']['name'][$i];
            $_FILES['photos']['type'] = $files['photos']['type'][$i];
            $_FILES['photos']['tmp_name'] = $files['photos']['tmp_name'][$i];
            $_FILES['photos']['error'] = $files['photos']['error'][$i];
            $_FILES['photos']['size'] = $files['photos']['size'][$i];

            // Menentukan nama file dengan menggunakan waktu saat ini dan nomor urut
            // $new_file_name =  $today .  '.' . pathinfo($files['photos']['name'][$i], PATHINFO_EXTENSION);

            // $new_file_name = 'mainBanner_' . $today . '_' . (++$last_number) . '.' . pathinfo($files['photos']['name'][$i], PATHINFO_EXTENSION);
            // $config['file_name'] = $new_file_name;

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('photos')) {
                $error[] = $this->upload->display_errors();
            } else {
                $upload_data[] = $this->upload->data();
            }
        }


        if (empty($error)) {
            $response = ['success' => true, 'message' => 'Upload berhasil!'];
            $this->session->set_flashdata('success', 'Upload berhasil!');
        } else {
            $response = ['success' => false, 'error' => implode('<br>', $error)];
            $this->session->set_flashdata('error', implode('<br>', $error));
        }

        echo json_encode($response);
    }

    public function get_default_images()
    {
        $path = FCPATH . 'assets/img/uploads/default/'; // Path ke folder upload
        $images = scandir($path);
        $image_files = array_filter($images, function ($file) use ($path) {
            return preg_match('/\.(gif|jpg|jpeg|png)$/i', $file) && is_file($path . $file);
        });

        $data = array('images' => array_values($image_files)); // Pastikan indeks array dimulai dari 0
        echo json_encode($data);
    }


    public function get_uploaded_images()
    {
        $path = FCPATH . 'assets/img/uploads/'; // Path ke folder upload
        $images = scandir($path);
        $image_files = array_filter($images, function ($file) use ($path) {
            return preg_match('/\.(gif|jpg|jpeg|png)$/i', $file) && is_file($path . $file);
        });

        $data = array('images' => array_values($image_files)); // Pastikan indeks array dimulai dari 0
        echo json_encode($data);
    }

    public function delete_image()
    {
        $data = json_decode(file_get_contents('php://input'), true);
        $image = $data['image'];

        $filePath = FCPATH . 'assets/img/uploads/' . $image;
        if (file_exists($filePath)) {
            unlink($filePath);
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'error' => 'File not found']);
        }
    }

    public function set_default_image()
    {
        $postData = json_decode(file_get_contents('php://input'), true);
        $images = $postData['images'];

        $sourcePath = FCPATH . 'assets/img/uploads/';
        $destinationPath = FCPATH . 'assets/img/uploads/default/';

        // Membuat folder default jika belum ada
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0777, true);
        }

        // Hapus semua gambar di folder default
        $defaultImages = glob($destinationPath . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
        foreach ($defaultImages as $imageFile) {
            unlink($imageFile);
        }

        $error = array();

        // Salin gambar baru ke folder default
        foreach ($images as $image) {
            $sourceFile = $sourcePath . $image;
            $destinationFile = $destinationPath . $image;

            if (file_exists($sourceFile)) {
                // Salin gambar ke folder default
                if (!copy($sourceFile, $destinationFile)) {
                    $error[] = 'Failed to copy image: ' . $image;
                }
            } else {
                $error[] = 'Source image not found: ' . $image;
            }
        }

        if (empty($error)) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'error' => implode('<br>', $error)]);
        }
    }

    function properti()
    {
        $this->load->library('session');
        $username = $this->session->userdata('username');

        $data['jmlnotajual'] = $this->RekapDataModel->dailysales();
        $data['jmlnotarupiah'] = $this->RekapDataModel->dailysalesrp();
        $data['user'] = $this->AuthModel->get_user($username);
        $this->load->view('administrator/adminproperti', $data);
    }
}


/* End of file Login.php */
