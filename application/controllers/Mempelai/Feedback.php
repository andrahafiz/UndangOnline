<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Feedback extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Acara_Model');
        $this->load->helper('my_function_helper');
        cekaccess();
    }
    public function index()
    {
        // var_dump($result);
        $id_undangan = $this->session->userdata('ID_Undangan');
        $data = array(
            'judul' => 'Feedback',
            'menu' => menu_mempelai(),
        );

        $this->load->view('Mempelai/layout/header', $data);
        $this->load->view('Mempelai/Feedback/V_Feedback', $data);
        $this->load->view('Mempelai/layout/footer');
    }
}
