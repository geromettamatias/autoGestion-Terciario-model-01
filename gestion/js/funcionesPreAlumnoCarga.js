function agregaformALUtotalEEEpa(datos){

	d=datos.split('||');
	
	$('#idAlumnosUpa').val(d[0]);
	$('#nombreAlumnosUpa').val(d[1]);
	$('#dniAlumnosUpa').val(d[2]);
	$('#cuilAlumnosUpa').val(d[3]);
	$('#domicilioAlumnosUpa').val(d[4]);
	$('#emailAlumnosUpa').val(d[5]);
	$('#telefonoAlumnosUpa').val(d[6]);
	$('#discapasidadAlumnosUpa').val(d[7]);
	
	$('#nLegajoAlumnoUpa').val(d[8]);
	$('#legajoSituacionUpa').val(d[9]);
	
	$('#obserbacionGeneralUpa').val(d[10]);

	$('#passLoginUpa').val(d[11]);
	$('#situacionAltaUpa').val(d[12]);
	$('#obserbacionAltaUpa').val(d[13]);
	$('#idPlanU').val(d[14]);






}



function agregaformALUtotalpa(datos){

	d=datos.split('||');

	$('#idAlumnosUpa').val(d[0]);
	$('#nombreAlumnosUpa').val(d[1]);
	$('#dniAlumnosUpa').val(d[2]);
	$('#cuilAlumnosUpa').val(d[3]);
	$('#domicilioAlumnosUpa').val(d[4]);
	$('#emailAlumnosUpa').val(d[5]);
	$('#telefonoAlumnosUpa').val(d[6]);
	$('#discapasidadAlumnosUpa').val(d[7]);
	$('#cursoAlumnosUpa').val(d[8]);

	$('#nLegajoAlumnoUpa').val(d[9]);
	$('#legajoSituacionUpa').val(d[10]);
	
	$('#nombreTutorUpa').val(d[11]);
	$('#dniTutorUpa').val(d[12]);
	$('#TelefonoTutorUpa').val(d[13]);
	$('#obserbacionGeneralUpa').val(d[14]);
	
	$('#passLoginUpa').val(d[15]);
	$('#situacionAltaUpa').val(d[16]);
	$('#obserbacionAltaUpa').val(d[17]);
	
}































function actualizaDatosAlumnototal1pa(){

	idAlumnosU=$('#idAlumnosUpa').val();
	nombreAlumnosU=$('#nombreAlumnosUpa').val();
	dniAlumnosU=$('#dniAlumnosUpa').val();
	cuilAlumnosU=$('#cuilAlumnosUpa').val();
	domicilioAlumnosU=$('#domicilioAlumnosUpa').val();
	emailAlumnosU=$('#emailAlumnosUpa').val();
	telefonoAlumnosU=$('#telefonoAlumnosUpa').val();
	discapasidadAlumnosU=$('#discapasidadAlumnosUpa').val();
	
	nLegajoAlumnoU=$('#nLegajoAlumnoUpa').val();
	legajoSituacionU=$('#legajoSituacionUpa').val();
	
	obserbacionGeneralU=$('#obserbacionGeneralUpa').val();

	passLoginU=$('#passLoginUpa').val();
	situacionAltaU=$('#situacionAltaUpa').val();
	obserbacionAltaU=$('#obserbacionAltaUpa').val();


	idPlanU=$('#idPlanU').val();


	cadena="idAlumnosU=" + idAlumnosU +
			"&nombreAlumnosU=" + nombreAlumnosU + 
			"&dniAlumnosU=" + dniAlumnosU +
			"&cuilAlumnosU=" + cuilAlumnosU +
			"&domicilioAlumnosU=" + domicilioAlumnosU +
			"&emailAlumnosU=" + emailAlumnosU+
			"&telefonoAlumnosU=" + telefonoAlumnosU+
			"&discapasidadAlumnosU=" + discapasidadAlumnosU+
			
			"&nLegajoAlumnoU=" + nLegajoAlumnoU+
			"&legajoSituacionU=" + legajoSituacionU+
			
			"&obserbacionGeneralU=" + obserbacionGeneralU+
			"&passLoginU=" + passLoginU+
			"&situacionAltaU=" + situacionAltaU+
			"&obserbacionAltaU=" + obserbacionAltaU+
		
			"&idPlanU=" + idPlanU;

	$.ajax({
		type:"POST",
		url:"php/preAlumnoCarga/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#preAlumnoTabla').load('preAlumno/prAlumnoTabla.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

	
	




function preguntarSiagregartpa(datos){
	alertify.confirm('Ingresar los datos', '¿Esta seguro de ingresar este registro en la Base de Datos?', 
					function(){ agregarDatosCursosAlumnopa(datos) }
                , function(){ alertify.error('Se cancelo')});
}


function agregarDatosCursosAlumnopa(datos){

	d=datos.split('||');

	idAlumnos=d[0];
	idAlumnosU=d[0];
	nombreAlumnosU=d[1];
	dniAlumnosU=d[2];
	cuilAlumnosU=d[3];
	domicilioAlumnosU=d[4];
	emailAlumnosU=d[5];
	telefonoAlumnosU=d[6];
	discapasidadAlumnosU=d[7];
	
	nLegajoAlumnoU=d[8];
	legajoSituacionU=d[9];
	
	obserbacionGeneralU=d[10];
	passLoginU=d[11];
	situacionAltaU=d[12];
	obserbacionAltaU=d[13];
	idPlan=d[14];
	



	
	cadena="idAlumnosU=" + idAlumnosU +
			"&nombreAlumnosU=" + nombreAlumnosU + 
			"&dniAlumnosU=" + dniAlumnosU +
			"&cuilAlumnosU=" + cuilAlumnosU +
			"&domicilioAlumnosU=" + domicilioAlumnosU +
			"&emailAlumnosU=" + emailAlumnosU+
			"&telefonoAlumnosU=" + telefonoAlumnosU+
			"&discapasidadAlumnosU=" + discapasidadAlumnosU+
			
			"&nLegajoAlumnoU=" + nLegajoAlumnoU+
			"&legajoSituacionU=" + legajoSituacionU+
			
			"&obserbacionGeneralU=" + obserbacionGeneralU+
			"&passLoginU=" + passLoginU+
			"&situacionAltaU=" + situacionAltaU+
			"&obserbacionAltaU=" + obserbacionAltaU+
			"&idPlan=" + idPlan;
		

		$.ajax({
			type:"POST",
			url:"php/preAlumnoCarga/ingresarAlumno.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#preAlumnoTabla').load('preAlumno/prAlumnoTabla.php');

					$('#AlumnoPlanta').load('cargaAlumno/AlumnoTabla.php');
					alertify.success("Se agrego con exitos");
				}else{
					if(r==0){
					$('#preAlumnoTabla').load('preAlumno/prAlumnoTabla.php');
					alertify.error("El Usuario ya esta registrado");

					preguntarSiNoDuplpaAlu(idAlumnosU);

				



				}else{
					alertify.error("Fallo el servidor :(");
				}
				}
			}
		});
}


function preguntarSiNoDuplpaAlu(idAlumnosU){
	alertify.confirm('DUPLICADO DE DATOS', 'El alumno ya se encuentra registrado, ¿Desea eliminar este registro? ', 
					function(){ eliminarDatosAlumnopat(idAlumnosU) }
                , function(){ alertify.error('Se cancelo')});
}



function eliminarDatosAlumnopat(idAlumnosU){

	cadena="idAlumnos=" + idAlumnosU;

		$.ajax({
			type:"POST",
			url:"php/preAlumnoCarga/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
				
					$('#preAlumnoTabla').load('preAlumno/prAlumnoTabla.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}














function InformacionformAlumnopa(datos){

	d=datos.split('||');



function informetotsl(){
	alertify.confirm('Informe de Alumno', '<b><u>APELLIDO Y NOMBRE:</u></b>'+d[1]+'<br>'
						+'<br><b><u>DNI:</u></b>'+ d[2]
						+'<br><b><u>CUIL:</u></b>'+ d[3]
						+'<br><b><u>DOMICILIO:</u></b>'+ d[4]
						+'<br><b><u>EMAIL:</u></b>'+ d[5]
						+'<br><b><u>TELEFONO:</u></b>'+ d[6]
						+'<br><b><u>DISCAPASIDAD:</u></b>'+ d[7]

						+'<br><b><u>CARRERA:</u></b>'+ d[15]
					

						
						+'<br><b><u>OBSERVACIÓN:</u></b>'+ d[10]
						+'<br><br><b><u>N° LEGAJO:</u></b>'+ d[8]
						+'<br><b><u>SITUACIÓN DEL LEGAJO:</u></b>'+ d[9], 
					function(){ alertify.success('Fin de la operación') }
                , function(){ alertify.error('Se cancelo')});
}
	
	informetotsl();

}


function preguntarSiNopa(idAlumnos){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatosAlumnopa(idAlumnos) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatosAlumnopa(idAlumnos){

	cadena="idAlumnos=" + idAlumnos;

		$.ajax({
			type:"POST",
			url:"php/preAlumnoCarga/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
				
					$('#preAlumnoTabla').load('preAlumno/prAlumnoTabla.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}


