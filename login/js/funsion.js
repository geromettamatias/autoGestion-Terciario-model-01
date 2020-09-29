function agregardatosAlumnosPRIEUnico(nombreAlumnos,dniAlumnosTA,cuilAlumnos,domicilioAlumnos,emailAlumnos,telefonoAlumnos,discapasidadAlumnos,idPlanPRE,obserbacionGeneral,passLogin,passLogin2){

	cadena="nombreAlumnos=" + nombreAlumnos + 
			"&dniAlumnosTA=" + dniAlumnosTA +
			"&cuilAlumnos=" + cuilAlumnos +
			"&domicilioAlumnos=" + domicilioAlumnos +
			"&emailAlumnos=" + emailAlumnos+
			"&telefonoAlumnos=" + telefonoAlumnos+
			"&discapasidadAlumnos=" + discapasidadAlumnos+
			"&idPlanPRE=" + idPlanPRE+
			
			"&obserbacionGeneral=" + obserbacionGeneral+
			"&passLogin=" + passLogin+
			"&passLogin2=" + passLogin2;



	$.ajax({
		type:"POST",
		url:"php/buscarcarreraBariabl.php",
		data:cadena,
		success:function(r){
		
		carrer=r;



		if (passLogin===passLogin2) {


	if (idPlanPRE==="0") {

		alertify.error("Curso no seleccionado");
		limpiarAlumnoContraseña();

	}else{


 alertify.confirm('Administrador', '<h3>Los datos del Formularios son: </h3>'+
 									'<br><br><b><u>Apellido y Nombre del alumno: </u></b>'+nombreAlumnos+
 									'<br><b><u>DNI del alumno:</u></b>'+dniAlumnosTA+
 									'<br><b><u>CUIL del alumno:</u></b>'+cuilAlumnos+
 									'<br><b><u>DOMICILIO del alumno:</u></b>'+domicilioAlumnos+
 									'<br><b><u>EMAIL del alumno:</u></b>'+emailAlumnos+
 									'<br><b><u>TELEFONO del alumno:</u></b>'+telefonoAlumnos+
 									'<br><b><u>DISCAPACIDAD:</u></b>'+discapasidadAlumnos+
 								
 									'<br><b><u>CARRERA:</u></b>'+carrer+
 									
 									'<br><br><b><u>OGSERBACIÓN:</u></b>'+obserbacionGeneral+
 									'<br><br><b><u>USUARIO DEL AUTOGESTIÓN:</u></b>'+dniAlumnosTA+
 									'<br><b><u>CONTRASEÑA DEL AUTOGESTIÓN:</u></b> '+passLogin+
 									'<br><br><b><u>ACLARACIÓN:</u>Si los datos son verdaderos haga click en aceptar, luego se procesara su información para darle de alta en el sistema autogestión, donde ingresara con su usuario y contraseña (ANOTE SU USUARIO Y CONTRASEÑA). Gracias!</b>', 
          function(){ agregarFinal(cadena) }
                , function(){ alertify.error('Se cancelo')})
		

function agregarFinal(cadena) {
		
		$.ajax({
		type:"POST",
		url:"php/agregarDatosAlumno.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
		
				alertify.success("agregado con exito :)");
				limpiarAlumno();
				
				
			}else{
				
				alertify.error("Fallo el servidor :(");
				limpiarAlumno();
			}

		}
	});








		}		
		








	}

	

	



}else{

	alertify.error("La contraseña no coincide");
	limpiarAlumnoContraseña();



}






		}
	});








}





function IngresoSistema(dniLoginT,passLoginT,usuarioLoginTTT){

	cadena="dniLoginT=" + dniLoginT + 
			"&passLoginT=" + passLoginT;



if (usuarioLoginTTT==="alumno") {

	

	$.ajax({
		type:"POST",
		url:"php/buscarLoginAlumno.php",
		data:cadena,
		success:function(r){
			if(r==1){
			
				alertify.success("BINVENIDO !!!");

				enviarAlumnoPaginaPrinsipal(dniLoginT);



			}else{

				if (r==0) {

				
					verificarSituacion(dniLoginT,passLoginT);

				}else{

					alertify.error("Fallo el servidor :(");

				}

			
			}
		}
	});

}else{


if (usuarioLoginTTT==="docente") {

	

	$.ajax({
		type:"POST",
		url:"php/buscarLoginDocente.php",
		data:cadena,
		success:function(r){
			if(r==1){
			
				alertify.success("BINVENIDO !!!");

			
				enviarDocentePaginaPrinsipal(dniLoginT);



			}else{

				if (r==0) {

				
					verificarSituacionDocente(dniLoginT,passLoginT);

				}else{

					alertify.error("Fallo el servidor :(");

				}

			
			}
		}
	});

}else{

	if (usuarioLoginTTT==="admin") {
		

		$.ajax({
		type:"POST",
		url:"php/buscarLoginADMIN.php",
		data:cadena,
		success:function(r){
			if(r==1){
			
				alertify.success("BINVENIDO ADMIN!!!");

			
				enviarAdminPaginaPrinsipal(dniLoginT);



			}else{

			if (r==2) {

				alertify.success("BINVENIDO AUXILIAR!!!");

			
				enviarAdminPaginaPrinsipalAuxiliar(dniLoginT);

			}else{

				if (r==3) {

				
					alertify.success("BINVENIDO PERSONAL!!!");

			
				enviarAdminPaginaPrinsipalsecretaria(dniLoginT);
			}else{

				if (r==0) {

				alertify.error("EL USUARIO Y CONTRASEÑA INCORRECTA");


			}else{

				alertify.error("Fallo el servidor :(");


			}


			}

				


			}

					
				

			
			}
		}
	});








	}else{

	}








}












}

}




function verificarSituacionDocente(dniLoginT,passLoginT){




	cadena="dniLoginT=" + dniLoginT +
		   "&passLoginT=" + passLoginT;



	$.ajax({
		type:"POST",
		url:"php/buscarLoginDocentePRE.php",
		data:cadena,
		success:function(r){
			if(r==0){
			
				
				alertify.error("EL docente no se encuentra inscripto");
				alertify.success("Debe registrarse previamente");
				limpiarlogin();




			}else{

				d=r.split('||')
		
		  	

		alertify.confirm('Administrador', 'El Docente N° DNI:'+ dniLoginT+'<br>'+'Tramite: <font color="red">'+ d[0]+'</font><br>'+'Observación: <font color="red">'+ d[1]+'</font>', 
          function(){ alertify.error('Se cancelo') }
                , function(){ alertify.error('Se cancelo')});

		limpiarlogin();



			

				

				
			}
		}
	});


}









function verificarSituacion(dniLoginT,passLoginT){



	var usuarioA="alumno";

	cadena="dniLoginT=" + dniLoginT +
		   "&passLoginT=" + passLoginT;



	$.ajax({
		type:"POST",
		url:"php/buscarLoginAlumnoPRE.php",
		data:cadena,
		success:function(r){
			if(r==0){
			
				
				alertify.error("EL alumno no se encuentra inscripto");
				alertify.success("Debe registrarse previamente");

				limpiarlogin();




			}else{

				d=r.split('||')
		
		  	

		alertify.confirm('Administrador', 'El alumno/a N° DNI:'+ dniLoginT+'<br>'+'Tramite: <font color="red">'+ d[0]+'</font><br>'+'Observación: <font color="red">'+ d[1]+'</font>', 
          function(){ alertify.error('Se cancelo') }
                , function(){ alertify.error('Se cancelo')});

		limpiarlogin();



			

				

				
			}
		}
	});


}


function enviarAdminPaginaPrinsipalAuxiliar(dniLoginT){



	var usuarioA="auxiliar";

	cadena="dniLoginT=" + dniLoginT + 
			"&usuarioA=" + usuarioA;



	$.ajax({
		type:"POST",
		url:"php/crearSeccionAuxiliar.php",
		data:cadena,
		success:function(r){
			if(r==1){
				limpiarlogin();
			
				window.location.href = "../auxiliar/index.php";
				


			}else{

				
					alertify.error("Fallo el servidor :(");
					

				

				

				
			}
		}
	});


}



function enviarAdminPaginaPrinsipalsecretaria(dniLoginT){



	var usuarioA="secretaria";

	cadena="dniLoginT=" + dniLoginT + 
			"&usuarioA=" + usuarioA;



	$.ajax({
		type:"POST",
		url:"php/crearSeccionSeccretaria.php",
		data:cadena,
		success:function(r){
			if(r==1){
				limpiarlogin();
			
				window.location.href = "../secretaria/index.php";
				


			}else{

				
					alertify.error("Fallo el servidor :(");
					

				

				

				
			}
		}
	});


}


function enviarAdminPaginaPrinsipal(dniLoginT){



	var usuarioA="admin";

	cadena="dniLoginT=" + dniLoginT + 
			"&usuarioA=" + usuarioA;



	$.ajax({
		type:"POST",
		url:"php/crearSeccionAD.php",
		data:cadena,
		success:function(r){
			if(r==1){
				limpiarlogin();
			
				window.location.href = "../gestion/index.php";
				


			}else{

				
					alertify.error("Fallo el servidor :(");
					

				

				

				
			}
		}
	});


}



function enviarDocentePaginaPrinsipal(dniLoginT){



	var usuarioA="docente";

	cadena="dniLoginT=" + dniLoginT + 
			"&usuarioA=" + usuarioA;



	$.ajax({
		type:"POST",
		url:"php/crearSeccionD.php",
		data:cadena,
		success:function(r){
			if(r==1){
				limpiarlogin();
			
				window.location.href = "../docente/index.php";
				


			}else{

				
					alertify.error("Fallo el servidor :(");
					

				

				

				
			}
		}
	});


}


function enviarAlumnoPaginaPrinsipal(dniLoginT){



	var usuarioA="alumno";

	cadena="dniLoginT=" + dniLoginT + 
			"&usuarioA=" + usuarioA;



	$.ajax({
		type:"POST",
		url:"php/crearSeccion.php",
		data:cadena,
		success:function(r){
			if(r==1){

				limpiarlogin();
			
				window.location.href = "../alumno/index.php";
				


			}else{

				
					alertify.error("Fallo el servidor :(");
					

				

				

				
			}
		}
	});


}













function agregardatosDOCEPRE(nombreDocente,dniDocente,actividadDocente,tituloDocente,nTituloDocente,nTelefonicodocente,domicilioDocente,emailDocente,passDocente,passDocente1){

	cadena="nombreDocente=" + nombreDocente + 
			"&dniDocente=" + dniDocente +
			"&actividadDocente=" + actividadDocente +
			"&tituloDocente=" + tituloDocente+
			"&nTituloDocente=" + nTituloDocente+
			"&nTelefonicodocente=" + nTelefonicodocente+
			"&domicilioDocente=" + domicilioDocente+
			"&emailDocente=" + emailDocente+
			"&passDocente=" + passDocente;

if (passDocente1===passDocente) {

	$.ajax({
		type:"POST",
		url:"php/agregarDatosDocente.php",
		data:cadena,
		success:function(r){
			if(r==1){
			
				alertify.success("agregado con exito :)");
				limpiarDocente();


			}else{

				
					alertify.error("Fallo el servidor :(");
					limpiarDocente();

				

				

				
			}
		}
	});

}else{

alertify.error("CONTRASEÑA INCORRECTA");

}

}



function limpiarAlumno(){


  $('#nombreAlumnos').val("");
  $('#dniAlumnos').val("");
  $('#cuilAlumnos').val("");
  $('#domicilioAlumnos').val("");
  $('#emailAlumnos').val("");
  $('#telefonoAlumnos').val("");
  $('#discapasidadAlumnos').val("");
  $('#nombreTutor').val("");
  $('#dniTutor').val("");
  $('#TelefonoTutor').val("");
  $('#obserbacionGeneral').val("");
  $('#passLogin').val("");
  $('#passLogin2').val("");

}


function limpiarAlumnoContraseña(){


  $('#passLogin').val("");
  $('#passLogin2').val("");

}


function limpiarDocente(){

  $('#nombreDocente').val("");
  $('#dniDocente').val("");  
  $('#tituloDocente').val("");
  $('#nTituloDocente').val("");
  $('#nTelefonicodocente').val("");
  $('#domicilioDocente').val("");
  $('#emailDocente').val("");
  $('#passDocente').val("");
  $('#passDocente1').val("");

}



function limpiarlogin(){


  $('#dniLoginT').val("");
  $('#passLoginT').val("");
  $('#usuarioLoginTTT').val("1");
 }






function resultadoBusquedaDOCENTE(buscar){



			$.ajax({
		type:"POST",
		url: 'php/verificarDocente.php',
		data:buscar,
		success:function(r){
			if(r==1){

			$('#resultadoBusquedaDOCENTRTT').html('<font color="red">DOCENTE ESTA REGISTRADO</font>');
			
			 $("#botonAgregarDOCENTE").hide(100); 
				
			}else{
				
				if(r==2){

			$('#resultadoBusquedaDOCENTRTT').html('<font color="green">LISTO PARA REGISTRAR</font>');
			 $("#botonAgregarDOCENTE").show(100); 
				
			}else{

				if(r==0){

			$('#resultadoBusquedaDOCENTRTT').html('<font color="navy">VERIFICANDO</font>');
			$("#botonAgregarDOCENTE").hide(100); 
				
			}else{
				
				alert("ERROR servidor");
			}
				
				
			}
				
			}
		}
	});


}















function resultadoBusquedaAlumno(buscar){



			$.ajax({
		type:"POST",
		url: 'php/verificarAlumno.php',
		data:buscar,
		success:function(r){
			if(r==1){

			$('#resultadoBusquedaAlumno').html('<font color="red">ALUMNO/A ESTA REGISTRADO</font>');
			
			 $("#botonAgregarAlumno").hide(100); 
				
			}else{
				
				if(r==2){

			$('#resultadoBusquedaAlumno').html('<font color="green">LISTO PARA REGISTRAR</font>');
			 $("#botonAgregarAlumno").show(100); 
				
			}else{

				if(r==0){

			$('#resultadoBusquedaAlumno').html('<font color="navy">VERIFICANDO</font>');
			$("#botonAgregarAlumno").hide(100); 
				
			}else{
				
				alert("ERROR servidor");
			}
				
				
			}
				
			}
		}
	});


}










