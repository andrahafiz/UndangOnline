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
        redirect('Admin/Tema');
    }

    public function Detail($id_thema)
    {

        $data = array(
            'judul' => 'Detail Undangan',
            'menu' => menu_admin(),
            'detail_data' => $this->data_tema_singel($id_thema)
        );

        $this->load->view('Admin/layout/header', $data);
        $this->load->view('Admin/Tema/V_DetailTema', $data['detail_data']);
        $this->load->view('Admin/layout/footer');
    }
    public function Edit($id_thema)
    {

        $data = array(
            'judul' => 'Edit Tema',
            'menu' => menu_admin(),
            'detail_data' => $this->data_tema_singel($id_thema)
        );

        $this->load->view('Admin/layout/header', $data);
        $this->load->view('Admin/Tema/V_EditTema', $data['detail_data']);
        $this->load->view('Admin/layout/footer');
    }
    public function upload_foto()
    {
        $data = [
            'nama_thema' => htmlspecialchars($this->input->post('nama_thema', true)),
            'view_thema' => htmlspecialchars($this->input->post('view_tema', true)),
        ];
        $uploadimage = $_FILES['image']['name'];
        if ($uploadimage) {
            $config['upload_path'] = './assets/Mempelai/images/mempelai/'; //path folder
            $config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size']     = '5000';
            // $config['remove_spaces'] = TRUE;
            // $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            //     if($this->upload->do_upload('image'))[

            //     ]
        }
    }

    private function data_tema_singel($id_undangan)
    {
        return $this->Tema_Model->selectbyid($id_undangan);
    }
}
