<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Acara extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Mempelai/Acara_Model');
        $this->load->helper('my_function_helper');
        cekaccess();
    }
    // }
    public function index()
    {
        // $this->form_validation->set_rules('tgl_akad', 'Tanggal Akad ', 'required');
        // $this->form_validation->set_rules('ts_akad', 'Waktu Mulai Akad', 'required');
        // $this->form_validation->set_rules('tf_akad', 'Waktu Berakhir Akad', 'required');
        // $this->form_validation->set_rules('tpt_akad', 'Tempat Akad', 'required');
        // $this->form_validation->set_rules('alamat_akad', 'Alamat ', 'required');
        // $this->form_validation->set_rules('tgl_resepsi', 'Tanggal Resepsi', 'required');
        // $this->form_validation->set_rules('ts_resepsi', 'Waktu Mulai Resepsi', 'required|numeric');
        // $this->form_validation->set_rules('tf_resepsi', 'Waktu Berakhir Resepsi', 'required');
        // $this->form_validation->set_rules('tpt_resepsi', 'Tempat Resepsi ', 'required');
        // $this->form_validation->set_rules('alamat_resepsi', 'Alamat Resepsi ', 'required');
        $this->_formvalidation();
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'judul' => 'Acara',
                'menu' => menu_mempelai()
            );

            $this->load->view('Mempelai/layout/header', $data);
            $this->load->view('Mempelai/Acara/Acara_View');
            $this->load->view('Mempelai/layout/footer');
        } else {

            $data = [
                'TglAkad' =>  htmlspecialchars($this->input->post('tgl_akad', true)),
                'WaktuMulaiAkad' =>  htmlspecialchars($this->input->post('ts_akad', true)),
                'WaktuSelesaiAkad' =>  htmlspecialchars($this->input->post('ts_akad', true)),
                'TempatAkad' => htmlspecialchars($this->input->post('tpt_akad', true)),
                'AlamatAkad' => htmlspecialchars($this->input->post('alamat_akad', true)),
                'TglResepsi' => htmlspecialchars($this->input->post('tgl_resepsi', true)),
                'WaktuMulaiResepsi' =>  htmlspecialchars($this->input->post('ts_resepsi', true)),
                'WaktuSelesaiResepsi' =>  htmlspecialchars($this->input->post('ts_resepsi', true)),
                'TempatResepsi' => htmlspecialchars($this->input->post('tpt_resepsi', true)),
                'AlamatResepsi' => htmlspecialchars($this->input->post('alamat_resepsi', true)),
            ];
            $this->Acara_Model->tambah_data_acara($data);
            $this->session->set_flashdata('message', ' <div class="alert alert-success background-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="icofont icofont-close-line-circled text-white"></i>
                </button>
                <strong>Sukses!</strong> Data mempelai telah berubah
            </div>');

            redirect('Mempelai/Acara');
        }
    }

    private function _formvalidation()
    {
        $this->form_validation->set_rules('tgl_akad', 'Tanggal Akad', 'required|trim');
        $this->form_validation->set_rules('ts_akad', 'Tanggal Mulai Akad', 'required|trim');
        $this->form_validation->set_rules('tf_akad', 'Tanggal Selesai Akad', 'required|trim');
        $this->form_validation->set_rules('tpt_akad', 'Tempat Akad', 'required|trim');
        $this->form_validation->set_rules('alamat_akad', 'Alamat Tempat Akad', 'required|trim');
        $this->form_validation->set_rules('tgl_resepsi', 'Tanggal Resepsi', 'required|trim');
        $this->form_validation->set_rules('ts_resepsi', 'Tanggal Mulai Resepsi', 'required|trim');
        $this->form_validation->set_rules('tf_resepsi', 'Tanggal Selesai Resepsi', 'required|trim');
        $this->form_validation->set_rules('tpt_resepsi', 'Tempat Resepsi', 'required|trim');
        $this->form_validation->set_rules('alamat_resepsi', 'Alamat Tempat Resepsi', 'required|trim');
    }
}
