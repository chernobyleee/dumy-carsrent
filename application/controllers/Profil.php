<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profil extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->model('ModelUser');
    }
    public function index() {
        if ($this->session->userdata('username')) {
            $data['user'] = $this->ModelUser->cekData(['username' => $this->session->userdata('username')])->row_array();
            $data['review'] = $this->db->select('tipe.nama as tipe, user.username as username, mobil.nama as nama, mobil.gambar as gambar, review.massage, review.rating');
            $data['review'] = $this->db->from('review');
            $data['review'] = $this->db->join('user', 'user.id_user = review.id_user');
            $data['review'] = $this->db->join('mobil', 'mobil.id = review.id');
            $data['review'] = $this->db->join('tipe', 'tipe.id_tipe = mobil.id_tipe');
            $data['review'] = $this->db->where('user.username = "budi"');
            $data['review'] = $this->db->order_by('id_review','desc');
            $this->load->view('templates/header');
            $this->load->view('user/profile', $data);
            $this->load->view('templates/footer');
        }
        else{
            redirect('user/login');
        }
}
}