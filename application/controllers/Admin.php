<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Admin extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_M');
		$this->load->model('Auth_M');

		if($this->session->userdata('status') == FALSE){
			redirect(base_url("Auth"));
		}
	}

	public function index()
	{
		$data['sekarang'] = time();
		$data['user'] = $this->Admin_M->show_data()->result();
		$this->load->view("Admin",$data);
	}

	public function tambah()
	{
		$this->load->view("tambah");
	}

	public function input()
	{
	$nim = $this->input->post("nim");
	$nama = $this->input->post("nama");
	$jurusan = $this->input->post("jurusan");
	$angkatan = $this->input->post("angkatan");
	$poin = $this->input->post("poin");

		$this->Admin_M->add_data($nim,$nama,$jurusan,$angkatan,$poin);
		redirect("Admin");

	}

	public function hapus($id)
	{
		$where = array("id" => $id);
		$this->Admin_M->delete($where,"user");
		redirect("Admin");
	}

	public function edit($id)
	{
		$where = array("id" => $id);
		$data['user'] = $this->Admin_M->edit($where,"user")->result();
		$this->load->view("ubah",$data);
	}

	public function ubah()
	{
		$id = $this->input->post("id");
		$nim = $this->input->post("nim");
		$nama = $this->input->post("nama");
		$jurusan = $this->input->post("jurusan");
		$angkatan = $this->input->post("angkatan");
		$poin = $this->input->post("poin");

		$data = array("nim" => $nim,"nama" => $nama, "jurusan" => $jurusan, "angkatan" => $angkatan, "poin" => $poin);
		$where = array("id" => $id);

		$this->Admin_M->update($where,$data,"user");
		redirect("Admin");
	}

/*
	public function pdf()
	{
		$data['user'] = $this->Admin_M->show_data()->result();
		$rank = 0;
		$pdf = new FPDF('P','cm','A4');
		$pdf->AddPage();
		$pdf->SetFont("Helvetica");
		$pdf->output();
	}
*/

}