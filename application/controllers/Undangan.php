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
        // echo $id_undangan;
        // // echo $this->Tema_Model->jumlahtema();
        // $id = 'UND1';
        $data['data_undangan'] = $this->Undangan_Model->selectbyid_undangan($id_undangan);
        if ($data['data_undangan']) {
            // echo 'ada';
            $data['id_tema'] = $data['data_undangan']->ID_Tema;
            $data['id_undangan'] = $data['data_undangan']->ID_Undangan;
            $data['tema'] = $this->Tema_Model->selectbyid($data['id_tema'])->view_thema;
            // var_dump($data['tema']);
            // die;
            // $data = array(
            //     'judul' => 'Undangan',
            //     'page' => 'view',
            //     'data' => $this->Undangan_Model->selectbyid($id_undangan),
            $data['data_foto'] = $this->Galeri_Model->selectSingle($id_undangan, 'Foto');
            //     'thema' => $this->Tema_Model->selectbyid()
            // );

            // var_dump($data['thema']->view_thema);
            $tema =  preg_replace("/.php/", "", ($data['tema']));
            // die();
            // $this->load->view('Admin/layout/header', $data);
            // $this->load->view('Admin/layout/navbar', $data);
            // $this->load->view('Admin/Tema/V_Tema', $data['tema']);
            // $this->load->view('Admin/layout/footer');
            $this->load->view('Tema/' . $tema, $data);
        } else {
            redirect('');
        }
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
