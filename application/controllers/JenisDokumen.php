<?php

class JenisDokumen extends CI_Controller{

    public function __construct(){
        parent::__construct();
        //cek session
        if(!$this->session->userdata('logged_in'))
        {
            redirect('auth');
        }
        $this->load->model('JenisDokumen_model');
    }

    public function index(){
        $data['jenis_dokumen'] = $this->JenisDokumen_model->get();
        $this->History_model->access('jenis dokumen', 'mengunjungi halaman jenis dokumen');
        $this->load->view('jenis-dokumen/jenis_dokumen', $data);
    }

    public function tambah(){
        if($this->session->userdata('role') == 2 || $this->session->userdata('role') == 3)
        {
            redirect('');
        }
        if($_POST)
        {
            if($this->JenisDokumen_model->save())
            {
                $this->History_model->access('jenis dokumen', 'menambah jenis dokumen '.$_POST['jenis_dokumen']);
                $this->session->set_flashdata('alert', 'tambah');
                redirect('jenis-dokumen');
            }
        }
        $this->History_model->access('jenis dokumen', 'mengunjungi halaman tambah jenis dokumen');
        $this->load->view('jenis-dokumen/form_tambah');
    }

    public function update($id = FALSE){
        if($this->session->userdata('role') == 2 || $this->session->userdata('role') == 3)
        {
            redirect('');
        }
        //tidak boleh akses langsung
        if(!isset($_SERVER['HTTP_REFERER']))
        {
            redirect('jenis-dokumen');
        }

        if($_POST)
        {
            if($this->JenisDokumen_model->update())
            {
                $this->session->set_flashdata('alert', 'edit');
                $this->History_model->access('jenis dokumen', 'mengupdate jenis dokumen '.$_POST['jenis_dokumen']);
                redirect('jenis-dokumen');
            }
        }

        $data['dokumen'] = $this->JenisDokumen_model->get($id);
        $this->History_model->access('jenis dokumen', 'mengunjungi halaman update jenis dokumen '.$data['dokumen']['jenis_dokumen']);
        $this->load->view('jenis-dokumen/form_edit', $data);
    }

    public function hapus($id){
        if($this->session->userdata('role') == 2 || $this->session->userdata('role') == 3)
        {
            redirect('');
        }
        //tidak boleh akses langsung
        if(!isset($_SERVER['HTTP_REFERER']))
        {
            redirect('jenis-dokumen');
        }
        $data['dokumen'] = $this->JenisDokumen_model->get($id);
        if($this->JenisDokumen_model->delete($id))
        {
            $this->History_model->access('jenis dokumen', 'menghapus jenis dokumen '.$data['dokumen']['jenis_dokumen']);
            $this->session->set_flashdata('alert', 'hapus');
            redirect('jenis-dokumen');
        }           
    }
}