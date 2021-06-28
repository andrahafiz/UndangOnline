<?php
class Hadiah_Model extends CI_Model
{
    public function selectAll()
    {
        $this->db->select("*");
        $this->db->from("tb_testimoni");
        $this->db->join("tb_undangan", 'tb_testimoni.ID_Undangan=tb_undangan.ID_Undangan');
        $this->db->join("tb_akun", 'tb_testimoni.ID_Akun=tb_akun.ID_Akun');
        return $this->db->get()->result();
    }

    public function selectbyid($id)
    {
        $query =  $this->db->get_where('view_tamu', ['ID_Undangan' => $id, 'status_code' => 'settlement', 'tipe_transaksi' => 'Hadiah']);
        $hasil = $query->result();
        return $hasil;
    }

    public function selectbyidwithstatus($id, $status)
    {
        $query =  $this->db->get_where('view_tamu', ['ID_Undangan' => $id, 'Status_Ucapan' => $status]);
        $hasil = $query->result();
        return $hasil;
    }

    public function hitung_duit_id($id_undangan)
    {
        $this->db->select_sum('gross_amount');
        $this->db->where('ID_Undangan', $id_undangan);
        $this->db->where('status_code', 'settlement');
        $this->db->where('tipe_transaksi', 'Hadiah');
        $query = $this->db->get('view_tamu');
        return $query->row();
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
