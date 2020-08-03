<?php 
		require_once "../clases/conexion.php";
        require_once "../clases/empleados.php";
        $obj= new empleados();
        
	echo json_encode($obj->obtenerEmpleado($_POST['idEmpleado']));
 ?>