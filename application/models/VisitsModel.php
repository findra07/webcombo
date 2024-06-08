<?php
defined('BASEPATH') or exit('No direct script access allowed');

class VisitsModel extends CI_Model
{

    public function record_visit()
    {
        date_default_timezone_set('Asia/Jakarta');

        $ip_address = $this->input->ip_address();

        $data = [
            'visited_at' => date('Y-m-d H:i:s'),
            'ip_Address' => $ip_address
        ];

        $this->db->insert('visits', $data);
    }

    public function get_visit_count()
    {
        return $this->db->count_all('visits');
    }

    public function get_visit_byday($date)
    {
        $this->db->like('visited_at', $date);
        $this->db->from('visits');
        return $this->db->count_all_results();
    }
}

/* End of file VisitsModel.php */
