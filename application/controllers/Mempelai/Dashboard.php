<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Tamu_Model');
        $this->load->helper('my_function_helper');
        cekaccess();
    }
    // }
    public function index()
    {

        // var_dump($result);
        $id_undangan = $this->session->userdata('ID_Undangan');
        $tamu = $this->Tamu_Model->selectbyid($id_undangan);
        $data = array(
            'judul' => 'Dashboard',
            'menu' => menu_mempelai(),
            'jml_tamu' => $this->Tamu_Model->jumlahtamu($id_undangan),
            'tamu' => $tamu
        );

        $this->load->view('Mempelai/layout/header', $data);
        $this->load->view('Mempelai/Dashboard', $data);
        $this->load->view('Mempelai/layout/footer');
    }
}
