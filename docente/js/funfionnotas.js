function planillacalificador(datos){


 

	d=datos.split('||');


cadena= "idhora=" + d[0];
	


	$.ajax({
		type:"POST",
		url:"php/notas/secionNota.php",
		data:cadena,
		success:function(r){
			
			if(r!==""){

				  $('#tablaAsignaturaNotaBuscar').load('asignaturas/buscarAlumno.php');
				
				$('#tablaAsignaturaNota').load('asignaturas/tablacalificador.php');


					  $.ajax({
			          type:"post",
			          data:'valorA=' + '',
			          url:'php/notas/crearsession.php',
			          success:function(r){
			           $('#tablaAsignaturaNota').load('asignaturas/tablacalificador.php');
			          }
			        });










				mesaExamenNota();
			}else{
				alertify.error("Fallo el servidor :(");
			
			}
		}
	});





}



function notastota(datos){


	d=datos.split('||');
idalumno=d[0];
idPlan=d[1];
idAsig=d[2];

situacion="";
nota="";



cadena= "idalumno=" + idalumno +
		"&idPlan=" + idPlan +
		"&idAsig=" + idAsig;


	$.ajax({
		type:"POST",
		url:"php/notas/buscarNotaAlumno.php",
		data:cadena,
		success:function(datas1){

		d=datas1.split('||');


		situacion=d[0];
		nota=d[1];


		if (situacion==0 && nota==0) {


		situacion="";
		nota="";




		}

		

	

			

				sele='<select id="situacion" name="situacion" class="form-control input-sm"><option value="'+situacion+'">'+situacion+'</option><option value="REGULAR">REGULAR</option><option value="LIBRE">LIBRE</option><option value="SEMI.">SEMI.</option></select>';

			
				
	

			
		




Swal.fire({
        title: 'EDITAR',
        html:'<div class="form-group"><div class="row"><label class="col-sm-3 col-form-label">SITUACIÓN</label><div class="col-sm-7">'+sele+'</div></div><div class="row"><label class="col-sm-3 col-form-label">Calificación</label><div class="col-sm-7"><input id="nota" value="'+nota+'" type="text" class="form-control"></div></div>', 
        

        focusConfirm: false,
        showCancelButton: true,                         
        }).then((result) => {
          if (result.value) {                                             
            situacion = document.getElementById('situacion').value,    
            nota = document.getElementById('nota').value,


     		cadena+="&situacion=" + situacion +
			"&nota=" + nota;
       
            cargaNotaAlmno(cadena);

            Swal.fire(
              '¡Actualizado!',
              'El registro ha sido actualizado.',
              'success'
            )                  
          }
        });







		}
	});







function cargaNotaAlmno(cadena){




	$.ajax({
		type:"POST",
		url:"php/notas/cargarNota.php",
		data:cadena,
		success:function(r){

	
			
			if(r!==""){
				
				$('#tablaAsignaturaNota').load('asignaturas/tablacalificador.php');

			}else{
				alertify.error("Fallo el servidor :(");
			
			}
		}
	});







}











}