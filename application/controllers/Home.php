<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->model('ModelLogin');
		$this->load->helper('form', 'url');
	}

	public function index()
	{
		if ($this->session->userdata('status') == "login") {
			if ($this->session->userdata('role') == "admin") {
				redirect('Admin');
			} else if ($this->session->userdata('role') == "maba" && $this->session->userdata('statusPwd') == 1) {
				redirect('Mahasiswa');
			} else if ($this->session->userdata('statusPwd') == 0) {
				$this->changePwd();
			}
		} else {
			$this->load->view('Homepage/ViewHome');
		}
	}

	public function loginAct()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if ($username == 'admin' && $password == 'haiadmin123') {
			$data_session = array(
				'id'		=> 0,
				'nama'		=> 'admin',
				'username'	=> 'admin',
				'role'		=> 'admin',
				'status'	=> "login"
			);
			$this->session->set_userdata($data_session);
			// redirect ke controller admin
			redirect('Admin');
		} else {
			$where = array(
				'username' => $username,
				'userPass' => md5($password)
			);
			$cek = $this->ModelLogin->getWhere("tbuser", $where);
			$rows = $cek->num_rows();
			if ($rows > 0) {
				$cek = $cek->row_array();
				$data_session = array(
					'id'		=> $cek['idUser'],
					'username'	=> $cek['username'],
					'nama'		=> $cek['nama'],
					'idKelBesar' => $cek['idKelBesar'],
					'idKelKecil' => $cek['idKelKecil'],
					'role'		=> $cek['role'],
					'statusPwd' => $cek['status'],
					'status'	=> "login"
				);
				$this->session->set_userdata($data_session);
				if ($cek['status'] == 0) {
					redirect('ChangePass');
				} else {
					// redirect ke controller mahasiswa
					redirect('Mahasiswa');
				}
			} else {
				echo "<script>alert('username atau password anda salah');window.location.href = '../home';</script>";
				// redirect('home');
				// print('username atau password anda salah');
			}
		}
	}

	public function changePwd()
	{
		if ($this->session->userdata('status') != "login") {
			redirect('Home');
		} else {
			$this->load->view('Homepage/ChangePass');
		}
	}

	public function changePwdAct()
	{
		$newPass = $this->input->post('password');
		$idUser = $this->session->userdata('id');

		$data = array(
			'userPass' => md5($newPass),
			'status' => 1
		);

		$where = array(
			'idUser' => $idUser
		);

		$this->ModelLogin->updatePass($where, $data, 'tbuser');
		$this->session->set_userdata('statusPwd', 1);
		redirect('Home');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect();
	}
}
