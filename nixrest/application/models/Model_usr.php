<?php 

class Model_usr extends My_model{




protected $_table = 'users_api';
protected $primary_key = 'id';
protected $return_type = 'array';

protected $after_get = array('remove_sensite_data');
protected $before_create = array('prep_data');
protected $before_update = array('update_timestamp');


//al consultar la data no deberiamos mostrar la contraseña
protected function remove_sensite_data($usr){

				
					unset($usr['password']);
				//	unset($usr['cargo']);
					
					
					return($usr);
					
}


protected function prep_data($usr){

$usr['password']         =  md5($usr['password']);
$usr['register_date'] = date('Y-m-d H:i:s');




return $usr;
}




protected function update_timestamp($usr){

$usr['update_timestamp'] = date('Y-m-d H:i:s');
$usr['password']         =  md5($usr['password']);

return $usr;
}


	







}

?>