<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_M extends CI_Model{


	public function cek_login($username,$password)
	{
		 $this->db->where("username",$username);
		 $this->db->where("password",$password);
		 $query = $this->db->get("useracc");
		 return $query;
	}
}