<?php
class DaftarKegiatan extends CI_Controller{

    public function __construct(){
        parent::__construct();
        //cek session
        if(!$this->session->userdata('logged_in'))
        {
            redirect('auth');
        }
        $this->load->model('DaftarKegiatan_model');
        $this->load->model('FotoKegiatan_model');
    }

    public function index(){
        $data['daftar_kegiatan'] = $this->DaftarKegiatan_model->get();
        $this->History_model->access('foto kegiatan', 'mengunjungi halaman daftar kegiatan');
        $this->load->view('daftar-kegiatan/daftar_kegiatan', $data);
    }

    public function tambah(){
        if($this->session->userdata('role') == 1 || $this->session->userdata('role') == 3)
        {
            redirect('');
        }
        if($_POST)
        {
            if($this->DaftarKegiatan_model->save())
            {
                $this->History_model->access('foto kegiatan', 'menambah daftar kegiatan');
                $this->session->set_flashdata('alert', 'tambah');
                redirect('kegiatan');
            }
        }
        $this->History_model->access('foto kegiatan', 'mengunjungi halaman tambah daftar kegiatan');
        $this->load->view('daftar-kegiatan/form_tambah');
    }

    public function update($id = FALSE){
        //tidak boleh akses langsung
        if($this->session->userdata('role') == 1 || $this->session->userdata('role') == 3)
        {
            redirect('');
        }
        if(!isset($_SERVER['HTTP_REFERER']))
        {
            redirect('kegiatan');
        }

        if($_POST)
        {
            if($this->DaftarKegiatan_model->update())
            {
                $this->History_model->access('foto kegiatan', 'mengupdate daftar kegiatan '.$_POST['nama_kegiatan']);
                $this->session->set_flashdata('alert', 'edit');
                redirect('kegiatan');
            }
        }

        $data['kegiatan'] = $this->DaftarKegiatan_model->get($id);        
        $this->History_model->access('foto kegiatan', 'mengunjungi halaman update daftar kegiatan');
        $this->load->view('daftar-kegiatan/form_edit', $data);
    }

    public function hapus($id){
        if($this->session->userdata('role') == 1 || $this->session->userdata('role') == 3)
        {
            redirect('');
        }
        //tidak boleh akses langsung
        if(!isset($_SERVER['HTTP_REFERER']))
        {
            redirect('kegiatan');
        }
        $photos = $this->FotoKegiatan_model->get($id);
        foreach($photos as $p){
            unlink('./assets/foto-kegiatan/'.$p['lokasi']);
        }
        if($this->DaftarKegiatan_model->delete($id))
        {
            $this->History_model->access('foto kegiatan', 'menghapus jenis foto kegiatan '.$photos['nama_kegiatan']);
            $this->session->set_flashdata('alert', 'hapus');
            redirect('kegiatan');
        }           
    }
}