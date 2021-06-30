<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('my_function_helper');
        $this->load->model('Tamu_Model');
        $this->load->model('Akun_Model');
        $this->load->model('Statistik_Model');
        $this->load->model('Tema_Model');

        cekaccess_admin();
    }
    // }
    public function index()
    {
        $akun = $this->Akun_Model->selectAll();
        $data = array(
            'judul' => 'Dashboard',
            'menu' => menu_admin(),
            'data_akun' => $akun,
            'jumlah_akun' => $this->Akun_Model->jumlahakun(),
            'tema' => $this->Tema_Model->tema_favorite(5),
            'pemasukan' => $this->Statistik_Model->sum_undangan()->gross_amount,
            'pemasukan_bulan' => $this->Statistik_Model->select_total_perbulan()->total,
            'transaksi' => $this->Statistik_Model->selectAll_Transaksi(),
            'jumlah_tema' => $this->Statistik_Model->sum_tema()
        );
        // var_dump($data['pemasukan']);
        // die();
        $this->load->view('Admin/layout/header', $data);
        $this->load->view('Admin/layout/navbar', $data);
        $this->load->view('Admin/Dashboard', $data);
        $this->load->view('Admin/layout/footer');
    }
}
