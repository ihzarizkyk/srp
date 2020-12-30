<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_M extends CI_Model{

	public function home_data()
	{
		$this->db->order_by("poin","desc");
		return $this->db->get("user");
	}
}