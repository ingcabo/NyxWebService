<?php if (!defined('BASEPATH')) exit('No direct script access allowed');






					$config = array( 
					
				
					
					'student_put' => array(
					array('field' => 'email_addres','lebel' => 'email_addres', 'rules' => 'trim|required|valid_email'),
					array('field' => 'password','lebel' => 'password', 'rules' => 'trim|required|min_length[8]|max_length[16]'),
					array('field' => 'first_name','lebel' => 'first_name', 'rules' => 'trim|required|max_length[50]'),	 
					array('field' => 'last_name','lebel' => 'last_name', 'rules' => 'trim|required|max_length[50]'),
					array('field' => 'phone_number','lebel' => 'phone_number', 'rules' => 'trim|required|alpha_dash'),
		
						  ),
						  
					'student_post' => array(
					array('field' => 'email_addres','lebel' => 'email_addres', 'rules' => 'trim|valid_email'),
					array('field' => 'first_name','lebel' => 'first_name', 'rules' => 'trim|max_length[50]'),	 
					array('field' => 'last_name','lebel' => 'last_name', 'rules' => 'trim|max_length[50]'),
					array('field' => 'phone_number','lebel' => 'phone_number', 'rules' => 'trim|alpha_dash'),
				
						  ),


					'lote_put'	=> array(
					array('field' => 'monto_total','lebel' => 'Monto Total', 'rules' => 'trim|max_length[15]'),	
					array('field' => 'nombres','lebel' => 'Nombres', 'rules' => 'trim|max_length[50]'),	
					array('field' => 'email','lebel' => 'Email', 'rules' => 'trim|valid_email'),
					array('field' => 'telefono','lebel' => 'Email', 'rules' => 'trim|max_length[50]'),
					array('field' => 'doc_identidad','lebel' => 'Documento Identidad', 'rules' => 'trim|max_length[15]'),
					array('field' => 'datos_env','lebel' => 'Datos envio', 'rules' => 'trim|max_length[500]')		

						),

					'lote_post'	=> array(
					array('field' => 'nombres','lebel' => 'Nombres', 'rules' => 'trim|max_length[50]'),	
					array('field' => 'email','lebel' => 'Email', 'rules' => 'trim|valid_email'),
					array('field' => 'telefono','lebel' => 'Email', 'rules' => 'trim|max_length[50]'),
					array('field' => 'doc_identidad','lebel' => 'Documento Identidad', 'rules' => 'trim|max_length[15]'),
					array('field' => 'datos_env','lebel' => 'Datos envio', 'rules' => 'trim|max_length[500]')
						),


						'compra_put'	=> array(
					array('field' => 'id_producto','lebel' => 'id producto', 'rules' => 'trim|max_length[10]'),	
					array('field' => 'descripcion_producto','lebel' => 'descripcion producto', 'rules' => 'trim|max_length[120]'),	
					array('field' => 'cantidad_producto','lebel' => 'cantidad producto', 'rules' => 'trim|max_length[11]'),
					array('field' => 'conto_producto','lebel' => 'costo producto', 'rules' => 'trim|max_length[10]'),
					array('field' => 'total_lote','lebel' => 'total lote', 'rules' => 'trim|max_length[15]'),
					array('field' => 'id_lote','lebel' => 'id lote', 'rules' => 'trim|max_length[11]')
						),
		
						'statusLote_put' => array(
					array('field' => 'id_lote','lebel' => 'id lote', 'rules' => 'trim|max_length[11]'),		
					array('field' => 'total_lote','lebel' => 'total lote', 'rules' => 'trim|max_length[15]'),
					array('field' => 'respuesta','lebel' => 'respuesta', 'rules' => 'trim|max_length[20]'),
					array('field' => 'tipo_mesaje','lebel' => 'tipo mensaje', 'rules' => 'trim|max_length[20]'),


						),

						'statusLote_post' => array(
					array('field' => 'id_lote','lebel' => 'id lote', 'rules' => 'trim|max_length[11]'),			
					array('field' => 'total_lote','lebel' => 'total lote', 'rules' => 'trim|max_length[15]'),
					array('field' => 'respuesta','lebel' => 'respuesta', 'rules' => 'trim|max_length[20]'),
					array('field' => 'tipo_mesaje','lebel' => 'tipo mensaje', 'rules' => 'trim|max_length[20]'),


						),
		
			
						  
						  
						  
						);
						
					
					
								

				

?>