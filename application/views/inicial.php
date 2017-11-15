<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="icon" href="<?=base_url()?>uploads/favicon.ico" type="image/gif">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tienda</title>

<!-- Bootstrap -->
<link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet">


<body>
	<div class="page-header">
		<div class="alert alert-warning alert-dismissable">
	  <button type="button" class="close" data-dismiss="alert">&times;</button>
	  <strong>¡Bienvenido!</strong> Esta es la Tienda...
	  <strong>yulieth y angelica</strong>
	</div>
	</div>
	<div class="container">

		<a href="index.php/Venta_controller"><button type="button" class="btn btn-warning btn-lg btn-block">Facturar</button></a>
		<a href="index.php/Clientes_controller"><button type="button" class="btn btn-default btn-lg btn-block">Manejo de Clientes</button></a>
		<a href="index.php/Producto_Controller"><button type="button" class="btn btn-warning btn-lg btn-block">Gestion de Inventario</button></a>


</div>


<script src="<?=base_url()?>assets/js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?=base_url()?>assets/js/bootstrap.js"></script>
</body>
</html>
