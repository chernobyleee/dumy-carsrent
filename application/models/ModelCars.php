<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelCars extends CI_Model 
{
    public function getReview() 
    {
        $this->db->select('tipe.nama as tipe, user.username as username, mobil.nama as nama, mobil.gambar as gambar, review.massage, review.rating');
        $this->db->from('review');
        $this->db->join('user', 'user.id_user = review.id_user');
        $this->db->join('mobil', 'mobil.id = review.id');
        $this->db->join('tipe', 'tipe.id_tipe = mobil.id_tipe');
        $this->db->order_by('id_review','desc');
    
        
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getCars()
    {
        $this->db->select('tipe.nama as tipe, mobil.id as id, mobil.nama, transmisi, tahun, warna, kursi, harga, gambar');
        $this->db->from('mobil');
        $this->db->join('tipe',' tipe.id_tipe = mobil.id_tipe');
        
        $query = $this->db->get();
        return $query->result();
    }
    public function getTipe()
    {
        $this->db->select("nama as tipe");
        $this->db->from('tipe');
        $query = $this->db->get();
        return $query->result();
    }
}
?>
