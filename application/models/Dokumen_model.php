<?php

class Dokumen_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function get($id)
    {
        return $this->db->get_where('dokumen', ['id_jenis_dokumen' => $id])->result_array();
    }

    public function getDetail($id)
    {
        return $this->db->get_where('dokumen', ['id_dokumen' => $id])->row_array();
    }

    public function save($data)
    {
        return $this->db->insert('dokumen', $data);
    }

    public function update($data, $type)
    {
        return $this->db->update('dokumen', $data, ['id_dokumen' => $type]);
    }

    public function delete($id)
    {
        return $this->db->delete('dokumen', ['id_dokumen' => $id]);
    }

}