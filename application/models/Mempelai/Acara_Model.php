<?php
class Acara_Model extends CI_Model
{

    public function selectAll()
    {
        return $this->db->get('tb_acara')->result();
    }

    public function tambah_data_acara($data)
    {
        $this->db->insert('tb_acara', $data);
    }

    public function selectbyid($id)
    {
        // $this->db->where('pekerjaan_id', $id);
        $query = $this->db->query(" SELECT tb_acara.* FROM `tb_undangan`,`tb_acara` WHERE tb_undangan.ID_Akun ='$id'");
        $hasil = $query->row();
        return $hasil;
    }

    public function update($id, $data)
    {

        $this->db->where('ID_Mempelai', $id);
        $this->db->update('tb_acara', $data);
    }
}
