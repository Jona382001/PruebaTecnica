<form id="actualizarEmpleados">
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="inputEmail4">Codigo de Empleado</label>
            <input type="number" class="form-control" id="Ecodigo" name="Ecodigo" disabled>
        </div>
        <div class="form-group col-md-4">
            <label for="inputEmail4">Nombres</label>
            <input type="text" class="form-control" id="Enombre" name="nombre" disabled>
        </div>
        <div class="form-group col-md-4">
            <label for="inputPassword4">Apellidos</label>
            <input type="text" class="form-control" id="Eapellido" name="apellido" disabled>
        </div>
        <div class="form-group col-md-4">
            <label for="inputAddress">Documento único de identidad (DUI)</label>
            <input type="number" class="form-control" id="Edui" name="dui" disabled>
        </div>
        <div class="form-group col-md-4">
            <label for="inputAddress">Numero de identificaión tributaria(NIT)</label >
            <input type="number" class="form-control" id="Enit" name="nit" disabled>
        </div>
        <div class="form-group col-md-4">
            <label for="inputCity">Estado</label>
            <select id="Eestado" name="estado" class="form-control" disabled>
                <option selected>Seleccione el estado...</option>
                <option>Activo</option>
                <option>Inactivo</option>
            </select>
        </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-4">
    <label for="inputCity">Empresa</label>
            <select id="Eempresa" name="Eempresa" class="form-control" disabled>
            <option value="0">Seleccion una empresa:</option>
            <?php
            require_once "../clases/conexion.php";
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
    <div class="form-group col-md-4">
    <label for="inputCity">Rol</label>
            <select id="Erol" name="Erol" class="form-control" disabled>
            <option value="0">Seleccion una empresa:</option>
            <?php
            require_once "../clases/conexion.php";
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


                </div>
                <button type="button" class="btn btn-primary btn-detalle" onclick="clicEditar()">Editar</button>
                    <button type="button" class="btn btn-secondary btn-detalle" onclick="clicRegresar()">Regresar</button>
                    <button type="button" class="btn btn-success btn-actualizar" id="actualizar" onclick="clicActualizar()">Actualizar</button>
            
               


</form>