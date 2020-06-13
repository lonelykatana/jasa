<?php 

class Landing_page extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view("user/_partials/header");
        $this->load->view("user/landing_page");
        $this->load->view("user/_partials/footer");

    }
}