function editarNotaAnaliticoAlumnoInscripCursado(idCursadoInscp,idAlumnoAnaliticoInscp,idPlanAnaliticoInscp,idAnaliticoInscpCurso){


	   Swal.fire({
        title: '¿Está seguro de editar esta nota?',
        text: "¡Está operación no se puede revertir!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Guardar'
        }).then((result) => {
        if (result.value) {
            


            Swal.fire('Guardado!', 'La nota ha sido Guardada.','success')


           editarNotaAnaliticoAlumnoInscripCursadoFi(idCursadoInscp,idAlumnoAnaliticoInscp,idPlanAnaliticoInscp,idAnaliticoInscpCurso);
        }
        }) 





}



function nuevaNotaAnaliticoAlumnoInscripCursado(idCursadoInscp,idAlumnoAnaliticoInscp,idPlanAnaliticoInscp,idAnaliticoInscpCurso){


	   Swal.fire({
        title: '¿Está seguro de editar esta nota?',
        text: "¡Está operación no se puede revertir!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Guardar'
        }).then((result) => {
        if (result.value) {
            


            Swal.fire('Guardado!', 'La nota ha sido Guardada.','success')


           nuevaNotaAnaliticoAlumnoInscripCursadoFi(idCursadoInscp,idAlumnoAnaliticoInscp,idPlanAnaliticoInscp,idAnaliticoInscpCurso);
        }
        }) 





}

function nuevaNotaAnaliticoAlumnoInscripCursadoFi(idCursadoInscp,idAlumnoAnaliticoInscp,idPlanAnaliticoInscp,idAnaliticoInscpCurso){

	cadena="idCursadoInscp=" + idCursadoInscp + 
			"&idAlumnoAnaliticoInscp=" + idAlumnoAnaliticoInscp +
			"&idPlanAnaliticoInscp=" + idPlanAnaliticoInscp +
			"&idAnaliticoInscpCurso=" + idAnaliticoInscpCurso;

		$.ajax({
			type:"POST",
			url:"php/analiticoAlumno/nuevoInscripCursado.php",
			data:cadena,
			success:function(r){

				if(r==1){
					 $('#tablaAlumnosNota').load('cargaAlumno/alumnoTablaNotaAnalitico.php');
					$('#tablainscpCursa').load('php/analiticoAlumno/tablaInscripCursado.php');
					$('#selecCarrera').load('php/analiticoAlumno/seleccionaCurso.php');
					Swal.fire({
					  position: 'top-end',
					  icon: 'success',
					  title: 'Ya estás inscripto!',
					  showConfirmButton: false,
					  timer: 1500
					})
				}else{
					
					if(r==2){

					Swal.fire({
					  position: 'top-end',
					  icon: 'success',
					  title: 'Ya estás inscripto!',
					  showConfirmButton: false,
					  timer: 1500
					})
					
					
				}else{

					if(r==3){

					Swal.fire('La asignatura correlativa no fue regularizada, por consecuencia no podrás cursarla-')
								
				}else{
					if(r==5){

					Swal.fire({
					  position: 'top-end',
					  icon: 'success',
					  title: 'Ya se encuentra aprobada la asignatura',
					  showConfirmButton: false,
					  timer: 1500
					})
					
					
				}else{
					alertify.error("Fallo el servidor :(");
				}

				}



					

				}





				}
			}
		});
}


function editarNotaAnaliticoAlumnoInscripCursadoFi(idCursadoInscp,idAlumnoAnaliticoInscp,idPlanAnaliticoInscp,idAnaliticoInscpCurso){

	cadena="idCursadoInscp=" + idCursadoInscp + 
			"&idAlumnoAnaliticoInscp=" + idAlumnoAnaliticoInscp +
			"&idPlanAnaliticoInscp=" + idPlanAnaliticoInscp +
			"&idAnaliticoInscpCurso=" + idAnaliticoInscpCurso;
alert(cadena);
		$.ajax({
			type:"POST",
			url:"php/analiticoAlumno/edutarInscripCursado.php",
			data:cadena,
			success:function(r){
				if(r==1){
					 $('#tablaAlumnosNota').load('cargaAlumno/alumnoTablaNotaAnalitico.php');
					$('#tablainscpCursa').load('php/analiticoAlumno/tablaInscripCursado.php');
					
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}






function preguntarSiNoAlumnoInscripCursado(idCusado){

	cadena="idCusado=" + idCusado;

		$.ajax({
			type:"POST",
			url:"php/analiticoAlumno/eliminarInscrip.php",
			data:cadena,
			success:function(r){
				if(r==1){
					 $('#tablaAlumnosNota').load('cargaAlumno/alumnoTablaNotaAnalitico.php');
					$('#tablainscpCursa').load('php/analiticoAlumno/tablaInscripCursado.php');
					
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}








function agregaformALUAlumnoInscripCursado(datos){

	d=datos.split('||');


	$('#idCursadoInscp').val(d[0]);
	$('#idAlumnoAnaliticoInscp').val(d[1]);
	$('#idPlanAnaliticoInscp').val(d[3]);
	$('#idAnaliticoInscpCurso').val(d[2]);

	alertify
  .alert('ADMINISTRADOR','Se seleccionó la inscripción', function(){
    alertify.message('Puede editar ahora');
  });



}













function editarNotaAlumnoInscripcionCursado(inscrp){

$('#selecCarrera').load('php/analiticoAlumno/seleccionaCurso.php');

	d=inscrp.split('||');


	$('#idAlumnoAnaliticoInscp').val(d[0]);
	$('#idPlanAnaliticoInscp').val(d[1]);


idAlumnoAnaliticoInscp=d[0];
idPlanAnaliticoInscp=d[1];

buscarNotaAnaliticoInscriCursado(idPlanAnaliticoInscp,idAlumnoAnaliticoInscp);



dato="INSCRIPCIÓN CURSADO";
verificarFichaInscrcursado(dato);

}




function verificarFichaInscrcursado(dato){

	cadena="dato=" + dato;


		$.ajax({
			type:"POST",
			url:"php/analiticoAlumno/verificarFecha.php",
			data:cadena,
			success:function(r){
			if(r!==""){

			if (r==1) {
				 $("#fechaInsCursa").show();
				  $("#fechaInsCursa2").hide();

			


				}else{
				 $("#fechaInsCursa").hide();
				 $("#fechaInsCursa2").show();
				}
               
			}else{
						alertify.error("Fallo el servidor :(");
			}

			


			}
		});
}























function buscarNotaAnaliticoInscriCursado(idPlanAnaliticoInscp,idAlumnoAnaliticoInscp){

	cadena="idPlanAnaliticoInscp=" + idPlanAnaliticoInscp +
	        "&idAlumnoAnaliticoInscp=" + idAlumnoAnaliticoInscp;


		$.ajax({
			type:"POST",
			url:"php/analiticoAlumno/seccionSeleccion.php",
			data:cadena,
			success:function(r){
			if(r==1){
				
				
				$('#tablainscpCursa').load('php/analiticoAlumno/tablaInscripCursado.php');
				$('#tablainscpCursa2').load('php/analiticoAlumno/tablaInscripCursado2.php');
			
			}else{
				alertify.error("Fallo el servidor :(");
			}

			


			}
		});
}












function editarNotaAlumnoAnalitico(editarAnalitico){

	d=editarAnalitico.split('||');



	$('#idAlumnoAnalitico').val(d[0]);
	$('#idPlanAnalitico').val(d[1]);
	$('#idAsigAnalitico').val(d[2]);

idAlumnoAnalitico=d[0];
idPlanAnalitico=d[1];
idAsigAnalitico=d[2];

buscarNotaAnalitico(idAlumnoAnalitico,idPlanAnalitico,idAsigAnalitico);




}




function buscarNotaAnalitico(idAlumnoAnalitico,idPlanAnalitico,idAsigAnalitico){

	cadena="idAlumnoAnalitico=" + idAlumnoAnalitico + 
			"&idPlanAnalitico=" + idPlanAnalitico +
			"&idAsigAnalitico=" + idAsigAnalitico;


		$.ajax({
			type:"POST",
			url:"php/analiticoAlumno/buscarNotaAnalitico.php",
			data:cadena,
			success:function(datos){

					d=datos.split('||');

					$('#idNota').val(d[0]);
          			$('#notaRegular').val(d[1]);
          			$('#notaFinal').val(d[2]);
          			$('#situacion').val(d[3]);



			}
		});
}

















function nuevaNotaAnaliticoAlumno(idNota,idAlumnoAnalitico,idPlanAnalitico,idAsigAnalitico,notaRegular,notaFinal,situacion){


	   Swal.fire({
        title: '¿Está seguro de agregar esta nota?',
        text: "¡Está operación no se puede revertir!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Guardar'
        }).then((result) => {
        if (result.value) {
            


            Swal.fire('Guardado!', 'La nota ha sido Guardada.','success')


           nuevaNotaAnaliticoAlumnoFinal(idNota,idAlumnoAnalitico,idPlanAnalitico,idAsigAnalitico,notaRegular,notaFinal,situacion);
        }
        }) 





}

function nuevaNotaAnaliticoAlumnoFinal(idNota,idAlumnoAnalitico,idPlanAnalitico,idAsigAnalitico,notaRegular,notaFinal,situacion){

	cadena="idNota=" + idNota + 
			"&idAlumnoAnalitico=" + idAlumnoAnalitico +
			"&idPlanAnalitico=" + idPlanAnalitico +
			"&idAsigAnalitico=" + idAsigAnalitico +
			"&notaRegular=" + notaRegular +
			"&notaFinal=" + notaFinal +
			"&situacion=" + situacion;

		$.ajax({
			type:"POST",
			url:"php/analiticoAlumno/nuevoNotaAnaliticoAlumno.php",
			data:cadena,
			success:function(r){
				if(r==1){
				
					$('#tablaAlumnosNota').load('cargaAlumno/alumnoTablaNotaAnalitico.php');
					alertify.success("Eliminado con éxito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}






function editarNotaAnaliticoAlumno(idNota,idAlumnoAnalitico,idPlanAnalitico,idAsigAnalitico,notaRegular,notaFinal,situacion){


	   Swal.fire({
        title: '¿Está seguro de editar esta nota?',
        text: "¡Está operación no se puede revertir!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Guardar'
        }).then((result) => {
        if (result.value) {
            


            Swal.fire('Guardado!', 'La nota ha sido Guardada.','success')


           editarNotaAnaliticoAlumnoFinal(idNota,idAlumnoAnalitico,idPlanAnalitico,idAsigAnalitico,notaRegular,notaFinal,situacion);
        }
        }) 





}

function editarNotaAnaliticoAlumnoFinal(idNota,idAlumnoAnalitico,idPlanAnalitico,idAsigAnalitico,notaRegular,notaFinal,situacion){

	cadena="idNota=" + idNota + 
			"&idAlumnoAnalitico=" + idAlumnoAnalitico +
			"&idPlanAnalitico=" + idPlanAnalitico +
			"&idAsigAnalitico=" + idAsigAnalitico +
			"&notaRegular=" + notaRegular +
			"&notaFinal=" + notaFinal +
			"&situacion=" + situacion;

		$.ajax({
			type:"POST",
			url:"php/analiticoAlumno/editarNotaAnaliticoAlumno.php",
			data:cadena,
			success:function(r){
				if(r==1){
				
					$('#tablaAlumnosNota').load('cargaAlumno/alumnoTablaNotaAnalitico.php');
					alertify.success("Eliminado con éxito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}

// inscrip finales




function editarNotaAlumnoInscripcionMesa(inscrp){

	d=inscrp.split('||');


	$('#idAlumnoAnaliticoInscpF').val(d[0]);
	$('#idPlanAnaliticoInscpF').val(d[1]);

tablaincribirAlumno(d[0]);

idAlumnoAnaliticoInscpF=d[0];
idPlanAnaliticoInscpF=d[1];

buscarNotaAnaliticoInscriFinal(idPlanAnaliticoInscpF,idAlumnoAnaliticoInscpF);




datos="INSCRIPCIÓN FINAL";
verificarFichaInscrFinal(datos);




}



function tablaincribirAlumno(dato){

	cadena="dato=" + dato;


		$.ajax({
			type:"POST",
			url:"php/analiticoAlumno/busc.php",
			data:cadena,
			success:function(r){

			if(r!==""){
				$('#tablainscpCursaFinal').load('php/analiticoAlumno/tablaFinal.php');
				$('#tablainscpCursaFinal2').load('php/analiticoAlumno/tablaFinal2.php');
			}else{
				alertify.error("Fallo el servidor :(");
			}

			


			}
		});
}













function verificarFichaInscrFinal(dato){

	cadena="dato=" + dato;


		$.ajax({
			type:"POST",
			url:"php/analiticoAlumno/verificarFecha2.php",
			data:cadena,
			success:function(r){

			if(r!==""){

			if (r==1) {
				 $("#fechaIns").show();
				 $("#fechaIns2").hide();
				}else{
				 $("#fechaIns").hide();
				 $("#fechaIns2").show();

				 
				}
               
			}else{
						alertify.error("Fallo el servidor :(");
			}

			


			}
		});
}














function buscarNotaAnaliticoInscriFinal(idPlanAnaliticoInscpF,idAlumnoAnaliticoInscpF){

	cadena="idAlumnoAnaliticoInscpF=" + idAlumnoAnaliticoInscpF +
	        "&idPlanAnaliticoInscpF=" + idPlanAnaliticoInscpF;


		$.ajax({
			type:"POST",
			url:"php/analiticoAlumno/seccionSeleccionF.php",
			data:cadena,
			success:function(r){
			if(r==1){
				
				$('#selecCarreraF').load('php/analiticoAlumno/seleccionaFinal.php');
				 // $('#tablaAlumnosNota').load('cargaAlumno/alumnoTablaNotaAnalitico.php');
				// $('#tablainscpCursa').load('php/analiticoAlumno/tablaInscripCursado.php');
				
			}else{
						alertify.error("Fallo el servidor :(");
			}

			


			}
		});
}





function inscriCursaApm(idAlumnoAnalitico,idPlanAnalitico,idAsigAnalitico){




cadena="idPlanAnalitico=" + idPlanAnalitico +
			"&idAsigAnalitico=" + idAsigAnalitico +
			"&idAlumnoAnalitico=" + idAlumnoAnalitico;

idhora="";
carrera="";
curso="";
asign="";
profe="";
diaHorario="";
hI="";
hF="";

		$.ajax({
			type:"POST",
			url:"php/analiticoAlumno/inscribirRapido.php",
			data:cadena,
			success:function(datos){

            if (datos==0) {

            	alertify
  .alert('ADMINISTRADOR','No hay cursos creados para esta asignatura', function(){
    alertify.message('Consulte con la institución');
  });

            }else{

				d=datos.split('||');


			   idhora=d[0];
               carrera=d[1];
               curso=d[2];
               asign=d[3];
               profe=d[4];
               diaHorario=d[5];
               hI=d[6];
               hF=d[7];

           
					
			InscribirCursaAsigna(idAlumnoAnalitico,idhora,idPlanAnalitico,carrera,curso,asign,profe,diaHorario,hI,hF);

			}
				

			}
		});







function InscribirCursaAsigna(idAlumnoAnalitico,idhora,idPlanAnalitico,carrera,curso,asign,profe,diaHorario,hI,hF){


	   Swal.fire({
        title: '¿Está seguro de editar esta nota?',
        text: "DATOS: "+carrera+'; '+curso+'; '+asign+'; '+profe+'; '+'Horarios:'+diaHorario+'-'+hI+'-'+hF,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Guardar'
        }).then((result) => {
        if (result.value) {
            


            Swal.fire('Guardado!', 'La nota ha sido Guardada.','success')


           nuevaNadoFiRapido(idAlumnoAnalitico,idhora,idPlanAnalitico);
        }
        }) 





}






}


function nuevaNadoFiRapido(idAlumnoAnalitico,idhora,idPlanAnalitico){

	cadena="idAlumnoAnalitico="+ idAlumnoAnalitico + 
			"&idhora="+ idhora +
			"&idPlanAnalitico=" + idPlanAnalitico;



		$.ajax({
			type:"POST",
			url:"php/analiticoAlumno/inscrCursaRap.php",
			data:cadena,
			success:function(r){
				if(r==1){
					 $('#tablaAlumnosNota').load('cargaAlumno/alumnoTablaNotaAnalitico.php');
					$('#tablainscpCursa').load('php/analiticoAlumno/tablaInscripCursado.php');
				
				}else{
					if(r==5){
					 

					Swal.fire('La asignatura correlativa no fue regularizada, por consecuencia no podrás cursarla-')
				}else{
					alertify.error("Fallo el servidor :(");
				}
				}
			}
		});
}




// finales
 





function nuevaNotaAnaliticoAlumnoFin(idFinalInscp,idPlanAnaliticoInscpF,idAlumnoAnaliticoInscpF,idAnaliticoInscpCursoF,notaRegular2,notaFinal2,equivalente2){

	cadena="idFinalInscp=" + idFinalInscp + 
			"&idPlanAnaliticoInscpF=" + idPlanAnaliticoInscpF +
			"&idAlumnoAnaliticoInscpF=" + idAlumnoAnaliticoInscpF +
			"&idAnaliticoInscpCursoF=" + idAnaliticoInscpCursoF +
			"&notaRegular2=" + notaRegular2 +
			"&notaFinal2=" + notaFinal2 +
			"&equivalente2=" + equivalente2;



$.ajax({
			type:"POST",
			url:"php/analiticoAlumno/buscarEqui.php",
			data:cadena,
			success:function(datos){
				if(datos!==''){


					d=datos.split('||');

					
					asiEqui=d[0];
					regul=d[1];
					final=d[2];

					
		

if (equivalente2==="") {

	if (notaRegular2==="1" && notaFinal2!=="1") {

	Swal.fire("Esta asignatura esta Regularizada,se procesará la inscripción");
	inscribirFinal(cadena,idAlumnoAnaliticoInscpF);

		
}else{

Swal.fire("No es posible inscribirse a esta asignatura para final, porque no has regularizado o la asignatura ya está aprobada");

}




}else{


if (notaRegular2==="1" && notaFinal2!=="1") {


if (final>=6) {
	Swal.fire("Se procesará la inscripción");
	inscribirFinal(cadena,idAlumnoAnaliticoInscpF);
}

if (regul>=6 && final==="") {
	Swal.fire("Se procesará la inscripción, pero debes inscribirte a la asignatura"+asiEqui+" y debes aprobar para poder presentarte en la mesa actual !");
	inscribirFinal(cadena,idAlumnoAnaliticoInscpF);
}

if (regul==="" && final==="") {
	Swal.fire("No podes inscribirte porque no tenes regularizada ni aprobada la asignatura"+asiEqui+" que es su correlativa");
}






}else{


Swal.fire("No puede inscribirse porque no regularizó o ya está aprobada");


}
}



		}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});










}






function inscribirFinal(cadena,idAlumnoAnaliticoInscpF){

dato=idAlumnoAnaliticoInscpF;
		$.ajax({
			type:"POST",
			url:"php/analiticoAlumno/iscpr.php",
			data:cadena,
			success:function(r){
				
				if(r==1){
				
					tablaincribirAlumno(dato);
					alertify.success("Listo");
				}else{
					if (r==2) {
					alertify.success("Ya estás inscripto");	
					}else{
						alertify.error("Fallo el servidor :(");
					}


					
				}
			}
		});
}







function preguntarSiNoAlumnoTRIFinal(datos){


d=datos.split('||');

cadena="idFinal="+ d[0]; 
			
dato=d[1];

		$.ajax({
			type:"POST",
			url:"php/analiticoAlumno/eliminarFinal.php",
			data:cadena,
			success:function(r){
			
				if(r==1){
				
					tablaincribirAlumno(dato);
					
				}else{

			
					alertify.error("Fallo el servidor :(");
				


					
				}
			}
		});
}



