<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('my_function_helper');
        $this->load->model('Tamu_Model');
        $this->load->model('Akun_Model');
    }
    // }
    public function GantiPassword()
    {
        $akun = $this->Akun_Model->selectAll();
        $data = array(
            'judul' => 'Ganti Password',
            'menu' => menu_mempelai(),

        );
        $this->load->view('Mempelai/layout/header', $data);
        $this->load->view('Mempelai/layout/navbar', $data);
        $this->load->view('Mempelai/Profile/V_GantiPassword', $data);
        $this->load->view('Mempelai/layout/footer');
    }
    public function ubah_status($id, $status)
    {
        $this->Akun_Model->ganti_status($id, $status);
        // echo $id;
        // die();
        redirect('Admin/Akun');
    }
}
