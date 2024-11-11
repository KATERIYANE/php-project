<?php
class Login_model extends CI_Model
{
    public function __construct()
    {
      parent::__construct();
      $this->table = 'users';
    }

    public function login($where) {
        $query = $this->db->get_where($this->table, $where);
        return $query->row();

    }
}