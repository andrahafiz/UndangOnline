<?php
class Galeri_Model extends CI_Model
{

    public function selectAll($id_undangan)
    {
        //SELECT tb_gallery.* FROM tb_gallery JOIN tb_undangan ON tb_gallery.ID_Undangan = tb_undangan.ID_Undangan
        $this->db->select('tb_gallery.*');
        $this->db->from("tb_gallery");
        $this->db->join("tb_undangan", 'tb_gallery.ID_Undangan = tb_undangan.ID_Undangan');
        $this->db->where("tb_gallery.ID_Undangan", $id_undangan);
        return $this->db->get()->result();
    }

    public function selectSingle($id_undangan, $tipe)
    {
        $this->db->select('tb_gallery.*');
        $this->db->from("tb_gallery");
        $this->db->join("tb_undangan", 'tb_gallery.ID_Undangan = tb_undangan.ID_Undangan');
        $this->db->where("tb_gallery.ID_Undangan", $id_undangan);
        $this->db->where("tb_gallery.Tipe_Media", $tipe);
        $this->db->limit(10);
        return $this->db->get()->result();
    }

    public function tambah_data_media($data)
    {
        $this->db->insert('tb_gallery', $data);
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

    public function query_jmlmedia($id_undangan, $tipe)
    {
        //$tipe = "Video" or "Foto"
        $this->db->select('tb_gallery.*');
        $this->db->from("tb_gallery");
        $this->db->join("tb_undangan", 'tb_gallery.ID_Undangan = tb_undangan.ID_Undangan');
        $this->db->where("tb_gallery.ID_Undangan", $id_undangan);
        $this->db->where("tb_gallery.Tipe_Media", $tipe);

        return $this->db->count_all_results();
    }
}
