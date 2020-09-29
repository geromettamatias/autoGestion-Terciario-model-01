function camposVacios(){
	alertify.confirm('Administrador dice !', 'Los campos estan vacíos o incopletos', 
					function(){ alertify.error('Se cancelo')}
                , function(){ alertify.error('Se cancelo')});
}





function agregardatosCursoCursoNuevoTER(carreraCargaCurso,cursoCargaCurso){

	cadena="carreraCargaCurso=" + carreraCargaCurso+
			"&cursoCargaCurso=" + cursoCargaCurso;

	$.ajax({
		type:"POST",
		url:"php/cursoCarga/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#menuCargaCurso').load('cargaCurso/cursoTabla.php');
		
				alertify.success("agregado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function agregaformCursoTER(datos){

	d=datos.split('||');
	$('#idCurs').val(d[0]);
	$('#carreraCargaCursoU').val(d[4]);
	$('#cursoCargaCursoU').val(d[5]);
	


}







function actualizaDatosCursoCursoNuevoTER(){

	idCurs=$('#idCurs').val();
	carreraCargaCursoU=$('#carreraCargaCursoU').val();
	cursoCargaCursoU=$('#cursoCargaCursoU').val();

	

	cadena= "idCurs=" + idCurs +
			"&carreraCargaCursoU=" + carreraCargaCursoU +
			"&cursoCargaCursoU=" + cursoCargaCursoU;


	$.ajax({
		type:"POST",
		url:"php/cursoCarga/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#menuCargaCurso').load('cargaCurso/cursoTabla.php');				

				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function preguntarSiNoCursoTer(idcurso){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatos(idcurso) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(idcurso){

	cadena="idcurso=" + idcurso;

		$.ajax({
			type:"POST",
			url:"php/cursoCarga/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#menuCargaCurso').load('cargaCurso/cursoTabla.php');
				
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}


// esta parte es para las funciones de la asignaturas


function idCursototer(idcurso){


	cadena="idcurso=" + idcurso;

	ceesiocursoSsii(idcurso);


    $.ajax({
      url:"php/cursoCarga/tablaMaterias.php",
      type: 'POST',
      data: cadena,
    })
    .done(function(res){
      $('#idAsig').html(res);
      $('#tablahorarios').load('php/cursoCarga/tablaAsigPre.php');
    })
    .fail(function(){
      console.log("error");
    })
    .always(function(){
      console.log("completo");
    })





}



function ceesiocursoSsii(idcurso){


	cadena="idcurso=" + idcurso;

	$.ajax({
			type:"POST",
			url:"php/cursoCarga/crearsession.php",
			data:cadena,
			success:function(r){

				if(r==1){
					
				
					alertify.success("exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});

}



function agregarhoracorsoEditar(idhora,idAsigD,diaHorario,horarioI,horarioF,idPersonal){



	cadena= "idhora=" + idhora +
			"&idAsig=" + idAsigD +
			"&diaHorario=" + diaHorario +
			"&horarioI=" + horarioI +
			"&horarioF=" + horarioF +
			"&idPersonal=" + idPersonal;





if (idhora!=="") {

editarHorariCorso(cadena);

}else{



agreHorariCorso(cadena);
}


}

function agreHorariCorso(cadena){
	alertify.confirm('Administrador', 'Se agregara datos a la base de datos?', 
					function(){ agreHorariCorsoFF(cadena) }
                , function(){ alertify.error('Se cancelo')});
}


function agreHorariCorsoFF(cadena){


		$.ajax({
			type:"POST",
			url:"php/cursoCarga/AgreDatosHorario.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tablahorarios').load('php/cursoCarga/tablaAsigPre.php');
				
					alertify.success("Se agrego los datos con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}


function editarHorariCorso(cadena){
	alertify.confirm('Administrador', 'Se editar datos a la base de datos?', 
					function(){ editarHorariCorsoFF(cadena) }
                , function(){ alertify.error('Se cancelo')});
}

function editarHorariCorsoFF(cadena){


		$.ajax({
			type:"POST",
			url:"php/cursoCarga/EdiDatosHorario.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tablahorarios').load('php/cursoCarga/tablaAsigPre.php');
				
					alertify.success("Actualización exitosa!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}




function eliminarHorariCorso(idhora){
	alertify.confirm('Administrador', 'Se eliminara datos a la base de datos?', 
					function(){ eliminarHorariCorsoF(idhora) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarHorariCorsoF(idhora){

cadena= "idhora=" + idhora;
		$.ajax({
			type:"POST",
			url:"php/cursoCarga/eliminarhorarioTab.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tablahorarios').load('php/cursoCarga/tablaAsigPre.php');

					simplieza();
				
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}


function agregarDatosEdiTbla(idhora){
	alertify.confirm('Administrador', '¿Desea seleccionar estos datos?', 
					function(){ agregarDatosEdiTblaFFF(idhora) }
                , function(){ alertify.error('Se cancelo')});
}


function agregarDatosEdiTblaFFF(idhora){


cadena="idhora=" + idhora;


	$.ajax({
		type:"POST",
		url:"php/cursoCarga/buscarCursoHorario.php",
		data:cadena,
		success:function(datos){
			if(datos==""){
			alertify.success("No hay escuela inscripta");


			}else{

				d=datos.split('||');

	
				$('#idhora').val(d[0]);
			    $('#idAsigD').val(d[3]);
			    $('#diaHorario').val(d[5]);
			    $('#horarioI').val(d[6]);
			    $('#horarioF').val(d[7]);
			    $('#idPersonal').val(d[8]);
			 

			}
		}
	});






}



function simplieza(){

$('#idhora').val("");
$('#idAsigD').val("0");
$('#diaHorario').val("");
$('#horarioI').val("");
$('#horarioF').val("");
$('#idPersonal').val("SIN PROFESOR");




}



function infoTablaEdit(idhora){



	cadena= "idhora=" + idhora;


	$.ajax({
		type:"POST",
		url:"php/cursoCarga/buscarHu.php",
		data:cadena,
		success:function(datos){
			if(datos==""){
			alertify.success("No hay escuela inscripta");


			}else{

				d=datos.split('||');

	
				asig=d[0];
			    prof=d[3];
			    Dias=d[4];
			    horariI=d[1];
			    horariF=d[2];





			  

			    function informetotslttt(){
				alertify.confirm('Horarios', '<b><u>Asignatura:</u></b>'+asig+'<br>'
									+'<br><b><u>Dias:</u></b>'+ Dias
									+'<br><b><u>Horario Inicial:</u></b>'+ horariI
									+'<br><b><u>Horario Final:</u></b>'+ horariF
									+'<br><b><u>Profesor:</u></b>'+ prof, 
								function(){ alertify.success('Fin de la operación') }
			                , function(){ alertify.error('Se cancelo')});
			}
				
				informetotslttt();


			   
			 

			}
		}
	});






}








