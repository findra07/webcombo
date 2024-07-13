<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RekapDataModel extends CI_Model
{

    public function sendmail()
    {
        $data = $this->db->query("SELECT * FROM visits_sendmail ORDER BY visits_sendmail.id DESC")->result();

        return $data;
    }

    public function get_sendmail($limit, $offset)
    {
        $this->db->limit($limit, $offset);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('visits_sendmail');
        return $query->result();
    }

    public function count_sendmail()
    {
        return $this->db->count_all('visits_sendmail');
    }

    public function delete_mail($id_mail)
    {
        $data = $this->db->query("DELETE FROM visits_sendmail WHERE visits_sendmail.id = '$id_mail'");
        return $data;
    }

    public function dailysales()
    {
        $this->db->select('COUNT(*) AS totalnota');
        $this->db->from('tabel_jual');
        $this->db->where('DATE(tabel_jual.tanggal_jual)', 'CURDATE()', false);
        $query = $this->db->get();

        $data = $query->row();
        return $data;
    }

    public function dailysalesrp()
    {
        // $data = $this->db->query("SELECT SUM(tabel_jual.total_jual) AS rupiah FROM tabel_jual WHERE DATE(tabel_jual.tanggal_jual) = CURDATE()")->row();
        // return $data;

        $this->db->select('SUM(tabel_jual.total_jual) AS rupiah');
        $this->db->from('tabel_jual');
        $this->db->where('DATE(tabel_jual.tanggal_jual)', 'CURDATE()', false);
        $query = $this->db->get();

        $data = $query->row();
        return $data;
    }
}

/* End of file RekapDataModel.php */
