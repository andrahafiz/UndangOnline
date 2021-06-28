<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public $id_undangan = null;

    function __construct()
    {
        parent::__construct();
        $this->load->model('Tamu_Model');
        $this->load->model('Hadiah_Model');
        $this->load->model('Undangan_Model');
        $this->load->helper('my_function_helper');
        $this->id_undangan = $this->session->userdata('ID_Undangan');
        cekaccess();
    }
    // }
    public function index()
    {

        // var_dump($this->Hadiah_Model->hitung_duit_id($id_undangan));
        // die();
        $tamu = $this->Tamu_Model->selectbyid($this->id_undangan);
        $data = array(
            'judul' => 'Dashboard',
            'menu' => menu_mempelai(),
            'jml_tamu' => $this->Tamu_Model->jumlahtamu($this->id_undangan),
            'tamu' => $tamu,
            'total_hadiah' => $this->Hadiah_Model->hitung_duit_id($this->id_undangan)->gross_amount,
            'url_undangan' => $this->Undangan_Model->selectbyid($this->id_undangan)->Url_Undangan
        );
        $this->form_validation->set_rules('url_input', 'Nama Lengkap Mempelai Pria', 'alpha_dash|is_unique[tb_undangan.Url_Undangan]', [
            'is_unique' => 'URL sudah terdaftar',
            'alpha_dash' => '
            Inputan URL hanya boleh berisi karakter alfanumerik, garis bawah, dan tanda hubung.'

        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Mempelai/layout/header', $data);
            $this->load->view('Mempelai/layout/navbar', $data);
            $this->load->view('Mempelai/Dashboard', $data);
            $this->load->view('Mempelai/layout/footer');
        } else {
            if ($this->ganti_url()) {
                $this->pesan('sukses', 'Data berhasil terupdate');
            } else {
                $this->pesan('gagal', 'Data gagal terupdate, coba lagi');
            }
            redirect('Mempelai/Dashboard');
        }
    }

    public function ganti_url()
    {
        $data = [
            'Url_Undangan' => $this->input->post('url_input')
        ];
        $update = $this->Undangan_Model->update_url($this->id_undangan, $data);
        if ($update > 0) {
            return true;
            // $this->pesan('message', 'Data terupdate');
            // redirect('Mempelai/Dashboard');
        } else {
            return false;
            // $this->pesan('message', 'Data gagal terupdate pada tabel transaksi');
            // redirect('Mempelai/Dashboard');
        }
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
                            <strong>Gagal ! </strong> ' . $pesan . '
                            </div>';
                break;
            case 'warning':
                $template = '<div class="alert alert-warning background-waning">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="icofont icofont-close-line-circled text-white"></i>
                                </button>
                                <strong>Gagal ! </strong> ' . $pesan . '
                                </div>';
                break;
            default:

                break;
        }
        $this->session->set_flashdata('message', $template);
    }
}
