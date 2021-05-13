<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Undangan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('my_function_helper');
        $this->load->model('Tamu_Model');
        $this->load->model('Akun_Model');
        $this->load->model('Undangan_Model');
        cekaccess_admin();
    }
    // }
    public function index()
    {
        $undangan = $this->Undangan_Model->selectAll();
        $data = array(
            'judul' => 'Undangan',
            'menu' => menu_admin(),
            'data_akun' => $undangan
        );
        $this->load->view('Admin/layout/header', $data);
        $this->load->view('Admin/Undangan/V_Undangan', $data);
        $this->load->view('Admin/layout/footer');
    }
    public function Detail($id_undangan)
    {
        // $detail = $this->Undangan_Model->selectbyid($id_undangan);
        $data = array(
            'judul' => 'Detail Undangan',
            'menu' => menu_admin(),
            'detail_data' => $this->Undangan_Model->selectbyid($id_undangan)
        );
        // echo $id_undangan;
        // var_dump($data['detail_data']->NoHp_akun);
        // die;
        $this->load->view('Admin/layout/header', $data);
        $this->load->view('Admin/Undangan/V_Detailundangan', $data['detail_data']);
        $this->load->view('Admin/layout/footer');
    }
    public function ubah_status($id, $status)
    {
        $this->Akun_Model->ganti_status($id, $status);
        // echo $id;
        // die();
        redirect('Admin/Udangan');
    }
}
