<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('VisitsModel');
    // }


    public function index()
    {
        $this->load->database();

        // Inisialisasi data untuk pesan error dan sukses
        $data['error'] = "";
        $data['success'] = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $this->input->post('name', TRUE);
            $email = $this->input->post('email', TRUE);
            $subject = $this->input->post('subject', TRUE);
            $message = $this->input->post('message', TRUE);

            // Validasi
            $error_message = "";
            if (empty($name) || empty($subject) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $data['error'] = "Mohon Untuk Melengkapi Form Isian.";
            } else if (strlen($name) > 100 || strlen($subject) > 100 || strlen($message) > 500) {
                $data['error'] = "Isian terlalu panjang.";
            } else {
                $insert_data = array(
                    'name' => $name,
                    'email' => $email,
                    'subject' => $subject,
                    'message' => $message
                );

                if ($this->db->insert('visits_sendmail', $insert_data)) {
                    $data['success'] = "Data berhasil disimpan.";
                } else {
                    $data['error'] = "Terjadi kesalahan saat menyimpan data.";
                }
            }
        }

        // Load view dengan data yang sudah disiapkan
        $this->load->view('contact', $data);
    }
}

/* End of file Contact.php */
