<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autentifikasi extends CI_Controller {

    // ini sementara langsung ke form login
    public function login(){
        $this->load->view('user/login');
    }

    public function register(){
        $this->load->view('user/register');
        
    }

}