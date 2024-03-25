<?php
class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper('url');
    }
    
    public function index() {
        $this->load->helper('form'); 
        $this->load->view('login');
    }
    
    public function login() {
        $nama = $this->input->post('nama');
        $password = $this->input->post('password');
        
        $user = $this->User_model->login($nama, $password);
        
        if ($user) {
            // Berhasil login, arahkan ke halaman pengumuman
            $status = $user['status']; // Ambil status seleksi dari database
            $nama = $user['nama']; // Ambil status seleksi dari database
           
            $univ = $user['univ']; // Ambil status seleksi dari database
            $prodi = $user['prodi']; 
            // Ambil status seleksi dari database
            $data =  array(
                'nama' => $nama,
                'status' => $status,
                'password' => $password,
                'univ' => $univ,
                'prodi' => $prodi,
              
            ); // Ambil status seleksi dari database
            
            $this->load->view('announcement', $data);
        } else {
            // Gagal login, arahkan kembali ke halaman login
            redirect('auth');
        }
    }
}
?>
