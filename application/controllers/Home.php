<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$data['title'] = 'Warehouse Management System';
		$data['active_menu'] = 'dashboard';
		$this->load->view('home', $data);
	}
}
