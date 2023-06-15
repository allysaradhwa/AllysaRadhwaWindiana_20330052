<?php
class Visimisi extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Visimisi_model');
        if($this->session->userdata('level') != 'admin'){
            redirect('auth');
        }
    }
    // visi misi
    public function index()
    {
        $data=['title'=>'halaman visimisi',
                'rows'=> $this->Visimisi_model->getVisimisi()->result()
    ];
        $this->load->view('header', $data);
        $this->load->view('admin/visimisi', $data);
        $this->load->view('footer');
    }

    public function visimisi_tambah()
    {
        $data = ['title'=> 'tambah visimisi',
                'rows'=> $this->db->get('tb_kandidadt')->result()
    ];
        $this->load->view('header', $data);
        $this->load->view('admin/visimisi_tambah', $data);
        $this->load->view('footer');
    }

    public function tambah()
    {
        $this->Visimisi_model->simpan_visimisi();
        if($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message','
            <div class="alert alert-warning alert-dismissible mt-2 mb-2">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Notifikasi</h4>
                Berhasil disimpan
              </div>
            ');
            redirect('visimisi');
        };
    }

    public function visimisi_edit($id)
    {
        $data = ['title'=> 'edit visimisi'];
        $data['rows'] = $this->db->get_where('tb_visimisi', ['id_visimisi'=>$id])->row();
        $data['row'] = $this->db->get('tb_kandidadt')->result();
        $this->load->view('header', $data);
        $this->load->view('admin/visimisi_edit', $data);
        $this->load->view('footer');
    }

    public function edit()
    {
        $this->Visimisi_model->update();
        if($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message','
            <div class="alert alert-warning alert-dismissible mt-2 mb-2">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Notifikasi</h4>
                Berhasil diedit
              </div>
            ');
            redirect('visimisi');
        };
    }

    // hapus data dusun
    public function visimisi_hapus($id)
    {
        $this->db->delete('tb_visimisi', ['id_visimisi' => $id]);
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