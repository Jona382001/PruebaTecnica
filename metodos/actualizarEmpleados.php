<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/empleados.php";
	$obj= new empleados();
	
	$datos=array(
        $_POST['Ecodigo'],
		$_POST['nombre'],
		$_POST['apellido'],
		$_POST['dui'],
        $_POST['nit'],
        $_POST['estado'],
        $_POST['Eempresa'],
        $_POST['Erol']
       
				);
	echo $obj->actualizar($datos);
 ?>