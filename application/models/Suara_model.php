<?php
class Suara_model extends CI_Model{
    public function getSuara()
    {
        $this->db->select('*');
        $this->db->from('tb_suara');
        $this->db->join('tb_user', 'tb_user.id_user = tb_suara.id_user');
        return $this->db->get();
    }
}