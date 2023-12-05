<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cars extends CI_Controller {

    public function index(){
        $this->load->view('templates/header');
        $this->load->view('cars/index');
        // $this->load->view('cars/modalnotlogin');
        $this->load->view('cars/modallogin');
        $this->load->view('templates/footer');
    }


}