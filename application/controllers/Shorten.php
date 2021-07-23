<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shorten extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    date_default_timezone_set("Asia/Jakarta");
  }

  public function index()
  {
    if ($this->session->userdata('role') != 'admin' && $this->session->userdata('status') != 'login') {
      redirect('home');
    }
    $this->form_validation->set_rules('name', "Nama Shorten Link", 'required|trim', [
      'required'    => 'Nama Shorten Link harus diisi!'
    ]);
    $this->form_validation->set_rules('shorten', "Alamat Shorten Link", 'required|trim|is_unique[tbshorten.shorten]|alpha_dash', [
      'required'    => 'Alamat Shorten Link harus diisi!',
      'is_unique'    => 'Alamat Shorten Link sudah digunakan!',
      'alpha_dash'  => 'Alamat Shorten Link tidak boleh berisi spasi!'
    ]);
    $this->form_validation->set_rules('origin', "Alamat Asli", 'required|trim|valid_url', [
      'required'    => 'Alamat Asli harus diisi!',
      'valid_url'    => 'Alamat Asli harus berupa alamat website'
    ]);

    if ($this->form_validation->run() == FALSE) {
      $data = [
        'title'      => 'Buat Shorten Link'
      ];
      $this->load->view('Adminpage/Templates/header', $data);
      $this->load->view('Adminpage/Templates/navbar');
      $this->load->view('Adminpage/Templates/sidebar', $data);
      $this->load->view('Adminpage/Shorten/shorten_create');
      $this->load->view('Adminpage/Templates/footer');
    } else {
      $data = [
        'name'          => htmlspecialchars($this->input->post('name')),
        'shorten'        => htmlspecialchars($this->input->post('shorten')),
        'origin'        => htmlspecialchars($this->input->post('origin')),
        'date_created'  => date("Y-m-d H:i:s")
      ];
      $this->db->insert('tbshorten', $data);
      redirect('shorten');
    }
  }

  public function list()
  {
    if ($this->session->userdata('role') != 'admin' && $this->session->userdata('status') != 'login') {
      redirect('home');
    }
    $data = [
      'title'      => 'Daftar Shorten Link',
      'lists'      => $this->db->get('tbshorten')->result_array()
    ];
    $this->load->view('Adminpage/Templates/header', $data);
    $this->load->view('Adminpage/Templates/navbar');
    $this->load->view('Adminpage/Templates/sidebar', $data);
    $this->load->view('Adminpage/Shorten/shorten_list');
    $this->load->view('Adminpage/Templates/footer');
  }

  public function delete_shorten()
  {
    if ($this->session->userdata('role') != 'admin' && $this->session->userdata('status') != 'login') {
      redirect('home');
    }
    $shorten = $this->input->get('shorten');

    $this->db->delete('tbshorten', ['shorten' => $shorten]);
    redirect('shorten/list');
  }

  public function direct($shorten)
  {
    $data = $this->db->get_where('tbshorten', ['shorten' => $shorten])->row_array();

    if ($data) {
      redirect($data['origin']);
    } else {
      redirect(base_url());
    }
  }
}
