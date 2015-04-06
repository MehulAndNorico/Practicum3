<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profiel_model extends CI_Model {
	public $nickname;
	public $naam;
	public $emailadres;
	public $wachtwoord;
	public $geslacht;
	public $geslachtsvoorkeur;
	public $geboortedatum;
	public $leeftijdmin;
	public $leeftijdmax;
	public $beschrijving;
	public $persoonlijkheidstype;
	public $persoonlijkheidsvoorkeur;
	public $merkvoorkeuren;

	public function __construct()
	{
		parent::__construct();
	}

	public function getInfo($nickname)
	{
		$this->load->database();
		$sql = "SELECT * FROM gebruikers WHERE nickname = ?";
		$query = $this->db->query($sql, array($nickname));
		$data = $query->row();
		$result = array(
			array('nickname', $data->nickname),
			array('naam', $data->naam),
			array('geslacht', $data->geslacht),
			array('geslachtsvoorkeur', $data->geslachtsvoorkeur),
			array('geboortedatum', $data->geboortedatum),
			array('leeftijdmin', $data->leeftijdmin),
			array('leeftijdmax', $data->leeftijdmax),
			array('beschrijving', $data->beschrijving),
			array('persoonlijkheidstype', $data->persoonlijkheidstype),
			array('persoonlijkheidsvoorkeur', $data->persoonlijkheidsvoorkeur)
		);
		return $result;
	}
}