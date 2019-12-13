<?php

class User_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function get($id = FALSE)
    {
        if($id == FALSE)
        {
            return $this->db->get('user')->result_array();
        }

        return $this->db->get_where('user', ['id_user' => $id])->row_array();
    }

    public function save($data)
    {
        return $this->db->insert('user', $data);
    }

    public function update($data, $id)
    {
        return $this->db->update('user', $data, ['id_user' => $id]);
    }

    public function delete($id)
    {
        return $this->db->delete('user', ['id_user' => $id]);
    }

    //auth
    public function getUser($u)
    {
        return $this->db->get_where('user', ['username' => $u])->row_array();
    }

    public function userPhoto($u)
    {
        $this->db->select('foto');
        $this->db->where('username', $u);
        return $this->db->get('user')->row_array();
    }
}