<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index()
	{		
		$this->load->library('cliente');
		$mip = new $this->cliente;
		printf($mip->saludar());
		$this->load->view('welcome_message');
	}

}
