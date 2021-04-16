<?php
class Auth_Model extends CI_Model
{

    public function selectAll()
    {
        return $this->db->get('tb_akun')->result();
    }

    public function tambah_data_akun($data)
    {
        $this->db->insert('tb_akun', $data);
    }
    public function tambah_data_undangan($data)
    {
        $this->db->insert('tb_undangan', $data);
    }
}
