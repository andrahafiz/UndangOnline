<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Temp_Model');
        $this->load->helper('my_function_helper');
    }
    // }
    public function index()
    {
        $this->load->view('Mempelai/Auth/V_LoginMempelai');
    }
    public function register()
    {
        $this->load->view('Mempelai/Auth/V_RegisterMempelai');
    }
}
