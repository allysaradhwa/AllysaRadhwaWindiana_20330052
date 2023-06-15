<?php 
class User extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        if($this->session->userdata('level') != 'admin'){
            redirect('auth');
        }
    }
    // pemilih
    public function index()
    {
        $data = ['title'=> 'halaman user', 
        'rows'=> $this->User_model->getUser()->result()
    ];
        ;
        $this->load->view('header', $data);
        $this->load->view('admin/pemilih', $data);
        $this->load->view('footer');
    }
    public function user_tambah()
    {
        $data = ['title'=> 'tambah user', 
            'rows'=>$this->db->get('tb_dusun')->result()
    ];
        $this->load->view('header', $data);
        $this->load->view('admin/pemilih_tambah', $data);
        $this->load->view('footer');
    }

    public function user_edit($id)
    {
        $data= ['title' => 'edit user',
                'row'=> $this->db->get_where('tb_user', ['id_user'=>$id])->row(),
                'rows'=> $this->db->get('tb_dusun')->result()
    ];
        $this->load->view('header', $data);
        $this->load->view('admin/pemilih_edit', $data);
        $this->load->view('footer');
    }

    
    public function simpan()
    {
        $this->User_model->simpan_user();
        if($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message','
            <div class="alert alert-warning alert-dismissible mt-2 mb-2">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Notifikasi</h4>
                Berhasil disimpan
              </div>
            ');
            redirect('user');
        };
    }

    public function edit()
    {
        $this->User_model->update();
        if($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message','
            <div class="alert alert-warning alert-dismissible mt-2 mb-2">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Notifikasi</h4>
                Berhasil diedit
              </div>
            ');
            redirect('user');
        };
    }
    // hapus data dusun
    public function user_hapus($id)
    {
        $this->db->delete('tb_user', ['id_user' => $id]);
        if($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('message','
            <div class="alert alert-warning alert-dismissible mt-2 mb-2">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> Notifikasi</h4>
                Berhasil di hapus
              </div>
            ');
            redirect('user');
        }
    }
}