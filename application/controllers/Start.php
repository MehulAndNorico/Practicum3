<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends CI_Controller {
	public function index()
	{
		$data = array();
		$data['loginwidget'] = $this->load->view('loginwidget', $data, true);
		$this->load->view('head', $data);
		$this->load->view('start');
		$this->load->view('foot');
	}
}
?>