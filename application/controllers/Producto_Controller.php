<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_Controller extends CI_Controller {

	var $user;

	function __construct() {
        	parent::__construct();
    	}


	public function index(){
		$dato['prds']= $this->producto->lista();
		$this->load->view('productos_view',$dato);

	}
	public function crear(){
		$prd=$this->input->post('nombre');
		$combo= array('codigo'=>NULL,'nombre'=>$prd, 'cantidad'=>0);
		$this->producto->nuevo($combo);
		redirect('Producto_Controller');
	}

	public function adicionar(){
		$prd=$this->input->post('nombre_prd');
		$cantidad=$this->input->post('cantidad');

		$this->producto->agregar($prd,$cantidad);
			redirect('Producto_Controller');



	}



}
