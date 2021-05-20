<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{

    var $data;
    function __construct()
    {
        parent::__construct();
        $this->load->model('Galeri_Model');
        $this->load->helper('my_function_helper');
        cekaccess();
    }
    // }
    public function index()
    {
        $id_undangan = $this->session->userdata('ID_Undangan');
        $data = array(
            'judul' => 'Galeri',
            'menu' => menu_mempelai(),
            'data_all' => $this->Galeri_Model->selectAll($id_undangan),
            'data_foto' => $this->Galeri_Model->selectSingle($id_undangan, 'Foto'),
            'data_video' => $this->Galeri_Model->selectSingle($id_undangan, 'Video')
        );
        // var_dump($data['data_video']);
        // die;
        // $query = $this->db->get('tb_gallery')->result();
        // if ($query->num_rows() > 0) {
        //     echo $query->num_rows();
        // } else {
        //     echo 0;
        // }

        // var_dump($data['data_video']);
        // echo count($data['data_video']);
        // die;
        $this->load->view('Mempelai/layout/header', $data);
        $this->load->view('Mempelai/Galeri/V_Galeri', $data);
        $this->load->view('Mempelai/layout/footer');
    }

    public function add_foto()
    {
        // redirect('Mempelai/Mempelai');
        echo "<script>alert('y');</script>";


        // $data = [];

        $count = count($_FILES['files']['name']);

        for ($i = 0; $i < $count; $i++) {

            if (!empty($_FILES['files']['name'][$i])) {

                $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                $_FILES['file']['size'] = $_FILES['files']['size'][$i];


                $config['upload_path'] = './assets/Mempelai/images/gallery/'; //path folder
                $config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
                $config['max_size']     = '1000';
                $config['file_name'] = $_FILES['files']['name'][$i];
                $this->load->library('upload', $config);


                if ($this->upload->do_upload('file')) {
                    $uploadData = $this->upload->data();
                    redirect('Mempelai/Galeri');
                } else {
                    $this->upload->display_errors();
                    redirect('Mempelai/Mempelai');
                }
            };
        }
    }

    public function add_video()
    {
        $id_undangan = $this->session->userdata('ID_Undangan');
        $url = $this->input->post('youtube_url');
        $jumlah_video = $this->jumlah_video($id_undangan);
        //jika video lebih dari 3 , gagal upload
        if ($jumlah_video < 3) {
            //jika link youtube tidak sesuai
            if ($this->cekurlyoutube($url) == 1) {
                $this->Galeri_Model->tambah_data_media($this->_datavideo());
                if ($this->db->affected_rows() > 0) {
                    $this->pesan('sukses', 'Video anda berhasil ditambahkan');
                    echo "<script> alert('data berhasil di tambah');</script>";
                    echo "<script> window.location='" . base_url('Mempelai/Galeri') . "';</script>";
                    // redirect('Mempelai/Galeri');
                } else {
                    // echo "<script> alert('data gagal di tambah');</script>";
                    // echo "<script> window.location='" . base_url('Mempelai/Galeri') . "';</script>";
                    $this->pesan('gagal', 'Video gagal upload, coba lagi!!!');
                    redirect('Mempelai/Galeri');
                }
            } else {
                $this->pesan('gagal', 'URL video tidak cocok , contoh URL : https://youtube/aaaaaa');
                redirect('Mempelai/Galeri');
            }
        } else {
            $this->pesan('warning', 'Video gagal upload, batas maksimal 3 video');
            redirect('Mempelai/Galeri');
        }
    }
    // method bertanggung jawab terhadap data video
    private function _datavideo()
    {
        $data = [
            'ID_Undangan' => $this->session->userdata('ID_Undangan'),
            'Judul_Media' =>  htmlspecialchars($this->input->post('judul_video', true)),
            'Link_Media' =>  htmlspecialchars($this->input->post('youtube_url', true)),
            'Tipe_Media' => 'Video',
            'Size_Media' => NULL,
            'Status_Media' => '1',
        ];
        return $data;
    }

    private function cekurlyoutube($url)
    {
        $rx = '~
        ^(?:https?://)?
        (?:www[.])?
        (?:youtube[.]com/watch[?]v=|youtu[.]be/)
        ([^&]{11})
        ~x';
        $has_match = preg_match($rx, $url, $matches);
        return $has_match;
    }
    private function jumlah_video($id_undangan)
    {
        return $this->Galeri_Model->query_jmlmedia($id_undangan, 'Video');
    }
    private function jumlah_foto($id_undangan)
    {
        return $this->Galeri_Model->query_jmlmedia($id_undangan, 'Foto');
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
