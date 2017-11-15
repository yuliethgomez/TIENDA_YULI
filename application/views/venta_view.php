<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="icon" href="<?=base_url()?>uploads/favicon.ico" type="image/gif">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Facturar</title>

<!-- Bootstrap -->
<link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet">

<body>
	<div class="page-header">
		<div class="alert alert-warning alert-dismissable">
		Este es el modulo de <strong>¡Ventas!</strong>...
		<a href="<?=base_url()?>"><button class="btn btn-danger">Regresar</button></a>
	</div>

	<div class="container">
		<div class="row">


	<div class="panel panel-default">
	  <div class="panel-heading">Facturar a Cliente</div>
	  <div class="panel-body">
			<form class="form-group" method="post">
			<div class="input-group">
  				<span class="input-group-addon">Numero</span>


  				<input type="text" class="form-control" value="<?php foreach($ultima as $valor){ echo $valor['codigo_venta']+1; }; ?>" readonly></input>
				</div>
				<span class="group-addon">Cliente</span>
				<select name="cedula_cliente" class="form-control">
					<<?php foreach ($cliente as $valor): ?>
						<option value="<?php echo $valor['cedula']; ?>"><?php echo $valor['cedula']; ?></option>
					<?php endforeach; ?>
				</select>
				</form>
	  </div>
	</div>

<div class="panel panel-default">

  <div class="panel-heading">Productos en Factura</div>

  <table class="table table-striped">
		<thead>
		<tr>
			<th>Cod_Producto</th>
			<th>Cantidad</th>
			<th>Valor</th>
		</tr>
	</thead>
	<tbody>
		<?php	foreach($productos_exitentes as $valor){ ?>

      <tr>
        <td><?php echo $valor['codigo_producto']; ?></td>
        <td><?php echo $valor['cantidad']; ?></td>
        <td><?php echo $valor['valor_unitario']; ?></td>
      </tr>
		<?php }; ?>
		</tbody>
  </table>
</div>

	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Añadir Producto</h3>
	  </div>
		<form method="post" action="Venta_controller/cargar_a_venta">
			<input type="text" class="form-control" name="codigo_venta" value="<?php foreach($ultima as $valor){ echo $valor['codigo_venta']+1; }; ?>" readonly></input>
	  <div class="panel-body">
			<select name="prd" class="form-control">
				<<?php foreach ($producto as $valor): ?>
					<option value="<?php echo $valor['codigo']; ?>"><?php echo $valor['nombre']; ?></option>
				<?php endforeach; ?>
			</select>
			<div class="input-group">
			<span class="input-group-addon">Valor Unitario</span>
			<input type="text" class="form-control" name="valor"></input>
			<span class="input-group-addon">Cantidad</span>
			<input type="text" class="form-control" name="cantidad"></input>

	  </div>
		<input type="submit" class="form-control bnt btn-success" value="Agregar"></input>
	  </div>
		</form>
	</div>


</div>
</div>


<script src="<?=base_url()?>assets/js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?=base_url()?>assets/js/bootstrap.js"></script>
</body>
</html>
