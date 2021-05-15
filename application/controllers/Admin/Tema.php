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
    public function ubah_status($id, $status)
    {
        $this->Tema_Model->ganti_status($id, $status);
        // echo $id;
        // die();
        redirect('Admin/Tema');
    }

    public function Detail($id_undangan)
    {
        // $detail = $this->Undangan_Model->selectbyid($id_undangan);
        $data = array(
            'judul' => 'Detail Undangan',
            'menu' => menu_admin(),
            'detail_data' => $this->Tema_Model->selectbyid($id_undangan)
        );
        // echo $id_undangan;
        // var_dump($data['detail_data']->NoHp_akun);
        // die;
        $this->load->view('Admin/layout/header', $data);
        $this->load->view('Admin/Tema/V_DetailTema', $data['detail_data']);
        $this->load->view('Admin/layout/footer');
    }
}
