<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    <script src="js/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="bootstrap-4.5.0-dist/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>

 <!------------------------------- Data Table------------------------------------------------- -->  
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

     <!------------------------------- Alertify------------------------------------------------- -->  
     <link rel="stylesheet" href="css/alertify/alertify.min.css"/>
     <!-- Default theme -->
     <link rel="stylesheet" href="css/alertify/themes/default.min.css"/>
     <!-- Semantic UI theme -->
     <link rel="stylesheet" href="css/alertify/themes/semantic.min.css"/>
     <!-- Bootstrap theme -->
     <link rel="stylesheet" href="css/alertify//themes/bootstrap.min.css"/>

     <script src="js/alertify.min.js"></script>
</head>
        <script type="text/javascript">

            $(document).ready(function(){
                $('#tbempleados').load('provider/tablaEmpleados.php');
            });
            
        </script>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="nav flex-column">
                    <a class="nav-link active" href="index.html">Empresas</a>
                    <a class="nav-link" href="empleados.php">Empleados</a>
                    <a class="nav-link" href="roles.php">Roles</a>
                  </nav>
            </div>
            <div class="col-10 info">
                    <div class="empresas">
                        <div class="row">
                            <div class="col-sm-10">
                             Empleado> <span id="rt1"></span>
                             </div>
                             <div class="col-sm pruebas">
                                <button type="button" class="btn btn-success nuevo" data-toggle="modal" data-target="#insertarEmpleados">+ Nuevo</button>
                             </div>
                         </div>
                    <div class="tablaEmpresas" id="tbempleados">
                    </div>
                </div>
            </div>
        </div>
    </div>

   

</body>
 <!------------------------------- Modal insertar empleado------------------------------------------------- -->  

  <div class="modal fade" id="insertarEmpleados" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Ingresar un nuevo Empleado</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="insertarEmpleado">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Nombres</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Apellidos</label>
                    <input type="text" class="form-control" id="apellido" name="apellido">
                  </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputAddress">Documento único de identidad (DUI)</label>
                  <input type="number" class="form-control" id="dui" name="dui" >
                </div>
                <div class="form-group col-md-6">
                  <label for="inputAddress">Numero de identificaión tributaria(NIT)</label>
                  <input type="number" class="form-control" id="nit" name="nit" >
                </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Estado</label>
                    <select id="estado" name="estado" class="form-control">
                        <option selected>Seleccione el estado...</option>
                        <option>Activo</option>
                        <option>Inactivo</option>
                      </select>
                  </div>
                  <div class="form-group">
                  <label for="inputAddress2">Empresas</label>
                  
                  <select id="empresas" name="empresas" class=" form-control empresas">
                
						<option value="0">Seleccion una empresa:</option> 
            <?php
            require_once "clases/conexion.php";
							$con = new conectar();
							$conexion = $con -> conexion();
                 $sql="select idEmpresa,nombreEmpresas from empresas";
		                  $result = mysqli_query($conexion,$sql);
		                   while ($valores = mysqli_fetch_array($result)) {
                       echo '<option value="'.$valores['idEmpresa'].'">'.$valores['nombreEmpresas'].'</option>';
                         }
                   ?>
						</select>
                      
                </div>
                </div>
                
               
                
                <div class="form-group">
                  <label for="inputAddress2">Rol</label>
                  
                  <select id="roles" name="roles" class=" form-control empresas">
                
						<option value="0">Seleccion un rol:</option> 
            <?php
            require_once "clases/conexion.php";
							$con = new conectar();
							$conexion = $con -> conexion();
                 $sql="select idRol,nombreRol from roles";
		                  $result = mysqli_query($conexion,$sql);
		                   while ($valores = mysqli_fetch_array($result)) {
                       echo '<option value="'.$valores['idRol'].'">'.$valores['nombreRol'].'</option>';
                         }
                   ?>
						</select>
                      
                </div>
                
                
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" onclick="insertar()" >Guardar</button>
        </div>
      </div>
    </div>
  </div>

  <!------------------------------- Modal actualizar------------------------------------------------- -->  

  
  <script src="js/empleados.js"></script>
</html>