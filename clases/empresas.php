<?php

        class empresas{

           

 public function ingresarEmpresa($datos){
            $c=new conectar();
            $conexion=$c->conexion();
            $sql="insert INTO empresas (`nombreEmpresas`, `nit`, `telefono`, `direccion`, `municipio`,`departamento`) 
            VALUES ('$datos[0]', '$datos[1]',$datos[2], '$datos[3]', '$datos[4]','$datos[5]')";
            
          $result= mysqli_query($conexion,$sql);
          
          if ($result> 0){
            return 1;
          }else{
          return 0;
}
         

            }
            public function eliminarEmpresa($datos){
                $c=new conectar();
                $conexion=$c->conexion();
                $sql="delete FROM `empresas` WHERE `empresas`.`idEmpresa` = $datos[0]";
    
            
              $result= mysqli_query($conexion,$sql);
              
              if ($result> 0){
                return 1;
              }else{
              return 0;
             }

            }
            public function obtenerEmpresa($datos){
                $c=new conectar();
                $conexion=$c->conexion();
                $sql="select * FROM `empresas` where idEmpresa= $datos";
                  
              
                $result=mysqli_query($conexion,$sql);
                $ver=mysqli_fetch_row($result);
                 
              
                
                
                $datos=array(
                            'idEmpresa' => $ver[0],
                                'nombreEmpresas' => $ver[1],
                                'nit' =>$ver[2],
                                'telefono' =>$ver[3],
                                'direccion' => $ver[4],
                                'municipio' => $ver[5],
                                'departamento' => $ver[6]
                            );
                return $datos;
              }
              public function actualizar($datos){

                $c=new conectar();
                $conexion=$c->conexion();
                $sql="UPDATE `empresas` SET `nombreEmpresas` = '$datos[1]', 
                `nit` = '$datos[2]', 
                `telefono` = '$datos[3]',
                 `direccion` = '$datos[4]',
                  `municipio` = '$datos[5]', `departamento` = '$datos[6]'
                WHERE `empresas`.`idEmpresa` = $datos[0]";

         
                  $result= mysqli_query($conexion,$sql);
          
                  if ($result> 0){
                    return 1;
                  }else{
                  return 0;
                  }
                 

              }
            
        }


?>