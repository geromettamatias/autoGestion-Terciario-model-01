function eliminarMensaje(idMensaje){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarMensajeTOTA(idMensaje) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarMensajeTOTA(idMensaje){

	cadena="idMensaje=" + idMensaje;

		$.ajax({
			type:"POST",
			url:"php/mensaje/eliminar.php",
			data:cadena,
			success:function(r){
				if(r==1){
				
					$('#menuMensajesTT').load('mensajes/mensajes.php');


					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}