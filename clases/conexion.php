<?php
       
            class conectar{
                private $servidor="localhost";          
                private $usuario="root";
                private $pass ="";
                private $db ="db_requerimiento";
            

                public function conexion(){

                    $conexion =mysqli_connect($this->servidor,
                    $this->usuario,
                    $this->pass,
                    $this->db);
                    return $conexion;
  
                }
            }
             
?>