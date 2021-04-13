<?php
class Mempelai_Model extends CI_Model
{

    public function selectAll()
    {
        return $this->db->get('tb_mempelai')->result();
    }

    public function tambah_data_mempelai($data)
    {
        $this->db->insert('tb_mempelai', $data);
    }

    public function selectbyid($id)
    {
        // $this->db->where('pekerjaan_id', $id);
        $query = $this->db->query(" SELECT tb_mempelai.* FROM `tb_undangan`,`tb_mempelai` WHERE tb_undangan.ID_Akun ='$id'");
        $hasil = $query->row();
        return $hasil;
    }

    public function update($id, $data)
    {

        $this->db->where('ID_Mempelai', $id);
        $this->db->update('tb_mempelai', $data);
    }
}
