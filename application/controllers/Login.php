<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$data = array();
		$data['nav'] = $this->load->view('nav', $data, true);
		$this->load->view('head', $data);
		$this->load->view('login');
		$this->load->view('foot');
	}
}
?>