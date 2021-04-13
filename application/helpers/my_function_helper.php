<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// Fungsi untuk membuat tanggal dengan format Indonesia
function tgl_indo($tgl)
{
    $tanggal = substr($tgl, 8, 2);
    $bulan = getBulan(substr($tgl, 5, 2));
    $tahun = substr($tgl, 0, 4);
    return $tanggal . ' ' . $bulan . ' ' . $tahun;
}

function menu_mempelai()
{
    $menu = [
        //nama menu
        ['Dashboard', 'Mempelai', 'Acara', 'Tamu Undangan', 'Hadiah', 'Galeri', 'Logout'],
        //icon
        ['feather icon-home', 'feather icon-users', 'feather icon-calendar', 'feather icon-user-plus', 'fa fa-gift', 'feather icon-image', 'feather icon-log-out'],
        //url
        ['Mempelai/Dashboard', 'Mempelai/Mempelai', 'Mempelai/Acara', 'Mempelai/Tamu', 'Mempelai/Hadiah', 'Mempelai/Galeri', 'Mempelai/Auth/logout'],
    ];
    return $menu;
}
//cek login
function cekaccess()
{
    $ci = get_instance();
    if (!$ci->session->userdata("username")) {
        redirect('Mempelai/Auth');
    } else {
    }
}

function check_access($role_id, $menu_id)
{
    $ci = get_instance();

    $ci->db->where('role_id', $role_id);
    $ci->db->where('menu_id', $menu_id);
    $result = $ci->db->get('admin_access_menu');
    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}

function sex($sex)
{
    if ($sex == "P") {
        return "Perempuan";
    } else {
        return "Laki-laki";
    }
}

// Fungsi untuk membuat bulan dengan format Indonesia
function getBulan($bln)
{
    switch ($bln) {
        case 1:
            return "Januari";
            break;
        case 2:
            return "Februari";
            break;
        case 3:
            return "Maret";
            break;
        case 4:
            return "April";
            break;
        case 5:
            return "Mei";
            break;
        case 6:
            return "Juni";
            break;
        case 7:
            return "Juli";
            break;
        case 8:
            return "Agustus";
            break;
        case 9:
            return "September";
            break;
        case 10:
            return "Oktober";
            break;
        case 11:
            return "November";
            break;
        case 12:
            return "Desember";
            break;
    }
}




// Fungsi untuk menampilkan data dalam bentuk combobox
function comboboxmanual($name, $id, $value, $isi, $selected)
{
    $ci = get_instance();
    $cmb = "<select name='$name' id='$id' class='custom-select col-6'>";
    $cmb .= "<option value=''>-- PILIH --</option>";
    foreach ($value as $d) {
        $cmb .= "<option value='" . $d . "'";
        $cmb .= $selected == $d ? "selected='selected'" : '';
        $cmb .= ">" . strtoupper($d) . "</option>";
    }
    $cmb .= "</select>";
    return $cmb;
}

function combobox($name, $id, $table, $field, $primary_key, $selected)
{
    $ci = get_instance();
    $cmb = "<select name='$name' id='$id' class='custom-select col-6'>";
    $data = $ci->db->get($table)->result();
    $cmb .= "<option value=''>-- PILIH --</option>";
    foreach ($data as $d) {
        $cmb .= "<option value='" . $d->$primary_key . "'";
        $cmb .= $selected == $d->$primary_key ? "selected='selected'" : '';
        $cmb .= ">" . strtoupper($d->$field) . "</option>";
    }
    $cmb .= "</select>";
    return $cmb;
}


function kode($table)
{
    $tabel = array('tb_akun', 'tb_acara', 'tb_mempelai', 'tb_undangan', 'tb_tamu');
    $kode = array('AKN', 'ACR', 'MPL', 'UND', 'TMU');
    $index_kode = array_search($table, $tabel);
    return $kode[$index_kode];
}
function kode_otomatis($table, $colum)
{
    $ci = get_instance();
    $query = $ci->db->query("SELECT MAX($colum) as Kode from $table");
    $kode = kode($table);
    $hasil = $query->row();
    $kodeangka = substr($hasil->Kode, 3);
    if ($hasil->Kode == null) {
        return $kode . "1";
    } else {
        return $kode . "" . $kodeangka + 1;
    }
    // die;

}
