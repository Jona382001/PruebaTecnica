function insertar(){
  
    datos=$('#actualizarForm').serialize();

    
    $.ajax({
        type:"POST",
        data:datos,
        url:"metodos/nuevoRol.php",
        success:function(r){
    
            if(r==1){
                $('#insertarRol').modal('hide');
                $("#actualizarForm")[0].reset();

                $('#tbRoles').load('provider/tablaRoles.php');
                alertify.notify('Registrado correrctamente', 'success', 5, function(){  console.log('dismissed'); });

            }else if(r==0){
              console.log(r);
            }
        }
    });
}

function eliminarROL(idRol){
    alertify.confirm('Eliminar rol', '¿Desea eliminar el rol seleccionado?', function(
        
    ){ 
        $.ajax({
            type:"POST",
            data:"idRol="+idRol,
            url:"metodos/eliminarRol.php",
            success:function(r){
        
                if(r==1){
    
                    $('#tbRoles').load('provider/tablaRoles.php');
                    alertify.notify('Eliminado correrctamente', 'success', 5, function(){  console.log('dismissed'); });
    
                }else if(r==0){
                  console.log(r);
                }
            }
        }); }   , function(){ alertify.error('Cancel')});
    
}

function obtenerdetallesROL(idRoles){
  
    $('#tbRoles').load('vistas/detallesRoles.php');
    $.ajax({
        type:"POST",
        data:"idRoles="+idRoles,
        url:"metodos/obtenerRoles.php",
        success:function(r){
            console.log(r);
            datos=jQuery.parseJSON(r)

            $('#rt1').text(datos['nombreRol'] );
            
                    $('#codigo').val(idRoles );
					$('#Rnombre').val( datos['nombreRol'] );
					$('#Rdescripcion').val( datos['descripcionRol'] );
					$('#Rpermisos').val( datos['permisos'] );
					$('#Rempresa').val( datos['Empresas_idEmpresa'] );
					
        }
    }); 
}

function clicEditar(){
    
                    $("#dtnombre").prop('disabled', false);
                   // $('#codigo').prop('disabled', false);
					$('#Rnombre').prop('disabled', false);
					$('#Rdescripcion').prop('disabled', false);
					$('#Rpermisos').prop('disabled', false);
					$('#Rempresa').prop('disabled', false);
                    $("#actualizar").css("display", "inline");

}
function clicRegresar(){
    $('#tbRoles').load('provider/tablaRoles.php');
    $('#rt1').text(' ' );
    
}


function clicActualizar(){
    $('#codigo').prop('disabled', false);
    datos=$('#actualizarForm').serialize();
    console.log(datos);

    alertify.confirm('Actualizar empresa', '¿Desea actualizar la empresa seleccionada?', function(
        
        ){ 
            $.ajax({
                type:"POST",
                data:datos,
                url:"metodos/actualizarRol.php",
                success:function(r){
            
                    if(r==1){
                        $('#rt1').text(' ' );
                        $('#tbRoles').load('provider/tablaRoles.php');
                        alertify.notify('Actualizado correrctamente', 'success', 5, function(){  console.log('dismissed'); });
                        
                    }else if(r==0){
                      console.log(r);
                    }
                }
            }); }   , function(){ alertify.error('Cancel')});

}
function btnEditarROL(idRol){
    obtenerdetallesROL(idRol);
}
