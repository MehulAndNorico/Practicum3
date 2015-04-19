<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Start extends CI_Controller {
	public function index()
	{
		$data = array();
		$this->load->helper('url');
		//$this->load->library('session');
		//$data['nickname'] = $this->session->nickname;

		$data['nickname'] = $this->input->cookie('nickname');
		if (!isset($data['nickname']))
		{
			$data['nickname'] = '';
			$this->input->set_cookie('nickname', '', 864000);
		}
		$data['nav'] = $this->load->view('nav', $data, true);

		$this->load->view('head', $data);
		$this->load->view('start');
		$this->load->view('foot', $data);
	}

	public function profielen()
	{
		echo '<a href="inschrijven"><h3>Schrijf je nu in en ontmoet onder andere deze mensen:</h3></a>';

		$this->load->model('Profiel_model');
		echo $this->Profiel_model->get6();
	}

	public function asdf()
	{
		echo 'yay';
	}
}
?>