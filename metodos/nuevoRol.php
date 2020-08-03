<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/roles.php";
	$obj= new roles();
	
	$datos=array(
		$_POST['nombreRol'],
		$_POST['descripcion'],
		$_POST['permisos'],
        $_POST['empresas']
				);
	echo $obj->ingresarRol($datos);
 ?>