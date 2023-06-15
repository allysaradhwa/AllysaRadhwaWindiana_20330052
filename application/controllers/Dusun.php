<?php
class Dusun extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dusun_model');
        if($this->session->userdata('level') != 'admin'){
            redirect('auth');
        }
    }

// untuk halaman dusun
    public function index()
    {
        $data['title'] = 'Halaman dusun';
        $data['rows'] = $this->db->get('tb_dusun')->result();
        $this->load->view('header', $data);
        $this->load->view('admin/dusun', $data);
        $this->load->view('footer');
    }
    public function dusun_tambah()
    {
        $data=['title'=> 'tambah dusun'];
        $this->load->view('header', $data);
        $this->load->view('admin/dusun_tambah');
        $this->load->view('footer');
    }
    
    public function simpan()
    {
        $this->Dusun_model->simpan_dusun();
        if($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message','
            <div class="alert alert-warning alert-dismissible mt-2 mb-2">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Notifikasi</h4>
                Berhasil disimpan
              </div>
            ');
            redirect('dusun');
        };
    }

    public function dusun_edit($id)
    {
        $data= ['title' => 'edit dusun',
                'row'=> $this->db->get_where('tb_dusun', ['id_dusun'=>$id])->row()
    ];
        $this->load->view('header', $data);
        $this->load->view('admin/dusun_edit', $data);
        $this->load->view('footer');
    }
    public function edit()
    {
        $this->Dusun_model->edit_dusun();
        if($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message','
            <div class="alert alert-warning alert-dismissible mt-2 mb-2">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Notifikasi</h4>
                Berhasil diedit
              </div>
            ');
            redirect('dusun');
        };
    }
    // hapus data dusun
    public function dusun_hapus($id)
    {
        $this->db->delete('tb_dusun', ['id_dusun' => $id]);
        if($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message','
            <div class="alert alert-warning alert-dismissible mt-2 mb-2">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Notifikasi</h4>
                Berhasil di hapus
              </div>
            ');
            redirect('dusun');
        }
    }
}