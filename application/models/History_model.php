<?php

class History_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function login()
    {
        $data = [
            'username' => $this->session->userdata('id_user'),
            'waktu_login' => date('Y-m-d H:i:s'),
            'ip_address' => $_SERVER['REMOTE_ADDR'],
        ];

        return $this->db->insert('login_history', $data);
    }

    public function access($halaman, $kegiatan)
    {
        $data = [
            'username' => $this->session->userdata('id_user'),
            'halaman' => $halaman,
            'kegiatan' => $kegiatan,
            'waktu' => date('Y-m-d H:i:s')
        ];

        return $this->db->insert('access_history', $data);
    }

    public function get_login($from, $to)
    {
        return $this->db->query("SELECT * FROM login_history a JOIN user b ON a.username = b.id_user WHERE waktu_login BETWEEN '$from' AND '$to'")->result_array();
    }

    public function get_akses($from, $to)
    {
        return $this->db->query("SELECT * FROM access_history a JOIN user b ON a.username = b.id_user WHERE waktu BETWEEN '$from' AND '$to'")->result_array();
    }

}