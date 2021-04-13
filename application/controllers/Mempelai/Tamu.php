<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tamu extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Mempelai/Tamu_Model');
        $this->load->helper('my_function_helper');
        cekaccess();
    }
    // }
    public function index()
    {
        $tamu = $this->Tamu_Model->selectAll();
        $data = array(
            'judul' => 'Tamu Undangan',
            'menu' => menu_mempelai(),
            'tamu' => $tamu
        );

        $this->load->view('Mempelai/layout/header', $data);
        $this->load->view('Mempelai/Tamu/View_Tamu', $data);
        $this->load->view('Mempelai/layout/footer');
    }
}
