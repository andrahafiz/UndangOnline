<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tema extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Tema_Model');
        $this->load->helper('my_function_helper');
    }
    // }
    public function index()
    {
        // echo $this->Tema_Model->jumlahtema();
        $data = array(
            'judul' => 'Tema',
            'menu' => menu_admin(),
            'tema' => $this->Tema_Model->selectAll()

        );
        $this->load->view('Admin/layout/header', $data);
        $this->load->view('Admin/Tema/V_Tema', $data['tema']);
        $this->load->view('Admin/layout/footer');
    }
}
