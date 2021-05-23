<?php
class Testimoni_Model extends CI_Model
{

    public function selectAll()
    {
        $this->db->select("*");
        $this->db->from("tb_testimoni");
        $this->db->join("tb_undangan", 'tb_testimoni.ID_Undangan=tb_undangan.ID_Undangan');
        $this->db->join("tb_akun", 'tb_testimoni.ID_Akun=tb_akun.ID_Akun');
        return $this->db->get()->result();
    }

    public function tambah_data_testimoni($data)
    {
        $this->db->insert('tb_testimoni', $data);
    }

    public function selectbyid($id)
    {
        // $this->db->where('pekerjaan_id', $id);
        $query =  $this->db->get_where('tb_testimoni', ['ID_Testimoni' => $id]);
        $hasil = $query->row();
        return $hasil;
    }

    public function ganti_status($id, $status)
    {
        $this->db->update('tb_testimoni', array('Status_testimoni' => $status), "ID_Testimoni='$id'");
    }
    public function jumlahtestimoni()
    {
        $this->db->from('tb_testimoni');
        return $this->db->count_all_results();
    }
}
