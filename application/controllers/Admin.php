<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

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
			'title'			=> 'Zoom & Presensi'
		];
		$this->load->view('Adminpage/Templates/header', $data);
		$this->load->view('Adminpage/Templates/navbar');
		$this->load->view('Adminpage/Templates/sidebar', $data);
		$this->load->view('Adminpage/zoom_presensi');
		$this->load->view('Adminpage/Templates/footer');
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
			'title'			=> 'Tugas'
		];
		$this->load->view('Adminpage/Templates/header', $data);
		$this->load->view('Adminpage/Templates/navbar');
		$this->load->view('Adminpage/Templates/sidebar', $data);
		$this->load->view('Adminpage/tugas');
		$this->load->view('Adminpage/Templates/footer');
	}
}
