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
        $query =  $this->db->get_where('view_acara', ['ID_akun' => $id]);
        $hasil = $query->row();
        return $hasil;
    }

    public function update($id, $data)
    {

        $this->db->where('ID_Acara', $id);
        $this->db->update('tb_acara', $data);
    }
}
