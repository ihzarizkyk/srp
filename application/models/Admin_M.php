<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_M extends CI_Model{

	public function show_data()
	{
		$this->db->order_by("poin","desc");
		return $this->db->get("user");
	}

	public function add_data($nama,$jurusan,$angkatan,$poin)
	{
		$data = array("nama" => $nama,
					  "jurusan" => $jurusan,
					  "angkatan" => $angkatan,
					  "poin" => $poin);
		$this->db->insert("user",$data);
	}

	public function delete($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function edit($where,$table)
	{
	return $this->db->get_where($table,$where);
	}

	public function update($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}