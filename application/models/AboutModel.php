<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AboutModel extends CI_Model
{

    public function ourteam()
    {

        $data = $this->db->query("SELECT tk.id_karyawan, tk.id_jabatan, tk.nama_karyawan, tk.nama_panggil, tj.nama_jabatan, tk.status, tk.foto
        FROM tabel_karyawan tk 
        JOIN tabel_jabatan tj ON tj.id_jabatan = tk.id_jabatan
        where tk.status='0' and tk.status_karyawan='0' 
        ORDER BY tk.id_jabatan ASC")->result();

        return $data;
    }
}

/* End of file AboutModel.php */
