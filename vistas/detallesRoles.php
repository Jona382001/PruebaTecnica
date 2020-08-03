<form id="actualizarForm">
    <div class="form-row">
    <div class="form-group col-md-6">
            <label for="inputEmail4">Codigo del rol</label>
            <input type="number" class="form-control" id="codigo" name="codigoRol" disabled>
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Nombre del rol</label>
            <input type="text" class="form-control" id="Rnombre" name="nombreRol" disabled>
        </div>

        <div class="form-group col-md-6">
            <label for="inputPassword4">Descripción</label>
            <input type="text" class="form-control" id="Rdescripcion" name="descripcion" disabled>
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Permisos</label>
        <input type="text" class="form-control" id="Rpermisos" name="permisos" disabled>
    </div>
    <div class="form-group">
        <label for="inputAddress2">Empresas</label>

        <select id="Rempresa" name="empresas" class=" form-control empresas" disabled>

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
    </div>
    <button type="button" class="btn btn-primary btn-detalle" onclick="clicEditar()">Editar</button>
                    <button type="button" class="btn btn-secondary btn-detalle" onclick="clicRegresar()">Regresar</button>
                    <button type="button" class="btn btn-success btn-actualizar" id="actualizar" onclick="clicActualizar()">Actualizar</button>
                
                

</form>