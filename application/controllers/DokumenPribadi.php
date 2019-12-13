<?php

class DokumenPribadi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //cek session
        if(!$this->session->userdata('logged_in'))
        {
            redirect('auth');
        }

        $this->load->model('User_model');
        $this->load->model('DokumenPribadi_model');
        $this->load->model('BagikanDokumen_model');
    }

    public function index(){
        $role = $this->session->userdata('role');

        if($role != '0')
        {
            redirect('personal-document/my-document');
        }

        $this->History_model->access('personal-document', 'melihat seluruh user');

        $data['user'] = $this->User_model->get();
        $this->load->view('dokumen-pribadi/user',$data);
    }

    public function pribadi($user = FALSE)
    {
        //tidak boleh akses langsung
        if(!isset($_SERVER['HTTP_REFERER']))
        {
            redirect('beranda');
        }

        $view = 'dokumen-pribadi/semua_pegawai';
        if($user == FALSE)
        {
            $user = $this->session->userdata('id_user');
            $view = 'dokumen-pribadi/dokumen_pribadi';
        }
        //exit($user);
        $data['user'] = $this->User_model->get($user);
        $data['all_user'] = $this->User_model->get();
        $data['doc'] = $this->DokumenPribadi_model->getDocByUser($user);
        $this->History_model->access('personal-document', 'mengakses halaman dokumen pribadi');
        
        $this->load->view($view,$data);
    }

    public function tambah(){
        //tidak boleh akses langsung
        if(!isset($_SERVER['HTTP_REFERER']))
        {
            redirect('404_override');
        }

        if($_POST)
        {
            //nama asli file
            $fileName = $_FILES['dokumen']['name'];
            //ganti nama file
            $namaFile = md5(date('Y-m-d H:i:s').$fileName.$this->session->userdata('username')).".".pathinfo($fileName, PATHINFO_EXTENSION);

            $config['upload_path']          = './assets/docs_pribadi/';
            $config['allowed_types']        = 'doc|docx|pdf|pptx|xls|xlsx';
            $config['max_size']             = 51200; //Maks 50MB
            $config['file_name']            = $namaFile;

            
            $this->load->library('upload', $config);

            //lakukan upload
            if($this->upload->do_upload('dokumen'))
            {
                $judul = $this->input->post('judul');

                $data = [
                    'judul' => $judul,
                    'lokasi' => $namaFile,
                    'tanggal_upload' => date('Y-m-d H:i:s'),
                    'id_user' => $this->session->userdata('id_user')
                ];

                if($this->DokumenPribadi_model->save($data))
                {
                    $this->session->set_flashdata('alert', 'tambah');
                    $this->History_model->access('personal-document', 'menambah dokumen pribadi : '.$judul);
                    redirect('personal-document/my');
                }else{
                    unlink('./assets/docs_pribadi/'.$namaFile);
                    $this->session->set_flashdata('gagal', 'Gagal simpan data! Silakan kontak admin');
                    redirect('personal-document/my/');
                }
            }else{
                $errorMessage = $this->upload->display_errors();
                $this->session->set_flashdata('gagal', $errorMessage);
                redirect('personal-document/my/tambah');
            }
        }
        $this->History_model->access('personal-document', 'mengunjungi halaman tambah dokumen pribadi');
        $this->load->view('dokumen-pribadi/form_tambah');
    }

    public function update($id){
        $docs = $this->DokumenPribadi_model->getDetail($id);
        //tidak boleh akses langsung
        if(!isset($_SERVER['HTTP_REFERER']))
        {
            redirect('personal-document/my');
        }

        if($_POST)
        {           
            if(file_exists(($_FILES['dokumen']['tmp_name'])))
            {
                //nama asli file
                $fileName = $_FILES['dokumen']['name'];
                //ganti nama file
                $namaFile = md5(date('Y-m-d H:i:s').$fileName.$this->session->userdata('username')).".".pathinfo($fileName, PATHINFO_EXTENSION);

                $config['upload_path']          = './assets/docs_pribadi/';
                $config['allowed_types']        = 'doc|docx|pdf|pptx|xls|xlsx';
                $config['max_size']             = 51200; //Maks 50MB
                $config['file_name']            = $namaFile;

                $this->load->library('upload', $config);

                //lakukan upload
                if($this->upload->do_upload('dokumen'))
                {
                    $judul = $this->input->post('judul');

                    $data = [
                        'judul' => $judul,
                        'lokasi' => $namaFile,
                    ];

                    if($this->DokumenPribadi_model->update($data, $id))
                    {
                        $this->session->set_flashdata('alert', 'edit');
                        $this->History_model->access('personal-document', 'mengupdate dokumen pribadi dengan id '.$id);
                        
                        $oldFile = $docs['lokasi'];
                        if(unlink('./assets/docs_pribadi/'.$oldFile)){
                            redirect('personal-document/my');
                        }
                     
                    }else{
                        unlink('./assets/docs_pribadi/'.$namaFile);
                        $this->session->set_flashdata('gagal', 'Gagal simpan data! Silakan kontak admin');
                        redirect('personal-document/my/update/'.$id);
                    }
                }else{
                    $errorMessage = $this->upload->display_errors();
                    $this->session->set_flashdata('gagal', $errorMessage);
                    redirect('personal-document/my/update/'.$id);
                }
            }else{
                $data = [
                    'judul' => $this->input->post('judul'),
                ];

                if($this->DokumenPribadi_model->update($data, $id)){
                    $this->session->set_flashdata('alert', 'edit');
                    redirect('personal-document/my/');
                }   
            }
        }
        $this->History_model->access('personal-document', 'mengunjungi halaman update dokumen pribadi');
        $data['data'] = $this->DokumenPribadi_model->getDetail($id);

        $this->load->view('dokumen-pribadi/form_edit', $data);
    }

    public function hapus($id){
        
        if(!isset($_SERVER['HTTP_REFERER']))
        {
            redirect('personal-document/my');
        }

        //get id_jenis_dokumen dan nama_file
        $details = $this->DokumenPribadi_model->getDetail($id);

        $id = $details['id'];
        $file = './assets/docs_pribadi/'.$details['lokasi'];

        if(unlink($file))
        {
            if($this->DokumenPribadi_model->delete($id))
            {
                $this->History_model->access('personal-document', 'menghapus dokumen pribadi '.$details['judul']);
                $this->session->set_flashdata('alert', 'hapus');
                redirect('personal-document/my/');
            }   
        }       
    }

    public function download($id)
    {
        //tidak boleh akses langsung
        if(!isset($_SERVER['HTTP_REFERER']))
        {
            redirect();
        }

        $doc = $this->DokumenPribadi_model->getDetail($id);
        $file_path = base_url('assets/docs_pribadi/');
        $realName = $doc['lokasi'];
        $wantedFileName = $doc['judul'];
        //ambil ekstensi file, pisahkan tanda "."
        $exp_handler = explode(".", $realName);
        //print_r($exp_handler);
        $extension = ".".$exp_handler[1];
        //print_r($exp_handler);
        //$file_path.$doc['lokasi'];
        //force_download($wantedFileName.$extension, file_get_contents($file_path.$realName));
        //exit($extension);
        if($extension == '.pdf')
        {
            header('Content-Type: application/pdf');
            header('Content-Disposition: inline; filename='.$wantedFileName.$extension);
            header('Content-Transfer-Encoding: binary');
            header('Accept-Ranges: bytes');

            readfile($file_path.$realName);
        }else{
            force_download($wantedFileName.$extension, file_get_contents($file_path.$realName));
        }

        $this->History_model->access('dokumen', 'mengunduh dokumen '.$wantedFileName);

        
    }

    public function bagikan($doc)
    {
        //tidak boleh akses langsung
        if(!isset($_SERVER['HTTP_REFERER']))
        {
            redirect('beranda');
        }
        
        $data['all_user'] = $this->User_model->get();
        $data['id'] = $doc;
        if($_POST){
            foreach($this->input->post('email') as $e){
                $data = [
                    'user_asal' => $this->session->userdata('id_user'),
                    'user_tujuan' => $e,
                    'dokumen_id' => $doc,
                    'tanggal' => date('Y-m-d H:i:s'),
                    'pesan' => $this->input->post('pesan')
                ];

                $this->BagikanDokumen_model->save($data);
                $this->History_model->access('personal-document', 'membagikan dokumen kepada '.$e);
            }

            $this->session->set_flashdata('alert', 'share');
            redirect('personal-document/my/');
        }else{
            $this->load->view('dokumen-pribadi/bagikan',$data);
        }
        
    }

    public function inbox(){
        if(!isset($_SERVER['HTTP_REFERER']))
        {
            redirect('personal-document/my');
        }
        $this->History_model->access('personal-document', 'membuka kotak masuk');
        $data['doc'] = $this->BagikanDokumen_model->get();
        $this->load->view('dokumen-pribadi/inbox',$data);
    }

    public function inbox_detail($id){
        if(!isset($_SERVER['HTTP_REFERER']))
        {
            redirect('personal-document/my');
        }
        $this->History_model->access('personal-document', 'membuka kotak masuk');
        $this->BagikanDokumen_model->read($id);
        $data['doc'] = $this->BagikanDokumen_model->get($id);
        $this->load->view('dokumen-pribadi/inbox_detail',$data);
    }

}