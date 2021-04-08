<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mempelai extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Temp_Model');
        $this->load->helper('my_function_helper');
    }
    // }
    public function index()
    {
        $this->form_validation->set_rules('foto_mpria', 'Foto Mempelai Pria', 'required');
        $this->form_validation->set_rules('nama_mpria', 'Nama Lengkap Mempelai Pria', 'required');
        $this->form_validation->set_rules('namal_pria', 'Nama Panggilan Mempelai Pria', 'required');
        $this->form_validation->set_rules('namaortuayah_mpria', 'Nama Ayah ( Mempelai Pria )', 'required');
        $this->form_validation->set_rules('namaortuibu_mpria', 'Nama Ibu ( Mempelai Pria )', 'required');
        $this->form_validation->set_rules('foto_mwanita', 'Foto Mempelai Wanita', 'required');
        $this->form_validation->set_rules('nama_mwanita', 'Nama Lengkap Mempelai Wanita', 'required|numeric');
        $this->form_validation->set_rules('namal_mwanita', 'Nama Panggilan Mempelai Wanita', 'required');
        $this->form_validation->set_rules('namaortuayah_mwanita', 'Nama Ayah ( Mempelai Wanita )', 'required');
        $this->form_validation->set_rules('namaortuibu_mwanita', 'Nama Ibu ( Mempelai Wanita )', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'judul' => 'Mempelai',
                'menu' => menu_mempelai()
            );

            $this->load->view('Mempelai/layout/header', $data);
            $this->load->view('Mempelai/Mempelai/Mempelai_View');
            $this->load->view('Mempelai/layout/footer');
        } else {
            echo "bisa";
        }
    }
}
