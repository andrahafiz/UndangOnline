<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tema extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Tema_Model');
        $this->load->helper('my_function_helper');
    }

    public function index()
    {
        // echo $this->Tema_Model->jumlahtema();
        $data = array(
            'judul' => 'Tema',
            'menu' => menu_admin(),
            'tema' => $this->data_all()

        );
        $this->load->view('Admin/layout/header', $data);
        $this->load->view('Admin/Tema/V_Tema', $data['tema']);
        $this->load->view('Admin/layout/footer');
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

    public function Tambah()
    {
        $data = array(
            'judul' => 'Tambah Tema',
            'menu' => menu_admin(),
        );
        $this->form_validation->set_rules('nama_thema', 'Nama tema', 'required');
        $this->form_validation->set_rules('view_tema', 'View tema', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Admin/layout/header', $data);
            $this->load->view('Admin/Tema/V_AddTema');
            $this->load->view('Admin/layout/footer');
        } else {

            $data = [
                'id_thema' =>  htmlspecialchars($this->input->post('id_tema', true)),
                'nama_thema' =>  htmlspecialchars($this->input->post('nama_thema', true)),
                'view_thema' =>  htmlspecialchars($this->input->post('view_tema', true)),
                'image_thema' => null,
                'status_thema' => htmlspecialchars($this->input->post('status_tema', true)),
            ];
            $upload = $this->uploadImage($data['id_thema']);
            // $upload = $this->uploadImage();
            if ($upload['result'] == "success") { // Jika proses upload sukses
                // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
                $data['image_thema'] = $upload['file']['file_name'];
                $this->Tema_Model->tambah_data_tamu($data);
                if ($this->db->affected_rows() > 0) {
                    $this->pesan('sukses', 'Data berhasil');
                    redirect('Admin/Tema');
                    // echo "<script> alert('data berhasil');</script>";
                    // echo "<script> window.location='" . base_url('Admin/Tema') . "';</script>";
                } else {
                    $this->pesan('gagal', 'Data gagal disimpan');
                    redirect('Admin/Tema');
                    // echo "<script> alert('data tidak berhasil');</script>";
                    // echo "<script> window.location='" . base_url('Admin/Tema') . "';</script>";
                }
            } else { // Jika proses upload gagal
                $this->pesan('gagal_foto', $upload['error']);
                redirect('Admin/Tema/Tambah');
            }
        }
    }

    public function Edit($id_thema)
    {

        $data = array(
            'judul' => 'Edit Tema',
            'menu' => menu_admin(),
            'detail_data' => $this->data_tema_singel($id_thema)
        );
        $this->form_validation->set_rules('nama_thema', 'Nama tema', 'required');
        $this->form_validation->set_rules('view_tema', 'View tema', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Admin/layout/header', $data);
            $this->load->view('Admin/Tema/V_EditTema', $data['detail_data']);
            $this->load->view('Admin/layout/footer');
        } else {

            $upload_image = $_FILES['image']['name'];
            // var_dump($upload_image);
            // if ($upload_image) {
            //     print_r($upload_image);
            // } else {
            //     echo "kosong";
            // }
            // die();
            if ($upload_image) {
                // var_dump($upload);
                // die;
                // print_r($id_thema);
                $upload = $this->uploadImage($id_thema);

                if ($upload['result'] == "success") { // Jika proses upload sukses
                    // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
                    $data = [
                        'nama_thema' =>  htmlspecialchars($this->input->post('nama_thema', true)),
                        'view_thema' =>  htmlspecialchars($this->input->post('view_tema', true)),
                        'image_thema' =>  $upload['file']['file_name'],
                    ];
                    $this->Tema_Model->update_tema($id_thema, $data);
                    // var_dump($upload);
                    // die;
                    if ($this->db->affected_rows() > 0) {
                        echo "<script> alert('data berhasil');</script>";
                        echo "<script> window.location='" . base_url('Admin/Tema') . "';</script>";
                    } else {
                        echo "<script> alert('data tidak berhasil');</script>";
                        echo "<script> window.location='" . base_url('Admin/Tema') . "';</script>";
                    }
                } else { // Jika proses upload gagal
                    $this->pesan('gagal_foto', $upload['error']);
                    redirect('Admin/Tema/Edit/' . $id_thema);
                }
            } else {
                // redirect('Admin/Tema?=a');
                $data = [
                    'nama_thema' =>  htmlspecialchars($this->input->post('nama_thema', true)),
                    'view_thema' =>  htmlspecialchars($this->input->post('view_tema', true)),
                ];
                $this->Tema_Model->update_tema($id_thema, $data);
                if ($this->db->affected_rows() > 0) {
                    echo "<script> alert('data berhasil');</script>";
                    echo "<script> window.location='" . base_url('Admin/Tema') . "';</script>";
                } else {
                }
                redirect('Admin/Tema');
            }
        }
    }

    public function uploadImage($id_thema = NULL)
    {

        echo $id_thema;

        $config['upload_path']          = './assets/Tema/';
        $config['allowed_types']        = 'gif|jpg|png';
        // $config['overwrite']            = true;
        $config['max_size']             = 2024; // 2MB
        $config['file_name']            = "tema-" . $id_thema;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);


        if ($this->upload->do_upload('image')) {

            if ($id_thema != NULL) {
                $old_image = "";
                if (empty($this->data_tema_singel($id_thema)->image_thema)) {
                } else {
                    $old_image = $this->data_tema_singel($id_thema)->image_thema;
                    // die();
                    if ($old_image != 'NoImage.png') {
                        unlink(FCPATH . 'assets/Tema/' . $old_image);
                    }
                }

                // var_dump($old_image);
                // die();
            }

            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {
            // Jika gagal :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
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
