<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registreren extends CI_Controller {
	public function index()
	{
		$data = array();
		$this->load->database();
		$this->load->model('Profiel_model');
		$data['gegevens'] = $this->Profiel_model->getNew();
		$data['nickname'] = $this->input->cookie('nickname');
		if (!isset($data['nickname']))
		{
			$data['nickname'] = '';
		}
		$data['nav'] = $this->load->view('nav', $data, true);
		$this->load->view('head', $data);
		$this->load->view('registreren');
		$this->load->view('foot');
	}
}
?>