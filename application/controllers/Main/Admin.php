<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Undangan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Temp_Model');
    }
}
