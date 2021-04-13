<?php
class Tamu_Model extends CI_Model
{

    public function selectAll()
    {
        return $this->db->get('tb_tamu')->result();
    }

    public function tambah_data_tamu($data)
    {
        $this->db->insert('tb_tamu', $data);
    }
}
