<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('my_function_helper');
        $this->load->model('Tamu_Model');
        $this->load->model('Akun_Model');
        cekaccess_admin();
    }
    // }
    public function index()
    {
        $akun = $this->Akun_Model->selectAll();
        $data = array(
            'judul' => 'Dashboard',
            'menu' => menu_admin(),
            'data_akun' => $akun,
            'jumlah_akun' => $this->Akun_Model->jumlahtamu()
        );
        $this->load->view('Admin/layout/header', $data);
        $this->load->view('Admin/Dashboard', $data);
        $this->load->view('Admin/layout/footer');
    }
}
