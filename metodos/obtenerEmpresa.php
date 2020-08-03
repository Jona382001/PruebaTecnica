<?php 
		require_once "../clases/conexion.php";
        require_once "../clases/empresas.php";
        $obj= new empresas();
        
	echo json_encode($obj->obtenerEmpresa($_POST['idempresa']));
 ?>