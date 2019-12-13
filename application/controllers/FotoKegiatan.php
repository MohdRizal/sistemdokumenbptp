<?php

class FotoKegiatan extends CI_Controller{

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

    public function index($type){
        //tidak boleh akses langsung
        if(!isset($_SERVER['HTTP_REFERER']))
        {
            redirect('kegiatan');
        }
        $data['kegiatan'] = $this->DaftarKegiatan_model->get($type);
        $data['foto_kegiatan'] = $this->FotoKegiatan_model->get($type);
        $this->History_model->access('foto kegiatan', 'mengunjungi halaman foto '.$data['kegiatan']['nama_kegiatan']);
        $this->load->view('foto-kegiatan/foto_kegiatan', $data);
        //echo 'berhasil';
    }

    public function tambah($type){
        //tidak boleh akses langsung
        if(!isset($_SERVER['HTTP_REFERER']))
        {
            redirect('kegiatan/detail/'.$type);
        }
        
        if($this->session->userdata('role') == 1 || $this->session->userdata('role') == 3)
        {
            redirect('');
        }

        //untuk keperluan log akses
        //di load juga untuk view
        $data['kegiatan'] = $this->DaftarKegiatan_model->get($type);

        if($_POST)
        {   
            // echo "<pre>";
            // print_r($_FILES);
            // exit;
            for($i = 0; $i < count($_FILES['foto_kegiatan']['name']); $i++)
            {
                //create your own validation

                //type validator
                
                $filetype = $_FILES['foto_kegiatan']['type'][$i];
                $acceptableType = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];

                if(!in_array($filetype, $acceptableType))
                {
                    $errorMessage = "Hanya menerima tipe jpg / jpeg / png / gif";
                    $this->session->set_flashdata('gagal', $errorMessage);
                    redirect('kegiatan/detail/tambah/'.$type);
                    //echo $type."<br>";
                }

                //size validator

                $size = $_FILES['foto_kegiatan']['size'][$i];
                /*
                Untuk panduan
                1 Kb = 1000 b
                1 Mb = 1000 Kb
                10 Mb = 10000000 b
                */

                if($size > 25000000)
                {
                    $errorMessage = "Ukuran gambar melebihi 25 Mb";
                    $this->session->set_flashdata('gagal', $errorMessage);
                    redirect('kegiatan/detail/tambah/'.$type);
                }
                // echo "size dlm kb <br>";
                // echo ($size/1000)."<br>";
                
            }

            // == Jika lolos validasi, simpan file
            for($i = 0; $i < count($_FILES['foto_kegiatan']['name']); $i++)
            {
                $fileName = $_FILES['foto_kegiatan']['name'][$i];
                $tmp = $_FILES['foto_kegiatan']['tmp_name'][$i];
                //ganti nama file
                $namaFile = md5(date('Y-m-d H:i:s').$fileName).".".pathinfo($fileName, PATHINFO_EXTENSION);
                $pathTujuan = './assets/foto-kegiatan/';

                //lakukan upload
                $upload = move_uploaded_file($tmp, $pathTujuan.$namaFile);

                if($upload)
                {
                    $data_ = [
                        'caption' => $this->input->post('caption'),
                        'lokasi' => $namaFile,
                        'waktu_upload' => date('Y-m-d H:i:s'),
                        'id_kegiatan' => $type
                    ];

                    $save = $this->FotoKegiatan_model->save($data_);

                    if(!$save)
                    {
                        unlink('./assets/foto-kegiatan/'.$namaFile);
                        $this->session->set_flashdata('gagal', 'Gagal simpan data! Silakan kontak admin');
                        redirect('kegiatan/detail/'.$type);
                    }
                }
            }

            $this->History_model->access('foto kegiatan', 'menambah foto '.$data['kegiatan']['nama_kegiatan']);
            $this->session->set_flashdata('alert', 'tambah');
            redirect('kegiatan/detail/'.$type);
            
        }
        $data['foto_kegiatan'] = $this->FotoKegiatan_model->get($type);
        $this->History_model->access('foto kegiatan', 'mengunjungi halaman tambah foto '.$data['kegiatan']['nama_kegiatan']);
        $this->load->view('foto-kegiatan/form_tambah', $data);
    }

    public function update($type){
        $foto = $this->FotoKegiatan_model->getDetail($type);
        //tidak boleh akses langsung
        if(!isset($_SERVER['HTTP_REFERER']))
        {
            redirect('kegiatan/detail/'.$foto['id_kegiatan']);
        }

        if($this->session->userdata('role') == 1 || $this->session->userdata('role') == 3)
        {
            redirect('');
        }

        //untuk keperluan log akses dan view
        $data['kegiatan'] = $this->DaftarKegiatan_model->get($foto['id_kegiatan']);

        if($_POST)
        {           
            if(file_exists(($_FILES['foto_kegiatan']['tmp_name'])))
            {
                //nama asli file
                $fileName = $_FILES['foto_kegiatan']['name'];
                //ganti nama file
                $namaFile = md5(date('Y-m-d H:i:s').$fileName).".".pathinfo($fileName, PATHINFO_EXTENSION);

                $config['upload_path']          = './assets/foto-kegiatan/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 10240; //Maks 10MB
                $config['file_name']            = $namaFile;

                
                $this->load->library('upload', $config);

                //lakukan upload
                if($this->upload->do_upload('foto_kegiatan'))
                {
                    $data = [
                        'caption' => $this->input->post('caption'),
                        'lokasi' => $namaFile,
                    ];

                    if($this->FotoKegiatan_model->update($data, $type))
                    {
                        $this->session->set_flashdata('alert', 'edit');
                        $this->History_model->access('foto kegiatan', 'mengupdate foto '.$data['kegiatan']['nama_kegiatan']);
                        
                        $oldFile = $foto['lokasi'];
                        if(unlink('./assets/foto-kegiatan/'.$oldFile)){
                            redirect('kegiatan/detail/'.$foto['id_kegiatan']);
                        }

                        
                    }else{
                        unlink('./assets/foto-kegiatan/'.$namaFile);
                        $this->session->set_flashdata('gagal', 'Gagal simpan data! Silakan kontak admin');
                        redirect('kegiatan/detail/update/'.$foto['id_kegiatan']);
                    }
                }else{
                    $errorMessage = "Hanya menerima tipe jpg / jpeg / png / gif";
                    $this->session->set_flashdata('gagal', $errorMessage);
                    redirect('kegiatan/detail/update/'.$foto['id_foto_kegiatan']);
                }
            }else{
                $data = [
                    'caption' => $this->input->post('caption'),
                ];

                if($this->FotoKegiatan_model->update($data, $foto['id_foto_kegiatan'])){
                    $this->session->set_flashdata('alert', 'edit');
                    redirect('kegiatan/detail/'.$foto['id_kegiatan']);
                }
                
            }

        }

        
        $data['foto_kegiatan'] = $foto;
        $data['id_foto'] = $type;
        $this->History_model->access('foto kegiatan', 'mengunjungi halaman update foto '.$data['kegiatan']['nama_kegiatan']);
        $this->load->view('foto-kegiatan/form_edit', $data);
    }

    public function hapus($id){
        //tidak boleh akses langsung
        if($this->session->userdata('role') == 1 || $this->session->userdata('role') == 3)
        {
            redirect('');
        }
        
        if(!isset($_SERVER['HTTP_REFERER']))
        {
            redirect('kegiatan');
        }

        //get id_jenis_dokumen dan nama_file
        $foto = $this->FotoKegiatan_model->getDetail($id);

        $id_jenis = $foto['id_kegiatan'];
        $file = './assets/foto-kegiatan/'.$foto['lokasi'];

        //untuk keperluan log akses
        $data['kegiatan'] = $this->DaftarKegiatan_model->get($id_jenis);
        
        if(unlink($file))
        {
            if($this->FotoKegiatan_model->delete($id))
            {
                $this->History_model->access('foto kegiatan', 'menghapus foto '.$data['kegiatan']['nama_kegiatan']);
                $this->session->set_flashdata('alert', 'hapus');
                redirect('kegiatan/detail/'.$id_jenis);
            }   
        }       
    }

}