<?php 
class ModelAdmin extends CI_Model
{
	function getTasks()
	{
		$this->db->select('tbtugas.*, tbuser.nama, tbkelbesar.namaKelBesar, tbkelkecil.namaKelKecil');
		$this->db->from('tbtugas');
		$this->db->join('tbuser', 'tbuser.idUser = tbtugas.idUser');
		$this->db->join('tbkelbesar', 'tbkelbesar.idKelBesar = tbtugas.idKelBesar');
		$this->db->join('tbkelkecil', 'tbkelkecil.idKelKecil = tbtugas.idKelKecil');
		return $this->db->get()->result_array();
	}
}