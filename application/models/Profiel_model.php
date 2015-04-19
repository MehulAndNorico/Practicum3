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
		
		$sql2 = "SELECT * FROM merkvoorkeuren WHERE nickname = ?";
		$query2 = $this->db->query($sql2, array($nickname));
		$data2 = $query2->array();
		$merkvookeuren = '';
		$komma = false;
		foreach ($data2 as $row)
		{	
			if (komma)
			{
				$merkvookeuren = $merkvookeuren . ', ';
			}
			$merkvookeuren = $merkvookeuren . $row;
		}

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
			array('persoonlijkheidsvoorkeur', $data->persoonlijkheidsvoorkeur),
			array('merkvoorkeuren', $merkvoorkeuren) 
		);
		return $result;
	}

	public function setInfo($info)
	{


	}

	public function getNew()
	{
		$result = array(
			array('nickname', ''),
			array('naam', ''),
			array('geslacht', ''),
			array('geslachtsvoorkeur', ''),
			array('geboortedatum', ''),
			array('leeftijdmin', ''),
			array('leeftijdmax', ''),
			array('beschrijving', ''),
			array('persoonlijkheidstype', ''),
			array('persoonlijkheidsvoorkeur', ''),
			array('merkvoorkeuren', '')
		);
		return $result;
	}

	public function setNew($info)
	{

	}

	public function validate($email, $ww)
	{
		$this->load->database();
		$sql = "SELECT nickname FROM gebruikers WHERE emailadres = ? AND wachtwoord = ?";
		if ($query = $this->db->query($sql, array($email, $ww)))
		{
			$validated = true;
			$nickname = $query->row();
			$this->session->nickname = $nickname;
		}
		else
		{
			$validated = false;
		}
	}
}