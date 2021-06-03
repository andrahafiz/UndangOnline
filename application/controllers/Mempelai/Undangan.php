<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Undangan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Testimoni_Model');
        $this->load->helper('my_function_helper');
    }
    public function index()
    {
        // var_dump($result);
        $id_undangan = $this->session->userdata('ID_Undangan');
        $test = (array)$this->Testimoni_Model->cek_data($id_undangan);
        // var_dump(count($test));
        // // echo count($test) > 0 ? 'edit' : 'add';
        // die;
        $data = array(
            'judul' => 'Testimoni',
            'page' => count($test) > 0 ? 'edit' : 'add',
            'menu' => menu_mempelai(),
            'data_testimoni' =>  $this->Testimoni_Model->cek_data($id_undangan),
        );
        // var_dump($data['data_testimoni']);
        // die();
        $this->form_validation->set_rules('komentar', 'Komentar', 'required|trim');
        if ($this->form_validation->run() == False) {
            $this->load->view('Mempelai/layout/header', $data);
            $this->load->view('Mempelai/Testimoni/V_Testimoni', $data);
            $this->load->view('Mempelai/layout/footer');
        } else {
            // $a = $_POST['add'];
            // $post = $this->input->post(null, TRUE);
            if (isset($_POST['add'])) {
                $this->insertdata();
            } else {
                $this->editdata();
                // echo "Edit";
            }
            // echo $a;
            // var_dump($a);

        }
    }

    public function insertdata()
    {
        $this->Testimoni_Model->tambah_data_testimoni($this->_data());
        $this->pesan('sukses', 'Data berhasil ditambahkan');
        redirect('Mempelai/Testimoni');
    }

    public function editdata()
    {
        $this->Testimoni_Model->update_testimoni($this->_data());
        $this->pesan('sukses', 'Data berhasil diubah');
        redirect('Mempelai/Testimoni');
    }

    private function _data()
    {
        $data = [
            'ID_Testimoni' => htmlspecialchars($this->input->post('id_testimoni')),
            'ID_Undangan' => htmlspecialchars($this->input->post('id_undangan')),
            'ID_Akun' => htmlspecialchars($this->input->post('id_akun')),
            'Testimoni' => htmlspecialchars($this->input->post('komentar')),
            'Tgl_Testimoni' => time(),
            'Status_Testimoni' => 'Non-Aktif',
        ];
        return $data;
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
                            <strong>Sukses !</strong> ' . $pesan . '
                            </div>';

                break;
            case 'gagal_foto':
                $template = '<div class="alert alert-danger background-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="icofont icofont-close-line-circled text-white"></i>
                                </button>
                                <strong>Sukses !</strong> ' . $pesan . '
                                </div>';

                break;

            default:

                break;
        }
        $this->session->set_flashdata('message', $template);
    }
}
