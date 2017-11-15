<?php
include ("conexion.php");
$codigo = $_POST('cedula');
mysql_select_db($db,$conexion) or die ("Error en la conexion");
mysql_query("DELETE FROM cliente WHERE cedula = $codigo");
Echo "Registro eliminado";
?>