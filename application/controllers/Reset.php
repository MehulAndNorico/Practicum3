<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reset extends CI_Controller {
	//http://www.students.science.uu.nl/~4301358/wt3/index.php/start/index
	//http://www.students.science.uu.nl/~4301358/wt3/index.php/start/
	public function index()
	{
		$this->load->dbforge();
		$this->load->database();

		$this->db->query("DELETE FROM gebruikers");
		$this->db->query("INSERT INTO gebruikers VALUES (
			'PietjeP',
			'Pietje Precies',
			'pietje@dd.com',
			'e8636ea013e682faf61f56ce1cb1ab5c',
			'Man',
			'Vrouw',
			'07-04-1974',
			30,
			50,
			'Hoi, ik ben Pietje Precies. Pietje ben ik niet een beetje en ook niet bijna helemaal, want Pietje ben ik precies. Ik zoek iemand die precies bij mij past, al is dat misschien wel waarom ik nog op zoek ben. Als het goed is kan ik nu gewoon maar wat zeggen omdat niemand dit meer leest.',
			'100I100S100T100P',
			'100E100N100F100J'
			);"
		);

		$this->db->query("INSERT INTO gebruikers VALUES (
			'Henkie',
			'Henk Haring',
			'henkh@dd.com',
			'e8636ea013e682faf61f56ce1cb1ab5c',
			'Man',
			'Vrouw',
			'23-11-1984',
			25,
			35,
			'hoi ik ben henk haring ik heb net geleerd hoe ik op een scherm kan surfen met mijn muis maar ik snap het nog niet helemaal dus ik hoop dat dit gaat lukken want het lijkt mij leuk om iemand te ontmoeten waar ik dingen mee kan doen',
			'80E80N80F80J',
			'80I80S80T80P'
			);"
		);

		$this->db->query("INSERT INTO gebruikers VALUES (
			'Sjaakie',
			'Sjaak Sjaaksema',
			'sjaak@dd.com',
			'e8636ea013e682faf61f56ce1cb1ab5c',
			'Man',
			'Vrouw',
			'07-08-1975',
			20,
			40,
			'Sjaak zijn is het beste wat mij ooit is overkomen, ik ben namelijk nooit de Sjaak',
			'60E60N60F60J',
			'60I60S60T60P'
			);"
		);

		$this->db->query("INSERT INTO gebruikers VALUES (
			'Sjonny',
			'John de Beer',
			'sjonny@dd.com',
			'e8636ea013e682faf61f56ce1cb1ab5c',
			'Man',
			'Vrouw',
			'08-03-1975',
			20,
			40,
			'Ik hoop de Clara voor mijn Sjonny te ontmoeten',
			'70E70N70F70J',
			'70I70S70T70P'
			);"
		);

		$this->db->query("INSERT INTO gebruikers VALUES (
			'Bertie',
			'Bert Bruin',
			'bert@dd.com',
			'e8636ea013e682faf61f56ce1cb1ab5c',
			'Man',
			'Vrouw',
			'08-03-1975',
			15,
			25,
			'Hallo ijn naam is Bert en meer wil iki niet over mijzelf vertellen',
			'70E70N70F70J',
			'70I70S70T70P'
			);"
		);

		$this->db->query("INSERT INTO gebruikers VALUES (
			'Jan',
			'Jan Alleman',
			'jan@dd.com',
			'e8636ea013e682faf61f56ce1cb1ab5c',
			'Man',
			'Vrouw',
			'19-04-1979',
			27,
			32,
			'Ik val nooit op en dat wil ik graag zo houden',
			'70E70N70F70J',
			'70I70S70T70P'
			);"
		);

		$this->db->query("INSERT INTO gebruikers VALUES (
			'Ingridje',
			'Ingrid de Eerste',
			'ingrid@dd.com',
			'807e24792b035c8f35f9b82d738f410e',
			'Vrouw',
			'Man',
			'04-07-1974',
			25,
			35,
			'HALLO.IK.BEN.INGRID.WEET.IEMAND.HOE.IK.IN.NORMALE.LETTERS.KAN.TYPEN.WANT.HIER.WORDT.IK.EEN.BEETJE.GEK.VAN HOPELIJK.WORDT.JIJ.NET.ZO.GEK.OP.MIJ ',
			'70E70N70F70J',
			'70I70S70T70P'
			);"
		);

		$this->db->query("INSERT INTO gebruikers VALUES (
			'Claratje',
			'Clara de Boer',
			'clara@dd.com',
			'807e24792b035c8f35f9b82d738f410e',
			'Vrouw',
			'Man',
			'13-12-1970',
			30,
			50,
			'Ik ben Clara, en ik ben op zoek naar jouw',
			'100E100N100F100J',
			'100I100S100T100P'
			);"
		);

		$this->db->query("INSERT INTO gebruikers VALUES (
			'Christineee',
			'Christine de Heer',
			'christine@dd.com',
			'807e24792b035c8f35f9b82d738f410e',
			'Vrouw',
			'Man',
			'13-12-1970',
			20,
			40,
			'Ben jij op zoek naar Christine? Dan zit je hier op de goede plek!',
			'100E100N100F100J',
			'100I100S100T100P'
			);"
		);

		$this->db->query("INSERT INTO gebruikers VALUES (
			'LauraV',
			'Laura Vergiet',
			'laura@dd.com',
			'807e24792b035c8f35f9b82d738f410e',
			'Vrouw',
			'Man',
			'24-11-1980',
			15,
			25,
			'Zoek niet verder, Laura is de persoon voor jou',
			'70E70N70F70J',
			'70I70S70T70P'
			);"
		);

		$this->db->query("INSERT INTO likes VALUES (
			'PietjeP',
			'Henkie'
			);"
		);

		$this->db->query("INSERT INTO likes VALUES (
			'Henkie',
			'Sjaakie'
			);"
		);

		$this->db->query("INSERT INTO likes VALUES (
			'Sjaakie',
			'Sjonny'
			);"
		);

		$this->db->query("INSERT INTO likes VALUES (
			'Sjonny',
			'Bertie'
			);"
		);

		$this->db->query("INSERT INTO likes VALUES (
			'Bertie',
			'Jan'
			);"
		);

		$this->db->query("INSERT INTO likes VALUES (
			'Jan',
			'Ingridje'
			);"
		);

		$this->db->query("INSERT INTO likes VALUES (
			'Ingridje',
			'Claratje'
			);"
		);

		$this->db->query("INSERT INTO likes VALUES (
			'Claratje',
			'Christineee'
			);"
		);

		$this->db->query("INSERT INTO likes VALUES (
			'Christineee',
			'LauraV'
			);"
		);

		$this->db->query("INSERT INTO likes VALUES (
			'LauraV',
			'PietjeP'
			);"
		);



		$this->db->query("INSERT INTO likes VALUES (
			'Henkie',
			'PietjeP'
			);"
		);

		$this->db->query("INSERT INTO likes VALUES (
			'Sjaakie',
			'Henkie'
			);"
		);

		$this->db->query("INSERT INTO likes VALUES (
			'Sjonny',
			'Sjaakie'
			);"
		);

		$this->db->query("INSERT INTO likes VALUES (
			'Bertie',
			'Sjonny'
			);"
		);

		$this->db->query("INSERT INTO likes VALUES (
			'Jan',
			'Bertie'
			);"
		);

		

		$this->db->query("INSERT INTO likes VALUES (
			'Christineee',
			'PietjeP'
			);"
		);

		$this->db->query("INSERT INTO likes VALUES (
			'PietjeP',
			'Claratje'
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
		$this->load->view('reset');
		$this->load->view('foot');
	}
}
?>