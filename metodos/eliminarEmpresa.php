<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/empresas.php";
	$obj= new empresas();
	
	$datos=array(
		$_POST['idempresa']
				);
	echo $obj->eliminarEmpresa($datos);
 ?>