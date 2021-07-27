<?php 
class ModelAdmin extends CI_Model
{
	function getTasks()
	{
		$this->db->select('tbtugas.*, tbuser.nama, tbkelbesar.namaKelBesar, tbkelkecil.namaKelKecil, tbinfotugas.nama_tugas');
		$this->db->from('tbtugas');
		$this->db->join('tbuser', 'tbuser.idUser = tbtugas.idUser');
		$this->db->join('tbkelbesar', 'tbkelbesar.idKelBesar = tbtugas.idKelBesar');
		$this->db->join('tbkelkecil', 'tbkelkecil.idKelKecil = tbtugas.idKelKecil');
		$this->db->join('tbinfotugas', 'tbinfotugas.id_info = tbtugas.idInfoTugas');
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

	function getTests()
	{
		$this->db->select('tbrundown.*');
		$this->db->from('tbrundown');
		$results = $this->db->get()->result_array();
		return $results;
	}

	function getTasksInfo()
	{
		return $this->db->get('tbinfotugas')->result_array();
	}

	function getTaskInfo($id_info)
	{
		return $this->db->get_where('tbinfotugas', ['id_info' => $id_info])->row_array();
	}

	function deleteTasks($id_info = '')
	{
		$this->db->delete('tbinfotugas', ['id_info' => $id_info]);
	}

	function editTasks($id_info, $nama_tugas, $keterangan, $dateUse, $SubmitForm)
	{
		$this->db->set('nama_tugas', $nama_tugas);
		$this->db->set('keterangan', $keterangan);
		$this->db->set('dateUse', $dateUse);
		$this->db->set('SubmitForm', $SubmitForm);
		$this->db->where('id_info', $id_info);
		$this->db->update('tbinfotugas');
	}

	function setMakeTasks($data)
	{
		$this->db->insert('tbinfotugas', $data);
	}

	function getEditTests($idRundown)
	{
		$this->db->select('linkrundown.*, tbkelbesar.namaKelBesar, tbrundown.nama');
		$this->db->from('linkrundown');
		$this->db->join('tbkelbesar', 'tbkelbesar.idKelBesar = linkrundown.idKelBesar');
		$this->db->join('tbrundown', 'tbrundown.idRundown = linkrundown.idRundown');
		$this->db->where('linkrundown.idRundown', $idRundown);
		return $this->db->get()->result_array();
	}
}