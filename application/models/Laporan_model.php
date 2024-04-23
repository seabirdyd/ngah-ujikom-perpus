<?php

class Laporan_model extends CI_Model{

  public function getAllData(){
    $this->db->select('*');
    $this->db->from('tbl_pinjam');
    $this->db->join('tbl_login', 'tbl_login.anggota_id = tbl_pinjam.anggota_id');
    $this->db->join('tbl_buku ', 'tbl_buku.buku_id  = tbl_pinjam.buku_id');
    return $this->db->get()->result();
  }
  
  public function filterData($tgl_awal, $tgl_akhir){
    $this->db->select('*');
    $this->db->from('tbl_pinjam');
    $this->db->join('tbl_login', 'tbl_login.anggota_id = tbl_pinjam.anggota_id');
    $this->db->join('tbl_buku ', 'tbl_buku.buku_id  = tbl_pinjam.buku_id');
    $this->db->where('tbl_pinjam.tgl_pinjam >=', $tgl_awal);
    $this->db->where('tbl_pinjam.tgl_pinjam <=', $tgl_akhir);
    return $this->db->get()->result();
  }
}