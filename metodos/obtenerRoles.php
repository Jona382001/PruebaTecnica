<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/roles.php";
	$obj= new roles();
        
	echo json_encode($obj->obtenerRol($_POST['idRoles']));
 ?>