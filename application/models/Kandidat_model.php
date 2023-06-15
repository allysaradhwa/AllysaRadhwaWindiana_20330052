<?php
class Kandidat_model extends CI_Model{
    public function update()
    {
        $foto = $_FILES['foto']['name'];
        if ($foto) {
            $config['upload_path']      ='./img/';
            $config['allowed_types']    ='gift|jpg|png|jpeg|svg';
            $config['max_size']         =2048; //2mb

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('foto')) {
                echo $this->upload->display_error();
          
            } else {
                $CekFotoLama = $this->db->get_where('tb_kandidadt', ['id_kandidat' => $this->input->post('id')])->row();
                if ($CekFotoLama->Foto != 'default.png') {
                    unlink('img/' . $CekFotoLama->foto);
                }

                $FotoBaru = $this->upload->data('file_name');
                $kandidat['foto'] = $FotoBaru;
            }
        }
        $kandidat['nama_kandidat'] = $this->input->post('Nama_kandidat', true);
        $kandidat['nama_calon'] = $this->input->post('Nama_calon', true);
        $this->db->where('id_kandidat', $this->input->post('id'));
        $this->db->update('tb_kandidadt', $kandidat);
    }
}