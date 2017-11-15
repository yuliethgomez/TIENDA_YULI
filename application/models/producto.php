<?php defined('BASEPATH') OR exit('No direct script access allowed');

class producto extends CI_Model {

	public function __construct() {
        parent::__construct();
	}


	public function nuevo($dato){
		return $this->db->insert('productos',$dato);
	}


public function agregar($nombre, $dato){
	$this->db->set('cantidad','cantidad'+$dato);
	$this->db->where('nombre',$nombre);
		return $this->db->update('productos');
}

	public function lista() {
		$this->db->from('productos');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function cargar_prd($dato){
		$this->db->where('codigo_venta',$dato);
		$this->db->from('detalle_venta');
		$query=$this->db->get();
		return $query->result_array();
	}


}
