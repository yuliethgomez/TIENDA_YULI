<?php defined('BASEPATH') OR exit('No direct script access allowed');

class venta extends CI_Model {

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

public function traer_ultimo(){
	$rta= $this->db->query('select codigo_venta from venta order by codigo_venta desc limit 1');
	return $rta->result_array();
}

	public function lista() {
		$this->db->from('cliente');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function cargar_a_factura($dato){
		return $this->db->insert('detalle_venta',$dato);
	}
}
