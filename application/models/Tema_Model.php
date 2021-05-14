<?php
class Tema_Model extends CI_Model
{

    public function selectAll()
    {
        return $this->db->get('thema')->result();
    }

    public function selectbyid($id)
    {
        // $this->db->where('pekerjaan_id', $id);
        // $sql = "SELECT * FROM `view_mempelai` WHERE ID_akun='$id'";
        // $query = $this->db->query($sql);
        $query =  $this->db->get_where('thema', ['id_thema' => $id]);
        $hasil = $query->result();
        return $hasil;
    }

    public function tambah_data_tamu($data)
    {
        $this->db->insert('thema', $data);
    }

    public function jumlahtema()
    {


        return $this->db->count_all_results('thema');
    }

    public function delete($id_thema)
    {
        $this->db->where('id_thema', $id_thema);
        $this->db->delete('thema');
    }
}
