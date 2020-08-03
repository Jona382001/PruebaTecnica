function insertar(){
  
    datos=$('#insertarEmpleado').serialize();

    
    $.ajax({
        type:"POST",
        data:datos,
        url:"metodos/nuevoEmpleado.php",
        success:function(r){
                    console.log(r);
            if(r==1){
                $('#insertarEmpleados').modal('hide');
                $("#insertarEmpleado")[0].reset();

                $('#tbempleados').load('provider/tablaEmpleados.php');
                alertify.notify('Registrado correrctamente', 'success', 5, function(){  console.log('dismissed'); });

            }else if(r==0){
              console.log(r);
            }
        }
    });
}

function eliminarEmpleado(idEmpleados){
    alertify.confirm('Eliminar empleado', '¿Desea eliminar el empleado seleccionado?', function(
        
    ){ 
        $.ajax({
            type:"POST",
            data:"idEmpleados="+idEmpleados,
            url:"metodos/eliminarEmpleado.php",
            success:function(r){
        
                if(r==1){
    
                    $('#tbempleados').load('provider/tablaEmpleados.php');
                    alertify.notify('Eliminado correrctamente', 'success', 5, function(){  console.log('dismissed'); });
    
                }else if(r==0){
                  console.log(r);
                }
            }
        }); }   , function(){ alertify.error('Cancel')});
    
}

function obtenerdetallesEmpleados(idEmpleado){
  
    $('#tbempleados').load('vistas/detallesEmpleados.php');
    $.ajax({
        type:"POST",
        data:"idEmpleado="+idEmpleado,
        url:"metodos/obtenerEmpleados.php",
        success:function(r){
            console.log(r);
            datos=jQuery.parseJSON(r)

            $('#rt1').text(datos['nombres'] );
            
                    $('#Ecodigo').val(idEmpleado );
					$('#Enombre').val( datos['nombres'] );
					$('#Eapellido').val( datos['apellidos'] );
					$('#Edui').val( datos['dui'] );
                    $('#Enit').val( datos['nit'] );
                    $('#Eestado').val( datos['estado'] );
                 $('#Eempresa').val( datos['Empresas_idEmpresa'] );
                  $('#Erol').val( datos['Roles_idRol'] );
					
        }
    }); 
}

function clicEditar(){
    
                    $("#dtnombre").prop('disabled', false);
                  //  $('#Ecodigo').prop('disabled', false);
					$('#Enombre').prop('disabled', false);
					$('#Eapellido').prop('disabled', false);
					$('#Edui').prop('disabled', false);
                    $('#Enit').prop('disabled', false);
                    $('#Eestado').prop('disabled', false);
                 $('#Eempresa').prop('disabled', false);
                  $('#Erol').prop('disabled', false);
                  $("#actualizar").css("display", "inline");

}
function clicRegresar(){
    $('#tbempleados').load('provider/tablaEmpleados.php');
    $('#rt1').text(' ' );
    
}


function clicActualizar(){
    $('#Ecodigo').prop('disabled', false);

    datos=$('#actualizarEmpleados').serialize();
    console.log(datos);

    alertify.confirm('Actualizar empresa', '¿Desea actualizar la empresa seleccionada?', function(
        
        ){ 
            $.ajax({
                type:"POST",
                data:datos,
                url:"metodos/actualizarEmpleados.php",
                success:function(r){
            
                    if(r==1){
                        $('#tbempleados').load('provider/tablaEmpleados.php');
                        $('#rt1').text(' ' );
                        alertify.notify('Actualizado correrctamente', 'success', 5, function(){  console.log('dismissed'); });
                        
                    }else if(r==0){
                      console.log(r);
                    }
                }
            }); }   , function(){ alertify.error('Cancel')});

}
function btnEditar(idRol){
    obtenerdetallesEmpleados(idRol);
}
