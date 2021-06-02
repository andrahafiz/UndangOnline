<?php
class Tema_Model extends CI_Model
{

    public function selectAll()
    {
        return $this->db->get('thema')->result();
    }

    public function selectbyid($id)
    {
        // $this->db->where('pekerjaan_id', $id);
        $query =  $this->db->get_where('thema', ['id_thema' => $id]);
        $hasil = $query->row();
        return $hasil;
    }


    public function tambah_data_tamu($data)
    {
        $this->db->insert('thema', $data);
    }

    public function jumlahtema()
    {
        return $this->db->count_all_results('thema');
    }

    public function delete($id_thema)
    {
        $this->db->where('id_thema', $id_thema);
        $this->db->delete('thema');
    }
    public function ganti_status($id, $status)
    {
        $this->db->update('thema', array('status_thema' => $status), "id_thema='$id'");
    }
    
    public function update_tema($id, $data)
    {
        $this->db->where('id_thema', $id);
        $this->db->update('thema', $data);
    }

    public function tema_favorite()
    {
        //QUERY 'SELECT *,COUNT(ID_Tema) FROM `tb_undangan` GROUP BY ID_Tema order by COUNT(ID_Tema) DESC LIMIT 3'
        /* select thema.*,count(ID_Tema) as jumlah_tema from tb_undangan 
        INNER JOIN thema on tb_undangan.ID_Tema = thema.id_thema 
        GROUP BY `ID_Tema` 
        ORDER BY `jumlah_tema` 
        DESC LIMIT 3 */
        $this->db->select('thema.*,count(ID_Tema) as jumlah_tema')
            ->from('tb_undangan')
            ->join('thema', 'tb_undangan.ID_Tema = thema.id_thema ')
            ->group_by('ID_Tema')
            ->order_by('jumlah_tema', 'DESC')
            ->limit(3);
        $query = $this->db->get()->result();
        return $query;
    }
}
