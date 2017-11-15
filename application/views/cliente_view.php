<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="icon" href="<?=base_url()?>uploads/favicon.ico" type="image/gif">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inventario</title>

<!-- Bootstrap -->
<link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet">

<body>
	<div class="page-header">
		<div class="alert alert-warning alert-dismissable">
		Gestionar <strong>Clientes</strong>...
		<a href="<?=base_url()?>"><button class="btn btn-danger">Regesar</button></a>
	</div>

</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel-group">
			 <div class="panel panel-default">
				 <div class="panel-heading">
					 <h4 class="panel-title">
						 <a data-toggle="collapse" href="#collapse0">Crear Cliente</a>
					 </h4>
				 </div>
				 <div id="collapse0" class="panel-collapse collapse">
					 <form class="form-group" action="Clientes_controller/crear" method="post">

						<label>Cedula:&nbsp </label><input type="text" name="cedula" placeholder="Aqui la Cedula"></input>
						<label>Nombre:&nbsp </label><input type="text" name="nombre" placeholder="Aqui el Nombre"></input>
						<label>Telefono:&nbsp </label><input type="text" name="telefono" placeholder="Aqui el Telefono"></input>
						<input type="submit" name="buscar" value="Crear Cliente"  ></input>


					 </form>
					 <div class="panel-footer">------"-------</div>
				 </div>
			 </div>
		 </div>

</div>

		</div>



	</div>
<div class="divider"></div>
<div class="panel panel-default">

  <div class="panel-heading">Estos son Todos los Clientes</div>

  <table class="table table-striped">
		<thead>
		<tr>
			<th>Cedula</th>
			<th>Nombre</th>
			<th>Telefono</th>
		</tr>
	</thead>
	<tbody>
		<?php	foreach($clientes as $valor){ ?>

      <tr>
        <td><?php echo $valor['cedula']; ?></td>
        <td><?php echo $valor['nombre']; ?></td>
        <td><?php echo $valor['telefono']; ?></td>
      </tr>
		<?php }; ?>
		</tbody>
  </table>
</div>








<script src="<?=base_url()?>assets/js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed <form action = "eliminar.php" method="post">
<input type="text" name="codigo" placeholder="ingrese la cedula">
<input type="submit" name="eliminar" value="eliminar">
</form> -->
<script src="<?=base_url()?>assets/js/bootstrap.js"></script>
</body>
</html>
