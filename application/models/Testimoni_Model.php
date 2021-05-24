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

    public function update_testimoni($data)
    {
        $this->db->where('ID_Testimoni', $data['ID_Testimoni']);
        $this->db->update('tb_testimoni', $data);
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

    public function rand_select()
    {
        $this->db->limit(4);
        $this->db->order_by('title', 'RANDOM');
        $this->db->from('tb_testimoni');
        $this->db->join('tb_akun', 'tb_akun.ID_Akun=tb_testimoni.ID_Akun');
        $this->db->where('Status_Testimoni', 'Posting');
        return $this->db->get()->result();
    }

    public function jumlahtestimoni()
    {
        $this->db->from('tb_testimoni');
        return $this->db->count_all_results();
    }

    public function cek_data($id_undangan)
    {
        $query =  $this->db->get_where('tb_testimoni', ['ID_Undangan' => $id_undangan]);
        $hasil = $query->row();
        return $hasil;
    }
}
