<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public function select_all($tanggal)
	{
		$this->db->from('user');
		$this->db->where('register_date <= ',$tanggal);
		$query = $this->db->get();
		return $query->result();
	}

}
