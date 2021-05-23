<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni extends CI_Controller
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
            'judul' => 'Akun',
            'menu' => menu_admin(),
            'data_akun' => $akun
        );
        $this->load->view('Admin/layout/header', $data);
        $this->load->view('Admin/Testimoni/V_Testimoni', $data);
        $this->load->view('Admin/layout/footer');
    }
    public function ubah_status($id, $status)
    {
        $this->Akun_Model->ganti_status($id, $status);
        // echo $id;
        // die();
        redirect('Admin/Akun');
    }
}
