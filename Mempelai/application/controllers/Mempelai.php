<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mempelai extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Temp_Model');
    }
    // }
    public function index()
    {
        $data = array(
            'judul' => 'Mempelai'
        );

        $this->load->view('layout/header', $data);
        $this->load->view('Dashboard');
        $this->load->view('layout/footer');
    }
}
