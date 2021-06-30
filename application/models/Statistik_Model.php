<?php
class Statistik_Model extends CI_Model
{

    public function sum_undangan()
    {
        //SELECT SUM(gross_amount) FROM `tb_transaksi` WHERE status_code="settlement" AND tipe_transaksi="Undangan"
        $this->db->select_sum("gross_amount");
        $this->db->from('tb_transaksi');
        $this->db->where('status_code', 'settlement');
        $this->db->where('tipe_transaksi', 'Undangan');
        return $this->db->get()->row();
    }

    public function select_total_perbulan()
    {
        return $this->db->query("SELECT SUM(gross_amount) as total FROM tb_transaksi WHERE MONTH(transaction_time) = '" . date('m') . "' AND status_code='settlement' AND tipe_transaksi='Undangan'")->row();
    }

    public function sum_tema()
    {
        return $this->db->query("SELECT SUM(gross_amount) as total FROM tb_transaksi WHERE MONTH(transaction_time) = '" . date('m') . "' AND status_code='settlement' AND tipe_transaksi='Undangan'")->row();
    }

    public function selectAll_Transaksi()
    {
        return $this->db->get_where('tb_transaksi')->result();
    }
}
