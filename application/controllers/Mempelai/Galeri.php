<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Temp_Model');
        $this->load->helper('my_function_helper');
    }
    // }
    public function index()
    {
        $data = array(
            'judul' => 'Galeri',
            'menu' => menu_mempelai()
        );

        $this->load->view('layout/header', $data);
        $this->load->view('Dashboard');
        $this->load->view('layout/footer');
    }
}
