<?php

class Home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        //cek session
        if(!$this->session->userdata('logged_in'))
        {
            redirect('auth');
        }
    }

    public function index()
    {
        $this->History_model->access('beranda', 'mengunjungi halaman beranda');
        $this->load->view('home/dashboard');
    }

}