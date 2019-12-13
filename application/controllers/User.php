<?php

class User extends CI_Controller{

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
        $this->load->model('User_model');
    }

    public function index(){
        $data['user'] = $this->User_model->get();
        $this->History_model->access('user', 'mengunjungi halaman user');
        $this->load->view('user/data_user', $data);
    }

    public function tambah(){
        //tidak boleh akses langsung
        if(!isset($_SERVER['HTTP_REFERER']))
        {
            redirect('account');
        }
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'valid_email|required|regex_match[/@pertanian.go.id/]|is_unique[user.username]',
            [
                'is_unique' => '<div class="alert bg-red alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    Username sudah ada, coba username lain.
                                </div>',
                'regex_match' =>    '<div class="alert bg-red alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        Format username tidak tepat, gunakan e-mail pertanian.
                                    </div>'
            ]
        );
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]',
            [
                'min_length' => '
                <div class="alert bg-red alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    Panjang password minimal 8 karakter
                </div>'
            ]
        );
        
        if ($this->form_validation->run() == FALSE)
        {
            $this->History_model->access('user', 'mengunjungi halaman tambah user');
            $this->load->view('user/form_tambah');
        }
        else
        {
            $data = [
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'role' => $this->input->post('role'),
                'nama_lengkap' => $this->input->post('nama_lengkap')
            ];

            if($this->User_model->save($data))
            {
                $this->History_model->access('user', 'menambah user '.$this->input->post('username'));
                $this->session->set_flashdata('alert', 'tambah');
                redirect('account');
            }
        }
    }

    public function update($id){
        //tidak boleh akses langsung
        if(!isset($_SERVER['HTTP_REFERER']))
        {
            redirect('account');
        }

        $this->load->library('form_validation');

        if($this->input->post('password') == '')
        {
            $this->form_validation->set_rules('username', 'Username', 'valid_email|required|regex_match[/@pertanian.go.id/]',
                [
                    'regex_match' => '<div class="alert bg-red alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        Format e-mail tidak tepat, gunakan email pertanian.
                                    </div>'
                ]
            );
        }else{
            $this->form_validation->set_rules('username', 'Username', 'valid_email|required|regex_match[/@pertanian.go.id/]',
                [
                    'regex_match' => '<div class="alert bg-red alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        Format e-mail tidak tepat, gunakan email pertanian.
                                    </div>'
                ]
            );

            $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]',
                [
                    'min_length' => '
                    <div class="alert bg-red alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        Panjang password minimal 8 karakter
                    </div>'
                ]
            );
        }

        if ($this->form_validation->run() == FALSE)
        {
            $data['user'] = $this->User_model->get($id);
            $this->History_model->access('user', 'mengunjungi halaman update user '.$data['user']['username']);
            $this->load->view('user/form_edit', $data);
        }else{
            if($this->input->post('password') == '')
            {
                $data = [
                    'username' => $this->input->post('username'),
                    'nama_lengkap' => $this->input->post('nama_lengkap'),
                    'role' => $this->input->post('role')
                ];
            }else{
                $data = [
                    'username' => $this->input->post('username'),
                    'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                    'role' => $this->input->post('role'),
                    'nama_lengkap' => $this->input->post('nama_lengkap')
                ];
            }
            if($this->User_model->update($data, $id))
            {
                $this->History_model->access('user', 'mengupdate user '.$this->input->post('username'));
                $this->session->set_flashdata('alert', 'edit');
                redirect('account');
            }
        }
    }

    public function hapus($id){
        //tidak boleh akses langsung
        if(!isset($_SERVER['HTTP_REFERER']))
        {
            redirect('account');
        }
        //untuk keperluan log akses
        $data['user'] = $this->User_model->get($id);

        if($this->User_model->delete($id))
        {
            $this->History_model->access('user', 'menghapus user '.$data['user']['username']);
            $this->session->set_flashdata('alert', 'hapus');
            redirect('account');
        }
    }

}