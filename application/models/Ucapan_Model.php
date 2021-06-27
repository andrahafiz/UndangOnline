<?php
class Ucapan_Model extends CI_Model
{

    public function selectbyid($id, $status)
    {
        // $this->db->where('pekerjaan_id', $id);
        $query =  $this->db->get_where('view_tamu', ['ID_Undangan' => $id, 'Status_Ucapan' => $status]);
        $hasil = $query->result();
        return $hasil;
    }

    public function selectbyid_limit($id, $status)
    {
        // $this->db->where('pekerjaan_id', $id);
        $query =  $this->db->limit(5)->get_where('view_tamu', ['ID_Undangan' => $id, 'Status_Ucapan' => $status]);
        $hasil = $query->result();
        return $hasil;
    }

    public function selectbyid_undangan($id)
    {
        // $this->db->where('pekerjaan_id', $id);
        return $this->db->query("SELECT * FROM `view_all` WHERE ID_Undangan = 'UND1' OR Url_Undangan='AzizLubis'")->row();
    }
    public function undangan_update($id, $data)
    {
        $this->db->where('ID_Undangan', $id);
        $this->db->update('tb_undangan', $data);
    }

    public function insert_to_tb_ucapan($data)
    {
        $this->db->insert('tb_ucapan', $data);
    }

    public function cek_ucapan($Id_tamu)
    {
        return $this->db->query("SELECT * FROM tb_ucapan WHERE Id_tamu = 'UND1' OR Url_Undangan='AzizLubis'")->row();
    }
}
