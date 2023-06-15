<?php
class Auth extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
	{
		$data = ['title'=> 'Selamat Datang',
            'rows'=> $this->db->get('tb_dusun')->result()
    ];
		$this->load->view('welcome_message', $data);
	}

    public function login_admin(){
        $this->load->view('login/login_admin');
    }

    public function login_pemilih(){
        $this->load->view('login/login_pemilih');
    }
    
    public function login_admin_voting()
    {
        $cek_email = $this->db->get_where('tb_user', ['email' => $this->input->post('Email', true)])->row();
        if($cek_email) {
            if(password_verify($this->input->post('Password'), $cek_email->password)) {
                if ($cek_email->level == 'admin') {
                    $data_session = [
                        'id' => $cek_email->id_user,
                        'nama' => $cek_email-> nama,
                        'level' => $cek_email->level,
                        'status'=> $cek_email->status
                    ];
                    $this->session->set_userdata($data_session);
                    redirect('admin');
                }else {
                    $data_session = [
                        'id' => $cek_email->id_user,
                        'nama' => $cek_email-> nama,
                        'level' => $cek_email->level,
                        'status'=> $cek_email->status
                    ];
                    $this->session->set_userdata($data_session);
                    redirect('warga');
                }
            }else {
            echo"<script>
                alert('Password anda salah');
                window.location.href = '" . site_url('admin') . "';
            </script>";
        }
    }else {
        echo"<script>
            alert('Email anda salah');
            window.location.href = '" . site_url('auth/login_admin') . "';
        </script>";
    }
    }

    public function login_pemilih_voting()
    {
        $cek_email = $this->db->get_where('tb_user', ['email' => $this->input->post('Email1', true)])->row();
        if($cek_email) {
            if(password_verify($this->input->post('Password1'), $cek_email->password)) {
                if ($cek_email->level == 'warga') {
                    $data_session = [
                        'id' => $cek_email->id_user,
                        'nama' => $cek_email-> nama,
                        'level' => $cek_email->level,
                        'status'=> $cek_email->status
                    ];
                    $this->session->set_userdata($data_session);
                    redirect('warga');
                }else {
                    $data_session = [
                        'id' => $cek_email->id_user,
                        'nama' => $cek_email-> nama,
                        'level' => $cek_email->level,
                        'status'=> $cek_email->status
                    ];
                    $this->session->set_userdata($data_session);
                    redirect('admin');
                }
            }else {
            echo"<script>
                alert('Password anda salah');
                window.location.href = '" . site_url('admin') . "';
            </script>";
        }
    }else {
        echo"<script>
            alert('Email anda salah');
            window.location.href = '" . site_url('auth/login_pemilih') . "';
        </script>";
    }
    }



    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }

    public function registrasi()
    {
        $this->form_validation->set_rules('nama1', 'Nama', 'trim|required', [
            'required' => '%s masih kosong'
        ]);

        $this->form_validation->set_rules('email1', 'Email', 'trim|required|is_unique[tb_user.email]', [
            'required' => '%s masih kosong',
            'is_unique' => '%s sudah ada'
        ]);

        $this->form_validation->set_rules('password1', 'Password', 'trim|required', [
            'required' => '%s masih kosong'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $data = [
                'id_dusun' => $this->input->post('dusun', true),
                'nama' => $this->input->post('nama1', true),
                'email' => $this->input->post('email1', true),
                'password' => password_hash($this->input->post('password1', true), PASSWORD_DEFAULT),
                'level' => 'warga'
            ];
            $this->db->insert('tb_user', $data);
            if ($this->db->affected_rows() > 0){
                echo "<script>
                    alert('Akun berhasil diregistrasi');
                    window.location.href = '" . site_url('auth') . "';
                </script>";
            }
        }
    }

}