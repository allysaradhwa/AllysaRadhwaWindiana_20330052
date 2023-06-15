<?php
class Suara extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Suara_model');
        if($this->session->userdata('level') != 'admin'){
            redirect('auth');
        }
    }
    // suara
    public function index()
    {
        $data=['title'=>'halaman suara',
                'rows'=> $this->Suara_model->getSuara()->result()
    ];
        $this->load->view('header', $data);
        $this->load->view('admin/suara', $data);
        $this->load->view('footer');
    }

    // hapus data suara
    public function suara_hapus($id)
    {
        $this->db->delete('tb_suara', ['id_suara' => $id]);
        if($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message','
            <div class="alert alert-warning alert-dismissible mt-2 mb-2">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Notifikasi</h4>
                Berhasil di hapus
              </div>
            ');
            redirect('visimisi');
        }
    }
}