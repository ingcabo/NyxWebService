<?php 

class Model_wpposts extends My_model{




protected $_table = 'wp_posts';
protected $primary_key = 'ID';
protected $return_type = 'array';

protected $after_get = array('remove_sensite_data');
protected $before_create = array('prep_data');
protected $before_update = array('update_timestamp');


//al consultar la data no deberiamos mostrar la contrase単a
protected function remove_sensite_data($dat){

				
					unset($dat['password']);
				//	unset($dat['cargo']);

		
					
					unset($dat['respuesta1']);
					unset($dat['email']);
	    			unset($dat['register_date']);
    				unset($dat['cargo']);
					unset($dat['register_date']);
					unset($dat['update_timestamp']);
					unset($dat['status']);
					unset($dat['level']);


					

	

			 
					
					
					return($dat);
					
}


protected function prep_data($dat){

/*if (isset($dat['password'])){
$dat['password']         =  md5($dat['password']);
}


$dat['register_date'] = date('Y-m-d H:i:s');

*/


return $dat;
}




protected function update_timestamp($dat){

/*$dat['update_timestamp'] = date('Y-m-d H:i:s');

if (isset($dat['password'])){
$dat['password']         =  md5($dat['password']);
}

return $dat;
*/
}


	






}

?>