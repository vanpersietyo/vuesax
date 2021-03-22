<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Config extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function change_dark_mode($darkmode){
		if($darkmode == 'true'){
			$this->session->set_userdata('dark_mode',true);
		}else{
			$this->session->unset_userdata('dark_mode');
		}
		echo json_encode([
			'status' 	=> TRUE,
			'dark_mode'	=> $this->session->userdata('dark_mode') ?: ""
		]);
	}

}
