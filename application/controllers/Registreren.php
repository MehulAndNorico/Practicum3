<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registreren extends CI_Controller {
	public function index()
	{
		$data = array();

		$input = array(
	        	'nickname' => $this->input->post('nickname'),
	        	'naam' => $this->input->post('naam'),
	        	'emailadres' => $this->input->post('emailadres'),
	        	'wachtwoord' => $this->input->post('wachtwoord'),
	        	'geslacht' => $this->input->post('geslacht'),
	        	'geslachtsvoorkeur' => $this->input->post('geslachtsvoorkeur'),
	        	'geboortedatum' => $this->input->post('geboortedatum'),
	        	'leeftijdmin' => $this->input->post('leeftijdmin'),
	        	'leeftijdmax' => $this->input->post('leeftijdmax'),
	        	'beschrijving' => $this->input->post('beschrijving'),
	        	'persoonlijkheidstype' => $this->input->post('persoonlijkheidstype'),
	        	'persoonlijkheidsvoorkeur' => $this->input->post('persoonlijkheidsvoorkeur'),
	        	'merkvoorkeuren' => $this->input->post('merkvoorkeuren')
    		);

		if (! is_null($input['nickname']))
		{
				$hash = md5($input['wachtwoord']);

				$this->load->database();
				$sql = "INSERT INTO gebruikers VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
				$query = $this->db->query($sql, array($input['nickname'], $input['naam'], $input['emailadres'], $hash, $input['geslacht'], $input['geslachtsvoorkeur'], $input['geboortedatum'],$input['leeftijdmin'],$input['leeftijdmax'],$input['beschrijving'],$input['persoonlijkheidstype'], $input['persoonlijkheidsvoorkeur']));

				$this->load->helper('url');
				redirect('https://www.students.science.uu.nl/~4301358/wt3/profiel/bekijk/nickname/'. $input['nickname']);
		}

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