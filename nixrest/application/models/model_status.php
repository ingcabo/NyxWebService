<?php 

class Model_status extends My_model{


//Model_usr


protected $_table = 'status_lote';
protected $primary_key = 'id';
protected $return_type = 'array';

protected $after_get = array('remove_sensite_data');
protected $before_create = array('prep_data');
protected $before_update = array('update_timestamp');


protected function remove_sensite_data($status){

					//unset($student['password']);
					unset($status['ip_addresss']);
					
					
					return($status);
					
}

protected function prep_data($status){

//$student['password']         =  md5($student['password']);
$status['ip_address']       =  $this->input->ip_address();
$status['create_timestamp'] = date('Y-m-d H:i:s');




return $status;
}




protected function update_timestamp($status){

$status['update_timestamp'] = date('Y-m-d H:i:s');

return $status;
}


	







}

?>