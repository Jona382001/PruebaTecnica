<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/empresas.php";
	$obj= new empresas();
	
	$datos=array(
        $_POST['codigo'],
		$_POST['nombre'],
		$_POST['nit'],
		$_POST['tel'],
        $_POST['direccion'],
        $_POST['departamentos'],
		$_POST['municipio']
       
				);
	echo $obj->actualizar($datos);
 ?>