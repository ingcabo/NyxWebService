<?php

require APPPATH.'/libraries/REST_Controller.php';

  class Myrest extends REST_Controller{

  function __construct(){
  parent:: __construct();
  //cargamos la clase de validacion de campos
  $this->load->library('form_validation');
  $this->load->helper('my_api_helper');
  //cargamos el archivo de configuracion
  $this->load->config('rest');

  }

  public function index(){



  }



}
