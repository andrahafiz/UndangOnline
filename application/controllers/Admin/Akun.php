<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Mempelai/Tamu_Model');
        $this->load->helper('my_function_helper');
    }
    // }
    public function index()
    {
        $data = array(
            'judul' => 'Dashboard',
            'menu' => menu_admin(),
        );
        $this->load->view('Admin/layout/header', $data);
        $this->load->view('Admin/Akun/V_Akun');
        $this->load->view('Admin/layout/footer');
    }
}
