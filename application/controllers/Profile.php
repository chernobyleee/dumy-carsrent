<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function index(){
        $this->load->view('templates/auth_header');
        $this->load->view('user/profile');
        $this->load->view('templates/auth_footer');
    }


}