<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Undangan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Undangan_Model');
        $this->load->model('Tema_Model');
        $this->load->model('Galeri_Model');
        $this->load->model('Temp_Model');
    }

    public function index($id_undangan)
    {
        // // echo $this->Tema_Model->jumlahtema();
        // $id = 'UND1';
        $data = array(
            'judul' => 'Tema',
            'page' => 'view',
            'menu' => menu_mempelai(),
            'data' => $this->Undangan_Model->selectbyid($id_undangan),
            'data_foto' => $this->Galeri_Model->selectSingle($id_undangan, 'Foto'),
            'thema' => $this->Tema_Model->selectbyid($thema)
        );

        // var_dump($data['thema']->view_thema);
        $tema =  preg_replace("/.php/", "", ($data['thema']->view_thema));
        // die();
        // $this->load->view('Admin/layout/header', $data);
        // $this->load->view('Admin/Tema/V_Tema', $data['tema']);
        // $this->load->view('Admin/layout/footer');
        $this->load->view('Tema/' . $tema, $data);
    }

    public function Demo()
    {
        $this->load->view('Tema/TemaDemo');
    }

    public function PickTema($id_tema)
    {
        $id_undangan = $this->session->userdata('ID_Undangan');
        $data = ['ID_Tema' => $id_tema];
        $this->Undangan_Model->undangan_update($id_undangan, $data);
        redirect('Mempelai/Tema');
    }
}
