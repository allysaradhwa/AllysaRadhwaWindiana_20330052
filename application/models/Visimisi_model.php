<?php
class Visimisi_model extends CI_Model{
    public function getVisimisi()
    {
        $this->db->select('*');
        $this->db->from('tb_visimisi');
        $this->db->join('tb_kandidadt', 'tb_kandidadt.id_kandidat = tb_visimisi.id_kandidat');
        return $this->db->get();
    }

    public function simpan_visimisi()
    {
        $data = [
            'id_kandidat'=> $this->input->post('Id', true),
            'visi'=> $this->input->post('Visi', true),
            'misi'=> $this->input->post('Misi', true)
        ];
        $this->db->insert('tb_visimisi', $data);
    }

    public function update()
    {
        $data = ['visi' => $this->input->post('Visi', true),
                'misi' => $this->input->post('Misi', true),
                'id_kandidat' => $this->input->post('Id', true)
    ];
        $this->db->where('id_visimisi', $this->input->post('Id_vm'));
        $this->db->update('tb_visimisi', $data);
    }
}