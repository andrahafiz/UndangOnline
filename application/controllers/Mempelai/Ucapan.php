<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ucapan extends CI_Controller
{
    public $id_undangan = null;
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ucapan_Model');
        $this->load->helper('my_function_helper');
        $this->id_undangan = $this->session->userdata('ID_Undangan');
        cekaccess();
    }
    // }
    public function index()
    {
        $data = array(
            'judul' => 'Ucapan Selamat',
            'menu' => menu_mempelai(),
            'data_ucapan' => $this->Ucapan_Model->select_all($this->id_undangan)
        );
        $this->load->view('Mempelai/layout/header', $data);
        $this->load->view('Mempelai/layout/navbar', $data);
        $this->load->view('Mempelai/Ucapan/View_Ucapan', $data);
        $this->load->view('Mempelai/layout/footer');
    }
    public function ubah_status($id, $status)
    {
        $this->Ucapan_Model->ubah_status_ucapan($id, $status);
        redirect('Mempelai/Ucapan');
    }
}
