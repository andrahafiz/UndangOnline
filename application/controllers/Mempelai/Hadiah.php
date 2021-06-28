<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hadiah extends CI_Controller
{
    public $id_undangan = null;
    function __construct()
    {
        parent::__construct();
        $this->load->model('Temp_Model');
        $this->load->model('Hadiah_Model');
        $this->load->helper('my_function_helper');
        $this->id_undangan = $this->session->userdata('ID_Undangan');
        cekaccess();
    }
    // }
    public function index()
    {
        $data = array(
            'judul' => 'Hadiah',
            'menu' => menu_mempelai(),
            'data_hadiah' => $this->Hadiah_Model->selectbyid($this->id_undangan)
        );

        $this->load->view('Mempelai/layout/header', $data);
        $this->load->view('Mempelai/layout/navbar', $data);
        $this->load->view('Mempelai/Hadiah/View_Hadiah', $data);
        $this->load->view('Mempelai/layout/footer');
    }
}
