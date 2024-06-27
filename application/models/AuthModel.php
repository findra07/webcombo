<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthModel extends CI_Model
{

    public function insertUser($data)
    {
        return $this->db->insert('visits_user', $data);
    }

    public function getUserByUsername($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('visits_user');
        return $query->row();
    }

    public function updateLastLogin($username)
    {
        $this->db->where('username', $username);
        $this->db->update('visits_user', array('last_login' => date('Y-m-d H:i:s')));
    }

    public function get_user($username)
    {
        $this->db->select('*');
        $this->db->from('visits_user');
        $this->db->where('username', $username);
        $query = $this->db->get();

        return $query->row();
    }
}

/* End of file AuthModel.php */
