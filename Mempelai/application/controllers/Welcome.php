<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Temp_Model');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// public function index()
	// {
	// 	$surat = $this->Temp_Model->selectAll();
	// 	$data = array(
	// 		'data' => $surat,
	// 		'judul' => 'Daftar Surat Masuk',

	// 	);
	// 	$halaman = 'thema1';
	// 	foreach ($surat as $key => $value) {
	// 		// $value->nama_thema;
	// 		if ($halaman == $value->nama_thema) {
	// 			$this->load->view('Template1', $data);
	// 		}
	// 	};
	// }
	public function index()
	{

		// $data = array(
		// 	'data' => $surat,
		// 	'judul' => 'Daftar Surat Masuk',

		// );
		// foreach ($surat as $key => $value) {
		// 	// $value->nama_thema;
		// 	if ($halaman == $value->nama_thema) {
		// $this->load->view('Template1');
		// 	}
		// };]
		$halaman = 'thema2';
		$thema = $this->Temp_Model->select_by_id($halaman);
		// var_dump($thema);
		if (isset($thema)) {
			// $this->load->view($thema->view_thema);
			$this->load->view('layout/header');
			$this->load->view('Dashboard');
			$this->load->view('layout/footer');
			// echo $thema['nama_thema'];
			// var_dump($thema->nama_thema);
		} else {
			echo "gak ada";
		}
	}

	public function preview($halaman)
	{

		$thema = $this->Temp_Model->select_by_id($halaman);
		// var_dump($thema);
		if (isset($thema)) {
			$this->load->view($thema->view_thema);
			// echo $thema['nama_thema'];
			// var_dump($thema->nama_thema);
		} else {
			echo "gak ada";
		}
	}
}
