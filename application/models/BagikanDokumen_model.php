<?php

class BagikanDokumen_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function get($id = FALSE)
    {
        if($id == FALSE){
            $this->db->select('*, bagikan_dokumen.id as id_bag_dokumen');
            $this->db->from('bagikan_dokumen');
            $this->db->join('user', 'bagikan_dokumen.user_asal = user.id_user');
            $this->db->join('dokumen_user', 'bagikan_dokumen.dokumen_id = dokumen_user.id');
            $this->db->where('user_tujuan', $this->session->userdata('id_user'));
            $this->db->order_by('tanggal', 'DESC');
            return $this->db->get()->result_array();
        }
        $this->db->select('*');
        $this->db->from('bagikan_dokumen');
        $this->db->join('user', 'bagikan_dokumen.user_asal = user.id_user');
        $this->db->join('dokumen_user', 'bagikan_dokumen.dokumen_id = dokumen_user.id');
        $this->db->where('bagikan_dokumen.id', $id);
        return $this->db->get()->row_array();
    }

    // public function getDocByUser($id)
    // {
    //     return $this->db->get_where('bagikan_dokumen', ['user_tujuan' => $id])->result_array();
    // }

    public function save($data)
    {
        return $this->db->insert('bagikan_dokumen', $data);
    }

    // public function update($data, $type)
    // {
    //     return $this->db->update('dokumen_user', $data, ['id' => $type]);
    // }

    public function delete($id)
    {
        return $this->db->delete('dokumen_user', ['id' => $id]);
    }

    public function read($id){
        $data = [
            'is_read' => '1'
        ];
        return $this->db->update('bagikan_dokumen', $data, ['id' => $id]);
    }

}