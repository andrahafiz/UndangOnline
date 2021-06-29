<?php
class Ucapan_Model extends CI_Model
{
    public function select_all($id)
    {
        $query =  $this->db->get_where('view_tamu', ['ID_Undangan' => $id, 'Id_ucapan !=' => NULL]);
        $hasil = $query->result();
        return $hasil;
    }
    public function selectbyid($id, $status)
    {
        // $this->db->where('pekerjaan_id', $id);
        $query =  $this->db->get_where('view_tamu', ['ID_Undangan' => $id, 'Status_Ucapan' => $status]);
        $hasil = $query->result();
        return $hasil;
    }

    public function selectbyid_limit($id)
    {
        // $this->db->where('pekerjaan_id', $id);
        $query =  $this->db->order_by('title', 'RANDOM')->limit(5)->get_where('view_tamu', ['ID_Undangan' => $id, 'Status_Ucapan' => '1']);
        $hasil = $query->result();
        return $hasil;
    }

    public function ubah_status_ucapan($id, $status)
    {
        $this->db->update('tb_ucapan', array('Id_Ucapan' => $id, 'Status_Ucapan' => $status));
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
