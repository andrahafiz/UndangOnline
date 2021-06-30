<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Model');
    }
    public function index()
    {
        $admin = $this->Admin_Model->selectAll();
        $data = array(
            'judul' => 'Admin',
            'menu' => menu_admin(),
            'data_admin' => $admin
        );
        if ($this->input->post('submit') == 'tambahdata') {
            echo 'Tidak';
        }
        $this->load->view('Admin/layout/header', $data);
        $this->load->view('Admin/layout/navbar', $data);
        $this->load->view('Admin/Admin/View_Admin', $data);
        $this->load->view('Admin/layout/footer');
    }

    public function tambahdata()
    {
        $data = array(
            'judul' => 'Admin',
            'menu' => menu_admin(),
        );

        $this->form_validation->set_rules('username_admin', 'Username', 'required|is_unique[tb_admin.Username_Admin]');
        $this->form_validation->set_rules('pass_admin', 'Password', 'required|min_length[5]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Admin/layout/header', $data);
            $this->load->view('Admin/layout/navbar', $data);
            $this->load->view('Admin/Admin/V_Tambah_Admin');
            $this->load->view('Admin/layout/footer');
        } else {
            $data = [
                'ID_Admin' =>  kode_otomatis('tb_admin', 'ID_Admin'),
                'Username_Admin' =>  htmlspecialchars($this->input->post('username_admin')),
                'Password_Admin' =>  htmlspecialchars($this->input->post('pass_admin')),
                'Status_Admin' => 1
            ];
            $this->Admin_Model->tambah_data_admin($data);
            $this->pesan('sukses', 'Data berhasil ditambahkan');
            redirect('Admin/Admin');
        }
    }

    public function Edit($id_admin)
    {
        $data = array(
            'judul' => 'Admin',
            'menu' => menu_admin(),
            'data' => $this->Admin_Model->selectbyid($id_admin)
        );

        $this->form_validation->set_rules('username_admin', 'Username', 'required|is_unique[tb_admin.Username_Admin]');
        $this->form_validation->set_rules('pass_admin', 'Password', 'required|min_length[5]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Admin/layout/header', $data);
            $this->load->view('Admin/layout/navbar', $data);
            $this->load->view('Admin/Admin/V_Edit_Admin', $data);
            $this->load->view('Admin/layout/footer');
        } else {
            $data = [
                'Username_Admin' =>  htmlspecialchars($this->input->post('username_admin')),
                'Password_Admin' =>  htmlspecialchars($this->input->post('pass_admin')),
            ];
            $this->Admin_Model->update($id_admin, $data);
            $this->pesan('sukses', 'Data berhasil diubah');
            redirect('Admin/Admin');
        }
    }

    public function delete($id_admin)
    {
        $this->Admin_Model->delete_admin($id_admin);
        $this->pesan('sukses', 'Data telah di hapus');
        redirect('Admin/Admin');
    }
    public function ubah_status($id, $status)
    {
        $this->Admin_Model->ganti_status($id, $status);
        $this->pesan('sukses', 'Status admin telah diganti');
        redirect('Admin/Admin');
    }

    public function TambahAdmin()
    {
        $admin = $this->Admin_Model->selectAll();
        $data = array(
            'judul' => 'Admin',
            'menu' => menu_admin(),
            'data_admin' => $admin
        );
        $this->load->view('Admin/layout/header', $data);
        $this->load->view('Admin/layout/navbar', $data);
        $this->load->view('Admin/Admin/V_Tambah_Admin', $data);
        $this->load->view('Admin/layout/footer');
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
