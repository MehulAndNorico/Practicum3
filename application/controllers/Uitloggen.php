<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uitloggen extends CI_Controller {
	public function index()
	{
		$data['nickname'] = $this->input->cookie('nickname');
		if (!isset($data['nickname']))
		{
			$data['nickname'] = '';
		}
		$this->input->set_cookie('nickname', '', 864000);
		redirect('https://www.students.science.uu.nl/~4301358/wt3/start');
	}
}
?>