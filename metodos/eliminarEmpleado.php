<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/empleados.php";
	$obj= new empleados();
	
	$datos=array(
		$_POST['idEmpleados']);
	echo $obj->eliminarEmpleado($datos);
 ?>