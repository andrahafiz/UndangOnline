<?php
class Transaksi_Model extends CI_Model
{

    public function selectAll_Undangan()
    {
        return $this->db->get_where('tb_transaksi', array('tipe_transaksi' => 'Undangan'))->result();
    }

    public function select_by_id($namathema)
    {
        $this->db->where('nama_thema', $namathema);
        return $this->db->get('thema')->row();
    }

    public function update_status($tabel, $data, $where)
    {
        $this->db->update($tabel, $data, $where);
        return $this->db->affected_rows();
    }
    // public function insert()
    // {
    //     $data = [
    //         'pekerjaan_id' =>   $this->input->post("idPekerjaan", true),
    //         'pekerjaan_nama' =>   $this->input->post("namaPekerjaan", true),
    //     ];
    //     $this->db->insert('tb_pekerjaan', $data);
    // }

    // public function selectbyid($id)
    // {
    //     $this->db->where('pekerjaan_id', $id);
    //     return $this->db->get('tb_pekerjaan')->row();
    // }

    // public function cekkode()
    // {
    //     $query = $this->db->query("SELECT MAX(pekerjaan_id) as pekerjaan_id from tb_pekerjaan");
    //     $hasil = $query->row();
    //     return $hasil;
    // }

    // public function update($id)
    // {
    //     $idpekerjaan = $id;
    //     $data = [
    //         'pekerjaan_nama' =>   $this->input->post("namaPekerjaan_edit", true),
    //     ];
    //     // return $idpekerjaan;
    //     $this->db->where('pekerjaan_id', $id);
    //     $this->db->update('tb_pekerjaan', $data);
    // }

    // public function delete($id)
    // {

    //     $this->db->where('pekerjaan_id', $id);
    //     $this->db->delete('tb_pekerjaan'); //nama tabel
    // }
}