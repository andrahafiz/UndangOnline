<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Snap extends CI_Controller
{

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
		// $this->db->where('ID_akun', $id);

		return  $this->db->get_where('tb_akun', array('ID_akun' => $id))->row_array();
	}

	public function hadiah()
	{
		$data['undangan_online'] = $this->db->get('pembayaran_undangan')->result();
		$this->load->view('hadiah', $data);
	}

	public function token()
	{
		$nama = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$jml_bayar = $this->input->post('jml_bayar');
		// Required
		$transaction_details = array(
			'order_id' => rand(),
			'gross_amount' => $jml_bayar, // no decimal allowed for creditcard
		);

		// Optional
		$item1_details = array(
			'id' => 'a1',
			'price' => $jml_bayar,
			'quantity' => 1,
			'name' => "Pembayarann Undangan", $jenis_kelamin
		);

		$item_details = array($item1_details);

		// Optional
		$customer_details = array(
			'first_name'    => $nama,
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
			'kode_undangan' => $this->input->post('kode_undangan')
		];
		$simpan = $this->db->insert('pembayaran_undangan', $data);
		$simpan2 = $this->db->insert('tb_transaksi', $data2);
		if ($simpan) {
			echo "Sukses Simpan 1";
		} else {
			echo "Gagal Simpan 1";
		}

		if ($simpan2) {
			echo "Sukses Simpan 2";
		} else {
			echo "Gagal Simpan 2";
		}
	}

	//untuk transaksi hadiah
	public function token_hadiah()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$jml_hadiah = $this->input->post('jml_hadiah');
		// Required
		$transaction_details = array(
			'order_id' => rand(),
			'gross_amount' => $jml_hadiah, // no decimal allowed for creditcard
		);

		// Optional
		$item1_details = array(
			'id' => 'a1',
			'price' => $jml_hadiah,
			'quantity' => 1,
			'name' => "Pembayarann Undangan", $email
		);

		$item_details = array($item1_details);

		// Optional
		$customer_details = array(
			'first_name'    => $nama,
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

	public function finish_hadiah()
	{
		$result = json_decode($this->input->post('result_data'), true);
		$kode = $this->input->post('kode');
		// var_dump($result);
		// die;
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
			'kode_undangan' => $kode
		];
		$simpan = $this->db->insert('pembayaran_undangan', $data);
		if ($simpan) {
			echo "Sukses";
		} else {
			echo "Gagal";
		}
	}
}
