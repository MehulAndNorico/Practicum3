<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends CI_Controller {
	//http://www.students.science.uu.nl/~4301358/wt3/index.php/start/index
	//http://www.students.science.uu.nl/~4301358/wt3/index.php/start/
	public function index()
	{
		$data = array();
		$data['loginwidget'] = $this->load->view('loginwidget', $data, true);
		$data['loginwidget2'] = $this->load->view('loginwidget2', $data, true);
		$this->load->view('head', $data);
		$this->load->view('start');
	}

	//http://www.students.science.uu.nl/~4301358/wt3/index.php/start/
	public function test()
	{
		$this->load->view('head');
	}
}
?>