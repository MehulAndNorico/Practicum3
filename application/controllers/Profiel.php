<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profiel extends CI_Controller {
	public function bekijk()
	{
		$data = array();
		$this->load->database();
		
		$nickname = $this->uri->uri_to_assoc()['nickname'];
		
		echo $nickname;
		/*
		$sql = "SELECT * FROM gebruikers WHERE nickname = ?";
		$query = $this->db->query($sql, array($nickname));
		$data['result'] = $query->row();
		*/

		$this->load->model('Profiel_model');
		$data['gegevens'] = $this->Profiel_model->getInfo($nickname);

		$data['nav'] = $this->load->view('nav', $data, true);
		$this->load->view('head', $data);
		$this->load->view('profiel');
		$this->load->view('foot');
	}


}
?>