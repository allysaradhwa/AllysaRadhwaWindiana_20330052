<?php
class Dusun_model extends CI_Model{
    public function simpan_dusun()
    {
        $kelas=$this->input->post('nama_dusun', true);
        $data=[];
        foreach ($kelas as $key => $value) {
            $data[] = [
                'nama' => $kelas[$key]
            ];
        }
        $this->db->insert_batch('tb_dusun', $data);
    }

    public function edit_dusun()
    {
        $data = ['nama' => $this->input->post('nama_dusun', true)];
        $this->db->where('id_dusun', $this->input->post('id'));
        $this->db->update('tb_dusun', $data);
    }
}