<?php
class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dusun_model');
        if($this->session->userdata('level') != 'admin'){
            redirect('auth');
        }
    }

    public function index()
    {
        $data = ['title'=>'halaman dashboard',
                'total_user'=>$this->db->get('tb_user')->num_rows(),
                'total_suara'=>$this->db->get('tb_suara')->num_rows(),
                'kandidat1'=> $this->db->get_where('tb_suara', ['nama_kandidat'=>'calon ke-1'])->num_rows(),
                'kandidat2'=> $this->db->get_where('tb_suara', ['nama_kandidat'=>'calon ke-2'])->num_rows(),
                'kandidat3'=> $this->db->get_where('tb_suara', ['nama_kandidat'=>'calon ke-3'])->num_rows()
    ];
        $this->load->view('dashboard', $data);
    }

}

