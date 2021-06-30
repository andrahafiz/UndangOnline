<?php
class Undangan_Model extends CI_Model
{

    public function selectAll()
    {
        $sql = "SELECT a.ID_akun, a.Email_akun, u.ID_Undangan, m.Nama_MPria, m.Nama_MWanita FROM `tb_akun` as a,`tb_undangan` as u,`tb_mempelai` as m WHERE a.ID_akun = u.ID_Akun and m.ID_Mempelai = u.ID_Mempelai";
        return $this->db->query($sql)->result();
    }

    public function tambah_data_acara($data)
    {
        $this->db->insert('tb_acara', $data);
    }

    public function selectbyid($id)
    {
        // $this->db->where('pekerjaan_id', $id);
        $query =  $this->db->get_where('view_all', ['ID_Undangan' => $id]);
        $hasil = $query->row();
        return $hasil;
    }
    public function selectbyid_undangan($id)
    {
        // $this->db->where('pekerjaan_id', $id);
        return $this->db->query("SELECT * FROM `view_all` WHERE ID_Undangan = '$id' OR Url_Undangan='$id'")->row();
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

    public function update_url($id, $url)
    {
        $this->db->where('ID_Undangan', $id);
        $this->db->update('tb_undangan', $url);
        return $this->db->affected_rows();
    }

    public function cek_ucapan($Id_tamu)
    {
        return $this->db->query("SELECT * FROM tb_ucapan WHERE Id_tamu = '$Id_tamu' OR Url_Undangan='$Id_tamu'")->row();
    }
}
