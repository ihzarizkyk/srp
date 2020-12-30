<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

public function __construct(){
	parent::__construct();
	$this->load->model("Auth_M");
	$this->load->library("session","database");
}

public function index()
{
	$this->load->view("login");
}

public function Login()
{
	$username = $this->input->post("username");
	$password = $this->input->post("password");
	$check = $this->Auth_M->cek_login($username,$password)->num_rows();

	if($check > 0)
	{
		$data_session = array("username" => $username,"password" => $password,"status" => TRUE);
		$this->session->set_userdata($data_session);
		redirect(base_url("Admin"));

		
	}else{
		redirect(base_url("Auth"));
	}

}

public function logout()
{
	$this->session->sess_destroy();
	redirect(base_url("Auth"));
}

}

