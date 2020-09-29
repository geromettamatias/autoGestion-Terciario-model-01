

function agregardatosjjjadmin(dniLogin,passLogin,tipoUsuario){

	cadena="dniLogin=" + dniLogin + 
			"&passLogin=" + passLogin +
			"&tipoUsuario=" + tipoUsuario;

		

	$.ajax({
		type:"POST",
		url:"php/usuarioSistema/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){

				
				$('#usuarioSistemaTabla').load('UsuarioSistema/UsuarioSistemaTabla.php');
				alertify.success("agregado con exito :)");
				ResectDatosElimina();

			}else{

				if(r==0){
				$('#usuarioSistemaTabla').load('UsuarioSistema/UsuarioSistemaTabla.php');

				 alertify.confirm('Registro de usuarios', 'Usuario ya existe, no se puede registrar más de una vez', 
					function(){ alertify.error('Operación cancelada')}
                , function(){ alertify.error('Se cancelo')});

				}else{

					alertify.error("Fallo el servidor :(");

				
				}

				
			}
		}
	});

}




	

function agregaformDffadmin(datos){

	d=datos.split('||');

	$('#idLoginUadmin').val(d[0]);
	$('#dniLoginUadmin').val(d[1]);
	$('#passLoginUadmin').val(d[2]);
	$('#tipoUsuarioUadmin').val(d[3]);
	

}







function actualizaDatosnnnnadmin(){


	idLoginU=$('#idLoginUadmin').val();
	dniLoginU=$('#dniLoginUadmin').val();
	passLoginU=$('#passLoginUadmin').val();
	tipoUsuarioU=$('#tipoUsuarioUadmin').val();


	cadena= "idLoginU=" + idLoginU +
			"&dniLoginU=" + dniLoginU + 
			"&passLoginU=" + passLoginU +
			"&tipoUsuarioU=" + tipoUsuarioU;


	$.ajax({
		type:"POST",
		url:"php/usuarioSistema/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){

				
				$('#usuarioSistemaTabla').load('UsuarioSistema/UsuarioSistemaTabla.php');
				alertify.success("Actualizado con exito :)");

				ResectDatosElimina();
				
			}else{
				alertify.error("Fallo el servidor :(");
			
			}
		}
	});

}


function preguntarSiNoTadmin(idLogin){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ UsuarioActual(idLogin) }
                , function(){ alertify.error('Se cancelo')});
}



function UsuarioActual(idLogin){

	cadena="idLogin=" + idLogin;

		$.ajax({
			type:"POST",
			url:"php/usuarioSistema/buscarUsuarioSistemaActual.php",
			data:cadena,
			success:function(r){
				

				if(r==1){
					

					alertify.success("Es el Usuario Actual");
					
				}else{


					if (r==0) {

						eliminarDatosadmin(idLogin);

					}else{

						alertify.error("Fallo el servidor :(");

					}


					
				}
			}
		});
}





function eliminarDatosadmin(idLogin){

	cadena="idLogin=" + idLogin;

		$.ajax({
			type:"POST",
			url:"php/usuarioSistema/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					

					$('#usuarioSistemaTabla').load('UsuarioSistema/UsuarioSistemaTabla.php');
					alertify.success("Eliminado con exito!");
					ResectDatosElimina();
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}





	


