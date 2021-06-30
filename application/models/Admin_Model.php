<?php
class Admin_Model extends CI_Model
{

    public function selectAll()
    {
        return $this->db->get('tb_admin')->result();
    }

    public function tambah_data_admin($data)
    {
        $this->db->insert('tb_admin', $data);
    }

    public function delete_admin($id)
    {
        $this->db->where('ID_Admin', $id);
        $this->db->delete('tb_admin');
    }
    public function ganti_status($id, $status)
    {
        $this->db->update('tb_admin', array('Status_Admin' => $status), "ID_Admin='$id'");
    }
    public function selectbyid($id)
    {
        // $this->db->where('pekerjaan_id', $id);
        $query =  $this->db->get_where('tb_admin', ['ID_Admin' => $id]);
        $hasil = $query->row();
        return $hasil;
    }

    public function update($id, $data)
    {

        $this->db->where('ID_Admin', $id);
        $this->db->update('tb_admin', $data);
    }
}
