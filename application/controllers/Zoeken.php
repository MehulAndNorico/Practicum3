<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zoeken extends CI_Controller {
	public function index()
	{
		$data = array();
		//$this->load->helper('url');
		//$this->load->library('session');
		//$data['nickname'] = $this->session->nickname;
		//$data['nickname'] = $this->input->cookie('nickname');
		/*if (!isset($data['nickname']))
		{
			$data['nickname'] = '';
		}*/
		$data['nickname'] = $this->input->cookie('nickname');
		if (!isset($data['nickname']))
		{
			$data['nickname'] = '';
		}
		$data['nav'] = $this->load->view('nav', $data, true);

		//$this->load->helper('form');
		//$data['formopen'] = form_open('getProfielen()');
		/*$data['geslacht'] = form_input('geslacht');
		$data['leeftijdmin'] = form_input('leeftijdmin');
		$data['leeftijdmax'] = form_input('leeftijdmax');
		$data['persoonlijkheidsvoorkeur'] = form_input('persoonlijkheidsvoorkeur');
		$data['merkvoorkeuren'] = form_input('merkvoorkeuren');*/
		//$data['submit'] = form_submit('submit', 'Zoeken');
		//$data['formclose'] = form_close();

		$this->load->view('head', $data);
		//$this->load->view('zoeken', array('profieldata' => ''));
		$this->load->view('zoeken');
		$this->load->view('foot', $data);
	}

	public function profielen($geslacht, $leeftijdmin, $leeftijdmax, $persoonlijkheidsvoorkeur, $merkvoorkeuren)
	{
		$this->load->model('Profiel_model');
		echo $this->Profiel_model->profielen($geslacht, $leeftijdmin, $leeftijdmax, $persoonlijkheidsvoorkeur, $merkvoorkeuren);
	}
}
?>