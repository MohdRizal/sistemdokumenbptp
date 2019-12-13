<?php

class Auth extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('History_model');
    }

    public function process()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'valid_email|required|regex_match[/@pertanian.go.id/]',
            ['regex_match' => 'Email tidak ditemukan']
        );
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('auth/login');
        }else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user_data = $this->User_model->getUser($username);

            if(count($user_data) > 0)
            {
                if(password_verify($password, $user_data['password']))
                {
                    $login_data = [
                        'username' => $username,
                        'id_user' => $user_data['id_user'],
                        'role' => $user_data['role'],
                        'logged_in' => TRUE
                    ];

                    //set session
                    $this->session->set_userdata($login_data);

                    //renew last login
                    $data = [
                        'last_login' => date('Y-m-d H:i:s')
                    ];
                    $this->User_model->update($data, $user_data['id_user']);
                    
                    $this->History_model->login($username);

                    //redirect ke beranda
                    redirect();
                }else{
                    $this->session->set_flashdata('alert', 'nm');
                    redirect('auth');
                }

            }else{
                $this->session->set_flashdata('alert', 'nf');
                redirect('auth');
            }
        }
    }

    public function logout()
    {
        if(!isset($_SERVER['HTTP_REFERER']))
        {
            redirect('auth');
        }
        $this->History_model->access('logout', 'logout dari sistem');
        $this->session->set_userdata('LOGGED_IN', FALSE);
        $this->session->sess_destroy();
        redirect('auth');
    }
}