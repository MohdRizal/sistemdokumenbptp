<?php

class NotFound extends CI_Controller{

    public function __construct()
    {
        parent::__construct();   
        if(!$this->session->userdata('logged_in')){
            redirect('auth');
        }
    }

    public function index(){
        $this->load->view('galat/index');
    }

}