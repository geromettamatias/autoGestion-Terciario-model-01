

function agregaformALUAlumno(datos){

	d=datos.split('||');


	$('#idAlumnosU').val(d[0]);
	$('#nombreAlumnosU').val(d[1]);
	$('#dniAlumnosU').val(d[2]);
	$('#cuilAlumnosU').val(d[3]);
	$('#domicilioAlumnosU').val(d[4]);
	$('#emailAlumnosU').val(d[5]);
	$('#telefonoAlumnosU').val(d[6]);
	$('#discapasidadAlumnosU').val(d[7]);
	
	$('#nLegajoAlumnoU').val(d[8]);
	$('#legajoSituacionU').val(d[9]);
	
	$('#obserbacionGeneralU').val(d[10]);

	$('#passU').val(d[11]);
	$('#idplanU').val(d[12]);
	
	
}


function actualizaDatosAlumnoAlumnoterR(){

	idAlumnosU=$('#idAlumnosU').val();
	nombreAlumnosU=$('#nombreAlumnosU').val();
	dniAlumnosU=$('#dniAlumnosU').val();
	cuilAlumnosU=$('#cuilAlumnosU').val();
	domicilioAlumnosU=$('#domicilioAlumnosU').val();
	emailAlumnosU=$('#emailAlumnosU').val();
	telefonoAlumnosU=$('#telefonoAlumnosU').val();
	discapasidadAlumnosU=$('#discapasidadAlumnosU').val();
	nLegajoAlumnoU=$('#nLegajoAlumnoU').val();
	legajoSituacionU=$('#legajoSituacionU').val();
	
	obserbacionGeneralU=$('#obserbacionGeneralU').val();
	passU=$('#passU').val();
	idplanU=$('#idplanU').val();



	cadena="idAlumnosU=" + idAlumnosU +
			"&nombreAlumnosU=" + nombreAlumnosU + 
			"&dniAlumnosU=" + dniAlumnosU +
			"&cuilAlumnosU=" + cuilAlumnosU +
			"&domicilioAlumnosU=" + domicilioAlumnosU +
			"&emailAlumnosU=" + emailAlumnosU+
			"&telefonoAlumnosU=" + telefonoAlumnosU+
			"&discapasidadAlumnosU=" + discapasidadAlumnosU+
			"&nLegajoAlumnoU=" + nLegajoAlumnoU +
			"&legajoSituacionU=" + legajoSituacionU +		
			"&obserbacionGeneralU=" + obserbacionGeneralU +
			"&passU=" + passU +
			"&idplanU=" + idplanU;


	$.ajax({
		type:"POST",
		url:"php/alumnoCarga/actualizaDatos.php",
		data:cadena,
		success:function(r){
		
			if(r==1){
			
				$('#tablaAlumnosAsistencia').load('cargaAlumno/alumnoTabla.php');
				alertify.success("Actualizado con éxito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}




























function InformacionformAlumnoTAlumnoTerr(datos2){

	d=datos2.split('||');


				function visualiarInstitucionttttt(){
	alertify.confirm('DATOS DEL ALUMNO', '<b><u>APELLIDO Y NOMBRE:</u></b>'+d[1]+'<br>'
						+'<b><u>DNI:</u></b>'+ d[2]
						+'<br><b><u>CUIL:</u></b>'+ d[3]
						+'<br><b><u>DOMICILIO:</u></b>'+ d[4]
						+'<br><b><u>EMAIL:</u></b>'+d[5]
						+'<br><b><u>TELEF:</u></b>'+d[6]
						+'<br><b><u>DISCAP:</u></b>'+d[7]
						+'<br><b><u>N°LEG:</u></b>'+d[8]
						+'<br><b><u>S LEG:</u></b>'+d[9]
						+'<br><b><u>OBSER:</u></b>'+d[10]
						+'<br><b><u>PASS:</u></b>'+d[11], 
					function(){ alertify.success('Fin de la operación')}
                , function(){ alertify.error('Se cancelo')});
}

visualiarInstitucionttttt();

}




function LimpiezaAlumnoTotalAlumno(){

	lipi="";

	$('#nombreAlumnos').val(lipi);
	$('#dniAlumnos').val(lipi);
	$('#cuilAlumnos').val(lipi);
	$('#domicilioAlumnos').val(lipi);
	$('#emailAlumnos').val(lipi);
	$('#telefonoAlumnos').val(lipi);
	$('#discapasidadAlumnos').val(lipi);
	$('#cursoAlumnos').val(lipi);
	$('#nLegajoAlumno').val(lipi);
	$('#legajoSituacion').val(lipi);
	$('#nombreTutor').val(lipi);
	$('#dniTutor').val(lipi);
	$('#TelefonoTutor').val(lipi);
	$('#obserbacionGeneral').val(lipi);
	

}









function buscarDNIAlumnoNuevoAlumno(dniAlumnos){

    
          var buscar="dniAlumnos="+dniAlumnos;

          $.ajax({
            url: 'php/alumnoCarga/buscarAlumnoAgregarNuevo.php',
            type: 'POST',
            data: buscar,
          })
          .done(function(res){

            $('#resultadoBusquedaDniAlumnoAgregar').html(res);


          })
          .fail(function(){
            console.log("error");
          })
          .always(function(){
            console.log("completo");
          })


          $.ajax({
            url: 'php/alumnoCarga/buscarAlumnoAgregarNuevoFinal.php',
            type: 'POST',
            data: buscar,
          })
          .done(function(res){

           $('#resultadoBusquedaDniAlumnoAgregar2').val(res);


          })
          .fail(function(){
            console.log("error");
          })
          .always(function(){
            console.log("completo");
          })


}

window.onload= function inicio(){
		
$('#buscadorvivo').val("");





	};




//   Asistencia



function agregaformALUAlumnoAsistencia(idAlumnos){


	$('#idAlumnoAsistencia').val(idAlumnos);
	$('#idAsistencia').val('');
	$('#cantidadInasisAlumno').val('0');
	$('#fechaInasistAlumno').val('');
	$('#justificoInasisAlumno').val('0');
	$('#mesaje').html('<font color="#2E86C1">AGREGE UN NUEVO REGISTRO</font>');


buscarInasistenciaTablaAlumno(idAlumnos);
	
}



function buscarInasistenciaTablaAlumno(idAlumnos){

	cadena="InasistenciaAlumno=" + idAlumnos;

		$.ajax({
			type:"POST",
			url:"php/alumnoCarga/crearsessionInasistenciaAlumno.php",
			data:cadena,
			success:function(InasistenciaAlumno){
				if(InasistenciaAlumno==1){
				
					$('#tablaInasistenciaPorAlumno').load('cargaAlumno/alumnoTablaInasistencia.php');
					alertify.success("éxito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}












function preguntarSiNoAlumnoInasistenciaAlumnoEliminarFINAL(idAsistencia){

	cadena="idAsistencia=" + idAsistencia;


	$.ajax({
		type:"POST",
		url:"php/alumnoCarga/eliminarDatosInasistencia.php",
		data:cadena,
		success:function(r){
			if(r==1){
				
				$('#tablaInasistenciaPorAlumno').load('cargaAlumno/alumnoTablaInasistencia.php');
					$('#idAsistencia').val('');
				$('#cantidadInasisAlumno').val('0');
				$('#fechaInasistAlumno').val('');
				$('#justificoInasisAlumno').val('0');
				$('#mesaje').html('<font color="#2E86C1">AGREGE UN NUEVO REGISTRO</font>');


				alertify.success("agregado con éxito :)");
				
				
			}else{
				
				alertify.error("Fallo el servidor :(");
				
			}
		}
	});


}




function tablaAnaliticoNotasInscrip(idAlumnos,idPlan){

	cadena="idAlumnos=" + idAlumnos +
			"&idPlan=" + idPlan;

		$.ajax({
			type:"POST",
			url:"php/alumnoCarga/crearsessionAnaliticoInscrpc.php",
			data:cadena,
			success:function(r){
				if(r==1){
				
					$('#tablaAlumnosNota').load('cargaAlumno/alumnoTablaNotaAnalitico.php');
					alertify.success("éxito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}

