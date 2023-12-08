<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('ModelCars');
    }

    public function index()
    {
        if ($this->session->userdata('username')) {
            $data['review'] = $this->ModelCars->getReview();
            //ganti header dan footer dengan versi sudah login
            $this->load->view('templates/header');
            $this->load->view('home/index', $data);
            $this->load->view('templates/footer');

        } else {
            $data['review'] = $this->ModelCars->getReview();

            $this->load->view('templates/header');
            $this->load->view('home/index', $data);
            $this->load->view('templates/footer');
        }
    }

}