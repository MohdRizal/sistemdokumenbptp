<?php

class DokumenPribadi_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function get()
    {
        return $this->db->get('dokumen_user')->result_array();
    }

    public function getDetail($id = FALSE)
    {
        return $this->db->get_where('dokumen_user', ['id' => $id])->row_array();
    }

    public function getDocByUser($id)
    {
        return $this->db->get_where('dokumen_user', ['id_user' => $id])->result_array();
    }

    public function save($data)
    {
        return $this->db->insert('dokumen_user', $data);
    }

    public function update($data, $type)
    {
        return $this->db->update('dokumen_user', $data, ['id' => $type]);
    }

    public function delete($id)
    {
        return $this->db->delete('dokumen_user', ['id' => $id]);
    }

}