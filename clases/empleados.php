<?php

        class empleados{

           

 public function ingresarEmpleado($datos){
            $c=new conectar();
            $conexion=$c->conexion();
            
            
            $sql="insert INTO `empleados` (`nombres`, `apellidos`, `dui`, `nit`, `estado`, `Empresas_idEmpresa`, `Roles_idRol`)
            VALUES ('$datos[0]', '$datos[1]', '$datos[2]', 
            '$datos[3]', '$datos[4]', '$datos[5]', '$datos[6]')";
           // echo $sql;
          $result= mysqli_query($conexion,$sql);
         
          if ($result> 0){
            return 1;
          }else{
          return 0;
}
         

            }
            public function eliminarEmpleado($datos){
                $c=new conectar();
                $conexion=$c->conexion();
                $sql="delete FROM `empleados` WHERE `empleados`.`idEmpleado` = $datos[0]";
               // echo $sql;
            
              $result= mysqli_query($conexion,$sql);
              
              if ($result> 0){
                return 1;
              }else{
              return 0;
             }

            }
            public function obtenerEmpleado($datos){
                $c=new conectar();
                $conexion=$c->conexion();
                $sql="select * FROM empleados where idEmpleado= $datos";
                 
              
                $result=mysqli_query($conexion,$sql);
                $ver=mysqli_fetch_row($result);
                 
              
                
                
                $datos=array(
                            'idEmpleado' => $ver[0],
                                'nombres' => $ver[1],
                                'apellidos' =>$ver[2],
                                'dui' =>$ver[3],
                                'nit' => $ver[4],
                                'estado' => $ver[5],
                                'Empresas_idEmpresa' => $ver[6],
                                'Roles_idRol' => $ver[7]
                            );
                return $datos;
              }
              public function actualizar($datos){

                $c=new conectar();
                $conexion=$c->conexion();
                $sql="UPDATE `empleados` SET `nombres` = '$datos[1]',
                 `apellidos` = '$datos[2]', 
                 `dui` = '$datos[3]', 
                 `nit` = '$datos[4]',
                  `estado` = '$datos[5]', 
                  `Empresas_idEmpresa` = '$datos[6]',
                   `Roles_idRol` = '$datos[7]' 
                WHERE `empleados`.`idEmpleado` = $datos[0];";

         
                  $result= mysqli_query($conexion,$sql);
          
                  if ($result> 0){
                    return 1;
                  }else{
                  return 0;
                  }
                 

              }
            
        }


?>