<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tamu extends CI_Controller
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
            'judul' => 'Tamu Undangan'
        );

        $this->load->view('layout/header', $data);
        $this->load->view('View_Tamu');
        $this->load->view('layout/footer');
    }
}
