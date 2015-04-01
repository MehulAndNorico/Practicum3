<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inschrijven extends CI_Controller {
	public function index()
	{
		$data = array();
		$data['loginwidget'] = $this->load->view('loginwidget', $data, true);
		//of
		//$data['loginwidget'] = $this->load->view('loginwidget2', $data, true);
		$this->load->view('head', $data);
		$this->load->view('inschrijven');
		$this->load->view('foot');
	}
}
?>