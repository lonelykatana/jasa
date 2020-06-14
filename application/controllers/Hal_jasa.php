<?php 

class Hal_jasa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view("user/_partials/header");
        $this->load->view("user/hal_jasa");
        $this->load->view("user/_partials/footer");

    }
    
}