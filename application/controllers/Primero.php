<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Primero extends CI_Controller {

	var $user;

	function __construct() {
        	parent::__construct();
    	}

	public function index() {

		$this->load->view('inicial');
	}



}
