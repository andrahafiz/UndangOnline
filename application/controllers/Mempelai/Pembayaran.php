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
		$params = array('server_key' => 'SB-Mid-server-J-xEaxEObhTfsr5UvuF_O5T4', 'production' => false);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
    }
    // }
    public function index()
    {
        $id =   $this->session->userdata('ID_Akun');
        $data = array(
            'judul' => 'Pembayaran',
            'menu' => menu_mempelai(),
            'data_akun' => $this->data_akun($id),
            'undangan_online' =>$this->db->get('pembayaran_undangan')->result()
        );
        var_dump($data['undangan_online']);
        die;
        $this->load->view('Mempelai/layout/header', $data);
        $this->load->view('Mempelai/Pay/View_Pay2', $data);
        $this->load->view('Mempelai/layout/footer');
    }

    public function data_akun($id)
    {
        // $this->db->where('ID_akun', $id);

        return  $this->db->get_where('tb_akun', array('ID_akun' => $id))->row_array();
    }
}
