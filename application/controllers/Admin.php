<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModelAdmin');
		date_default_timezone_set("Asia/Jakarta");
	}

	public function index()
	{
		$data = [
			'title'			=> 'Admin'
		];
		$this->load->view('Adminpage/Templates/header', $data);
		$this->load->view('Adminpage/Templates/navbar');
		$this->load->view('Adminpage/Templates/sidebar', $data);
		$this->load->view('Adminpage/dashboard');
		$this->load->view('Adminpage/Templates/footer');
	}

	public function link()
	{
		$data = [
			'title'			=> 'Zoom & Presensi',
			'lists'			=> $this->ModelAdmin->getLink()
		];
		$this->load->view('Adminpage/Templates/header', $data);
		$this->load->view('Adminpage/Templates/navbar');
		$this->load->view('Adminpage/Templates/sidebar', $data);
		$this->load->view('Adminpage/zoom_presensi');
		$this->load->view('Adminpage/Templates/footer');
	}

	public function editLink($id = "")
	{
		if ($id < 1 || $id == NULL){
			$this->session->set_flashdata('failed_editLink', 'Edit Link Gagal!');
			redirect ('Admin/link');
		}
		else {
			$data = [
				'title'			=> 'Edit Link',
				'lists'			=> $this->ModelAdmin->getEditLink($id)
			];
			$this->load->view('Adminpage/Templates/header', $data);
			$this->load->view('Adminpage/Templates/navbar');
			$this->load->view('Adminpage/Templates/sidebar', $data);
			$this->load->view('Adminpage/edit_link');
			$this->load->view('Adminpage/Templates/footer');
		}
	}

	public function setLink()
	{
		$id = $this->input->post('id');
		if ($id < 1 || $id == NULL){
			$this->session->set_flashdata('failed_setLink', 'Edit Link Gagal!');
		}
		else {
			$link_zoom = $this->input->post('link_zoom');
			$link_presensi = $this->input->post('link_presensi');
			$this->ModelAdmin->setLink($id, $link_zoom, $link_presensi);
			$this->session->set_flashdata('success_setLink', 'Edit Link Sukses!');
		}
		redirect('Admin/link');
	}

	public function tests()
	{
		$data = [
			'title'			=> 'Pretest & Posttest',
			'lists'			=>	$this->ModelAdmin->getTests()
		];
		$this->load->view('Adminpage/Templates/header', $data);
		$this->load->view('Adminpage/Templates/navbar');
		$this->load->view('Adminpage/Templates/sidebar', $data);
		$this->load->view('Adminpage/pretest_posttest');
		$this->load->view('Adminpage/Templates/footer');
	}

	public function editTests($idRundown = "")
	{
		$data = [
			'title'			=> 'Edit Pretest & Posttest',
			'lists'			=> $this->ModelAdmin->getEditTests($idRundown)
		];
		$this->load->view('Adminpage/Templates/header', $data);
		$this->load->view('Adminpage/Templates/navbar');
		$this->load->view('Adminpage/Templates/sidebar', $data);
		$this->load->view('Adminpage/edit_tests');
		$this->load->view('Adminpage/Templates/footer');
	}

	public function viewTasks()
	{
		$data = [
			'title'			=> 'Tugas',
			'lists'			=> $this->ModelAdmin->getTasks()
		];
		$this->load->view('Adminpage/Templates/header', $data);
		$this->load->view('Adminpage/Templates/navbar');
		$this->load->view('Adminpage/Templates/sidebar', $data);
		$this->load->view('Adminpage/tugas');
		$this->load->view('Adminpage/Templates/footer');
	}

	public function addTasks()
	{
		$data = [
			'title'			=> 'Buat Tugas',
			'lists'			=> $this->ModelAdmin->getTasksInfo()
		];
		$this->load->view('Adminpage/Templates/header', $data);
		$this->load->view('Adminpage/Templates/navbar');
		$this->load->view('Adminpage/Templates/sidebar', $data);
		$this->load->view('Adminpage/add_tasks');
		$this->load->view('Adminpage/Templates/footer');
	}

	public function deleteTasks($id_info = "")
	{
		$this->ModelAdmin->deleteTasks($id_info);
		$this->session->set_flashdata('success_deleteTasks', 'Berhasil menghapus tugas!');
		redirect('Admin/addTasks');
	}

	public function editTasks($id_info = "")
	{
		$data = [
			'title'			=> 'Edit Tugas',
			'lists'			=>	$this->ModelAdmin->getTaskInfo($id_info)
		];
		$this->load->view('Adminpage/Templates/header', $data);
		$this->load->view('Adminpage/Templates/navbar');
		$this->load->view('Adminpage/Templates/sidebar', $data);
		$this->load->view('Adminpage/edit_tasks');
		$this->load->view('Adminpage/Templates/footer');
	}

	public function setTasks($id_info = "")
	{
		$nama_tugas = $this->input->post('nama_tugas');
		$keterangan = $this->input->post('keterangan');
		$dateUse	= $this->input->post('dateUse');
		$SubmitForm	= $this->input->post('SubmitForm');

		$this->ModelAdmin->editTasks($id_info, $nama_tugas, $keterangan, $dateUse, $SubmitForm);
		$this->session->set_flashdata('success_setTasks', 'Berhasil mengedit tugas!');
		redirect('Admin/addTasks');
	}

	public function makeTasks($id_info = "")
	{
		$data = [
			'title'			=> 'Buat Tugas',
		];
		$this->load->view('Adminpage/Templates/header', $data);
		$this->load->view('Adminpage/Templates/navbar');
		$this->load->view('Adminpage/Templates/sidebar', $data);
		$this->load->view('Adminpage/make_tasks');
		$this->load->view('Adminpage/Templates/footer');
	}

	public function setMakeTasks()
	{
		$data = [
			'nama_tugas'	=> $this->input->post('nama_tugas'),
			'keterangan'	=> $this->input->post('keterangan'),
			'dateUse'		=> $this->input->post('dateUse'),
			'SubmitForm'	=> $this->input->post('SubmitForm'),
			'dateCreate'	=> date("Y-m-d")
		];
		$this->ModelAdmin->setMakeTasks($data);
		$this->session->set_flashdata('success_setMakeTasks', 'Tugas Berhasil Terbuat');
		redirect('Admin/addTasks');
	}

	

	
}
