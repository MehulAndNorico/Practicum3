<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
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
		}
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

		//$hash = password_hash($input['ww'], PASSWORD_BCRYPT);
		$hash = md5($input['ww']);

		$this->load->model('Profiel_model');
		$nickname = $this->Profiel_model->validate($input['email'], $hash);
		//$this->session->nickname = $nickname;
		//$this->load->helper('cookie');
		//$this->cookie->set_cookie('nickname', $nickname);
		//set_cookie('nickname', $nickname);
		//$nickname = 'yay';
		//setcookie('nickname', $nickname, 'students.science.uu.nl');
		$this->input->set_cookie('nickname', $nickname, 864000);

		if ($nickname != '')
		{
			redirect('https://www.students.science.uu.nl/~4301358/wt3/start');
		}
		else
		{
			redirect('https://www.students.science.uu.nl/~4301358/wt3/login');
		}	
	}
}
?>