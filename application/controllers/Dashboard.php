<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_user');
	}

	public function index()
	{
		$data = [
			'page'		=> 'dashboard/index',
			'title'		=> 'Dashboard E-Payment Surabaya',
		];
		$this->load->view(Configuration::layout(),$data);
	}

	public function ajax_detail($tanggal = null){
		$tanggal = Conversion::convert_date($tanggal,'Y-m-d')  ?: date('Y-m-d');
		$user = $this->M_user->select_all($tanggal);
		echo json_encode(["data" => $user]);
	}

}
