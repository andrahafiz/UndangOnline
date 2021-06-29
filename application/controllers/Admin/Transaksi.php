<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Transaksi extends CI_Controller
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
        $this->load->helper('my_function_helper');
        $this->load->model('Tamu_Model');
        $this->load->model('Transaksi_Model');
        $this->load->model('Akun_Model');
        $params = array('server_key' => 'SB-Mid-server-J-xEaxEObhTfsr5UvuF_O5T4', 'production' => false);
        $this->load->library('veritrans');
        $this->veritrans->config($params);
        $this->load->helper('url');
    }

    public function index()
    {
        $undangan = $this->Transaksi_Model->selectAll_Undangan();


        // var_dump($undangan);
        // foreach ($undangan as $key => $row) {
        //     echo $row->order_id;
        // }
        // die();
        // $id_undangan = $undangan->kode_undangan;
        // $id_akun = $this->db->get_where('tb_undangan', array('ID_Undangan' => $id_undangan))->row();
        // print_r($id_undangan);
        // die();
        $data = array(
            'judul' => 'Transaksi',
            'menu' => menu_admin(),
            'data_undangan' => $undangan,

        );
        // print_r($data);
        // die();
        $this->load->view('Admin/layout/header', $data);
        $this->load->view('Admin/layout/navbar', $data);
        $this->load->view('Admin/Transaksi/V_Transaksi', $data);
        $this->load->view('Admin/layout/footer');
    }


    public function status($order_id)
    {
        $result = $this->veritrans->status($order_id);
        // var_dump($result);
        $data = [
            'status_code' => $result->transaction_status
        ];
        // die();
        $where = ['order_id' => $order_id];
        $update = $this->Transaksi_Model->update_status('tb_transaksi', $data, $where);
        $update2 = $this->Transaksi_Model->update_status('pembayaran_undangan', $data, $where);
        if ($update > 0) {
            $this->pesan('sukses', 'Data terupdate');
        } else {
            $this->pesan('sukses', 'Data gagal terupdate pada tabel transaksi');
        }
        if ($update2 > 0) {
            $this->pesan('sukses', 'Data terupdate');
        } else {
            $this->pesan('sukses', 'Data gagal terupdate pada tabel pembayaran');
        }
        redirect('Transaksi');
    }
    function pesan($tipe, $pesan)
    {
        $template = "";
        switch ($tipe) {
            case 'sukses':
                $template = '<div class="alert alert-success background-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="icofont icofont-close-line-circled text-white"></i>
                            </button>
                            <strong>Sukses !</strong> ' . $pesan . '
                            </div>';
                break;
            case 'gagal':
                $template = '<div class="alert alert-danger background-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <i class="icofont icofont-close-line-circled text-white"></i>
                            </button>
                            <strong>Gagal ! </strong> ' . $pesan . '
                            </div>';
                break;
            case 'warning':
                $template = '<div class="alert alert-warning background-waning">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="icofont icofont-close-line-circled text-white"></i>
                                </button>
                                <strong>Gagal ! </strong> ' . $pesan . '
                                </div>';
                break;
            default:

                break;
        }
        $this->session->set_flashdata('message', $template);
    }
}
