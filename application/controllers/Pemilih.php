<?php
class Pemilih extends CI_Controller {
	public function index()
	{
		$data['title'] = 'Selamat memilih';
		$this->load->view('dashboard_2', $data);
	}
}