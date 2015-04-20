<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Set extends CI_Controller {
	//http://www.students.science.uu.nl/~4301358/wt3/index.php/start/index
	//http://www.students.science.uu.nl/~4301358/wt3/index.php/start/
	public function index()
	{
		$this->load->dbforge();
		$this->dbforge->create_database('db');
		$this->db->query("CREATE TABLE gebruikers (
			nickname      		VARCHAR(20)    	NOT NULL,
			naam				VARCHAR(40)		NOT NULL,
			emailadres			VARCHAR(30)		NOT NULL,
			wachtwoord			VARCHAR(32)		NOT NULL,
			geslacht			VARCHAR(15)		NOT NULL,
			geslachtsvoorkeur	VARCHAR(100)	NOT NULL,
			geboortedatum  		DATE	 		NOT NULL,
			leeftijdmin			INTEGER			NOT NULL,
			leeftijdmax			INTEGER			NOT NULL,
			beschrijving		VARCHAR(500)	NOT NULL,
			persoonlijkheidstype		VARCHAR(12)		NOT NULL,
			persoonlijkheidsvoorkeur	VARCHAR(12)		NOT NULL,
			CONSTRAINT gebruikers_pk PRIMARY KEY (nickname)
			);"
		);

		$this->db->query("CREATE TABLE likes (
			van      		VARCHAR(20)    	NOT NULL,
			naar			VARCHAR(20)		NOT NULL,
			CONSTRAINT likes_fk1 FOREIGN KEY (van) REFERENCES gebruikers(nickname),
			CONSTRAINT likes_fk2 FOREIGN KEY (van) REFERENCES gebruikers(nickname)
			);"
		);

		$data = array();
		$data['nickname'] = $this->input->cookie('nickname');
		if (!isset($data['nickname']))
		{
			$data['nickname'] = '';
		}
		$data['nav'] = $this->load->view('nav', $data, true);
		$this->load->view('head', $data);
		$this->load->view('set');
		$this->load->view('foot');
	}
}
?>