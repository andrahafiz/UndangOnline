<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Acara extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Acara_Model');
        $this->load->helper('my_function_helper');
        cekaccess();
    }

    public function index()
    {
        $id =   $this->session->userdata('ID_Akun');
        $this->_formvalidation();
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'judul' => 'Acara',
                'menu' => menu_mempelai(),
                'data_acara' => $this->Acara_Model->selectbyid($id)
            );
            $this->load->view('Mempelai/layout/header', $data);
            $this->load->view('Mempelai/Acara/Acara_View', $data['data_acara']);
            $this->load->view('Mempelai/layout/footer');
        } else {
            // var_dump($this->_data());
            // die();
            $this->update_data();
            $this->pesan('sukses', 'Data anda berhasil di ubah');
            redirect('Mempelai/Acara');
        }
    }

    function update_data()
    {
        $id = htmlspecialchars($this->input->post('id_acara', true));
        $this->Acara_Model->update($id,  $this->_data());
    }

    // method bertanggung jawab terhadap data yang masuk
    private function _data()
    {
        $data = [
            'TglAkad' =>  htmlspecialchars(strtotime($this->input->post('tgl_akad', true))),
            'WaktuMulaiAkad' =>  htmlspecialchars(strtotime($this->input->post('ts_akad', true))),
            'WaktuSelesaiAkad' =>  htmlspecialchars(strtotime($this->input->post('tf_akad', true))),
            'TempatAkad' => htmlspecialchars($this->input->post('tpt_akad', true)),
            'AlamatAkad' => htmlspecialchars($this->input->post('alamat_akad', true)),
            'TglResepsi' => htmlspecialchars(strtotime($this->input->post('tgl_resepsi', true))),
            'WaktuMulaiResepsi' =>  htmlspecialchars(strtotime($this->input->post('ts_resepsi', true))),
            'WaktuSelesaiResepsi' =>  htmlspecialchars(strtotime($this->input->post('tf_resepsi', true))),
            'TempatResepsi' => htmlspecialchars($this->input->post('tpt_resepsi', true)),
            'AlamatResepsi' => htmlspecialchars($this->input->post('alamat_resepsi', true)),
        ];
        return $data;
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

                break;

            default:

                break;
        }
        $this->session->set_flashdata('message', $template);
    }
}
