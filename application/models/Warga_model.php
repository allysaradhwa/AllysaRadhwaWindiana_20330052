<?php
class Warga_model extends CI_Model{
    public function pilih_kandidat()
    {
        $data = [
            'id_user'=>$this->input->post('id_user', true),
            'nama_kandidat'=>$this->input->post('nama_kandidat', true)
        ];
        $this->db->insert('tb_suara', $data);
    }

    public function update_status()
    {
        $data = ['status'=> 1];
        $this->db->where('id_user', $this->input->post('id_user', true));
        $this->db->update('tb_user', $data);
    }
}