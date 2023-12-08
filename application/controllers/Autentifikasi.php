<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autentifikasi extends CI_Controller {

    // ini sementara langsung ke form login
    public function login(){
        $this->load->view('autentifikasi/login');
    }

    public function register(){
        $this->load->view('autentifikasi/registrasi');
        
    }

    public function header_login(){
        $this->load->view('templates/header_login');
        $this->load->view('templates/auth_footer');
    }
    public function auth_header(){
        $this->load->view('templates/auth_header');
        $this->load->view('templates/auth_footer');
    }

}