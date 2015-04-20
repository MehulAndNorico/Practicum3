<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Likes extends CI_Controller {
	public function geliked()
	{
		$data = array();
		$data['nickname'] = $this->input->cookie('nickname');
		if (!isset($data['nickname']))
		{
			$data['nickname'] = '';
		}
		$data['nav'] = $this->load->view('nav', $data, true);

		$this->load->model('Profiel_model');
		$data['content'] = $this->Profiel_model->likes(0 , $data['nickname']);

		$this->load->view('head', $data);
		$this->load->view('content', $data);
		$this->load->view('foot', $data);
	}

	public function mijn()
	{
		$data = array();
		$data['nickname'] = $this->input->cookie('nickname');
		if (!isset($data['nickname']))
		{
			$data['nickname'] = '';
		}
		$data['nav'] = $this->load->view('nav', $data, true);

		$this->load->model('Profiel_model');
		$data['content'] = $this->Profiel_model->likes(1 , $data['nickname']);

		$this->load->view('head', $data);
		$this->load->view('content', $data);
		$this->load->view('foot', $data);
	}

	public function wederzijds()
	{
		$data = array();
		$data['nickname'] = $this->input->cookie('nickname');
		if (!isset($data['nickname']))
		{
			$data['nickname'] = '';
		}
		$data['nav'] = $this->load->view('nav', $data, true);

		$this->load->model('Profiel_model');
		$data['content'] = $this->Profiel_model->likes(2 , $data['nickname']);

		$this->load->view('head', $data);
		$this->load->view('content', $data);
		$this->load->view('foot', $data);
	}
}
?>