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
        $data = array(
            'judul' => 'Pembayaran',
            'menu' =>   $menu = [['Pembayaran'], ['fa fa-credit-card'], ['Mempelai/Pembayaran']],
            'data_akun' => $this->data_akun($id)
        );
        // var_dump($data['data_akun']);
        // die;
        $this->load->view('Mempelai/layout/header', $data);
        // $this->load->view('Mempelai/layout/navbar', $data);
        $this->load->view('Mempelai/Pay/View_Pay2', $data);
        $this->load->view('Mempelai/layout/footer');
    }

    public function data_akun($id)
    {
        // $this->db->where('ID_akun', $id);

        return  $this->db->get_where('tb_akun', array('ID_akun' => $id))->row_array();
    }
}
