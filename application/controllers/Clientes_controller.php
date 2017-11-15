<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_controller extends CI_Controller {

	var $user;

	function __construct() {
        	parent::__construct();
    	}


	public function index(){
		$dato['clientes']= $this->cliente->lista();
		$this->load->view('cliente_view',$dato);

	}
	public function crear(){
		$cedula=$this->input->post('cedula');
		$nombre=$this->input->post('nombre');
		$tel=$this->input->post('telefono');
		$combo= array('cedula'=>$cedula,'nombre'=>$nombre, 'telefono'=>$tel);
		$this->cliente->nuevo($combo);
		redirect('Clientes_controller');
	}

	public function adicionar(){
		$prd=$this->input->post('nombre_producto');
		$combo = array('cantidad' => 7 );
		$this->producto->agregar($prd,$combo);
			redirect(site_url());
			}




}
