<?php
class Warga extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Warga_model');
        if($this->session->userdata('level') != 'warga'){
            redirect('auth');
        }
    }

    public function index()
    {
        $data = ['title'=>'halaman pemilih', 
                'rows'=> $this->db->get('tb_kandidadt')->result(),
                'user'=> $this->db->get_where('tb_user', ['id_user'=>$this->session->userdata('id')])->row(),
                'kandidat1'=> $this->db->get_where('tb_suara', ['nama_kandidat'=>'calon ke-1'])->num_rows(),
                'kandidat2'=> $this->db->get_where('tb_suara', ['nama_kandidat'=>'calon ke-2'])->num_rows(),
                'kandidat3'=> $this->db->get_where('tb_suara', ['nama_kandidat'=>'calon ke-3'])->num_rows()
    ];
        $this->load->view('dashboard_2', $data);
    }

    public function visimisi($id)
    {
        $data=['title'=>'detail',
            'kandidat'=> $this->db->get_where('tb_kandidadt', ['id_kandidat'=>$id])->row(),
            'vsm'=> $this->db->get_where('tb_visimisi', ['id_kandidat'=>$id])->row()
    ];
        $this->load->view('visimisi_2', $data);
    }

    public function pilih_kandidat()
    {
        $this->Warga_model->pilih_kandidat();
        $this->Warga_model->update_status();
        if($this->db->affected_rows() > 0)
        {
            $result = [
                'success'=> true,
            ];
        }else {
            $result = [
                'success'=> false,
            ];
        }
        echo json_encode($result);

    }


}

