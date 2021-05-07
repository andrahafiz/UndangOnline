<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('my_function_helper');
        $this->load->model('Mempelai/Tamu_Model');
        $this->load->model('Mempelai/Akun_Model');
    }
    // }
    public function index()
    {
        $akun = $this->Akun_Model->selectAll();
        $data = array(
            'judul' => 'Dashboard',
            'menu' => menu_admin(),
            'data_akun' => $akun
        );
        $this->load->view('Admin/layout/header', $data);
        $this->load->view('Admin/Akun/V_Akun', $data);
        $this->load->view('Admin/layout/footer');
    }
    public function ubah_status($id)
    {
        $this->Akun_Model->
    }
}
