<?php
class Tamu_Model extends CI_Model
{

    public function selectAll()
    {
        return $this->db->get('tb_tamu')->result();
    }

    public function selectbyid($id)
    {
        // $this->db->where('pekerjaan_id', $id);
        // $sql = "SELECT * FROM `view_mempelai` WHERE ID_akun='$id'";
        // $query = $this->db->query($sql);
        // $this->db->order_by('birth_date', 'ASC')->get_where($this->tbl_name, $where);
        $query =   $this->db->order_by('Nama_Tamu', 'ASC')->get_where('tb_tamu', ['ID_Undangan' => $id]);
        // $this->db->order_by('Nama_Tamu', 'ASC');
        $hasil = $query->result();
        return $hasil;
    }
    public function cek_email($email)
    {
        $query =  $this->db->get_where('tb_tamu', ['Email_Tamu=' => $email]);

        $hasil = $query->result();
        return $hasil;
    }
    public function cek_no_wa($no_wa)
    {
        $query =  $this->db->get_where('tb_tamu', ['Wa_Tamu=' => $no_wa]);
        $hasil = $query->result();
        return $hasil;
    }
    public function tambah_data_tamu($data)
    {
        $this->db->insert('tb_tamu', $data);
    }

    public function jumlahtamu($id_undangan)
    {
        $this->db->where('ID_Undangan', $id_undangan);
        $this->db->from('tb_tamu');
        return $this->db->count_all_results();
    }

    public function delete($id_tamu)
    {
        $this->db->where('ID_TamuUndangan', $id_tamu);
        $this->db->delete('tb_tamu');
    }
    function update_tamu($where, $data)
    {
        $this->db->where($where);
        $this->db->update('tb_tamu', $data);
    }
}
