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
		
		$this->load->view('head', $data);

		$this->load->database();
		$sql = "SELECT geslachtsvoorkeur FROM gebruikers WHERE nickname = ?";
		$query = $this->db->query($sql, array($data['nickname']));
		if ($query->num_rows() > 0)
		{
			$geslacht = $query->row()->geslachtsvoorkeur;

			$leeftijdmin = '';
			$leeftijdmax = '';
			$persoonlijkheidsvoorkeur = '';
			$merkvoorkeuren = '';

			$this->load->model('Profiel_model');
			//$data['content'] = $geslacht;
			$data['content'] = $this->Profiel_model->profielen($geslacht, $leeftijdmin, $leeftijdmax, $persoonlijkheidsvoorkeur, $merkvoorkeuren);
		}
		else
		{
			$data['content'] = '<p>Geen matches gevonden</p>';
		}

		$this->load->view('content', $data);
		$this->load->view('foot', $data);
	}	
}
?>