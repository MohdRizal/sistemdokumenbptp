<?php

class Menu_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    public function getMenu()
    {
        return $this->db->get('jenis_dokumen')->result_array();
    }

    public function detail($type)
    {
        return $this->db->get_where('jenis_dokumen', ['id_jenis_dokumen' => $type])->row_array();
    }

    public function getNotifMasuk(){
        $user = $_SESSION['id_user'];
        return $this->db->query("SELECT COUNT(is_read) as total FROM bagikan_dokumen WHERE user_tujuan = '$user' AND is_read = '0'")->row_array();
    }

}