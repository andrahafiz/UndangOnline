<?php
class Tetstimoni_Model extends CI_Model
{

    public function selectAll()
    {
        $this->db->select("*");
        $this->db->from("tb_akun");
        $this->db->join("tb_undangan", 'tb_akun.ID_Akun=tb_undangan.ID_Akun');
        return $this->db->get()->result();
    }

    public function tambah_data_acara($data)
    {
        $this->db->insert('tb_acara', $data);
    }

    public function selectbyid($id)
    {
        // $this->db->where('pekerjaan_id', $id);
        $query =  $this->db->get_where('view_acara', ['ID_akun' => $id]);
        $hasil = $query->row();
        return $hasil;
    }

    public function ganti_status($id, $status)
    {

        $this->db->update('tb_akun', array('Status_akun' => $status), "ID_akun='$id'");
    }
    public function jumlahakun()
    {
        $this->db->from('tb_akun');
        return $this->db->count_all_results();
    }
}
