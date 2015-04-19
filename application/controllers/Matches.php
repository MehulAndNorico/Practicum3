<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matches extends CI_Controller {
	public function index()
	{
		$data = array();

		$data['nickname'] = $this->input->cookie('nickname');
		if (!isset($data['nickname']))
		{
			$data['nickname'] = '';
		}
		$data['nav'] = $this->load->view('nav', $data, true);
		
		$this->load->database();
		$sql = "SELECT geslachtsvoorkeur FROM gebruikers WHERE nickname = ?";
		$query = $this->db->query($sql, array($data['nickname']));
		$geslacht = $query->row();

		$leeftijdmin = '';
		$leeftijdmax = '';
		$persoonlijkheidsvoorkeur = '';
		$merkvoorkeuren = '';

		$this->load->model('Profiel_model');
		$data['content'] = $this->Profiel_model->profielen($geslacht, $leeftijdmin, $leeftijdmax, $persoonlijkheidsvoorkeur, $merkvoorkeuren);
		$this->load->view('head', $data);
		$this->load->view('content', $data);
		$this->load->view('foot', $data);
	}	
}
?>