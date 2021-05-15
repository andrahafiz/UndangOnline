<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mempelai extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Mempelai_Model');
        $this->load->helper('my_function_helper');
        cekaccess();
    }
    // }
    public function index()
    {
        $id =   $this->session->userdata('ID_Akun');
        $this->_formvalidation();
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'judul' => 'Mempelai',
                'menu' => menu_mempelai(),
                'data_mempelai' => $this->data_mempelai($id)
            );
            $this->load->view('Mempelai/layout/header', $data);
            $this->load->view('Mempelai/Mempelai/Mempelai_View');
            $this->load->view('Mempelai/layout/footer');
        } else {
            $id = htmlspecialchars($this->input->post('id_mempelai', true));
            $this->Mempelai_Model->update($id, $this->data());
            $this->testupload();
            $this->pesan('sukses', 'Data mempelai telah diubah');
            redirect('Mempelai/Mempelai');
        }
    }

    public function data_mempelai($id)
    {
        return $this->Mempelai_Model->selectbyid($id);
    }

    public function testupload()
    {
        $id =   $this->session->userdata('ID_Akun');
        $id_mempelai = $this->input->post('id_mempelai');
        $data = array(
            'datamempelai' => (array) $this->data_mempelai($id)


        );
        // var_dump($data['datamempelai']);
        // die;

        $config['upload_path'] = './assets/Mempelai/images/mempelai/'; //path folder
        $config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size']     = '5000';
        // $config['remove_spaces'] = TRUE;
        // $config['encrypt_name'] = TRUE;

        $namefoto = array("MPria", "MWanita");
        $this->load->library('upload', $config);
        // echo count($namefoto);
        // die;
        for ($i = 0; $i < count($namefoto); $i++) {
            // echo 'foto_' . $namefoto[$i];

            // echo $namefoto[$i];
            // die;

            if (!empty($_FILES['foto_' . $namefoto[$i]]['name'])) {
                // echo "ada isi";
                if (!$this->upload->do_upload('foto_' . $namefoto[$i])) {
                    //Kondisi Upload Gagal
                    $this->pesan('gagal_foto', $this->upload->display_errors());
                } else {
                    //Kondisi Upload Berhasil
                    // echo "Foto berhasil di upload";
                    // $new_image = $this->upload->data('file_name');
                    // echo $new_image;
                    $old_image = $data['datamempelai']['Foto_' . $namefoto[$i]];
                    // var_dump($old_image);
                    // var_dump($data['datamempelai']['Foto_' . $namefoto[$i]]);
                    // die;
                    if ($old_image != Null) {
                        unlink(FCPATH . 'assets/Mempelai/images/mempelai/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    // echo $new_image;
                    $this->db->set('Foto_' . $namefoto[$i], $new_image);
                    $this->db->where('ID_Mempelai', $id_mempelai);
                    $this->db->update('tb_mempelai');
                }
            }
        }
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

    function pesan($tipe, $pesan)
    {
        $template = "";
        switch ($tipe) {
            case 'sukses':
                $template = '<div class="alert alert-success background-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="icofont icofont-close-line-circled text-white"></i>
                            </button>
                            <strong>Sukses !</strong> ' . $pesan . '
                            </div>';
                break;
            case 'gagal':
                $template = '<div class="alert alert-danger background-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="icofont icofont-close-line-circled text-white"></i>
                            </button>
                            <strong>Sukses !</strong> ' . $pesan . '
                            </div>';

                break;
            case 'gagal_foto':
                $template = '<div class="alert alert-danger background-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="icofont icofont-close-line-circled text-white"></i>
                                </button>
                                <strong>Sukses !</strong> ' . $pesan . '
                                </div>';

                break;

            default:

                break;
        }
        $this->session->set_flashdata('message', $template);
    }

    private function data()
    {
        $data = [
            'Nama_MPria' =>  htmlspecialchars($this->input->post('nama_mpria', true)),
            'NoHp_MPria' =>  htmlspecialchars($this->input->post('nohp_mpria', true)),
            'Alamat_MPria' =>  htmlspecialchars($this->input->post('alamat_mpria', true)),
            'Panggilan_MPria' =>  htmlspecialchars($this->input->post('namal_mpria', true)),
            'NamaOrtu_Ayah_MPria' =>  htmlspecialchars($this->input->post('namaortuayah_mpria', true)),
            'NamaOrtu_Ibu_MPria' =>  htmlspecialchars($this->input->post('namaortuibu_mpria', true)),
            'Nama_MWanita' =>  htmlspecialchars($this->input->post('nama_mwanita', true)),
            'NoHp_MWanita' =>  htmlspecialchars($this->input->post('nohp_mwanita', true)),
            'Alamat_MWanita' =>  htmlspecialchars($this->input->post('alamat_mwanita', true)),
            'Panggilan_MWanita' =>  htmlspecialchars($this->input->post('namal_mwanita', true)),
            'NamaOrtu_Ayah_MWanita' =>  htmlspecialchars($this->input->post('namaortuayah_mwanita', true)),
            'NamaOrtu_Ibu_MWanita' =>  htmlspecialchars($this->input->post('namaortuibu_mwanita', true)),
        ];
        return $data;
    }
}
