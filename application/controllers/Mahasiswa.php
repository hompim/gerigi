<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

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
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status')!='login') {
			redirect();
		}
		date_default_timezone_set("Asia/Jakarta");
	}

	public function index()
	{
		$data['klmpkkecil'] = $this->db->get_where('tbkelkecil',['idKelKecil' => $this->session->userdata('idKelKecil')])->row_array();
		$data['klmpkbesar'] = $this->db->get_where('tbkelbesar',['idKelBesar' => $this->session->userdata('idKelBesar')])->row_array();
		$idKelKecil = $this->session->userdata('idKelKecil');
		$data['temankelompok'] = $this->db->query("SELECT * FROM tbuser WHERE idKelKecil='$idKelKecil' ORDER BY nama ASC")->result_array();
		$data['rundown'] = $this->db->get_where('tbrundown', ['dateUse' => date('Y-m-d')])->result_array();
		$idKelBesar = $this->session->userdata('idKelBesar');
		$dateUse = date('Y-m-d');
		$data['link'] = $this->db->query("SELECT * FROM link WHERE id_kls_bsr='$idKelBesar' AND dateUse='$dateUse'")->row_array();
		$this->load->view('Dashboard-mahasiswa-main/index', $data);
	}

	public function get_link($idRd)
	{
		$link = $this->db->get_where('linkrundown', ['idRundown' => $idRd])->row_array();
		redirect($link['link']);
	}
}
