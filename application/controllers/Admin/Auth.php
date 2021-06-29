<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_Model');
        $this->load->model('Acara_Model');
        $this->load->model('Mempelai_Model');
        $this->load->helper('my_function_helper');
    }

    public function index()
    {
        if ($this->session->userdata("Username_Admin")) {
            redirect('Admin/Dashboard');
        }
        $this->form_validation->set_rules('username', 'username', 'required|trim');
        $this->form_validation->set_rules('password', 'password', 'required|trim');
        if ($this->form_validation->run() == False) {
            $this->load->view('Admin/Auth/V_LoginAdmin');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {

        $username = $this->input->post('username');
        $pass = $this->input->post('password');
        #echo $email;
        #echo $pass;
        $akun = $this->db->get_where('tb_admin', ['Username_Admin' => $username])->row_array();
        // var_dump($akun);
        // die();
        if ($akun) {
            if ($akun["Status_Admin"] == 1) {
                if ($pass == $akun["Password_Admin"]) {
                    $data = [
                        'ID_Admin' => $akun["ID_Admin"],
                        'Username_Admin' => $akun["Username_Admin"]
                    ];
                    $this->session->set_userdata($data);
                    redirect('Admin/Dashboard');
                } else {
                    $this->pesan('gagal', 'Password yang anda masukan salah');
                    redirect('Admin');
                }
            } else {
                $this->pesan('gagal', 'Akun anda belum aktif');
                redirect('Admin');
            }
        } else {
            $this->pesan('gagal', 'Akun anda tidak terdaftar');
            redirect('Admin');
        }
    }


    public function register()
    {
        $this->_formvalidation();
        if ($this->form_validation->run() == false) {
            $this->load->view('Mempelai/Auth/V_RegisterMempelai');
        } else {
            $this->CreateDataAkun();
            $this->pesan('sukses', 'Periksa email anda untuk verifikasi');
            redirect('/Mempelai/Auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata("Username");
        $this->session->unset_userdata("Email_Akun");
        $this->session->unset_userdata("ID_Akun");
        $this->session->unset_userdata("ID_Undangan");
        $this->session->sess_destroy();
        redirect('Admin\Auth');
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
