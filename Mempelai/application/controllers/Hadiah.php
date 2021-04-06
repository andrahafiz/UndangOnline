<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hadiah extends CI_Controller
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
            'judul' => 'Hadiah',
            'menu' => menu_mempelai()
        );

        $this->load->view('layout/header', $data);
        $this->load->view('View_Hadiah');
        $this->load->view('layout/footer');
    }
}
