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
		Este es el <strong>Inventario</strong>...
		<a href="<?=base_url()?>"><button class="btn btn-danger">Regresar</button></a>
	</div>

</div>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="panel-group">
			 <div class="panel panel-default">
				 <div class="panel-heading">
					 <h4 class="panel-title">
						 <a data-toggle="collapse" href="#collapse0">Crear Productos</a>
					 </h4>
				 </div>
				 <div id="collapse0" class="panel-collapse collapse">
					 <form class="form-group" action="Producto_Controller/crear" method="post">

						<label>Producto:&nbsp </label><input type="text" name="nombre" placeholder="Aqui el Producto"></input>
						<input type="submit" name="buscar" value="Crear Producto"  ></input>


					 </form>
					 <div class="panel-footer">------"-------</div>
				 </div>
			 </div>
		 </div>



		</div>


			<div class="container">
				<div class="row">
					<div class="col-md-6">
	  <div class="panel-group">
	    <div class="panel panel-default">
	      <div class="panel-heading">
	        <h4 class="panel-title">
	          <a data-toggle="collapse" href="#collapse1">Entrada de Productos</a>
	        </h4>
	      </div>
	      <div id="collapse1" class="panel-collapse collapse">
	        <form class="form-group" action="Producto_Controller/adicionar" method="post">
						<select name="nombre_prd">
							<?php	foreach($prds as $valor){ ?>
							<option value="<?php echo $valor['nombre']; ?>"><?php echo $valor['nombre']; ?></option>

						<?php };	?>
						</select>
						<label>Cantidad</label> <input type="text" name="cantidad"></input>

						<input type="submit" value="Agregar Cantidad"></input>
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

  <div class="panel-heading">Stock Completo</div>

  <table class="table table-striped">
		<thead>
		<tr>
			<th>Codigo</th>
			<th>Producto</th>
			<th>Cantidad</th>
		</tr>
	</thead>
	<tbody>
		<?php	foreach($prds as $valor){ ?>

      <tr>
        <td><?php echo $valor['codigo']; ?></td>
        <td><?php echo $valor['nombre']; ?></td>
        <td><?php echo $valor['cantidad']; ?></td>
      </tr>
		<?php }; ?>
		</tbody>
  </table>
</div>



</div>






<script src="<?=base_url()?>assets/js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?=base_url()?>assets/js/bootstrap.js"></script>
</body>
</html>
