<?php defined('BASEPATH') OR exit('No direct script access allowed');

class cliente extends CI_Model {

	public function __construct() {
        parent::__construct();
	}


	public function nuevo($dato){
		return $this->db->insert('cliente',$dato);
	}


public function agregar($nombre, $dato){
	$this->db->where('nombre',$nombre);
	return $this->db->update('productos',$dato);
}

	public function lista() {
		$this->db->from('cliente');
		$query = $this->db->get();
		return $query->result_array();
	}

}
