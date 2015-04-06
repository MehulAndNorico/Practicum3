<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Set extends CI_Controller {
	//http://www.students.science.uu.nl/~4301358/wt3/index.php/start/index
	//http://www.students.science.uu.nl/~4301358/wt3/index.php/start/
	public function index()
	{
		$this->load->dbforge();
		$this->dbforge->create_database('db');
		$fields = array(
	        'test' => array(
	                'type' => 'INT',
	 				'unsigned' => TRUE,
	                'auto_increment' => TRUE
	        )
		);
		$this->dbforge->add_field($fields);
		$this->dbforge->create_table('gebruikers');

		$data = array();
		$data['loginwidget'] = $this->load->view('loginwidget', $data, true);
		$this->load->view('head', $data);
		$this->load->view('set');
		$this->load->view('foot');
	}
}
?>