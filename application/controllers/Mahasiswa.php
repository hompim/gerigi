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
		$idKelBesar = $this->session->userdata('idKelBesar');
		$dateUse = date('Y-m-d');
		$data['klmpkkecil'] = $this->db->get_where('tbkelkecil',['idKelKecil' => $this->session->userdata('idKelKecil')])->row_array();
		$data['klmpkbesar'] = $this->db->get_where('tbkelbesar',['idKelBesar' => $this->session->userdata('idKelBesar')])->row_array();
		$idKelKecil = $this->session->userdata('idKelKecil');
		$data['temankelompok'] = $this->db->query("SELECT * FROM tbuser WHERE idKelKecil='$idKelKecil' ORDER BY nama ASC")->result_array();
		// $data['rundown'] = $this->db->get_where('tbrundown', ['dateUse' => date('Y-m-d')])->result_array();
		$data['rundown'] = $this->db->query("SELECT tbrundown.*, linkrundown.link as linkRundown FROM tbrundown LEFT JOIN linkrundown ON tbrundown.idRundown = linkrundown.idRundown AND linkrundown.idKelBesar = '$idKelBesar' WHERE tbrundown.dateUse='2021-08-14' ORDER BY idRundown")->result_array();
		$data['link'] = $this->db->query("SELECT * FROM link WHERE id_kls_bsr='$idKelBesar' AND dateUse='$dateUse'")->row_array();
		$data['linkrundown'] = $this->db->query("SELECT * FROM linkrundown WHERE idKelBesar='$idKelBesar' AND dateUse = '$dateUse'")->row_array();
		$data['info_tugas'] = $this->db->get_where('tbinfotugas', ['dateUse <=' => date('Y-m-d')])->result_array();
		$this->load->view('Dashboard-mahasiswa-main/index', $data);
	}

	public function upload_link($id)
	{
		$this->form_validation->set_rules('link', 'Link', 'trim|required', ['required' => 'Kamu Belum Mengisi Link!']);

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Upload Tugasmu';
			$data['id'] = $id;
			$data['cekTugas'] = $this->db->get_where('tbtugas',['idInfoTugas' => $id, 'idUser' => $this->session->userdata('id')])->num_rows();
			$this->load->view('Dashboard-mahasiswa-main/upload-tugas', $data);
		} else {
			$data = [
				'idInfoTugas' 	=> $id,
				'idUser'		=> $this->session->userdata('id'),
				'idKelBesar'	=> $this->session->userdata('idKelBesar'),
				'idKelKecil'	=> $this->session->userdata('idKelKecil'),
				'link'			=> $this->input->post('link'),
				'dateCreate'	=> date('Y-m-d'),
				'timestamp'		=> date('Y-m-d h:i:sa')
			];

			if ($this->db->insert('tbtugas', $data)==TRUE) {
				redirect('Mahasiswa');
			}
		}
	}

	public function get_link($idRd)
	{
		$link = $this->db->get_where('linkrundown', ['idRundown' => $idRd])->row_array();
		redirect($link['link']);
	}
}
