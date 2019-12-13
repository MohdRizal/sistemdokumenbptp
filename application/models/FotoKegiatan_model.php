<?php

class FotoKegiatan_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function get($id = FALSE)
    {
        return $this->db->get_where('foto_kegiatan', ['id_kegiatan' => $id])->result_array();
    }

    public function getDetail($id = FALSE)
    {
        return $this->db->get_where('foto_kegiatan', ['id_foto_kegiatan' => $id])->row_array();
    }

    public function save($data)
    {
        return $this->db->insert('foto_kegiatan', $data);
    }

    public function update($data, $type)
    {
        return $this->db->update('foto_kegiatan', $data, ['id_foto_kegiatan' => $type]);
    }

    public function delete($id)
    {
        return $this->db->delete('foto_kegiatan', ['id_foto_kegiatan' => $id]);
    }

}