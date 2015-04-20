<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profiel extends CI_Controller {
	public function index()
	{
		$data = array();

		$data['nickname'] = $this->input->cookie('nickname');
		if (!isset($data['nickname']))
		{
			$data['nickname'] = '';
			$data['gegevens'] = '<p>Registreer of log in om dit te bekijken</p>';
		}
		else
		{
			$this->load->model('Profiel_model');
			$data['gegevens'] = $this->Profiel_model->getInfo($data['nickname'], false);
		}

		$data['likeknop'] = false;
		$data['nav'] = $this->load->view('nav', $data, true);
		$this->load->view('head', $data);
		$this->load->view('profielBekijk', $data);
		$this->load->view('foot');
	}

	public function bekijk()
	{
		$data['nickname'] = $this->input->cookie('nickname');
		if (!isset($data['nickname']))
		{
			$data['nickname'] = '';
			$this->load->helper('url');
			redirect('https://www.students.science.uu.nl/~4301358/wt3/login');
		}
		else
		{
			
			$input = array(
	        	'wat' => $this->input->post('wat'),
	        	'wie' => $this->input->post('wie')
    		);

			if (! is_null($input['wat']))
			{
				if ($input['wat'] == 'Liken')
				{
					$this->load->database();
					$sql = "INSERT INTO likes VALUES (?, ?);";
					$query = $this->db->query($sql, array($data['nickname'], $input['wie']));
				}
				else if ($input['wat'] == 'Ontliken')
				{
					$this->load->database();
					$sql = "DELETE FROM likes WHERE van = ? AND naar = ?;";
					$query = $this->db->query($sql, array($data['nickname'], $input['wie']));
					
					$this->load->helper('url');
				redirect('https://www.students.science.uu.nl/~4301358/wt3/profiel/bekijk/nickname/'. $input['wie']);
				}
			}

			$data = array();

			$data['wie'] = $this->uri->uri_to_assoc()['nickname'];

			$this->load->model('Profiel_model');
			$data['gegevens'] = $this->Profiel_model->getInfo($data['wie'], false);
			
			$data['nickname'] = $this->input->cookie('nickname');

			$this->load->database();
			$sql = "SELECT * FROM likes WHERE van = ? AND naar = ?";
			$query = $this->db->query($sql, array($data['nickname'],$data['wie']));

			if ($query->num_rows() > 0)
			{
				$data['wat'] = 'Ontliken';
			}
			else
			{
				$data['wat'] = 'Liken';
			}

			$data['likeknop'] = true;
			$data['nav'] = $this->load->view('nav', $data, true);
			$this->load->view('head', $data);
			$this->load->view('profielBekijk', $data);
			$this->load->view('foot', $data);
		}
	}

	public function bewerk()
	{
		$data = array();

		$data['nickname'] = $this->input->cookie('nickname');
		if (!isset($data['nickname']))
		{
			$data['nickname'] = '';
			$this->load->helper('url');
			redirect('https://www.students.science.uu.nl/~4301358/wt3/login');
		}
		else
		{
			$this->load->database();
			$this->load->helper('form');
			$this->load->library('form_validation');

			$this->load->model('Profiel_model');
			$data['gegevens'] = $this->Profiel_model->getInfo($nickname, false);
			$data['nickname'] = $this->input->cookie('nickname');
			if (!isset($data['nickname']))
			{
				$data['nickname'] = '';
			}
			$data['nav'] = $this->load->view('nav', $data, true);
			$this->load->view('head', $data);
			$this->load->view('profielBewerk', $data);
			$this->load->view('foot');
		}	
	}
}
?>