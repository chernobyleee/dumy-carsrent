<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {

    public function index(){
        $this->load->view('templates/header');
        $this->load->view('review/index');
        $this->load->view('templates/footer');
    }


}