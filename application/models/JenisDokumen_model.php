<?php

class JenisDokumen_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function get($id = FALSE)
    {
        if($id == FALSE)
        {
            return $this->db->get('jenis_dokumen')->result_array();
        }

        return $this->db->get_where('jenis_dokumen', ['id_jenis_dokumen' => $id])->row_array();
    }

    public function save()
    {
        $data = [
            'jenis_dokumen' => $this->input->post('jenis_dokumen')
        ];

        return $this->db->insert('jenis_dokumen', $data);
    }

    public function update()
    {
        $data = [
            'jenis_dokumen' => $this->input->post('jenis_dokumen')
        ];

        return $this->db->update('jenis_dokumen', $data, ['id_jenis_dokumen' => $this->input->post('id_jenis_dokumen')]);
    }

    public function delete($id)
    {
        return $this->db->delete('jenis_dokumen', ['id_jenis_dokumen' => $id]);
    }
}