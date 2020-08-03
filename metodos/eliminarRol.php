<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/roles.php";
	$obj= new roles();
	
	$datos=array(
		$_POST['idRol']
				);
	echo $obj->eliminarRol($datos);
 ?>