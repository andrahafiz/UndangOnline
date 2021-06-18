<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
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
        $id_undangan =   $this->session->userdata('ID_Undangan');
        $data = array(
            'judul' => 'Pembayaran',
            'menu' =>   menu_mempelai(),
            'data_akun' => $this->data_akun($id),
            'status' => $this->db->query("SELECT * FROM tb_transaksi WHERE kode_undangan = '$id_undangan'")->row()
        );
        // print_r($data['status']);
        // if ($data['status'] && $data['data_akun']['Status_akun'] == 2) {
        //     echo "Ada data";
        // } else {
        //     echo "tidak ada data";
        // }
        // die;
        $this->load->view('Mempelai/layout/header', $data);
        if ($data['status'] && $data['data_akun']['Status_akun'] == 2) {
            $this->load->view('Mempelai/layout/navbar', $data);
        }
        $this->load->view('Mempelai/Pay/View_Pay2', $data);
        $this->load->view('Mempelai/layout/footer');
    }

    public function data_akun($id)
    {
        // $this->db->where('ID_akun', $id);

        return  $this->db->get_where('tb_akun', array('ID_akun' => $id))->row_array();
    }
}
