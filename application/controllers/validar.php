<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Validar extends CI_Controller {

	function __construct() {
        parent::__construct();
    }

	public function guardar(){
		$id= $this->input->post('llave');
		$producto= $this->input->post('prd');

		$combo= array('id'=>$id, 'producto'=>$producto);

		if($this->procesa->insertar($combo)){
			$this->load->view('guardo');
		}else {
			$this->load->view('error');
		}

	}

	public function elim(){
		$id= $this->input->post('llave');
		if($this->procesa->eliminar($id)){
			$this->load->view('elimino');
		}
	}


		public function update(){
			$id= $this->input->post('llave');
			$producto= $this->input->post('prd');

			$dato= array('producto'=>$producto);
			if($this->procesa->actualiza($id,$dato)){
				$this->load->view('actualizo');
			}
		}

		public function consulta(){
			$id= $this->input->post('llave');
			$data['completo']= $this->procesa->buscar($id);
			$this->load->view('consulta',$data);


		}

	}
