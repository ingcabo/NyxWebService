<?php

//debemos colocar esta línea para extender de REST_Controller
require APPPATH.'/libraries/REST_Controller.php';



class Myrest extends REST_Controller{

function __construct(){
parent:: __construct();
$this->load->helper('my_api_helper');
$this->load->helper('url');

 

} 





			

function lote_put(){




			

			$datos_compra=  file_get_contents('http://127.0.0.1/nixapiRest/application/controllers/data.json');

			
			

			// $datos= $this->output
			// ->set_content_type('application/json')
			// ->set_output($datos);


			$datos_2 = json_decode($datos_compra);



			$datos = $datos_2->compra;

			//$compra = $this->put();

			$compra = $datos_2->lote;

			



				$this->load->library('form_validation');
				$data = remove_unknown_fields($compra,$this->form_validation->get_field_names('lote_put'));
				$this->form_validation->set_data($data);


					$this->load->model('Model_lote');
					$this->load->model('Model_compra');
					$this->load->model('Model_status');	

	
					$inic = $this->Model_lote->getMaxmin('max');

					if ($this->form_validation->run('lote_put') != false){
										
					
						
			$lote_id= $this->Model_lote->insert($data);				
			
			if ($lote_id){
				
			//	$lote_des= $this->Model_lote->insert_many_compra($datos);	

			$this->response(array("staus" =>"ingreso lote", "data" =>$data,"datos_lote"=>$datos));



			}else{

				$this->response(array("staus" =>"Faliurede", "data" => $data,"id_lote"=>$lote_id,"data"=>$datos));

			}

				}else{

			$this->response(array('status' => 'Faliurede' ,'message' => $this->form_validation->get_errors_as_array(),404,"datanarray" => $datos));
			

			}




		}

}


