<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hadiah extends CI_Controller
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
            'judul' => 'Hadiah'
        );

        $this->load->view('layout/header', $data);
        $this->load->view('View_Hadiah');
        $this->load->view('layout/footer');
    }
}
