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
        // $this->load->database();

        // // Inisialisasi data untuk pesan error dan sukses
        // $data['error'] = "";
        // $data['success'] = "";
        // // $data['is_post'] = false;

        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //     // $data['is_post'] = true; // Set flag to true when handling POST request
        //     $name = $this->input->post('name', TRUE);
        //     $email = $this->input->post('email', TRUE);
        //     $subject = $this->input->post('subject', TRUE);
        //     $message = $this->input->post('message', TRUE);

        //     // Validasi
        //     $error_message = "";
        //     if (empty($name) || empty($subject) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //         $data['error'] = "Mohon Untuk Melengkapi Form Isian.";
        //     } else if (strlen($name) > 100 || strlen($subject) > 100 || strlen($message) > 500) {
        //         $data['error'] = "Isian terlalu panjang.";
        //     } else {
        //         $insert_data = array(
        //             'name' => $name,
        //             'email' => $email,
        //             'subject' => $subject,
        //             'message' => $message
        //         );

        //         if ($this->db->insert('visits_sendmail', $insert_data)) {
        //             $data['success'] = "Data berhasil disimpan.";
        //         } else {
        //             $data['error'] = "Terjadi kesalahan saat menyimpan data.";
        //         }
        //     }
        // }

        // // Load view dengan data yang sudah disiapkan
        // $this->load->view('contact', $data);

        $this->load->database();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $this->input->post('name', TRUE);
            $email = $this->input->post('email', TRUE);
            $subject = $this->input->post('subject', TRUE);
            $message = $this->input->post('message', TRUE);

            // Validasi
            if (empty($name) || empty($subject) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->session->set_flashdata('error', 'Mohon Untuk Melengkapi Form Isian.');
            } else if (strlen($name) > 100 || strlen($subject) > 100 || strlen($message) > 500) {
                $this->session->set_flashdata('error', 'Isian terlalu panjang.');
            } else {
                $insert_data = array(
                    'name' => $name,
                    'email' => $email,
                    'subject' => $subject,
                    'message' => $message
                );

                if ($this->db->insert('visits_sendmail', $insert_data)) {
                    $this->session->set_flashdata('success', 'Data berhasil disimpan.');
                } else {
                    $this->session->set_flashdata('error', 'Terjadi kesalahan saat menyimpan data.');
                }
            }

            // Redirect to the same page to show flash data
            redirect('contact');
        }

        // Load view dengan data yang sudah disiapkan
        $this->load->view('contact');
    }
}

/* End of file Contact.php */
