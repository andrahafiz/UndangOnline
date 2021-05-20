<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->Model('Akun_Model');
		$this->load->Model('Tema_Model');
		// $this->load->Model('Akun_Model');
	}

	public function index()
	{
		$data = array(
			'jml_tema' => $this->Tema_Model->jumlahtema(),
			'jml_akun' => $this->Akun_Model->jumlahakun(),
		);
		$this->load->view('index', $data);
	}
}
