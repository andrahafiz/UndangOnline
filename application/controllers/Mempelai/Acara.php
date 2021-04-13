<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Acara extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Temp_Model');
        $this->load->helper('my_function_helper');
        cekaccess();
    }
    // }
    public function index()
    {
        $this->form_validation->set_rules('tgl_akad', 'Tanggal Akad ', 'required');
        $this->form_validation->set_rules('ts_akad', 'Waktu Mulai Akad', 'required');
        $this->form_validation->set_rules('tf_akad', 'Waktu Berakhir Akad', 'required');
        $this->form_validation->set_rules('tpt_akad', 'Tempat Akad', 'required');
        $this->form_validation->set_rules('alamat_akad', 'Alamat ', 'required');
        $this->form_validation->set_rules('tgl_resepsi', 'Tanggal Resepsi', 'required');
        $this->form_validation->set_rules('ts_resepsi', 'Waktu Mulai Resepsi', 'required|numeric');
        $this->form_validation->set_rules('tf_resepsi', 'Waktu Berakhir Resepsi', 'required');
        $this->form_validation->set_rules('tpt_resepsi', 'Tempat Resepsi ', 'required');
        $this->form_validation->set_rules('alamat_resepsi', 'Alamat Resepsi ', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'judul' => 'Acara',
                'menu' => menu_mempelai()
            );

            $this->load->view('Mempelai/layout/header', $data);
            $this->load->view('Mempelai/Acara/Acara_View');
            $this->load->view('Mempelai/layout/footer');
        } else {
            echo "bisa";
        }
    }
}
