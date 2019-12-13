<?php

class Account extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('logged_in'))
        {
            redirect('auth');
        }

        $this->load->model('User_model');
    }

    public function index()
    {
        //tidak boleh akses langsung
        if(!isset($_SERVER['HTTP_REFERER']))
        {
            redirect('account');
        }

        $this->History_model->access('pengaturan akun', 'membuka halaman pengaturan akun');

        $uname = $this->session->userdata('username');

        $data['user'] = $this->User_model->getUser($uname);

        $this->load->view('account/index', $data);
    }

    public function photo()
    {
        //tidak boleh akses langsung
        if(!isset($_SERVER['HTTP_REFERER']))
        {
            redirect('account');
        }

        //echo 1;

        if($_FILES)
        {
            $user = $this->User_model->getUser($this->session->userdata('username'));
            //nama asli file
            $fileName = $_FILES['foto_profil']['name'];
            //ganti nama file
            $namaFile = md5(date('Y-m-d H:i:s').$fileName).".".pathinfo($fileName, PATHINFO_EXTENSION);

            $config['upload_path']          = './assets/user/';
            $config['allowed_types']        = 'jpg|png|jpeg|gif';
            $config['max_size']             = 10240; //Maks 10MB
            $config['file_name']            = $namaFile;

            
            $this->load->library('upload', $config);

            //lakukan upload
            if($this->upload->do_upload('foto_profil'))
            {
                $data = [
                    'foto' => $namaFile
                ];

                if($this->User_model->update($data, $user['id_user']))
                {
					if(is_file('./assets/user/'.$user['foto'])){
						unlink('./assets/user/'.$user['foto']);
					}
                    $this->History_model->access('pengaturan akun', 'mengganti foto profil');
                    $this->session->set_flashdata('alert', 'ganti-foto');
                    redirect('pengaturan-akun');
                }else{
                    unlink('./assets/user/'.$namaFile);
                    $this->session->set_flashdata('gagal', 'Gagal upload, silakan hubungi admin');
                    redirect('pengaturan-akun');
                }
            }else{
                //$errorMessage = $this->upload->display_errors();
                $this->session->set_flashdata('gagal', 'Gagal Ganti Foto! Hanya upload file JPG / JPEG / PNG / GIF');
                redirect('pengaturan-akun');
            }
        }
    }

    public function password()
    {
        //tidak boleh akses langsung
        if(!isset($_SERVER['HTTP_REFERER']))
        {
            redirect('account');
        }

        $userSession = $this->session->userdata('username');

        $user = $this->User_model->getUser($userSession);

        $password1 = $this->input->post('OldPassword');
        $password2 = $this->input->post('NewPassword');
        $password3 = $this->input->post('NewPasswordConfirm');

        if(strlen($password1) < 8){
            $this->session->set_flashdata('alert', 'p1-less');
            redirect('pengaturan-akun');
        }else if(strlen($password2) < 8){
            $this->session->set_flashdata('alert', 'p2-less');
            redirect('pengaturan-akun');
        }else if(strlen($password3) < 8){
            $this->session->set_flashdata('alert', 'p3-less');
            redirect('pengaturan-akun');
        }

        if(password_verify($password1, $user['password']))
        {
            if($password2 == $password3)
            {
                $data = [
                    'password' => password_hash($password2, PASSWORD_BCRYPT)
                ];

                if($this->User_model->update($data, $user['id_user']))
                {
                    $this->History_model->access('pengaturan akun', 'mengganti password');
                    $this->session->set_flashdata('alert', 'edit-password');
                    redirect('pengaturan-akun');
                }
            }else{
                $this->session->set_flashdata('alert', 'password-unmatch');
                redirect('pengaturan-akun');
            }
        }else{
            $this->session->set_flashdata('alert', 'password-wrong');
            redirect('pengaturan-akun');
        }
    }

}