<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reset extends CI_Controller {
	//http://www.students.science.uu.nl/~4301358/wt3/index.php/start/index
	//http://www.students.science.uu.nl/~4301358/wt3/index.php/start/
	public function index()
	{
		$this->load->dbforge();
		$this->load->database();

		$this->dbforge->drop_table('gebruikers');
		$fields = array(
	        'nickname' => array(
	                'type' => 'VARCHAR',
	 				'constraint' => 20
	        ),
	        'naam' => array(
	        		'type' => 'VARCHAR',
	        		'constraint' => 40
	        ),
	        'emailadres' => array(
	                'type' => 'VARCHAR',
	 				'constraint' => 30
	        ),
	        'wachtwoord' => array(
	        		'type' => 'VARCHAR',
	        		'constraint' => 32
	        ),
	        'geslacht' => array(
	                'type' => 'VARCHAR',
	 				'constraint' => 15
	        ),
	        'geslachtsvoorkeur' => array(
	        		'type' => 'VARCHAR',
	        		'constraint' => 100
	        ),
	        'geboortedatum' => array(
	                'type' => 'DATE'
	        ),
	        'leeftijdmin' => array(
	        		'type' => 'INTEGER'
	        ),
	        'leeftijdmax' => array(
	                'type' => 'INTEGER'
	        ),
	        'beschrijving' => array(
	        		'type' => 'VARCHAR',
	        		'constraint' => 500
	        ),
	        'persoonlijkheidstype' => array(
	                'type' => 'VARCHAR',
	 				'constraint' => 12
	        ),
	        'persoonlijkheidsvoorkeur' => array(
	        		'type' => 'VARCHAR',
	        		'constraint' => 12
	        )
		);
		$this->dbforge->add_field($fields);
		$this->dbforge->create_table('gebruikers');

		$nieuw = array(
			'nickname' => 'PietjeP',
			'naam' => 'Pietje Precies',
			'emailadres' => 'pietje@dd.com',
			'wachtwoord' => '24c22c48b48ea87bd4ab4f3aac2ace21',
			//ikbenpietjep
			'geslacht' => 'Man',
			'geslachtsvoorkeur' => 'Vrouw',
			'geboortedatum' => '07-04-1974',
			'leeftijdmin' => 30,
			'leeftijdmax' => 50,
			'beschrijving' => 'Hoi, ik ben Pietje Precies. Pietje ben ik niet een beetje en ook niet bijna helemaal, want Pietje ben ik precies. Ik zoek iemand die precies bij mij past, al is dat misschien wel waarom ik nog op zoek ben. Als het goed is kan ik nu gewoon maar wat zeggen omdat niemand dit meer leest.',
			'persoonlijkheidstype' => '100I100S100T100P',
			'persoonlijkheidsvoorkeur' => '100E100N100F100J',
		);
		$this->db->insert('gebruikers', $nieuw);
		$nieuw = array(
			'nickname' => 'Henkie',
			'naam' => 'Henk Haring',
			'emailadres' => 'henkieh@dd.com',
			'wachtwoord' => 'd995c053a687e2ab826c8e4bfed908ae',
			//iklustgeenharing
			'geslacht' => 'Man',
			'geslachtsvoorkeur' => 'Vrouw',
			'geboortedatum' => '23-11-1984',
			'leeftijdmin' => 25,
			'leeftijdmax' => 35,
			'beschrijving' => 'hoi ik ben henk haring ik heb net geleerd hoe ik op een scherm kan surfen met mijn muis maar ik snap het nog niet helemaal dus ik hoop dat dit gaat lukken want het lijkt mij leuk om iemand te ontmoeten waar ik dingen mee kan doen',
			'persoonlijkheidstype' => '',
			'persoonlijkheidsvoorkeur' => '',
		);
		$this->db->insert('gebruikers', $nieuw);
		$nieuw = array(
			'nickname' => 'Ingridje',
			'naam' => 'Ingrid de Eerste',
			'emailadres' => 'ingrid1@dd.com',
			'wachtwoord' => '807e24792b035c8f35f9b82d738f410e',
			//ikbenaltijddeeerstebehalveopdezewebsite
			'geslacht' => 'Vrouw',
			'geslachtsvoorkeur' => 'Man',
			'geboortedatum' => '04-07-1974',
			'leeftijdmin' => 25,
			'leeftijdmax' => 35,
			'beschrijving' => 'HALLO.IK.BEN.INGRID.WEET.IEMAND.HOE.IK.IN.NORMALE.LETTERS.KAN.TYPEN.WANT.HIER.WORDT.IK.EEN.BEETJE.GEK.VAN HOPELIJK.WORDT.JIJ.NET.ZO.GEK.OP.MIJ ',
			'persoonlijkheidstype' => '',
			'persoonlijkheidsvoorkeur' => '',
		);
		$this->db->insert('gebruikers', $nieuw);

		$data = array();
		$data['nav'] = $this->load->view('nav', $data, true);
		$this->load->view('head', $data);
		$this->load->view('reset');
		$this->load->view('foot');
	}
}
?>