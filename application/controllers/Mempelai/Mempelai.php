<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mempelai extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Mempelai/Mempelai_Model');
        $this->load->helper('my_function_helper');
        cekaccess();
    }
    // }
    public function index()
    {
        $id =   $this->session->userdata('ID');
        $this->_formvalidation();
        // $this->form_validation->set_rules('foto_mpria', 'Foto Mempelai Pria', 'required');
        // $this->form_validation->set_rules('nama_mpria', 'Nama Lengkap Mempelai Pria', 'required');
        // $this->form_validation->set_rules('namal_pria', 'Nama Panggilan Mempelai Pria', 'required');
        // $this->form_validation->set_rules('namaortuayah_mpria', 'Nama Ayah ( Mempelai Pria )', 'required');
        // $this->form_validation->set_rules('namaortuibu_mpria', 'Nama Ibu ( Mempelai Pria )', 'required');
        // // $this->form_validation->set_rules('foto_mwanita', 'Foto Mempelai Wanita', 'required');
        // $this->form_validation->set_rules('nama_mwanita', 'Nama Lengkap Mempelai Wanita', 'required|numeric');
        // $this->form_validation->set_rules('namal_mwanita', 'Nama Panggilan Mempelai Wanita', 'required');
        // $this->form_validation->set_rules('namaortuayah_mwanita', 'Nama Ayah ( Mempelai Wanita )', 'required');
        // $this->form_validation->set_rules('namaortuibu_mwanita', 'Nama Ibu ( Mempelai Wanita )', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'judul' => 'Mempelai',
                'menu' => menu_mempelai(),
                'data_mempelai' => $this->Mempelai_Model->selectbyid($id)
            );

            $this->load->view('Mempelai/layout/header', $data);
            $this->load->view('Mempelai/Mempelai/Mempelai_View');
            $this->load->view('Mempelai/layout/footer');
        } else {

            $id = htmlspecialchars($this->input->post('id_mempelai', true));
            $data = [
                'Nama_MPria' =>  htmlspecialchars($this->input->post('nama_mpria', true)),
                'NoHp_MPria' =>  htmlspecialchars($this->input->post('nohp_mpria', true)),
                'Alamat_MPria' =>  htmlspecialchars($this->input->post('alamat_mpria', true)),
                'Panggilan_MPria' =>  htmlspecialchars($this->input->post('namal_mpria', true)),
                'NamaOrtu_Ayah_MPria' =>  htmlspecialchars($this->input->post('namaortuayah_mpria', true)),
                'NamaOrtu_Ibu_MPria' =>  htmlspecialchars($this->input->post('namaortuibu_mpria', true)),
                'Foto_MPria' => 'default.jpg',
                'Nama_MWanita' =>  htmlspecialchars($this->input->post('nama_mwanita', true)),
                'NoHp_MWanita' =>  htmlspecialchars($this->input->post('nohp_mwanita', true)),
                'Alamat_MWanita' =>  htmlspecialchars($this->input->post('alamat_mwanita', true)),
                'Panggilan_MWanita' =>  htmlspecialchars($this->input->post('namal_mwanita', true)),
                'NamaOrtu_Ayah_MWanita' =>  htmlspecialchars($this->input->post('namaortuayah_mwanita', true)),
                'NamaOrtu_Ibu_MWanita' =>  htmlspecialchars($this->input->post('namaortuibu_mwanita', true)),
                'Foto_MWanita' => 'default.jpg',
            ];

            $this->Mempelai_Model->update($id, $data);
            $this->session->set_flashdata('message', ' <div class="alert alert-success background-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="icofont icofont-close-line-circled text-white"></i>
                </button>
                <strong>Sukses!</strong> Data mempelai telah berubah
            </div>');

            redirect('Mempelai/Mempelai');
        }
    }
    public function edit()
    {
        // echo "tidak";
        $id = htmlspecialchars($this->input->post('nama_mpria', true));
        //     $data = [
        //         'Nama_MPria' =>  htmlspecialchars($this->input->post('nama_mpria', true)),
        //         'NoHp_MPria' =>  htmlspecialchars($this->input->post('nohp_mpria', true)),
        //         'Alamat_MPria' =>  htmlspecialchars($this->input->post('alamat_mpria', true)),
        //         'Panggilan_MPria' =>  htmlspecialchars($this->input->post('namal_mpria', true)),
        //         'NamaOrtu_Ayah_MPria' =>  htmlspecialchars($this->input->post('namaortuayah_mpria', true)),
        //         'NamaOrtu_Ibu_MPria' =>  htmlspecialchars($this->input->post('namaortuibu_mpria', true)),
        //         'Foto_MPria' => 'default.jpg',
        //         'Nama_MWanita' =>  htmlspecialchars($this->input->post('nama_mwanita', true)),
        //         'NoHp_MWanita' =>  htmlspecialchars($this->input->post('nohp_mwanita', true)),
        //         'Alamat_MWanita' =>  htmlspecialchars($this->input->post('alamat_mwanita', true)),
        //         'Panggilan_MWanita' =>  htmlspecialchars($this->input->post('namal_mwanita', true)),
        //         'NamaOrtu_Ayah_MWanita' =>  htmlspecialchars($this->input->post('namaortuayah_mwanita', true)),
        //         'NamaOrtu_Ibu_MWanita' =>  htmlspecialchars($this->input->post('namaortuibu_mwanita', true)),
        //         'Foto_MWanita' => 'default.jpg',
        //     ];
        var_dump($id);
        die;
        //     $this->Mempelai_Model->update($id, $data);
        //     $this->session->set_flashdata('message', ' <div class="alert alert-success background-success">
        //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //         <i class="icofont icofont-close-line-circled text-white"></i>
        //     </button>
        //     <strong>Sukses!</strong> Data anda telah berubah
        // </div>');

        //     // redirect('Mempelai/Mempelai');
    }

    private function _formvalidation()
    {
        // $this->form_validation->set_rules('foto_mpria', 'Foto Mempelai Pria', 'required');
        $this->form_validation->set_rules('nama_mpria', 'Nama Lengkap Mempelai Pria', 'required');
        $this->form_validation->set_rules('namal_mpria', 'Nama Panggilan Mempelai Pria', 'required');
        $this->form_validation->set_rules('namaortuayah_mpria', 'Nama Ayah ( Mempelai Pria )', 'required');
        $this->form_validation->set_rules('namaortuibu_mpria', 'Nama Ibu ( Mempelai Pria )', 'required');
        $this->form_validation->set_rules('alamat_mpria', 'Alamat ( Mempelai Pria )', 'required');
        $this->form_validation->set_rules('nohp_mpria', 'Nomor Hp ( Mempelai Pria )', 'required');
        // $this->form_validation->set_rules('foto_mwanita', 'Foto Mempelai Wanita', 'required');
        $this->form_validation->set_rules('nama_mwanita', 'Nama Lengkap Mempelai Wanita', 'required');
        $this->form_validation->set_rules('namal_mwanita', 'Nama Panggilan Mempelai Wanita', 'required');
        $this->form_validation->set_rules('namaortuayah_mwanita', 'Nama Ayah ( Mempelai Wanita )', 'required');
        $this->form_validation->set_rules('namaortuibu_mwanita', 'Nama Ibu ( Mempelai Wanita )', 'required');
        $this->form_validation->set_rules('alamat_mwanita', 'Alamat ( Mempelai Pria )', 'required');
        $this->form_validation->set_rules('nohp_mwanita', 'Nomor Hp ( Mempelai Wanita )', 'required');
    }

    private function _dataIn()
    {
        // $data = [
        //     'ID_akun' =>  htmlspecialchars($this->input->post('nama_mpria', true)),
        //     'Username' => htmlspecialchars($this->input->post('username', true)),
        //     'Email_akun' => htmlspecialchars($email),
        //     'NoHp_akun' => htmlspecialchars($this->input->post('wa', true)),
        //     'Password_akun' => password_hash($this->input->post('Password'), PASSWORD_DEFAULT),
        //     'Created_akun' => time(),
        //     'Status_akun' => '0'
        // ];
    }
}
