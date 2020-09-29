function preguntarSiNoCursoTerFec(idFecha){


	   Swal.fire({
        title: '¿Está seguro de eliminar la fecha de Inscripción?',
        text: "¡Está operación no se puede revertir!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Eliminar'
        }).then((result) => {
        if (result.value) {
            


            Swal.fire('Eliminar!', 'La fecha de Inscripción ha sido eliminada.','success')


           preguntarSiNoCursoTerFect(idFecha);
        }
        }) 





}


function preguntarSiNoCursoTerFect(idFecha){

	cadena="idFecha=" + idFecha;


		$.ajax({
			type:"POST",
			url:"php/mesaExamen/eliminar.php",
			data:cadena,
			success:function(r){
			if(r==1){
				
				$('#fechaInscrCursado').load('mesaExamen/fechaTabla.php');
      		
			}else{
				alertify.error("Fallo el servidor :(");
			}

			


			}
		});
}


















function agregaformCursoTERFec(datos){

	d=datos.split('||');

 
 $('#idFecha').val(d[0]);
 $('#situacionCursFinalU').val(d[3]);
 $('#desdeFU').val(d[1]);
 $('#hastaFU').val(d[2]);

   

}



function agregardatFechasMesas(situacionCursFinal,desdeF,hastaF){

	cadena="situacionCursFinal=" + situacionCursFinal +
	        "&desdeF=" + desdeF +
	        "&hastaF=" + hastaF;


		$.ajax({
			type:"POST",
			url:"php/mesaExamen/nuevaFecha.php",
			data:cadena,
			success:function(r){
			if(r==1){
				
				$('#fechaInscrCursado').load('mesaExamen/fechaTabla.php');
      			
			
			}else{
				alertify.error("Fallo el servidor :(");
			}

			


			}
		});
}






function agregardatFechasMesasEdi(idFecha,situacionCursFinalU,desdeFU,hastaFU){

	cadena="idFecha=" + idFecha +
	        "&situacionCursFinalU=" + situacionCursFinalU +
	        "&desdeFU=" + desdeFU +
	        "&hastaFU=" + hastaFU;


		$.ajax({
			type:"POST",
			url:"php/mesaExamen/editarFecha.php",
			data:cadena,
			success:function(r){
			if(r==1){
				
				$('#fechaInscrCursado').load('mesaExamen/fechaTabla.php');
      			
			
			}else{
				alertify.error("Fallo el servidor :(");
			}

			


			}
		});
}







function agregardatosAlumnosAlumnoTERMesa(idhoraFinal,fech1,fech2,prof1,prof2){

	cadena="idhoraFinal=" + idhoraFinal +
	        "&fech1=" + fech1 +
	        "&fech2=" + fech2 +
	        "&prof1=" + prof1 +
	        "&prof2=" + prof2;


		$.ajax({
			type:"POST",
			url:"php/mesaExamen/nuevaMesaExamen.php",
			data:cadena,
			success:function(r){
			if(r==1){
				
				$('#tablaMesa').load('mesaExamen/mesaExamen.php');
      			
			}else{
				alertify.error("Fallo el servidor :(");
			}

			


			}
		});
}




function agregaformALUAlumnoMesaTOTA(datos){

	d=datos.split('||');

 $('#idmesa').val(d[0]);

 $('#asignaturacompet23').html(d[12]+"--"+d[13]+"--"+d[14]);
 $('#prof1U').val(d[2]);
 $('#prof2U').val(d[3]);
 $('#fech1U').val(d[4]);
 $('#fech2U').val(d[5]);


      

}





function editardatosAlumnosAlumnoTERMesa(idmesa,fech1U,fech2U,prof1U,prof2U){


	   Swal.fire({
        title: '¿Está seguro de editar la mesa de examen?',
        text: "¡Está operación no se puede revertir!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Editar'
        }).then((result) => {
        if (result.value) {
            


            Swal.fire('¡Editar!', 'La mesa de examen ha sido editada.','success')


           editardatosAlumnosAlumnoTERMesa12(idmesa,fech1U,fech2U,prof1U,prof2U);
        }
        }) 





}



function editardatosAlumnosAlumnoTERMesa12(idmesa,fech1U,fech2U,prof1U,prof2U){

	cadena="idmesa=" + idmesa +
	        "&fech1U=" + fech1U +
	        "&fech2U=" + fech2U +
	        "&prof1U=" + prof1U +
	        "&prof2U=" + prof2U;


		$.ajax({
			type:"POST",
			url:"php/mesaExamen/EDITARMesaExamen.php",
			data:cadena,
			success:function(r){
			if(r==1){
				
				$('#tablaMesa').load('mesaExamen/mesaExamen.php');
      			

			}else{
				alertify.error("Fallo el servidor :(");
			}

			


			}
		});
}




function eliminardatosAlumnosAlumnoTERMesa(idMesa){


	   Swal.fire({
        title: '¿Está seguro de eliminar la mesa de examen?',
        text: "¡Está operación no se puede revertir!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Eliminar'
        }).then((result) => {
        if (result.value) {
            


            Swal.fire('¡Eliminar!', 'La mesa de examen ha sido eliminada.','success')


           eliminardatosAlumnosAlumnoTERMesa12(idMesa);
        }
        }) 





}



function eliminardatosAlumnosAlumnoTERMesa12(idMesa){

	cadena="idMesa=" + idMesa;

		$.ajax({
			type:"POST",
			url:"php/mesaExamen/eliminarMesa.php",
			data:cadena,
			success:function(r){

			if(r==1){
				
				$('#tablaMesa').load('mesaExamen/mesaExamen.php');
      			
				alertify.success("éxito!");
			}else{
				alertify.error("Fallo el servidor :(");
			}

			


			}
		});
}





function eliminartodosCursados(){


Swal.fire({
        title: 'CONTRASEÑA',
        html:
        '<div class="form-group"><div class="row"><div class="col"><input id="contr" type="text" class="form-control"></div></div></div>', 
        focusConfirm: false,
        showCancelButton: true,                         
        }).then((result) => {
          if (result.value) {                                             
            cont = document.getElementById('contr').value,    
           
            mensaj(cont);

                            
          }

          function mensaj(cont){


          if (cont==="123") {

          	eliminarAlumCursa();

          	 Swal.fire(
              '¡Actualizado!',
              'El registro ha sido actualizado.',
              'success'


            ) 
			}else{
           Swal.fire({
				  icon: 'error',
				  title: 'Contraseña incorrecta',
				  text: 'Consulte con el administrador!',
				  footer: '<a href>Why do I have this issue?</a>'
				})
          	 }

          }


    function eliminarAlumCursa(){

	cadena="idFecha=" + "";


		$.ajax({
			type:"POST",
			url:"php/mesaExamen/eliminarCusado.php",
			data:cadena,
			success:function(r){
			if(r==1){
      		
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
		});
			
	}

	 	});
}




function eliminartodosFinales(){


Swal.fire({
        title: 'CONTRASEÑA',
        html:
        '<div class="form-group"><div class="row"><div class="col"><input id="contr" type="text" class="form-control"></div></div></div>', 
        focusConfirm: false,
        showCancelButton: true,                         
        }).then((result) => {
          if (result.value) {                                             
            cont = document.getElementById('contr').value,    
           
            mensaj2(cont);

                            
          }

          function mensaj2(cont){


          if (cont==="123") {

          	eliminarAlumfinal();

          	 Swal.fire(
              '¡Actualizado!',
              'El registro ha sido actualizado.',
              'success'


            ) 
			}else{
          	 Swal.fire({
				  icon: 'error',
				  title: 'Contraseña incorrecta',
				  text: 'Consulte con el administrador!',
				  footer: '<a href>Why do I have this issue?</a>'
				})
          	 }

          }


    function eliminarAlumfinal(){

	cadena="idFecha=" + "";


		$.ajax({
			type:"POST",
			url:"php/mesaExamen/eliminarFinales.php",
			data:cadena,
			success:function(r){
			if(r==1){
      		
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
		});
			
	}

	 	});
}
