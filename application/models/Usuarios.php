<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Model {

	public function __construct() {

	}


	public function insertar($dato) {
		return $this->db->insert('usuarios', $dato);
	}

	
}
