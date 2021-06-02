<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tema extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Undangan_Model');
        $this->load->model('Tema_Model');
        $this->load->helper('my_function_helper');
        cekaccess();
    }

    public function index()
    {
        // echo $this->Tema_Model->jumlahtema();
        // echo $this->Tema_Model->jumlahtema();
        $data = array(
            'judul' => 'Tema',
            'menu' => menu_mempelai(),
            'tema' => $this->data_all(),
            'undangan' => $this->Undangan_Model->selectbyid($this->session->userdata('ID_Undangan')),

        );
        // var_dump($data['undangan']->ID_Tema);
        // die;
        $this->load->view('Mempelai/layout/header', $data);
        $this->load->view('Mempelai/Tema/View_Tema', $data);
        $this->load->view('Mempelai/layout/footer');


        // // // echo $this->Tema_Model->jumlahtema();
        // $id_undangan = 'UND1';
        // $data = array(
        //     'judul' => 'Tema',
        //     'menu' => menu_admin(),
        //     'data' => $this->Undangan_Model->selectbyid('UND1'),
        // );
        // var_dump($data);
        // die();
        // // $this->load->view('Admin/layout/header', $data);
        // // $this->load->view('Admin/Tema/V_Tema', $data['tema']);
        // // $this->load->view('Admin/layout/footer');
        // $this->load->view('Tema/Tema1', $data);
    }

    public function Preview($id_undangan, $thema)
    {
        // // echo $this->Tema_Model->jumlahtema();
        // $id = 'UND1';
        $data = array(
            'judul' => 'Tema',
            'menu' => menu_mempelai(),
            'data' => $this->Undangan_Model->selectbyid($id_undangan),
            'data_foto' => $this->Galeri_Model->selectSingle($id_undangan, 'Foto'),
            'thema' => $this->Tema_Model->selectbyid($thema)
        );

        // var_dump($data['thema']->view_thema);
        $tema =  preg_replace("/.php/", "", ($data['thema']->view_thema));
        // die();
        // $this->load->view('Admin/layout/header', $data);
        // $this->load->view('Admin/Tema/V_Tema', $data['tema']);
        // $this->load->view('Admin/layout/footer');
        $this->load->view('Tema/' . $tema, $data);
    }

    public function Demo()
    {
        $this->load->view('Tema/TemaDemo');
    }

    public function sampel_tema()
    {
    }

    public function ubah_status($id, $status)
    {
        $this->Tema_Model->ganti_status($id, $status);
        redirect('Admin/Tema');
    }

    public function Detail($id_thema)
    {

        $data = array(
            'judul' => 'Detail Undangan',
            'menu' => menu_admin(),
            'detail_data' => $this->data_tema_singel($id_thema)
        );

        $this->load->view('Admin/layout/header', $data);
        $this->load->view('Admin/Tema/V_DetailTema', $data['detail_data']);
        $this->load->view('Admin/layout/footer');
    }

    function pesan($tipe, $pesan)
    {
        $template = "";
        switch ($tipe) {
            case 'sukses':
                echo "";
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
                $template = "<div class='alert alert-warning icons-alert'> 
                                <button type='button' class='close' data-dismiss='alert' aria-label='Close'> 
                                <i class='icofont icofont-close-line-circled'></i>
                                </button> <p><strong>Gagal!</strong>" . $pesan . "</p>
                                </div>";

                break;

            default:

                break;
        }
        $this->session->set_flashdata('message', $template);
    }
    private function data_tema_singel($id_undangan)
    {
        return $this->Tema_Model->selectbyid($id_undangan);
    }

    private function data_all()
    {
        return $this->Tema_Model->selectAll();
    }
}
