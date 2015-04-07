<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends CI_Controller {
	public function index()
	{
		$this->load->library('session');
		$data = array();
		$data['nav'] = $this->load->view('nav', $data, true);
		$this->load->view('head', $data);
		$this->load->view('start');
		$this->load->view('foot', $data);

	}
}
?>