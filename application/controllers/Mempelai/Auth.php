<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_Model');
        $this->load->helper('my_function_helper');
    }
    // }
    public function index()
    {
        $this->load->view('Mempelai/Auth/V_LoginMempelai');
        // // var_dump(kode('tb_akun')[0]);
        // // echo kode('tb_tamu');
        // var_dump(kode_otomatis('tb_akun', 'ID_akun'));
    }

    private function _login()
    {

        $email = $this->input->post('email');
        $pass = $this->input->post('password');

        $akun = $this->db->get_where('tb_akun', ['Email_akun' => $email])->row_array();

        if ($akun) {
            //ada
            //jika user aktif
            if ($akun['admin_active'] == 1) {
                //cek password
                if (password_verify($pass, $akun['admin_password'])) {
                    $data = [
                        'username' => $akun['admin_user'],
                        'nama_admin' => $akun['admin_nama'],
                        'role_id' => $akun['role_id']
                    ];
                    $this->session->set_userdata($data);
                    // if ($admin['role_id'] == 1) {
                    //     redirect("Admin");
                    // } else if ($admin['role_id'] == 2) {
                    //     redirect("Kepdes");
                    // } else {
                    //     redirect("User");
                    // }
                    redirect("User");
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-rounded mb-3"> Password anda salah
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                                        </div>');
                    redirect('/Auth');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-rounded mb-3"> Akun belum diaktivasi
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                                        </div>');

                redirect('/Auth');
            }
        } else {

            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-rounded mb-3"> 
            Akun tidak ditemukan                       
             <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button></div>');
            redirect('/Auth');
        }
    }

    public function register()
    {

        $this->_formvalidation();
        if ($this->form_validation->run() == false) {
            $this->load->view('Mempelai/Auth/V_RegisterMempelai');
        } else {
            $email = htmlspecialchars($this->input->post('email', true));
            $data = [
                'ID_akun' =>  htmlspecialchars(kode_otomatis('tb_akun', 'ID_akun')),
                'Username' => htmlspecialchars($this->input->post('username', true)),
                'Email_akun' => htmlspecialchars($email),
                'NoHp_akun' => htmlspecialchars($this->input->post('wa', true)),
                'Password_akun' => password_hash($this->input->post('Password'), PASSWORD_DEFAULT),
                'Created_akun' => time(),
                'Status_akun' => '0'
            ];

            // $token = base64_encode(random_bytes(32));
            // // var_dump($token);
            // $admin_token = [
            //     'email' => $email,
            //     'token' => $token,
            //     'date_created' => time()
            // ];
            // // die;
            $this->Auth_Model->tambah_data_akun($data);
            $this->maketoken($email);
            // echo "berhasil";

            // $this->db->insert('tb_admin', $data);
            // $this->db->insert('admin_token', $admin_token);

            // $this->_sendEmail($token, 'verify');


            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-rounded mb-3"> 
            // Selamat akun anda telah terdaftar. Silahkan lakukan aktifasi akun                       
            //  <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button></div>');


            // redirect('/Auth');
        }
    }

    public function _formvalidation()
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

    public function maketoken($email)
    {
        $token = base64_encode(random_bytes(32));
        // var_dump($token);
        $data_token = [
            'email' => $email,
            'token' => $token,
            'date_created' => time()
        ];

        $this->db->insert('token', $data_token);
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
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $this->email->initialize($config);

        $this->email->set_newline("\r\n");

        $this->email->from('joyoom34@gmail.com', 'Desa Sayur Mahincat');
        $this->email->to($this->input->post('Email'));
        if ($tipe == 'verify') {

            $this->email->subject('Verifikasi Akun');
            $data['link'] = base_url() . 'Auth/verify?email=' . $this->input->post('Email') . '&token=' . urlencode($token);
            $this->email->message($this->load->view('emailaktif', $data, true));
        } else {
            $this->email->subject('Reset Password Akun');
            $data['link'] = base_url() . 'Auth/resetpassword?email=' . $this->input->post('Email') . '&token=' . urlencode($token);
            $this->email->message($this->load->view('emailforget', $data, true));
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }
}
