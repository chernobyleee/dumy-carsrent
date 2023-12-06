<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function index(){
        $this->load->view('templates/header');
        $this->load->view('contact/index');
        $this->load->view('templates/footer');
    }
    public function inputcontact() {

        $this->load->database();

        $nama = $this->input->post('nama') ? $this->input->post('nama') : null;
        $email = $this->input->post('email') ? $this->input->post('email') : null;
        $subject = $this->input->post('subject') ? $this->input->post('subject') : null;
        $message = $this->input->post('message') ? $this->input->post('message') : null;

        $data = array(
            'nama' => $nama,
            'email' => $email,
            'subject' => $subject,
            'message' => $message
        );

        $this->db->insert('contact', $data);
        redirect('review');
    }


}