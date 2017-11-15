<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Venta_controller extends CI_Controller {

	var $user;

	function __construct() {
        	parent::__construct();
    	}


	public function index(){
		$dato['ultima']= $this->venta->traer_ultimo();
		$dato['cliente']= $this->cliente->lista();
		$dato['producto']= $this->producto->lista();
		$dato['productos_exitentes']= $this->producto->cargar_prd(2);
		$this->load->view('venta_view',$dato);

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

	public function cargar_a_venta(){
		$cod_venta=$this->input->post('codigo_venta');
		$cod_prd=$this->input->post('prd');
		$cantidad=$this->input->post('cantidad');
		$valor=$this->input->post('valor');

		$combo = array('codigo_venta' =>$cod_venta ,
	 									'codigo_producto'=>$cod_prd,
										'cantidad'=>$cantidad,
										'valor_unitario'=>$valor);

		$this->venta->cargar_a_factura($combo);
		redirect('Venta_controller');
	}



}
