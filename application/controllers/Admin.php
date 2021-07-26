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
			'title'			=> 'Pretest & Posttest'
		];
		$this->load->view('Adminpage/Templates/header', $data);
		$this->load->view('Adminpage/Templates/navbar');
		$this->load->view('Adminpage/Templates/sidebar', $data);
		$this->load->view('Adminpage/pretest_posttest');
		$this->load->view('Adminpage/Templates/footer');
	}

	public function tasks()
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
}
