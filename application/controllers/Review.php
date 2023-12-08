<?php
class Review extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->model('ModelCars');
    }
    public function index() {
        $data['review'] = $this->ModelCars->getReview();
        $data['tipe'] = $this->ModelCars->getTipe();
    
        $this->load->view('templates/header');
        $this->load->view('review/index', $data);
        $this->load->view('templates/footer');
    }
    
}



     
