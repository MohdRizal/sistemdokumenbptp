<?php

class Dokumen extends CI_Controller{

    public function __construct(){
        parent::__construct();
        //cek session
        if(!$this->session->userdata('logged_in'))
        {
            redirect('auth');
        }
        $this->load->model('Dokumen_model');
        $this->load->model('JenisDokumen_model');
        $this->load->model('Menu_model');
    }

    public function index($type){
        $data['detail'] = $this->Menu_model->detail($type);
        $data['dokumen'] = $this->Dokumen_model->get($type);
        $this->History_model->access('dokumen', 'mengunjungi halaman dokumen '.$data['detail']['jenis_dokumen']);
        $this->load->view('dokumen/dokumen', $data);
    }

    public function tambah($type){
        //tidak boleh akses langsung
        if(!isset($_SERVER['HTTP_REFERER']))
        {
            redirect('dokumen/type/'.$type);
        }
        
        if($this->session->userdata('role') == 2 || $this->session->userdata('role') == 3)
        {
            redirect('');
        }

        if($_POST)
        {
            //nama asli file
            $fileName = $_FILES['dokumen']['name'];
            //ganti nama file
            $namaFile = md5(date('Y-m-d H:i:s').$fileName).".".pathinfo($fileName, PATHINFO_EXTENSION);

            $config['upload_path']          = './assets/docs/';
            $config['allowed_types']        = 'doc|docx|pdf|pptx|xls|xlsx';
            $config['max_size']             = 10240; //Maks 10MB
            $config['file_name']            = $namaFile;

            
            $this->load->library('upload', $config);

            //lakukan upload
            if($this->upload->do_upload('dokumen'))
            {
                //untuk keperluan log akses
                $judul = $this->input->post('judul');

                $data = [
                    'judul' => $judul,
                    'tahun_dokumen' => $this->input->post('tahun_dokumen'),
                    'ringkasan' => $this->input->post('ringkasan'),
                    'lokasi' => $namaFile,
                    'tanggal_upload' => date('Y-m-d H:i:s'),
                    'id_jenis_dokumen' => $type
                ];

                if($this->Dokumen_model->save($data))
                {
                    $this->session->set_flashdata('alert', 'tambah');
                    $this->History_model->access('dokumen', 'menambah dokumen '.$judul);
                    redirect('dokumen/type/'.$type);
                }else{
                    unlink('./assets/docs/'.$namaFile);
                    $this->session->set_flashdata('gagal', 'Gagal simpan data! Silakan kontak admin');
                    redirect('dokumen/tambah/type/'.$type);
                }
            }else{
                $errorMessage = $this->upload->display_errors();
                $this->session->set_flashdata('gagal', $errorMessage);
                redirect('dokumen/tambah/type/'.$type);
            }
        }
        $data['detail'] = $this->JenisDokumen_model->get($type);
        $this->History_model->access('dokumen', 'mengunjungi halaman tambah dokumen '.$data['detail']['jenis_dokumen']);
        $this->load->view('dokumen/form_tambah', $data);
    }

    public function update($type){
        $docs = $this->Dokumen_model->getDetail($type);
        //tidak boleh akses langsung
        if(!isset($_SERVER['HTTP_REFERER']))
        {
            redirect('dokumen/type/'.$docs['id_jenis_dokumen']);
        }

        if($this->session->userdata('role') == 2 || $this->session->userdata('role') == 3)
        {
            redirect('');
        }

        if($_POST)
        {           
            if(file_exists(($_FILES['dokumen']['tmp_name'])))
            {
                //nama asli file
                $fileName = $_FILES['dokumen']['name'];
                //ganti nama file
                $namaFile = md5(date('Y-m-d H:i:s').$fileName).".".pathinfo($fileName, PATHINFO_EXTENSION);

                $config['upload_path']          = './assets/docs/';
                $config['allowed_types']        = 'doc|docx|pdf|pptx|xls|xlsx';
                $config['max_size']             = 10240; //Maks 10MB
                $config['file_name']            = $namaFile;

                
                $this->load->library('upload', $config);

                //lakukan upload
                if($this->upload->do_upload('dokumen'))
                {
                    $data = [
                        'judul' => $this->input->post('judul'),
                        'tahun_dokumen' => $this->input->post('tahun_dokumen'),
                        'ringkasan' => $this->input->post('ringkasan'),
                        'lokasi' => $namaFile,
                        'tanggal_upload' => date('Y-m-d H:i:s')
                    ];

                    if($this->Dokumen_model->update($data, $type))
                    {
                        $this->session->set_flashdata('alert', 'edit');
                        $this->History_model->access('dokumen', 'mengupdate dokumen dengan id'.$type);
                        
                        $oldFile = $docs['lokasi'];
                        if(unlink('./assets/docs/'.$oldFile)){
                            redirect('dokumen/type/'.$docs['id_jenis_dokumen']);
                        }

                        
                    }else{
                        unlink('./assets/docs/'.$namaFile);
                        $this->session->set_flashdata('gagal', 'Gagal simpan data! Silakan kontak admin');
                        redirect('dokumen/update/type/'.$type);
                    }
                }else{
                    $errorMessage = $this->upload->display_errors();
                    $this->session->set_flashdata('gagal', $errorMessage);
                    redirect('dokumen/update/type/'.$type);
                }
            }else{
                $data = [
                    'judul' => $this->input->post('judul'),
                    'tahun_dokumen' => $this->input->post('tahun_dokumen'),
                    'ringkasan' => $this->input->post('ringkasan')
                    //'tanggal_upload' => date('Y-m-d H:i:s')
                ];

                if($this->Dokumen_model->update($data, $type)){
                    $this->session->set_flashdata('alert', 'edit');
                    redirect('dokumen/type/'.$docs['id_jenis_dokumen']);
                }
                
            }
            
            // if($this->Dokumen_model->update())
            // {
            //     $this->session->set_flashdata('alert', 'edit');
            //     redirect('dokumen');
            // }
        }
        $this->History_model->access('dokumen', 'mengunjungi halaman update dokumen');
        $data['data'] = $this->Dokumen_model->getDetail($type);
		$data['detail'] = $this->JenisDokumen_model->get($data['data']['id_jenis_dokumen']);

        $this->load->view('dokumen/form_edit', $data);
    }

    public function hapus($id){
        //tidak boleh akses langsung
        if($this->session->userdata('role') == 2 || $this->session->userdata('role') == 3)
        {
            redirect('');
        }
        
        if(!isset($_SERVER['HTTP_REFERER']))
        {
            redirect('dokumen');
        }

        //get id_jenis_dokumen dan nama_file
        $details = $this->Dokumen_model->getDetail($id);

        $id_jenis = $details['id_jenis_dokumen'];
        $file = './assets/docs/'.$details['lokasi'];

        if(unlink($file))
        {
            if($this->Dokumen_model->delete($id))
            {
                $this->History_model->access('dokumen', 'menghapus dokumen '.$details['judul']);
                $this->session->set_flashdata('alert', 'hapus');
                redirect('dokumen/type/'.$id_jenis);
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

        $doc = $this->Dokumen_model->getDetail($id);
        $file_path = base_url('assets/docs/');
        $realName = $doc['lokasi'];
        $wantedFileName = $doc['judul'];
        //ambil ekstensi file, pisahkan tanda "."
        $exp_handler = explode(".", $realName);
        $extension = ".".$exp_handler[1];
        //print_r($exp_handler);
        //$file_path.$doc['lokasi'];
        //force_download($wantedFileName.$extension, file_get_contents($file_path.$realName));
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

}