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
        if ($this->session->userdata("username")) {
            redirect('Mempelai/Dashboard');
        }
        $this->form_validation->set_rules('email', 'email', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == False) {
            $this->load->view('Mempelai/Auth/V_LoginMempelai');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {

        $email = $this->input->post('email');
        $pass = $this->input->post('password');
        // echo $pass;
        $akun = $this->db->get_where('tb_akun', ['Email_akun' => $email])->row_array();
        // $id_undangan = $this->db->query("SELECT ID_Undangan FROM `tb_undangan` WHERE ID_Akun =$akun['ID_akun']");
        $id_undangan = $this->db->query("SELECT ID_Undangan FROM `tb_undangan` WHERE ID_Akun ='" . $akun['ID_akun'] . "'")->row_array();
        // var_dump($id_undangan['ID_Undangan']);
        // die;
        if ($akun) {
            //jika user aktif
            if ($akun['Status_akun'] == 1) {
                //cek password
                if (password_verify($pass, $akun['Password_akun'])) {
                    $data = [
                        'Username' => $akun['Username'],
                        'Email_Akun' => $akun['Email_akun'],
                        'ID_Akun' => $akun['ID_akun'],
                        'ID_Undangan' => $id_undangan['ID_Undangan']
                    ];
                    $this->session->set_userdata($data);
                    redirect("Mempelai/Dashboard");
                } else {
                    $this->pesan('gagal', 'Password anda salah');
                    redirect('Mempelai/Auth');
                }
            } else {
                $this->pesan('warning', 'Akun belum di aktifasi');
                redirect('Mempelai/Auth');
            }
        } else {
            $this->pesan('gagal', 'Akun tidak ditemukan');
            redirect('Mempelai/Auth');
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

    private function _formvalidation()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[tb_akun.Email_akun]', [
            'is_unique' => 'Email ini telah terdaftar'
        ]);
        $this->form_validation->set_rules('wa', 'Nomor Whatasapp', 'required|trim|numeric');
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim|min_length[3]|matches[conf_password]',
            [
                'matches' => 'Password tidak sama',
                'min_length' => 'Password harus 3 Karakter'
            ]
        );
        $this->form_validation->set_rules('conf_password', 'Konfirmasi Password', 'required|trim|matches[password]');
    }

    public function maketoken($email, $token)
    {

        // var_dump($token);
        $data_token = [
            'email' => $email,
            'token' => $token,
            'date_created' => time()
        ];

        $this->db->insert('token', $data_token);
        $this->_sendEmail($token, 'verify');
    }

    private function _sendEmail($token, $tipe)
    {

        $this->load->library('email');

        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_user'] = 'joyoom34@gmail.com';
        $config['smtp_pass'] = 'tuf18ti082';
        $config['smtp_port'] = 465;
        $config['smpt_crypto'] = 'ssl';
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        // $config['set_newline'] = "\r\n";
        $this->email->initialize($config);

        $this->email->set_newline("\r\n");

        $this->email->from('joyoom34@gmail.com', 'Desa Sayur Mahincat');
        $this->email->to($this->input->post('Email'));
        if ($tipe == 'verify') {

            $this->email->subject('Verifikasi Akun');
            $data['link'] = base_url() . 'Auth/verify?email=' . $this->input->post('Email') . '&token=' . urlencode($token);
            // $this->email->message($this->load->view('Mempelai/temp_email/emailaktif', $data, true));
            $this->email->message("Yes");
        } else {
            $this->email->subject('Reset Password Akun');
            $data['link'] = base_url() . 'Auth/resetpassword?email=' . $this->input->post('Email') . '&token=' . urlencode($token);
            // $this->email->message($this->load->view('emailforget', $data, true));
            $this->email->message("Yes");
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }
    public function logout()
    {
        $this->session->unset_userdata("Username");
        $this->session->unset_userdata("Email_Akun");
        $this->session->unset_userdata("ID_Akun");
        $this->session->unset_userdata("ID_Undangan");
        $this->session->sess_destroy();
        redirect('Mempelai/Auth');
    }


    public function CreateDataAcara()
    {
        $kode = kode_otomatis('tb_acara', 'ID_Acara');
        $data = [
            'ID_Acara' =>  $kode
        ];
        $this->Acara_Model->tambah_data_acara($data);
        return $kode;
    }

    public function CreateDataMempelai()
    {
        $kode = kode_otomatis('tb_mempelai', 'ID_Mempelai');
        $data = [
            'ID_Mempelai' =>  $kode
        ];
        $this->Mempelai_Model->tambah_data_mempelai($data);
        return $kode;
    }

    public function CreateDataAkun()
    {
        $email = htmlspecialchars($this->input->post('email', true));
        $data = [
            'ID_akun' =>  htmlspecialchars(kode_otomatis('tb_akun', 'ID_akun')),
            'Username' => htmlspecialchars($this->input->post('username', true)),
            'Email_akun' => htmlspecialchars($email),
            'NoHp_akun' => htmlspecialchars($this->input->post('wa', true)),
            'Password_akun' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'Created_akun' => time(),
            'Status_akun' => '1'
        ];

        $this->Auth_Model->tambah_data_akun($data);
        $id_akun = $data['ID_akun'];
        $id_acara = $this->CreateDataAcara();
        $id_mempelai = $this->CreateDataMempelai();
        $this->CreateDataUndangan($id_akun, $id_acara, $id_mempelai);
    }

    public function CreateDataUndangan($id_akun, $id_acara, $id_mempelai)
    {
        $kode = kode_otomatis('tb_undangan', 'ID_Undangan');
        $akun_id = $id_akun;
        $acara_id = $id_acara;
        $mempelai_id = $id_mempelai;
        $data = [
            'ID_Undangan' => $kode,
            'ID_Mempelai' => $mempelai_id,
            'ID_Acara' => $acara_id,
            'ID_Akun' => $akun_id,
            'ID_Kategori' => 'KTG1',
            'ID_Tema' => 'THM1',
            'tgl_buatakun' => time(),
            'tgl_selesaiakun' => time() + (60 * 60 * 24 * 7)
        ];

        // $this->session->set_userdata('ID_undangan', $kode);
        $this->Auth_Model->tambah_data_undangan($data);
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
