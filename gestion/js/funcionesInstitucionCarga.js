agregaAsignaturasPlanInstitucionAsignaturaEditarCorrelatica
function AGREGARDAOTOSInstut(datos2){


cadena="idInstitucion=" + datos2;
	

	$.ajax({
		type:"POST",
		url:"php/institucionalCarga/BuscarInstitucion.php",
		data:cadena,
		success:function(datos){
			if(datos==""){
			alertify.success("No hay escuela inscripta");


			}else{

				d=datos.split('||');

	
				$('#nombre').val(d[2]);
			    $('#cue').val(d[1]);
			    $('#domicilio').val(d[3]);
			    $('#tel').val(d[4]);
			    $('#email').val(d[5]);
			 

				
			}
		}
	});






}

function   agregardatosinstitu(nombre,cue,domicilio,tel,email){

	cadena="nombre=" + nombre + 
			"&cue=" + cue +
			"&domicilio=" + domicilio+
			"&tel=" + tel+
			"&email=" + email;

		

	$.ajax({
		type:"POST",
		url:"php/institucionalCarga/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#menuCargaInstitucion').load('cargaInstitucional/institucionTabla.php');
				
				 
				alertify.success("agregado con exito :)");
				

			}else{

				alertify.error("Fallo el servidor :(");

				
			}
		}
	});

}


function agregaformDffinstitucionInstitucion(idInstitucion){


cadena="idInstitucion=" + idInstitucion;
	

	$.ajax({
		type:"POST",
		url:"php/institucionalCarga/BuscarInstitucion.php",
		data:cadena,
		success:function(datos){
			if(datos==""){
			alertify.success("No hay escuela inscripta");


			}else{

				d=datos.split('||');


	
				$('#idInstitucion').val(d[0]);
				$('#nombreU').val(d[2]);
			    $('#cueU').val(d[1]);
			    $('#domicilioU').val(d[3]);
			    $('#telU').val(d[4]);
			    $('#emailU').val(d[5]);
			
							
			}
		}
	});

	

}



function infoInstutucionPRINCIPIO(idInstitucion){


cadena="idInstitucion=" + idInstitucion;
	

	$.ajax({
		type:"POST",
		url:"php/institucionalCarga/BuscarInstitucion.php",
		data:cadena,
		success:function(datos){
			if(datos==""){
			alertify.success("No hay escuela inscripta");


			}else{

				d=datos.split('||');


				function visualiarInstitucion(){
	alertify.confirm('DATOS INSTITUCIONAL', '<b><u>NOMBRE DE LA INSTITUCIÓN:</u></b>'+d[2]+'<br>'
						+'<b><u>CUE:</u></b>'+ d[1]
						+'<br><b><u>DOMICILIO:</u></b>'+ d[3]
						+'<br><b><u>TELEFONO:</u></b>'+ d[4]
						+'<br><b><u>EMAIL:</u></b>'+d[5], 
					function(){ alertify.success('Fin de la operación')}
                , function(){ alertify.error('Se cancelo')});
}

visualiarInstitucion();

	
				
							
			}
		}
	});






}



function actualizaDatosnnnn(){

	idInstitucion=$('#idInstitucion').val();
	nombreU=$('#nombreU').val();
    domicilioU=$('#domicilioU').val();
    telU=$('#telU').val();
    emailU=$('#emailU').val();


	cadena= "idInstitucion=" + idInstitucion +
			"&nombreU=" + nombreU + 
			"&domicilioU=" + domicilioU+
			"&telU=" + telU+
			"&emailU=" + emailU;


	$.ajax({
		type:"POST",
		url:"php/institucionalCarga/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#menuCargaInstitucion').load('cargaInstitucional/institucionTabla.php');
				
				alertify.success("Actualizado con exito :)");
				
			}else{
				alertify.error("Fallo el servidor :(");
			
			}
		}
	});

}


function preguntarSiNoTinstituionInstucon(idInstitucion){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatosInstitucionTOTA(idInstitucion) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatosInstitucionTOTA(idInstitucion){

	cadena="idInstitucion=" + idInstitucion;


	

		$.ajax({
			type:"POST",
			url:"php/institucionalCarga/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#menuCargaInstitucion').load('cargaInstitucional/institucionTabla.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}


// Plan Institucion






function   agregardatosinstituPlan(institucionPlan,reguisCarre,nombreCarre){

	cadena="institucionPlan=" + institucionPlan + 
			"&reguisCarre=" + reguisCarre +
			"&nombreCarre=" + nombreCarre;

		

	$.ajax({
		type:"POST",
		url:"php/institucionalCarga/agregarDatosPlan.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#menuCargaInstitucion').load('cargaInstitucional/institucionTabla.php');
				
				 
				alertify.success("agregado con exito :)");
				

			}else{

				alertify.error("Fallo el servidor :(");

				
			}
		}
	});

}


function agregaformDffinstitucionInstitucionPlan(idPlan){


cadena="idPlan=" + idPlan;
	

	$.ajax({
		type:"POST",
		url:"php/institucionalCarga/buscarPlan.php",
		data:cadena,
		success:function(datos){
			if(datos==""){
			alertify.success("No hay Plan inscripto");


			}else{

				d=datos.split('||');


	
				$('#idPlan').val(d[0]);
				$('#institucionPlanU').val(d[1]);
			    $('#reguisCarreU').val(d[2]);
			    $('#nombreCarreU').val(d[3]);
			   
							
			}
		}
	});

}


function actualizaDatosnnnnPlan(){
	alertify.confirm('Administrador', '¿Esta seguro de editar este registro?', 
					function(){ actualizaDatosnnnnPlanFin() }
                , function(){ alertify.error('Se cancelo')});
}






function actualizaDatosnnnnPlanFin(){

	idPlan=$('#idPlan').val();
	institucionPlanU=$('#institucionPlanU').val();
    reguisCarreU=$('#reguisCarreU').val();
    nombreCarreU=$('#nombreCarreU').val();
   

	cadena= "idPlan=" + idPlan +
			"&institucionPlanU=" + institucionPlanU + 
			"&reguisCarreU=" + reguisCarreU +
			"&nombreCarreU=" + nombreCarreU;


	$.ajax({
		type:"POST",
		url:"php/institucionalCarga/actualizaDatosPlan.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#menuCargaInstitucion').load('cargaInstitucional/institucionTabla.php');
				
				alertify.success("Actualizado con exito :)");
				
			}else{
				alertify.error("Fallo el servidor :(");
			
			}
		}
	});

}


function preguntarSiNoTinstituionInstuconPlan(idPlan){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatosInstitucionTOTAPlan(idPlan) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatosInstitucionTOTAPlan(idPlan){

	cadena="idPlan=" + idPlan;


	

		$.ajax({
			type:"POST",
			url:"php/institucionalCarga/eliminarDatosPlan.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#menuCargaInstitucion').load('cargaInstitucional/institucionTabla.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}




function agregaAsignaturasPlanInstitucionAsignatura(idPlan){



			


cadena="idPlan=" + idPlan;


	

	$.ajax({
		type:"POST",
		url:"php/institucionalCarga/buscarPlanAsig.php",
		data:cadena,
		success:function(datos){
			if(datos==""){
			alertify.success("No hay Plan inscripto");


			}else{

			

				d=datos.split('||');


			    $('#idPlan1').val(idPlan);
			    $('#idInstitucion1').val(d[1]); 
			   


			    menuPrincipalMATERIASCalifAsignauraCarrera();


			}
		}
	});

	

}


function cessionAsignaturaTotal(idPlan){




cadena="idPlan=" + idPlan;


	

	$.ajax({
		type:"POST",
		url:"php/institucionalCarga/cession.php",
		data:cadena,
		success:function(datos){
			if(datos==""){
			alertify.success("No hay Plan inscripto");


			}else{

			
				alertify.success("Listo");


				$('#asignaturaCarrera').load('cargaInstitucional/Asignatura.php');
			

				
			}
		}
	});

	agregaAsignaturasPlanInstitucionAsignatura(idPlan);


}






// Asigna




function   agregardatosinstituAsignaturato(idPlan1,idInstitucion1,ciclo,nombreAsig,duracionCarrera,horaAsig){

	cadena="idPlan1=" + idPlan1 + 
			"&idInstitucion1=" + idInstitucion1 +
			"&ciclo=" + ciclo + 
			"&nombreAsig=" + nombreAsig +
			"&duracionCarrera=" + duracionCarrera +
			"&horaAsig=" + horaAsig;

		

	$.ajax({
		type:"POST",
		url:"php/institucionalCarga/agregarDatosPlanAsignatura.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#asignaturaCarrera').load('cargaInstitucional/Asignatura.php');
				
				 
				alertify.success("agregado con exito :)");
				

			}else{

				alertify.error("Fallo el servidor :(");

				
			}
		}
	});

}



function agregaAsignaturasPlanInstitucionAsignaturaEditar(idAsig){



			


cadena="idAsig=" + idAsig;


	

	$.ajax({
		type:"POST",
		url:"php/institucionalCarga/buscarPlanAsigEd.php",
		data:cadena,
		success:function(datos){
			if(datos==""){
			alertify.success("No hay Plan inscripto");


			}else{

			

				d=datos.split('||');



			    $('#idasig2').val(d[0]);
			    $('#idInstitucion2').val(d[1]); 
			    $('#idPlan2').val(d[2]);
			    $('#ciclo2').val(d[3]); 
			    $('#nombreAsig2').val(d[4]);
			    $('#duracionCarrera2').val(d[5]); 
			    $('#horaAsig2').val(d[6]); 
			   



			}
		}
	});

	

}




function actualizaDatosnnnnAsignaturaTor(){
	alertify.confirm('Administrador', '¿Esta seguro de editar este registro?', 
					function(){ actualizaDatosnnnnAsignaturaTorFin() }
                , function(){ alertify.error('Se cancelo')});
}






function actualizaDatosnnnnAsignaturaTorFin(){



	idasig2=$('#idasig2').val();
	idInstitucion2=$('#idInstitucion2').val();
    idPlan2=$('#idPlan2').val();
    ciclo2=$('#ciclo2').val();
    nombreAsig2=$('#nombreAsig2').val();
    duracionCarrera2=$('#duracionCarrera2').val();
    horaAsig2=$('#horaAsig2').val();
   

	cadena= "idasig2=" + idasig2 +
			"&idInstitucion2=" + idInstitucion2 + 
			"&idPlan2=" + idPlan2 +
			"&ciclo2=" + ciclo2 +
			"&nombreAsig2=" + nombreAsig2 + 
			"&duracionCarrera2=" + duracionCarrera2 +
			"&horaAsig2=" + horaAsig2;


	$.ajax({
		type:"POST",
		url:"php/institucionalCarga/edDatosPlanAsignaturaEd.php",
		data:cadena,
		success:function(r){
			
			if(r==1){


				


				$('#asignaturaCarrera').load('cargaInstitucional/Asignatura.php');
				


				alertify.success("Actualizado con exito :)");
				
			}else{
				alertify.error("Fallo el servidor :(");
			
			}
		}
	});

}



function eliminarAsignaturaCursoTot(idAsig){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatosInstitucionTOTAPlan(idAsig) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatosInstitucionTOTAPlan(idAsig){

	cadena="idAsig=" + idAsig;


	

		$.ajax({
			type:"POST",
			url:"php/institucionalCarga/eliminarAsignaturaPlan.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#asignaturaCarrera').load('cargaInstitucional/Asignatura.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}


function agregaAsignaturasPlanInstitucionAsignaturaEditarCorrelatica(idAsigC){

	cadena="idAsigC=" + idAsigC;


		$.ajax({
			type:"POST",
			url:"php/institucionalCarga/cessionC.php",
			data:cadena,
			success:function(r){
				if(r!=""){
					$('#tablaselecTotal').html(r);
					
					agregaAsignaturasPlassssssssPPPPs();




	




					alertify.success("exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}






function agregaAsignaturasPlassssssssPPPPs(){


	idasig3=$('#idasig3').val();

	cadena="idasig3=" + idasig3;


		$.ajax({
			type:"POST",
			url:"php/institucionalCarga/cuu.php",
			data:cadena,
			success:function(r){
				if(r!=""){
					$('#tablMirar').load('cargaInstitucional/tablaCorrelativa.php');

					alertify.success("exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}








				








function   agregardatosinstituAsignaturatoCorrelativa(idasig3,idPlan3,idInstitucion3,asignaturaCo1,asignaturaCo2){

	cadena="idasig3=" + idasig3 + 
			"&idPlan3=" + idPlan3 +
			"&idInstitucion3=" + idInstitucion3 + 
			"&asignaturaCo1=" + asignaturaCo1 + 
			"&asignaturaCo2=" + asignaturaCo2;

		

	$.ajax({
		type:"POST",
		url:"php/institucionalCarga/agregarDatosPlanCorre.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tablMirar').load('cargaInstitucional/tablaCorrelativa.php');
				
				 
				alertify.success("agregado con exito :)");
				

			}else{

				alertify.error("Fallo el servidor :(");

				
			}
		}
	});

}





function preguntarSiNoTinstituionInstuconCorrelativa(idCorrelativa){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ preguntarSiNoTinstituionInstuconCorrelativaFF(idCorrelativa) }
                , function(){ alertify.error('Se cancelo')});
}

function preguntarSiNoTinstituionInstuconCorrelativaFF(idCorrelativa){

	cadena="idCorrelativa=" + idCorrelativa;


	

		$.ajax({
			type:"POST",
			url:"php/institucionalCarga/eliminarDatosPlanCorr.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tablMirar').load('cargaInstitucional/tablaCorrelativa.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}


function camposVaciosIns(){
	alertify.confirm('Administrador dice !', 'Los campos estan vacíos o incopletos', 
					function(){ alertify.error('Se cancelo')}
                , function(){ alertify.error('Se cancelo')});
}
