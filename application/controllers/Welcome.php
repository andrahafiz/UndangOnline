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
			'tema_favorite' => $this->Tema_Model->tema_favorite()
		);
		// print_r($data['tema_favorite']);
		// die();
		$this->load->view('index', $data);
	}
}
