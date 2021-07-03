<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tamu extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Tamu_Model');
        $this->load->helper('my_function_helper');
        cekaccess();
    }
    // }
    public function index()
    {
        $id_undangan =   $this->session->userdata('ID_Undangan');
        $tamu = $this->Tamu_Model->selectbyid($id_undangan);
        $data = array(
            'judul' => 'Tamu Undangan',
            'menu' => menu_mempelai(),
            'tamu' => $tamu
        );
        // var_dump($tamu);
        // echo "<br><br>";
        // var_dump($data);
        // die;
        // var_dump($data['tamu'][0]->UcapanSelamat);
        // // echo $data['tamu']['UcapanSelamat'];
        // if ($data['tamu'][0]->UcapanSelamat == null) {
        //     echo "kosong";
        // } else {
        //     echo "berisi";
        // }
        // die;
        $this->load->view('Mempelai/layout/header', $data);
        $this->load->view('Mempelai/layout/navbar', $data);
        $this->load->view('Mempelai/Tamu/View_Tamu', $data);
        $this->load->view('Mempelai/layout/footer');
    }

    public function delete($id_undangan)
    {
        $this->Tamu_Model->delete($id_undangan);
        if ($this->db->affected_rows() > 0) {
            $this->pesan('sukses', 'Data berhasil dihapus');
            redirect('Mempelai/Tamu');
        } else {
            $this->pesan('gagal', 'Data anda gagal dihapus');
            redirect('Mempelai/Tamu');
        }
    }
    public function validate_member($str)
    {
        $email = $this->input->post('email_tamu');
        $wa = $this->input->post('wa_tamu');


        $field_value = $str; //this is redundant, but it's to show you ho
        $count_email = count($this->Tamu_Model->cek_email($email));
        $count_wa = count($this->Tamu_Model->cek_no_wa($wa));
        if (empty($wa) && empty($email)) {
            if ($count_email > 0) {
                $this->form_validation->set_message('validate_member', 'Email sudah ada di sistem');
                return False;
            } else {
                $this->form_validation->set_message('validate_member', 'Isi salah satu, Email atau Nomor Whatsapp');
                return False;
            }
        } elseif (empty($wa) || empty($email)) {
            if ($count_email > 0) {
                $this->form_validation->set_message('validate_member', 'Email sudah ada di sistem');
                return False;
            } else {
                return TRUE;
            }
        }
        if ($count_email > 0) {
            $this->form_validation->set_message('validate_member', 'Email sudah ada di sistem');
            return False;
        }
    }
    public function tambahdata()
    {
        // $this->form_validation->set_rules('email_tamu', 'Email', 'callback_validate_member[' . $this->input->post('wa_tamu') . ',' . $this->input->post('email_tamu') . ']');
        $this->form_validation->set_rules('email_tamu', 'Email', 'is_unique[tb_tamu.Email_Tamu]|callback_validate_member');
        $this->form_validation->set_rules('wa_tamu', 'Wa Tamu', 'is_unique[tb_tamu.Wa_Tamu]');
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'judul' => 'Tamu Undangan',
                'menu' => menu_mempelai(),
            );

            // var_dump($tamu);
            // echo "<br><br>";
            // var_dump($data);
            // die;
            // var_dump($data['tamu'][0]->UcapanSelamat);
            // // echo $data['tamu']['UcapanSelamat'];
            // if ($data['tamu'][0]->UcapanSelamat == null) {
            //     echo "kosong";
            // } else {
            //     echo "berisi";
            // }
            // die;
            $this->load->view('Mempelai/layout/header', $data);
            $this->load->view('Mempelai/layout/navbar', $data);
            $this->load->view('Mempelai/Tamu/V_Tambah_Tamu');
            $this->load->view('Mempelai/layout/footer');
        } else {
            // var_dump();
            // die();
            $data = $this->_datatamu();
            // var_dump($data);
            // die();
            $email = $this->input->post('email_tamu');
            $wa  = $this->input->post('wa_tamu');
            $this->Tamu_Model->tambah_data_tamu($data);

            if ($this->db->affected_rows() > 0) {
                $this->pesan('sukses', 'Data berhasil ditambah');
                redirect('Mempelai/Tamu');
            } else {
                $this->pesan('gagal', 'Data gagal ditambahkan');
                redirect('Mempelai/Tamu');
            }
        }
    }



    public function edit()
    {
        $id_tamu =  htmlspecialchars($this->input->post('edit_id_undangan', true));
        $data = [
            'Nama_Tamu' => htmlspecialchars($this->input->post('edit_nama_tamu', true)),
            'Email_Tamu' => htmlspecialchars($this->input->post('edit_email_tamu', true)),
            'Wa_Tamu' => htmlspecialchars($this->input->post('edit_wa_tamu', true))
        ];
        $where = [
            'ID_TamuUndangan' => $id_tamu
        ];
        $this->Tamu_Model->update_tamu($where, $data);

        if ($this->db->affected_rows() > 0) {
            $this->pesan('sukses', 'Data berhasil diubah');
            redirect('Mempelai/Tamu');
        } else {
            $this->pesan('gagal', 'Data gagal ditambahkan');
            redirect('Mempelai/Tamu');
        }
    }

    private function _datatamu()
    {
        $data = [
            'ID_TamuUndangan' => kode_otomatis('tb_tamu', 'ID_TamuUndangan'),
            'ID_Undangan' => $this->session->userdata('ID_Undangan'),
            'Nama_Tamu' => htmlspecialchars($this->input->post('nama_tamu', true)),
            'Email_Tamu' => htmlspecialchars($this->input->post('email_tamu', true)),
            'Wa_Tamu' => htmlspecialchars($this->input->post('wa_tamu', true)),

        ];
        return $data;
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
}
