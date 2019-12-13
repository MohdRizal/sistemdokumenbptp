<?php

class DaftarKegiatan_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function get($id = FALSE)
    {
        if($id == FALSE)
        {
            return $this->db->get('daftar_kegiatan')->result_array();
        }

        return $this->db->get_where('daftar_kegiatan', ['id_kegiatan' => $id])->row_array();
    }

    public function save()
    {
        $data = [
            'nama_kegiatan' => $this->input->post('nama_kegiatan'),
            'tanggal_kegiatan' => $this->input->post('tanggal_kegiatan'),
            'keterangan' => $this->input->post('keterangan')
        ];

        return $this->db->insert('daftar_kegiatan', $data);
    }

    public function update()
    {
        $data = [
            'nama_kegiatan' => $this->input->post('nama_kegiatan'),
            'tanggal_kegiatan' => $this->input->post('tanggal_kegiatan'),
            'keterangan' => $this->input->post('keterangan')
        ];

        return $this->db->update('daftar_kegiatan', $data, ['id_kegiatan' => $this->input->post('id_kegiatan')]);
    }

    public function delete($id)
    {
        return $this->db->delete('daftar_kegiatan', ['id_kegiatan' => $id]);
    }
}