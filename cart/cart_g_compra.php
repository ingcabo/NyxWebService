

<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . '/nix/site/wp-load.php' );
$miarray = $_GET['cart'];
global $wpdb;

$urlrcv = stripslashes($miarray);
$urlrcv = urldecode($urlrcv);
$urlrcv = unserialize($urlrcv);

//  echo '<br/><br/><br/><br/><br/>'.json_encode($urlrcv).'<br/><br/><br/><br/><br/>';


$img_ruta = $wpdb->get_row("SELECT  meta_value AS img FROM wp_postmeta WHERE meta_key = '_wp_attached_file'  AND  post_id = (SELECT  meta_value  FROM wp_postmeta WHERE meta_key = '_thumbnail_id'  AND  post_id =  '4962' )  LIMIT 1");

$url_home = $wpdb->get_row("SELECT option_value AS url_home FROM wp_options WHERE option_name = 'home' limit 1");
//echo  $img_ruta->img; 


$products = json_encode($urlrcv);

$products_1 = json_decode($products);


//print_r($products_1);
//echo $products;
  ?>




 <!DOCTYPE html>
<html lang="en"  ng-app="angularTable">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo $url_home->url_home; ?>/site/node_modules/bootstrap/dist/css/bootstrap.min.css"/>



  <!-- Custom CSS -->
    <link href="<?php echo $url_home->url_home; ?>/site/node_modules/bootstrap/dist/css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $url_home->url_home; ?>/site/node_modules/bootstrap/dist/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
  </head>
  <body ng-controller="listdata">
   

<div ng-show ="mega">



                            


                            {{refe}} ---- {{total}} ----


    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Nix Venezuela</h1>
            <h2>Redirige su pago a payment gateway seguro</h2>
            <h2>Recibirá un correo con un link para seguir el estatus de su compra.</h2>
            <p><br>
              <a href="#about" class="btn btn-dark btn-lg">Cerrar</a></p>
        </div>
    </header>

    <!-- About -->
<section id="about" class="about">
        <div class="container">
            <div class="row">
              <div class="col-lg-12 text-center">
                    <h2>el texto que se desee colocar aca!</h2>
                  <p class="lead">el exto que desee colocar aca el exto que desee colocar aca.</p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
   




    </section>

 
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
            
            
             <div class="col-lg-10 col-lg-offset-1 text-center">
        <h4><strong>Nix Venezuela</strong> </h4>
        <p>3481 Melrose Place<br>
          Beverly Hills, CA 90210</p>
        <ul class="list-unstyled">
          <li><i class="fa fa-phone fa-fw"></i> (123) 456-7890</li>
          <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:name@example.com">nix@nix.com</a> </li>
        </ul>
        <p class="text-muted">Copyright &copy; Your Website 2016</p>
      </div>
            
            </div>
        </div>
    </footer>

    <!-- jQuery -->
   

    <!-- Bootstrap Core JavaScript -->
   

    <!-- Custom Theme JavaScript -->






</div> <!-- fim div mega -->
 
<div ng-hide ="myVar" class="container-fluid">

<h1 class="h1">Datos Para Gestionar su envio y su Pago</h1>
 


    <div class="row">
        <form role="form">
            <div class="col-lg-4">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Datos requeridos</strong></div>
               
                <div class="form-group">
                    <label for="nombres">Ingrese Nombre</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Su nombre Completo" ng-model="Miembro.nombres" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

   <div class="form-group">
                    <label for="identidad">Ingrese Documento Identidad</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="identidad" id="identidad" placeholder="ejemplo: V-15.839.590" ng-model="Miembro.identidad"  required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                

               
                <div class="form-group">
                    <label for="email">Ingrese Correo Electronico</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="su correo Electronico, aca se enviara la confirmacion de su compra" ng-model="Miembro.email"   required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="telefono">Numero Telefono Contacto</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingresre Telefono Contacto" ng-model="Miembro.telefono"  required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="datos_env">Datos de Envio</label>
                    <div class="input-group">
                        <textarea name="datos_env" id="datos_env" ng-model="Miembro.datos_env"  class="form-control" rows="5" placeholder="Estado, Ciudad, Calle, Avenida, punto Referencia, o sucursal de envio y encomienda destino"  required></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                  
                <input type="submit" name="submit" id="submit" value="Submit" ng-click="proceder()"  class="btn btn-info pull-right">
                
            </div>
        </form>
     




 
 <div class="col-lg-5 col-md-push-1">




            




<table class="table table-condensed">
<thead>
<tr>
  <th class="info">ref.  </th>
  <th class="info">Descripcion</td>
  <th class="info">cantidad</td>
  <th class="info">Costo</th>
</tr>
</thead>


	<tbody ng-init="pt = <?php echo htmlspecialchars($products); ?>">

						<tr dir-paginate = "product in pt|itemsPerPage:5">   

						<td> {{"*"}}</td>      
						    
							<td>{{product.descripcion_producto}} </td>
							<td>{{product.cantidad_producto}} </td>
							<td>{{product.costo_producto | currency : "Bs  " : fractionSize}} </td>
											
						</tr>
	</tbody>

</table>
<a ng-init="total_lote = <?php echo $products_1[0]->total_lote; ?>"> </a>	
 <p>Total: {{total_lote | currency : "Bs  " : fractionSize}} </p>
<dir-pagination-controls max-size="5" direction-links="true" boundary-links="true" > </dir-pagination-controls>

FERERENCIA  {{refe}} variable url : {{urll}}
<!--

            <div class="col-md-12">
                <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-info-sign"></span> Recuerde que debe completar sus datos para gestionar su compra y el envio de los productos</strong>
                </div>
                <div class="alert alert-danger">
                    <span class="glyphicon glyphicon-info-sign"></span><strong> Error! Please check all page inputs.</strong>
                </div>
            </div>
       
-->

        </div>
   

     

</div>

</div>





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src='<?php echo $url_home->url_home; ?>/site/node_modules/jquery/dist/jquery.min.js'></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src='<?php echo $url_home->url_home; ?>/site/node_modules/bootstrap/dist/js/bootstrap.min.js'></script>

   
    


    <script src='<?php echo $url_home->url_home; ?>/site/node_modules/angular/angular.min.js'></script>
     <script src='<?php echo $url_home->url_home; ?>/site/node_modules/angular-resource/angular-resource.min.js'></script>
	<script src='<?php echo $url_home->url_home; ?>/site/node_modules/app/app.js'></script>
	<script src='<?php echo $url_home->url_home; ?>/site/node_modules/ng-grid/lib/dirPagination.js'></script>
  </body>
</html>