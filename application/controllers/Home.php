<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Jakarta');

class Home extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper("date");
		$this->load->model("Home_M");
	}

	public function index()
	{
		$data['sekarang'] = time();
		$data['user'] = $this->Home_M->home_data()->result();
		$this->load->view("Home",$data);
	}

	public function tentang()
	{
		$this->load->view("Tentang");
	}

}