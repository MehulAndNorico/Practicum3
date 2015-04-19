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
		
		/*$sql2 = "SELECT * FROM merkvoorkeuren WHERE nickname = ?";
		$query2 = $this->db->query($sql2, array($nickname));
		$data2 = $query2->array();
		$merkvookeuren = '';*/
		$merkvoorkeuren = 'ER WERKT IETS :D';
		$komma = false;
		/*foreach ($data2 as $row)
		{	
			if (komma)
			{
				$merkvookeuren = $merkvookeuren . ', ';
			}
			$merkvookeuren = $merkvookeuren . $row;
		}*/

		$result = array(
			array('Nickname', $data->nickname),
			array('Naam', $data->naam),
			array('Geslacht', $data->geslacht),
			array('Geslachtsvoorkeur', $data->geslachtsvoorkeur),
			array('Geboortedatum', $data->geboortedatum),
			array('Leeftijdmin', $data->leeftijdmin),
			array('Leeftijdmax', $data->leeftijdmax),
			array('Beschrijving', $data->beschrijving),
			array('Persoonlijkheidstype', $data->persoonlijkheidstype),
			array('Persoonlijkheidsvoorkeur', $data->persoonlijkheidsvoorkeur),
			array('Merkvoorkeuren', $merkvoorkeuren) 
		);
		return $result;
	}

	public function get6($array = array('geen'))
	{
		if ($array == array('geen'))
		{
			$nicknames = array('PietjeP', 'Henkie', 'Ingridje', 'PietjeP2', 'Henkie2', 'Ingridje2');
		}
		else
		{
			$nicknames = $array;
		}
		/*if (isset($array))
		{
			$nicknames = array('PietjeP');
		}
		else
		{
			$nicknames = array('PietjeP', 'Henkie', 'Ingridje', 'PietjeP2', 'Henkie2', 'Ingridje2');

		}*/
		foreach($nicknames as $nn)
		{
			echo '<div>';
			$info = $this->Profiel_model->getInfo($nn);
			foreach($info as $item)
			{
				echo '<p>'. $item[0] . ': ' . $item[1] . '</p>';
			}
			echo '</div><br>';
		}
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
		$query = $this->db->query($sql, array($email, $ww));
		//$query = $this->db->query($sql, array('pietje@dd.com', 'e8636ea013e682faf61f56ce1cb1ab5c'));
		//$query = $this->db->query("SELECT nickname FROM gebruikers WHERE emailadres = 'pietje@dd.com' AND wachtwoord = 'e8636ea013e682faf61f56ce1cb1ab5c'");
		
		if ($query->num_rows() > 0)
		{
			//return $query->row;
			return 'succes';
		}
		else
		{
			return '';
		}
	}
}