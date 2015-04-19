<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$data = array();
		
		$data['nickname'] = $this->session->nickname;
		$data['nav'] = $this->load->view('nav', $data, true);

		$this->load->helper('form');
		$data['formopen'] = form_open('login/inloggen');
		$data['emailveld'] = form_input('emailadres');
		$data['wwveld'] = form_password('wachtwoord');
		$data['submit'] = form_submit('submit', 'Inloggen');
		$data['formclose'] = form_close();

		$this->load->view('head', $data);
		$this->load->view('login');
		$this->load->view('foot');
	}

	public function inloggen()
	{
		$data = array();

		$this->load->helper('url');
		$slug = url_title($this->input->post('emailveld'), 'dash', TRUE);
		$input = array(
        	'email' => $this->input->post('emailadres'),
        	'slug' => $slug,
        	'ww' => $this->input->post('wachtwoord')
    	);

		
		$data['nav'] = $this->load->view('nav', $data, true);
		$this->load->view('head', $data);

		$hash = password_hash($input['ww'], PASSWORD_BCRYPT);
		$this->load->model('Profiel_model');
		if ($this->Profiel_model->validate($input['email'], $hash))
		{
			$this->load->view('start');
		}
		else
		{
			$this->load->view('login');
		}
		$this->load->view('foot');	
	}
}
?>