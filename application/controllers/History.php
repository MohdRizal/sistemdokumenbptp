<?php

class History extends CI_Controller{

    public function __construct(){
        parent::__construct();
        //cek session
        if(!$this->session->userdata('logged_in'))
        {
            redirect('auth');
        }
        
        if($this->session->userdata('role') != 0)
        {
            redirect('auth');   
        }
        $this->load->model('History_model');
        $this->load->library('pdf');
    }

    public function login()
    {
        if($_POST){
            $from = $this->input->post('from');
            $to = $this->input->post('to');
            $data['login'] = $this->History_model->get_login($from." 00:00:000", $to." 23:59:59");
            $data['from'] = $from;
            $data['to'] = $to;

            $this->pdf->setPaper('A4', 'potrait');
            $this->pdf->load_view('history/login', $data);
        }

        $this->load->view('history/pilih_login');
    }

    public function access()
    {
        if($_POST){
            $from = $this->input->post('from');
            $to = $this->input->post('to');
            $data['akses'] = $this->History_model->get_akses($from." 00:00:000", $to." 23:59:59");
            $data['from'] = $from;
            $data['to'] = $to;

            $this->pdf->setPaper('A4', 'potrait');
            $this->pdf->load_view('history/akses', $data);
        }
        $this->load->view('history/pilih_akses');
    }

    public function db_backup()
    {
        $this->load->dbutil();

        $backup = $this->dbutil->backup();

        $this->load->helper('file');
        write_file('./assets/db_backup/'.date('Y-m-d-H:i:s').'_backup.zip', $backup);

        $this->load->helper('download');
        force_download(date('Y-m-d-H:i:s').'_backup.zip', $backup);
    }
}