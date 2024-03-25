<?php
class User_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function login($nama, $password) {
        
        $query = $this->db->get_where('users', array('nama' => $nama, 'password' => $password));
        return $query->row_array();
    }
}
?>
