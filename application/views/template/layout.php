<?php
/** @var CI_Controller $this */
	$this->load->view(Configuration::template().'/head');
	$this->load->view(Configuration::template().'/navbar');
	$this->load->view(Configuration::template().'/menu');

	if (isset($page)){
		$this->load->view($page);
	}
	$this->load->view(Configuration::template().'/foot');
?>
