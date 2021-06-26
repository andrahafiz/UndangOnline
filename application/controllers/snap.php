<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Snap extends CI_Controller
{
	// Test
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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
	{
		parent::__construct();
		$params = array('server_key' => 'SB-Mid-server-J-xEaxEObhTfsr5UvuF_O5T4', 'production' => false);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
		$this->load->helper('url');
		$this->load->model('Mempelai_Model');
		$this->load->model('Undangan_Model');
		$this->load->model('Tamu_Model');
		$this->load->helper('my_function_helper');
	}

	public function index()
	{
		$this->load->view('checkout_snap');
	}

	public function spp()
	{
		// $data['undangan_online'] = $this->db->get('pembayaran_undangan')->result();
		$id =   $this->session->userdata('ID_Akun');
		$data = array(
			'undangan_online' => $this->db->get('pembayaran_undangan')->result(),
			'data_akun' => $this->data_akun($id)
		);

		$this->load->view('pembayaranspp', $data);
	}
	public function data_akun($id)
	{
		return  $this->db->get_where('tb_akun', array('ID_akun' => $id))->row_array();
	}

	public function hadiah()
	{
		$data['undangan_online'] = $this->db->get('pembayaran_undangan')->result();
		$this->load->view('hadiah', $data);
	}

	public function token()
	{
		$nama = $this->session->userdata('Username');
		$email = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$jml_bayar = $this->input->post('jml_bayar');
		$id_undangan = $this->session->userdata('ID_Undangan');
		// Required
		$transaction_details = array(
			'order_id' => rand(),
			'gross_amount' => $jml_bayar, // no decimal allowed for creditcard
		);

		// Optional
		$item1_details = array(
			'id' =>  $id_undangan,
			'price' => $jml_bayar,
			'quantity' => 1,
			'name' => "Pembayarann Undangan (" . $id_undangan . ")",
		);

		$item_details = array($item1_details);

		// Optional
		$customer_details = array(
			'first_name'    => $nama,
			'email' => $email,
		);

		// Data yang akan dikirim untuk request redirect_url.
		$credit_card['secure'] = true;
		//ser save_card true to enable oneclick or 2click
		//$credit_card['save_card'] = true;

		$time = time();
		$custom_expiry = array(
			'start_time' => date("Y-m-d H:i:s O", $time),
			'unit' => 'day',
			'duration'  => 1
		);

		$transaction_data = array(
			'transaction_details' => $transaction_details,
			'item_details'       => $item_details,
			'customer_details'   => $customer_details,
			'credit_card'        => $credit_card,
			'expiry'             => $custom_expiry
		);

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
	}

	public function finish()
	{
		$result = json_decode($this->input->post('result_data'), true);

		// echo "<prev>";
		// var_dump($result);
		// echo $result['va_numbers'][0]['bank'];
		// die;
		$data = [
			'order_id' => $result['order_id'],
			'gross_amount' => $result['gross_amount'],
			'payment_type' => $result['payment_type'],
			'transaction_time' => $result['transaction_time'],
			'bank' => $result['va_numbers'][0]['bank'],
			'va_numbers' => $result['va_numbers'][0]["bank"],
			'pdf_url' => $result['pdf_url'],
			'status_code' => $result['status_code'],
			'kode_undangan' => $this->input->post('kode_undangan')
		];
		$data2 = [
			'order_id' => $result['order_id'],
			'gross_amount' => $result['gross_amount'],
			'payment_type' => $result['payment_type'],
			'transaction_time' => $result['transaction_time'],
			'bank' => $result['va_numbers'][0]['bank'],
			'va_numbers' => $result['va_numbers'][0]["bank"],
			'pdf_url' => $result['pdf_url'],
			'status_code' => $result['status_code'],
			'tipe_transaksi' => 'Undangan',
			'kode_undangan' => $this->input->post('kode_undangan'),
			'ID_akun' => $this->session->userdata('ID_Akun'),
		];
		$simpan = $this->db->insert('pembayaran_undangan', $data);
		$simpan2 = $this->db->insert('tb_transaksi', $data2);
		if ($simpan) {
			redirect('Mempelai/Pembayaran');
		} else {
			echo "Gagal Simpan 1";
		}

		if ($simpan2) {
			redirect('Mempelai/Pembayaran');
		} else {
			echo "Gagal Simpan 2";
		}
	}




	public function finish_hadiah()
	{
		$kode_undangan = htmlspecialchars($this->input->post('kode_undangan', true));
		$nama = htmlspecialchars($this->input->post('nama', true));
		$email = htmlspecialchars($this->input->post('email', true));
		$wa = htmlspecialchars($this->input->post('no_wa', true));
		$ucapan = $this->input->post('ucapan');
		$data_email = $this->Tamu_Model->cek_email($email);
		$data_wa = $this->Tamu_Model->cek_no_wa($wa);
		if (count($data_email) > 0 || count($data_wa) > 0) {
			//Kondisi jika email dan wa ada di dalam database
			// $data = array(
			// 	'Ucapan' => $ucapan,
			// 	'Id_Tamu' => $data_email[0]->ID_TamuUndangan,
			// 	'Id_Pembayaran' => 1
			// );
			// $this->Undangan_Model->insert_to_tb_ucapan($data);
		} else {
			$data_tamu = [
				'ID_TamuUndangan' => kode_otomatis('tb_tamu', 'ID_TamuUndangan'),
				'ID_Undangan' => $kode_undangan,
				'Nama_Tamu' => $nama,
				'Email_Tamu' => $email,
				'Wa_Tamu' => $wa,
			];
			$this->Tamu_Model->tambah_data_tamu($data_tamu);

			$data = array(
				'Ucapan' => $ucapan,
				'Id_Tamu' => $data_tamu['ID_TamuUndangan'],
				'Id_Pembayaran' => 1
			);
			$this->Undangan_Model->insert_to_tb_ucapan($data);
		}
		die();

		$result = json_decode($this->input->post('result_data'), true);

		// echo "<prev>";
		// var_dump($result);
		// echo "</prev>";
		// // echo $result['va_numbers'][0]['bank'];

		// die;
		$data = [
			'order_id' => $result['order_id'],
			'gross_amount' => $result['gross_amount'],
			'payment_type' => $result['payment_type'],
			'transaction_time' => $result['transaction_time'],
			'bank' => $result['va_numbers'][0]['bank'],
			'va_numbers' => $result['va_numbers'][0]["va_number"],
			'pdf_url' => $result['pdf_url'],
			'status_code' => $result['status_code'],
			'kode_undangan' => $this->input->post('kode_undangan')
		];

		$simpan = $this->db->insert('tb_transaksi', $data);
		if ($simpan) {
			// redirect('Undangan/' . $data['kode_undangan']);
			redirect('A');
		} else {
			echo "Gagal Simpan 1";
		}
	}

	//untuk transaksi hadiah
	public function token_hadiah()
	{
		// $nama = $this->input->post('nama');
		// $email = $this->input->post('email');
		// $no_wa = $this->input->post('no_wa');
		// $jml_hadiah = $this->input->post('jml_hadiah');
		// $id_undangan = $this->input->post('kode_undangan');

		// // $id_undangan = $this->session->userdata('ID_Undangan');
		// // Required
		// $transaction_details = array(
		// 	'order_id' => rand(),
		// 	'gross_amount' => $jml_hadiah, // no decimal allowed for creditcard
		// );

		// // Optional
		// $item1_details = array(
		// 	'id' => $id_undangan,
		// 	'price' => $jml_hadiah,
		// 	'quantity' => 1,
		// 	'name' => "Kirim Hadiah (" . $id_undangan . ")"
		// );

		// // // Optional
		// // $item2_details = array(
		// // 	'id' => 'kode_undangan',
		// // 	'price' => 0,
		// // 	'quantity' => 1,
		// // 	'name' => "Orange"
		// // );

		// // Optional
		// $item_details = array($item1_details);

		// // Optional
		// // $billing_address = array(
		// // 	'first_name'    => "Andri",
		// // 	'last_name'     => "Litani",
		// // 	'address'       => "Mangga 20",
		// // 	'city'          => "Jakarta",
		// // 	'postal_code'   => "16602",
		// // 	'phone'         => "081122334455",
		// // 	'country_code'  => 'IDN'
		// // );

		// // Optional
		// // $shipping_address = array(
		// // 	'first_name'    => "Obet",
		// // 	'last_name'     => "Supriadi",
		// // 	'address'       => "Manggis 90",
		// // 	'city'          => "Jakarta",
		// // 	'postal_code'   => "16601",
		// // 	'phone'         => "08113366345",
		// // 	'country_code'  => 'IDN'
		// // );

		// // Optional
		// if (empty($email)) {
		// 	$customer_details = array(
		// 		'first_name'    => $nama,
		// 		'phone'         => $no_wa,
		// 	);
		// } else {
		// 	$customer_details = array(
		// 		'first_name'    => $nama,
		// 		'email'         => $email,
		// 		'phone'         => $no_wa,
		// 	);
		// };

		// // Data yang akan dikirim untuk request redirect_url.
		// $credit_card['secure'] = true;
		// //ser save_card true to enable oneclick or 2click
		// //$credit_card['save_card'] = true;

		// $time = time();
		// $custom_expiry = array(
		// 	'start_time' => date("Y-m-d H:i:s O", $time),
		// 	'unit' => 'day',
		// 	'duration'  => 1
		// );

		// $transaction_data = array(
		// 	'transaction_details' => $transaction_details,
		// 	'item_details'       => $item_details,
		// 	'customer_details'   => $customer_details,
		// 	'credit_card'        => $credit_card,
		// 	'expiry'             => $custom_expiry
		// );

		// error_log(json_encode($transaction_data));
		// $snapToken = $this->midtrans->getSnapToken($transaction_data);
		// error_log($snapToken);
		// echo $snapToken;
	}
}
