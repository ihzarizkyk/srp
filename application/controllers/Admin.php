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


	public function pdf()
	{
		$this->load->library("pdf/TCPDF");
		$this->load->library("parser");

		$pdf = new TCPDF();
		$pdf->AddPage('L','mm','A4');
		$pdf->SetFont('','B',16);
		$pdf->Cell(277,10,"Laporan Sistem Ranking Poin",0,1,'C');
		$pdf->SetAutoPageBreak(true,0);

		// Header
		$pdf->Ln(10);
		$pdf->SetFont('','B',12);
		$pdf->Cell(13,8,"Rank",1,0,'C');
		$pdf->Cell(30,8,"NIM",1,0,'C');
		$pdf->Cell(70,8,"Nama",1,0,'C');
		$pdf->Cell(50,8,"Jurusan",1,0,'C');
		$pdf->Cell(40,8,"Angkatan",1,0,'C');
		$pdf->Cell(25,8,"Poin",1,1,"C");

		$pdf->SetFont('','',12);

		$data = $this->Admin_M->show_data()->result();
		$date = time();
		$conv = unix_to_human($date);
		$rank = 0;

		foreach($data as $dt){

		$rank++;
		$pdf->Cell(13,8,$rank,1,0,'C');
		$pdf->Cell(30,8,$dt->nim,1,0);
		$pdf->Cell(70,8,$dt->nama,1,0);
		$pdf->Cell(50,8,$dt->jurusan,1,0);
		$pdf->Cell(40,8,$dt->angkatan,1,0);
		$pdf->Cell(25,8,$dt->poin,1,1);
		}

		$pdf->SetFont('','B',10);
		$pdf->Cell(40,8,"DATE : $conv",0,1);

		$pdf->Output("LaporanSRP_Admin.pdf");
	}

/*
*	public function xls()
*	{
*		// code here
*	}
*/

}