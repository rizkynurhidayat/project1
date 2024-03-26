<?php
class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
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
            $status = $user['status'];
            $password = $user['password'];
            $nama = $user['nama'];
            $univ = $user['univ'];
            $prodi = $user['prodi'];
            
            $data =  array(
                'nama' => $nama,
                'status' => $status,
                'univ' => $univ,
                'prodi' => $prodi,
                'password' => $password,
                'logged_in' => TRUE // Set session "logged_in" menjadi TRUE
            );
            
            $this->session->set_userdata($data); // Set data user ke dalam session
            $this->load->view('announcement', $data);
        } else {
            // Gagal login, arahkan kembali ke halaman login
            $this->session->set_flashdata('error', 'Nama atau password salah.');
            redirect('auth');
        }
    }
    
    public function logout() {
        // Hapus semua data sesi
        $this->session->sess_destroy();
        redirect('auth');
    }
}
?>
