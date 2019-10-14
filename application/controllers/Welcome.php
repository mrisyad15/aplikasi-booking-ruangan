<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_porto');
	}
	public function index()
	{
		$this->load->model('M_porto');
			$data['nama'] = $this->db->count_all_results('tb_user');
				$data['divisi'] = $this->db->count_all_results('tb_unit');
					$data['ruangan'] = $this->db->count_all_results('tb_ruang_rapat');
						$data['boking'] = $this->db->count_all_results('tb_booking');
		$data['isi'] = 'home';
		/*$data['isi'] = $this->M_porto->get('tb_unit')->result();*/
		$this->load->view('index', $data);
	}
}
