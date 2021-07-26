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

	function getLink()
	{
		$this->db->select('link.id, link.link_zoom, link.link_presensi, link.id_kls_bsr, link.dateUse, tbkelbesar.namaKelBesar');
		$this->db->from('link');
		$this->db->join('tbkelbesar', 'tbkelbesar.idKelBesar = link.id_kls_bsr');
		return $this->db->get()->result_array();
	}

	function getEditLink($id)
	{
		$this->db->select('link.id, link.link_zoom, link.link_presensi, link.id_kls_bsr, link.dateUse, tbkelbesar.namaKelBesar');
		$this->db->from('link');
		$this->db->join('tbkelbesar', 'tbkelbesar.idKelBesar = link.id_kls_bsr');
		$this->db->where('link.id', $id);
		return $this->db->get()->row_array();
	}

	function setLink($id, $link_zoom, $link_presensi)
	{
		$this->db->set('link_zoom', $link_zoom);
		$this->db->set('link_presensi', $link_presensi);
		$this->db->where('id', $id);
		$this->db->update('link');
	}
}