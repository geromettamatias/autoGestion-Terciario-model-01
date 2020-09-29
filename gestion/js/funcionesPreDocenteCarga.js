
	

function agregaformDPre(datos){

	d=datos.split('||');

	$('#idPersonalUPre').val(d[0]);
	$('#nombreDocenteUPre').val(d[1]);
	$('#dniDocenteUPre').val(d[2]);
	$('#actividadDocenteUPre').val(d[3]);
	$('#tituloDocenteUPre').val(d[4]);
	$('#nTituloDocenteUPre').val(d[5]);
	$('#nTelefonicodocenteUPre').val(d[6]);
	$('#domicilioDocenteUPre').val(d[7]);
	$('#emailDocenteUPre').val(d[8]);
	$('#passDocenteUPre').val(d[9]);
	$('#situacionAltaUPre').val(d[10]);
	$('#obserbacionAltaUPre').val(d[11]);
	


}



function InformacionformPre(datos){

	d=datos.split('||');

function visualiarPre(){
	alertify.confirm('Informe de Usuario', '<b><u>APELLIDO Y NOMBRE:</u></b>'+d[1]+'<br>'
						+'<b><u>DNI:</u></b>'+ d[2]
						+'<br><br><b><u>Actividad:</u></b>'+ d[3]
						+'<br><b><u>Titulo:</u></b>'+ d[4]
						+'<br><b><u>N°Registro:</u></b>'+d[5]
						+'<br><b><u>Telefono:</u></b>'+ d[6]
						+'<br><b><u>Domicilio:</u></b>'+ d[7]
						+'<br><b><u>Email:</u></b>'+ d[8]
						+'<br><b><u>Pass:</u></b>'+ d[9], 
					function(){ alertify.success('Fin de la operación')}
                , function(){ alertify.error('Se cancelo')});
}

visualiarPre();
}




function actualizaDatosPre(){


	idPersonal=$('#idPersonalUPre').val();
	nombreDocente=$('#nombreDocenteUPre').val();
	dniDocente=$('#dniDocenteUPre').val();
	actividadDocente=$('#actividadDocenteUPre').val();
	tituloDocente=$('#tituloDocenteUPre').val();
	nTituloDocente=$('#nTituloDocenteUPre').val();
	nTelefonicodocente=$('#nTelefonicodocenteUPre').val();
	domicilioDocente=$('#domicilioDocenteUPre').val();
	emailDocente=$('#emailDocenteUPre').val();
	passDocente=$('#passDocenteUPre').val();
	situacionAlta=$('#situacionAltaUPre').val();
	obserbacionAlta=$('#obserbacionAltaUPre').val();


	cadena= "idPersonal=" + idPersonal +
			"&nombreDocente=" + nombreDocente + 
			"&dniDocente=" + dniDocente +
			"&actividadDocente=" + actividadDocente +
			"&tituloDocente=" + tituloDocente+
			"&nTituloDocente=" + nTituloDocente+
			"&nTelefonicodocente=" + nTelefonicodocente+
			"&domicilioDocente=" + domicilioDocente+
			"&emailDocente=" + emailDocente+
			"&passDocente=" + passDocente+
			"&situacionAlta=" + situacionAlta+
			"&obserbacionAlta=" + obserbacionAlta;


	$.ajax({
		type:"POST",
		url:"php/preDocente/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#preDocenteTabla').load('PreDocente/prPersonalTabla.php');
				alertify.success("Actualizado con exito :)");
				
			}else{
				alertify.error("Fallo el servidor :(");
				
			}
		}
	});

}


function preguntarSiNoTPre(idPersonal){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatosPre(idPersonal) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatosPre(idPersonal){

	cadena="idPersonal=" + idPersonal;

		$.ajax({
			type:"POST",
			url:"php/preDocente/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#preDocenteTabla').load('PreDocente/prPersonalTabla.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}











function preguntarSiagregarPre(datos){
	alertify.confirm('Ingresar los datos', '¿Esta seguro de ingresar este registro en la Base de Datos?', 
					function(){ agregarDatosCursosPre(datos) }
                , function(){ alertify.error('Se cancelo')});
}

function agregarDatosCursosPre(datos){

	d=datos.split('||');

	idPersonal=d[0];
	nombreDocente=d[1];
	dniDocente=d[2];
	actividadDocente=d[3];
	tituloDocente=d[4];
	nTituloDocente=d[5];
	nTelefonicodocente=d[6];
	domicilioDocente=d[7];
	emailDocente=d[8];
	passDocente=d[9];
	situacionAlta=d[10];
	obserbacionAlta=d[11];


	cadena= "idPersonal=" + idPersonal +
			"&nombreDocente=" + nombreDocente + 
			"&dniDocente=" + dniDocente +
			"&actividadDocente=" + actividadDocente +
			"&tituloDocente=" + tituloDocente+
			"&nTituloDocente=" + nTituloDocente+
			"&nTelefonicodocente=" + nTelefonicodocente+
			"&domicilioDocente=" + domicilioDocente+
			"&emailDocente=" + emailDocente+
			"&passDocente=" + passDocente;

	

		$.ajax({
			type:"POST",
			url:"php/preDocente/ingresar.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#preDocenteTabla').load('PreDocente/prPersonalTabla.php');
					$('#PersonalPlanta').load('cargaPersonal/personalTabla.php');


					alertify.success("Se agrego con exitos");
				}else{
					if(r==0){
					$('#preDocenteTabla').load('PreDocente/prPersonalTabla.php');

					alertify.error("El Usuario ya esta registrado");

					preguntarSiNoDuplpa(idPersonal);

				}else{
					alertify.error("Fallo el servidor :(");
				}
				}
			}
		});
}


function preguntarSiNoDuplpa(idAlumnosU){
	alertify.confirm('DUPLICADO DE DATOS', 'El Docente ya se encuentra registrado, ¿Desea eliminar este registro? ', 
					function(){ eliminarDatosPre(idAlumnosU) }
                , function(){ alertify.error('Se cancelo')});
}



 