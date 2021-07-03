<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TarikHadiah extends CI_Controller
{
    public $id_undangan = null;
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tamu_Model');
        $this->load->model('Hadiah_Model');
        $this->load->helper('my_function_helper');
        $this->id_undangan = $this->session->userdata('ID_Undangan');
        cekaccess();
    }
    // }
    public function index()
    {
        $tamu = $this->Tamu_Model->selectbyid($this->id_undangan);
        $data = array(
            'judul' => 'Tarik Hadiah',
            'menu' => menu_mempelai(),
            'tamu' => $tamu,
            'status' => $this->db->query("SELECT * FROM tb_transaksi WHERE kode_undangan = '$this->id_undangan' AND tipe_transaksi='Undangan'")->row(),
            'dana_tarik' => $this->Hadiah_Model->hitung_duit_id($this->id_undangan)->gross_amount
        );
        $this->load->view('Mempelai/layout/header', $data);
        $this->load->view('Mempelai/layout/navbar', $data);
        $this->load->view('Mempelai/Hadiah/View_Request', $data);
        $this->load->view('Mempelai/layout/footer');
    }

    public function delete($id_undangan)
    {
        $this->Tamu_Model->delete($id_undangan);
        if ($this->db->affected_rows() > 0) {
            echo "<script> alert('data berhasil di hapus');</script>";
            echo "<script> window.location='" . base_url('Mempelai/Tamu') . "';</script>";
        } else {
            echo "<script> alert('data tidak berhasil di hapus');</script>";
            echo "<script> window.location='" . base_url('Mempelai/Tamu') . "';</script>";
        }
    }

    public function tambahdata()
    {
        $id_undangan = htmlspecialchars($this->input->post('id_undangan', true));
        $time_request = time();
        $total = htmlspecialchars($this->input->post('total', true));

        $data = [
            'ID_Undangan' => $id_undangan,
            'Total_Harga' => preg_replace("/Rp/", "", preg_replace("/[^a-zA-Z0-9]/", "", $total)),
            'Request_Time' => $time_request
        ];
        $upload = $this->Hadiah_Model->insert_to_tb_tarikhadiah($data);
        if ($this->db->affected_rows() > 0) {
            $this->pesan('sukses', 'Anda telah melakukan request panerikan hadiah, mohon menunggu.');
            redirect('Mempelai/TarikHadiah');
        } else {
            $this->pesan('gagal', 'Request anda gagal, coba lagi');
            redirect('Mempelai/TarikHadiah');
        }
    }

    function pesan($tipe, $pesan)
    {
        $template = "";
        switch ($tipe) {
            case 'sukses':
                echo "";
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
                $template = "<div class='alert alert-warning icons-alert'> 
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'> 
                                <i class='icofont icofont-close-line-circled'></i>
                                </button> <p><strong>Gagal!</strong>" . $pesan . "</p>
                                </div>";

                break;

            default:

                break;
        }
        $this->session->set_flashdata('message', $template);
    }
}
