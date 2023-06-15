<?php
class Kandidat extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kandidat_model');
        if($this->session->userdata('level') != 'admin'){
            redirect('auth');
        }
    }
    // untuk halaman kandidat
    public function index()
    {
        $data = ['title'=> 'halaman kandidat'];
        $data['rows'] = $this->db->get('tb_kandidadt')->result();
        $this->load->view('header', $data);
        $this->load->view('admin/kandidat', $data);
        $this->load->view('footer');
    }

    public function kandidat_edit($id)
    {
        $data = ['title'=> 'edit kandidat'];
        $data['rows'] = $this->db->get_where('tb_kandidadt', ['id_kandidat'=>$id])->row();
        $this->load->view('header', $data);
        $this->load->view('admin/kandidat_edit', $data);
        $this->load->view('footer');
    }

    public function edit()
    {
        $this->Kandidat_model->update();
        if($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message','
            <div class="alert alert-warning alert-dismissible mt-2 mb-2">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Notifikasi</h4>
                Berhasil diedit
              </div>
            ');
            redirect('kandidat');
        };
    }

}