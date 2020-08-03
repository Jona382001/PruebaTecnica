<form id="fmActualizarEmp">
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Codigo de la empresa</label>
                    <input type="number" class="form-control" id="dtcodigo" name="codigo" disabled>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Nombre de la empresa</label>
                    <input type="text" class="form-control" id="dtnombre" name="nombre" disabled>
                  </div>
                 
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">NIT</label>
                    <input type="number" class="form-control" id="dtnit" name="nit" disabled>
                  </div>
                
                <div class="form-group">
                  <label for="inputAddress">Telefono</label>
                  <input type="number" class="form-control" id="dttel" name="tel" disabled>
                </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress2">Dirección</label>
                  <input type="text" class="form-control" id="dtdireccion" name="direccion" disabled >
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">Municipio</label>
                    <input type="text" class="form-control" id="dtdepartamentos" name="departamentos" disabled >
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputState">Departamento</label>
                    <input type="text" class="form-control" id="dtmunicipio" name="municipio" disabled>
                  </div>
                  </div>
                    <button type="button" class="btn btn-primary btn-detalle" onclick="clicEditar()">Editar</button>
                    <button type="button" class="btn btn-secondary btn-detalle" onclick="clicRegresar()">Regresar</button>
                    <button type="button" class="btn btn-success btn-actualizar" id="actualizar" onclick="clicActualizar()">Actualizar</button>
                
                
              </form>