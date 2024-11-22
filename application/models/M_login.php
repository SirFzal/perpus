<?php
class M_login extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function proses_login($username)
    {
        // Query untuk mencari user berdasarkan username
        $this->db->where('username', $username);
        $query = $this->db->get('users'); // Asumsi nama tabel adalah 'users'

        // Jika user ditemukan, kembalikan data user
        if ($query->num_rows() == 1) {
            return $query->row_array();
        } else {
            return false;
        }
    }
}
