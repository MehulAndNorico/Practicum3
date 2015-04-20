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

	public function getInfo($nickname, $kort)
	{
		$this->load->database();
		$sql = "SELECT * FROM gebruikers WHERE nickname = ?";
		$query = $this->db->query($sql, array($nickname));
		$data = $query->row();
		
		/*$sql2 = "SELECT * FROM merkvoorkeuren WHERE nickname = ?";
		$query2 = $this->db->query($sql2, array($nickname));
		$data2 = $query2->array();*/
		$merkvoorkeuren = '';
		//$komma = false;
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

		if ($kort)
		{
			$result[7][1] = substr($result[7][1], 0, 50);
		}

		return $result;
	}

	public function get6($array = array('geen'))
	{
		if ($array == array('geen'))
		{
			$this->load->database();
			$query = $this->db->query("SELECT nickname FROM gebruikers");

			$nicknames = array();
			$start = rand(0, ($query->num_rows() - 6));
			for ($i = $start; $i < $start + 6; $i++)
			{
				if ($query->num_rows() > $i)
				{
					$nicknames[$i] = $query->row($i)->nickname;
				}	
			}
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
		
		$gevonden = false;
		echo '<div>';
		foreach($nicknames as $nn)
		{
			$gevonden = true;
			echo '<div>';
			$info = $this->Profiel_model->getInfo($nn, true);
			$eerste = true;
			foreach($info as $item)
			{
				if ($eerste)
				{
					echo '<a href="https://www.students.science.uu.nl/~4301358/wt3/profiel/bekijk/nickname/' . $item[1] . '""><p>'. $item[0] . ': ' . $item[1] . '</p></a>';
					$eerste = false;
				}
				else
				{
					echo '<p>'. $item[0] . ': ' . $item[1] . '</p>';
				}
				
			}
			echo '</div><br>';
		}

		if (! $gevonden)
		{
			echo '<p>Geen resultaten gevonden</p>';
		}
		echo '</div>';
	}

	public function setInfo($info)
	{


	}

	public function getNew()
	{
		$result = array(
			array('nickname', ''),
			array('naam', ''),
			array('emailadres', ''),
			array('wachtwoord', ''),
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
			return $query->row()->nickname;
		}
		else
		{
			return '';
		}
	}

	public function profielen($geslacht, $leeftijdmin, $leeftijdmax, $persoonlijkheidsvoorkeur, $merkvoorkeuren)
	{
		$this->load->helper('date');

		$this->load->database();
		$sql = "SELECT nickname, geboortedatum FROM gebruikers WHERE geslacht = ?";
		$query = $this->db->query($sql, array($geslacht));

		//$debug = '';

		$data = array();
		$max = 6;
		for ($i = 0; $i < $max; $i++)
		{
			if ($query->num_rows() > $i)
			{
				//$leeftijd = (now() - mysql_to_unix($query->row($i)->geboortedatum)) / (365.25 * 24 * 60 * 60);
				/*$leeftijd = (timespan(mysql_to_unix($query->row($i)->geboortedatum), now())) / (365.25 * 24 * 60 * 60);
				
				return $leeftijd;
				if ($leeftijd > $leeftijdmin && $leeftijd < $leeftijdmax)
				{*/
					$data[$i] = $query->row($i)->nickname;
				//$debug .= $data[$i];
				/*}
				else
				{
					$max++;
				}*/
			}	
		}

		$this->load->model('Profiel_model');
		return $this->Profiel_model->get6($data);
		//return $debug;
	}

	public function likes($mode, $nickname)
	{
		if ($mode == 0) //geliked
		{
			$this->load->database();
			$sql = "SELECT van FROM likes WHERE naar = ?";
			$query = $this->db->query($sql, array($nickname));

			$nicknames = array();
			for ($i = 0; $i < 6; $i++)
			{
				if ($query->num_rows() > $i)
				{
					$nicknames[$i] = $query->row($i)->van;
				}	
			}

			return $this->Profiel_model->get6($nicknames);
		}
		else if ($mode == 1) //mijn likes
		{
			$this->load->database();
			$sql = "SELECT naar FROM likes WHERE van = ?";
			$query = $this->db->query($sql, array($nickname));

			$nicknames = array();
			for ($i = 0; $i < 6; $i++)
			{
				if ($query->num_rows() > $i)
				{
					$nicknames[$i] = $query->row($i)->naar;
				}	
			}

			return $this->Profiel_model->get6($nicknames);
		}
		else if ($mode == 2) //wederzijds
		{
			$this->load->database();
			$sql = "SELECT naar FROM likes WHERE van = ?";
			$query = $this->db->query($sql, array($nickname));

			$mijn = array();
			for ($i = 0; $i < 6; $i++)
			{
				if ($query->num_rows() > $i)
				{
					$mijn[$i] = $query->row($i)->naar;
				}	
			}

			$sql = "SELECT van FROM likes WHERE naar = ?";
			$query = $this->db->query($sql, array($nickname));

			$andere = array();
			for ($i = 0; $i < 6; $i++)
			{
				if ($query->num_rows() > $i)
				{
					$andere[$i] = $query->row($i)->van;
				}	
			}

			$wederzijds = array();
			foreach($mijn as $mijnlike)
			{
				if (in_array($mijnlike, $andere))
				{
					array_push($wederzijds, $mijnlike);
				}
			}

			return $this->Profiel_model->get6($wederzijds);
		}
		else
		{
			return '<p>Er is iets misgegaan</p>';
		}
	}
}