<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TarikHadiah extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Hadiah_Model');
        $this->load->helper('my_function_helper');
        cekaccess_admin();
    }
    // }
    public function index()
    {
        $data = array(
            'judul' => 'Tarik Hadiah',
            'menu' => menu_admin(),
            'data_request' => $this->Hadiah_Model->requesthadiah()
        );
        // var_dump($data['data_request']);
        // die();
        $this->load->view('Admin/layout/header', $data);
        $this->load->view('Admin/layout/navbar', $data);
        $this->load->view('Admin/TarikHadiah/V_TarikHadiah', $data);
        $this->load->view('Admin/layout/footer');
    }

    public function update_status($id)
    {
        $data = [
            'Acc_Time' => time(),
            'Admin_Acc' => $this->session->userdata('ID_Admin'),
            'Status_req' => 2
        ];
        $query = $this->Hadiah_Model->update_req($id, $data);

        if ($query > 0) {
            $this->pesan('sukses', 'Transaksi Berhasil');
            redirect('Admin/TarikHadiah');
        } else {
            $this->pesan('sukses', 'Transaksi Gagal');
            redirect('Admin/TarikHadiah');
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
