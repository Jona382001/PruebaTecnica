function insertar(){
  
    datos=$('#fmInsertEmp').serialize();
    $.ajax({
        type:"POST",
        data:datos,
        url:"metodos/nuevaEmpresa.php",
        success:function(r){
    
            if(r==1){
                $('#insertarModal').modal('hide');
                $("#fmInsertEmp")[0].reset();

                $('#tbEmpresas').load('provider/tablaEmpresas.php');
                alertify.notify('Registrado correrctamente', 'success', 5, function(){  console.log('dismissed'); });

            }else if(r==0){
              console.log(r);
            }
        }
    });
}

function eliminar(idempresa){
    alertify.confirm('Eliminar empresa', '¿Desea eliminar la empresa seleccionada?', function(
        
    ){ 
        $.ajax({
            type:"POST",
            data:"idempresa="+idempresa,
            url:"metodos/eliminarEmpresa.php",
            success:function(r){
        
                if(r==1){
    
                    $('#tbEmpresas').load('provider/tablaEmpresas.php');
                    alertify.notify('Eliminado correrctamente', 'success', 5, function(){  console.log('dismissed'); });
    
                }else if(r==0){
                  console.log(r);
                }
            }
        }); }   , function(){ alertify.error('Cancel')});
    
}

function obtenerdetalles(idempresa){
  
    $('#tbEmpresas').load('vistas/detallesEmpresa.php');
    $.ajax({
        type:"POST",
        data:"idempresa="+idempresa,
        url:"metodos/obtenerEmpresa.php",
        success:function(r){
            datos=jQuery.parseJSON(r)

            $('#rt1').text(datos['nombreEmpresas'] );
            
            $('#dtcodigo').val(idempresa );
					$('#dtnombre').val( datos['nombreEmpresas'] );
					$('#dtdireccion').val( datos['direccion'] );
					$('#dttel').val( datos['telefono'] );
					$('#dtdepartamentos').val( datos['departamento'] );
					$('#dtmunicipio').val( datos['municipio'] );
					$('#dtnit').val( datos['nit'] );
					
        }
    }); 
}

function clicEditar(){
    
                    $("#dtnombre").prop('disabled', false);
					$('#dtdireccion').prop('disabled', false);
					$('#dttel').prop('disabled', false);
					$('#dtdepartamentos').prop('disabled', false);
					$('#dtmunicipio').prop('disabled', false);
                    $('#dtnit').prop('disabled', false);
                    $("#actualizar").css("display", "inline");
   

}
function clicRegresar(){
    $('#tbEmpresas').load('provider/tablaEmpresas.php');
    $('#rt1').text(' ' );
    
}


function clicActualizar(){
    $('#dtcodigo').prop('disabled', false);
    datos=$('#fmActualizarEmp').serialize();
    console.log(datos);

    alertify.confirm('Actualizar empresa', '¿Desea actualizar la empresa seleccionada?', function(
        
        ){ 
            $.ajax({
                type:"POST",
                data:datos,
                url:"metodos/actualizarEmpresa.php",
                success:function(r){
            
                    if(r==1){
                        $('#rt1').text(' ' );
                        $('#tbEmpresas').load('provider/tablaEmpresas.php');
                        alertify.notify('Actualizado correrctamente', 'success', 5, function(){  console.log('dismissed'); });
                        
                    }else if(r==0){
                      console.log(r);
                    }
                }
            }); }   , function(){ alertify.error('Cancel')});

}
function btnEditar(idempresa){
    obtenerdetalles(idempresa);
}
