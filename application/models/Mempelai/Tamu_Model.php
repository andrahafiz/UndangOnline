<?php
class Tamu_Model extends CI_Model
{

    public function selectAll()
    {
        return $this->db->get('tb_tamu')->result();
    }

    public function selectbyid($id)
    {
        // $this->db->where('pekerjaan_id', $id);
        // $sql = "SELECT * FROM `view_mempelai` WHERE ID_akun='$id'";
        // $query = $this->db->query($sql);
        $query =  $this->db->get_where('tb_tamu', ['ID_Undangan' => $id]);
        $hasil = $query->result();
        return $hasil;
    }

    public function tambah_data_tamu($data)
    {
        $this->db->insert('tb_tamu', $data);
    }

    public function jumlahtamu($id_undangan)
    {
        $this->db->where('ID_Undangan', $id_undangan);
        $this->db->from('tb_tamu');
        return $this->db->count_all_results();
    }
}
