<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_admin');
		$this->load->model('M_unit', 'unit');
		$this->load->library('session');
		}

	public function index()
	{
		$data['data'] = $this->M_admin->get('db_booking')->result();
		$data['isi'] = 'admin';
		$this->load->view('index',$data);
	}
	public function user()
	{
		$this->load->model('M_admin');
		$data['user'] = $this->M_admin->users();
		$data['isi'] = 'user';
		$this->load->view('user', $data);
	}
	public function ruang()
	{
		$this->load->model('M_admin');
		$data['ruang'] = $this->M_admin->ruangs();
		$data['isi'] = 'ruang';
		$this->load->view('ruang', $data);
	}
	public function booking()
	{
		$this->load->model('M_admin');
		$data['booking'] = $this->M_admin->bookings();
		$data['isi'] = 'booking';
		$this->load->view('booking', $data);
	}
	public function unit()
	{
		$data['unit'] = $this->M_admin->get('tb_unit')->result();
		$data['isi'] = 'unit';
		$this->load->view('unit',$data);
	}
	public function Add_data($param){
		if($param == "unit"){
			$data['isi'] = 'tambah_unit';
			$this->load->view('tambah_unit',$data);
		}
		if($param == "ruang"){
			$data['isi'] = 'tambah_ruang';
			$this->load->view('tambah_ruang',$data);
		}
		if($param == "booking"){
			$data['ruang'] = $this->unit->get_ruang();
			$data['user'] = $this->unit->get_user();
			$data['isi'] = 'tambah_booking';
			$this->load->view('tambah_booking',$data);
		}
		if($param == "user"){
			$data['unit'] = $this->unit->get();
			$data['isi'] = 'tambah_user';
			$this->load->view('tambah_user',$data);
		}


	}
	public function add_unit(){
		if(isset($_POST['save']))
		{
			$id_unit = $_POST['id_unit'];
			$nm_unit = $_POST['nm_unit'];
			$data = array(
				"id_unit" => $id_unit,
				"nm_unit" => $nm_unit
			);
			$this->M_admin->save('tb_unit',$data);
			redirect('admin/unit');
		}
	}
	public function add_ruang(){
		if(isset($_POST['save']))
		{
			$id_ruang = $_POST['id_ruang'];
			$nama_ruang = $_POST['nama_ruang'];
			$data = array(
				"id_ruang" => $id_ruang,
				"nama_ruang" => $nama_ruang
			);
			$this->M_admin->save('tb_ruang_rapat',$data);
			redirect('admin/ruang');
		}
	}
	public function add_user(){
		if(isset($_POST['save']))
		{
			$id_user = $_POST['id_user'];
			$nm_user = $_POST['nm_user'];
			$telp = $_POST['telp'];
			$alamat = $_POST['alamat'];
			$data = array(
				"id_user" => $id_user,
				"nm_user" => $nm_user,
				"telp" => $telp,
				"alamat" => $alamat,
			);
			$this->M_admin->save('tb_user',$data);
			redirect('admin/user');
		}
	}
	public function add_booking(){
		if(isset($_POST['save']))
		{
			$id_booking = $_POST['id_booking'];
			$id_user = $_POST['nm_user'];
			$tgl_daftar = $_POST['tgl_daftar'];
			$tgl_booking = $_POST['tgl_booking'];
			$tgl_selesai = $_POST['tgl_selesai'];
			$keterangan = $_POST['keterangan'];
			$id_ruang = $_POST['nama_ruang'];
			$data = array(
				"id_booking" => $id_booking,
				"id_user" => $id_user,
				"tgl_daftar" => $tgl_daftar,
				"tgl_booking" => $tgl_booking,
				"tgl_selesai" => $tgl_selesai,
				"keterangan" => $keterangan,
				"id_ruang" => $id_ruang
			);
			$this->M_admin->save('tb_booking',$data);
			redirect('admin/booking');
		}
	}

	public function Delete_unit($id){
		$primary = 'id_unit';
		$table = 'tb_unit';
		$this->M_admin->delete($table,$primary,$id);
		echo "<script>location=('".base_url('index.php/admin/unit/')."');</script>";
	}
	public function Delete_ruang($id){
		$primary = 'id_ruang';
		$table = 'tb_ruang_rapat';
		$this->M_admin->delete($table,$primary,$id);
		echo "<script>location=('".base_url('index.php/admin/ruang')."');</script>";
	}
	public function Delete_user($id){
		$primary = 'id_user';
		$table = 'tb_user';
		$this->M_admin->delete($table,$primary,$id);
		echo "<script>location=('".base_url('index.php/admin/user')."');</script>";
	}
	public function Delete_booking($id){
		$primary = 'id_booking';
		$table = 'tb_booking';
		$this->M_admin->delete($table,$primary,$id);
		echo "<script>location=('".base_url('index.php/admin/booking')."');</script>";
	}

	public function edit_unit($get)
	{
		$data['data'] = $this->M_admin->get_id('tb_unit','id_unit',$get)->row();
		$data['isi'] = 'edit_unit';
		$this->load->view('edit_unit',$data);
		if (isset($_POST['update_unit'])) {
			$data = array(
				"id_unit" => $_POST['id_unit'],
			    "nm_unit" => $_POST['nm_unit']);
			$where = array('id_unit' => $get);
			$this->M_admin->edit('tb_unit', $where, $data);
			echo "<script>location=('".base_url('index.php/unit/')."');</script>";
		}
	}
	public function edit_ruang($get)
	{
		$data['data'] = $this->M_admin->get_id('tb_ruang_rapat','id_ruang',$get)->row();
		$data['isi'] = 'edit_ruang';
		$this->load->view('edit_ruang',$data);
		if (isset($_POST['update_ruang'])) {
			$data = array(
				"id_ruang" => $_POST['id_ruang'],
			    "nama_ruang" => $_POST['nama_ruang']);
			$where = array('id_ruang' => $get);
			$this->M_admin->edit('tb_ruang_rapat', $where, $data);
			echo "<script>location=('".base_url('index.php/admin/ruang')."');</script>";
		}
	}
	public function edit_user($id)
	{
		$data['value'] = $this->M_admin->get_id('tb_user','id_user',$id)->row();
		$data['unit'] = $this->unit->get('');
		$data['isi'] = 'edit_user';
		$this->load->view('edit_user.php',$data);
	}
	public function edit_booking($get)
	{
		$data['ruang'] = $this->unit->get_ruang();
		$data['user'] = $this->unit->get_user();
		$data['data'] = $this->M_admin->edit_booking($get);
		$data['isi'] = 'edit_booking';
		$this->load->view('edit_booking',$data);
		if (isset($_POST['update_booking'])) {
			$data = array(
				"id_booking" => $_POST['id_booking'],
				"id_user" => $_POST['id_user'],
				"tgl_booking" => $_POST['tgl_booking'],
				"tgl_selesai" => $_POST['tgl_selesai'],
				"keterangan" => $_POST['keterangan'],
				"id_ruang" => $_POST['id_ruang']);
			$where = array('id_booking' => $get);
			$this->M_admin->edit('tb_booking', $where, $data);
			echo "<script>location=('".base_url('index.php/admin/booking')."');</script>";
		}
	}

	public function update_booking(){
		$data=array('id_user' => $this->input->post('id_user'), 'tgl_booking' => $this->input->post('tgl_booking'), 'tgl_selesai' => $this->input->post('tgl_selesai'), 'keterangan' => $this->input->post('keterangan'), 'id_ruang' => $this->input->post('id_ruang'));
		$where = array('id_booking' => $this->input->post('id'));
		$this->M_admin->edit('tb_booking', $where, $data);
		redirect('admin/booking');
	}
	public function update_user(){
		$data=array('nm_user' => $this->input->post('nm_user'), 'telp' => $this->input->post('telp'), 'alamat' => $this->input->post('alamat'));
		$where = array('id_user' => $this->input->post('id'));
		$this->M_admin->edit('tb_user', $where, $data);
		redirect('admin/user');
	}
	public function update_unit(){
		$data=array('nm_unit' => $this->input->post('nm_unit'));
		$where = array('id_unit' => $this->input->post('id_unit'));
		$this->M_admin->edit('tb_unit', $where, $data);
		redirect('admin/unit');
	}
	public function update_ruang(){
		$data=array('nama_ruang' => $this->input->post('nama_ruang'));
		$where = array('id_ruang' => $this->input->post('id_ruang'));
		$this->M_admin->edit('tb_ruang_rapat', $where, $data);
		redirect('admin/ruang');
	}

}
