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
		$this->load->view('Adminpage/index');
		$this->load->view('Adminpage/Templates/footer');
	}
}
