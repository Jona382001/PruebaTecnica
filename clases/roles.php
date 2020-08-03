<?php

        class roles{

           

 public function ingresarRol($datos){
            $c=new conectar();
            $conexion=$c->conexion();
            $sql="insert INTO `roles` (`nombreRol`, `descripcionRol`, `permisos`, `Empresas_idEmpresa`) 
            VALUES ('$datos[0]', '$datos[1]','$datos[2]', '$datos[3]')";
            
          $result= mysqli_query($conexion,$sql);
         
          if ($result> 0){
            return 1;
          }else{
          return 0;
}
         

            }
            public function eliminarRol($datos){
                $c=new conectar();
                $conexion=$c->conexion();
                $sql="delete FROM `roles` WHERE `roles`.`idRol` = $datos[0]";
    
            
              $result= mysqli_query($conexion,$sql);
              
              if ($result> 0){
                return 1;
              }else{
              return 0;
             }

            }
            public function obtenerRol($datos){
                $c=new conectar();
                $conexion=$c->conexion();
                $sql="select * FROM roles where idRol= $datos";
                 
              
                $result=mysqli_query($conexion,$sql);
                $ver=mysqli_fetch_row($result);
                 
              
                
                
                $datos=array(
                            'idRol' => $ver[0],
                                'nombreRol' => $ver[1],
                                'descripcionRol' =>$ver[2],
                                'permisos' =>$ver[3],
                                'Empresas_idEmpresa' => $ver[4]
                            );
                return $datos;
              }
              public function actualizarRol($datos){

                $c=new conectar();
                $conexion=$c->conexion();
                $sql="update `roles` SET `nombreRol` = '$datos[1]', 
                `descripcionRol` = '$datos[2]', 
                `permisos` = '$datos[3]', 
                `Empresas_idEmpresa` = '$datos[4]' 
                WHERE `roles`.`idRol` = $datos[0]";

         
                  $result= mysqli_query($conexion,$sql);
          
                  if ($result> 0){
                    return 1;
                  }else{
                  return 0;
                  }
                 

              }
            
        }


?>