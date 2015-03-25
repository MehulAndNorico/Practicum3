<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profiel extends CI_Controller {
	//http://www.students.science.uu.nl/~4301358/webtechnologie3/index.php/profiel/bekijk/3
	public function bekijk($id)
	{
		$data = array();
		$data['id'] = $id;

		$this->load->view('head');
		$this->load->view('profiel', $data);
		$this->load->view('foot');
	}

	public function index()
	{
		$this->load->view('head');
		$this->load->view('foot');
	}
}
?>