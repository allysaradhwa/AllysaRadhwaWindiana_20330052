<?php
class User_model extends CI_Model{

    public function getUser()
    {
        $this->db->select('*, tb_user.nama as nama_user, tb_dusun.nama as nama_dusun');
        $this->db->from('tb_user');
        $this->db->join('tb_dusun', 'tb_dusun.id_dusun = tb_user.id_dusun', 'left');
        return $this->db->get();
    }

    public function simpan_user()
    {
        $data = [
            'id_dusun'=> $this->input->post('Id_dusun', true),
            'nama'=> $this->input->post('Nama', true),
            'email'=> $this->input->post('Email', true),
            'password' => password_hash($this->input->post('Password', true),PASSWORD_DEFAULT),
            'level' => $this->input->post('level')
        ];
        $this->db->insert('tb_user', $data);
    }

    public function update()
    {
        $data = ['nama' => $this->input->post('Nama', true),
                'id_dusun'=> $this->input->post('Id_dusun', true),
                'email' => $this->input->post('Email', true),
                'password'=> password_hash($this->input->post('Password', true), PASSWORD_DEFAULT),
                'level'=> $this->input->post('level', true)
    ];
        $this->db->where('id_user', $this->input->post('id'));
        $this->db->update('tb_user', $data);
    }
}