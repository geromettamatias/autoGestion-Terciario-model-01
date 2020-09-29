
function RECUPERCONTRASEÑAALUMNO(){

	dniAlumnosRE=$('#dniAlumnosRE').val();
	cuilAlumnosRE=$('#cuilAlumnosRE').val();
	
	


	cadena="dniAlumnosRE=" + dniAlumnosRE +
			"&cuilAlumnosRE=" + cuilAlumnosRE;



	$.ajax({
		type:"POST",
		url:"php/recuperAlumno.php",
		data:cadena,
		success:function(datos){

	
			
			if(datos!==""){
			
				

	function visualiarRECUPERARaLUMNOfINAL(){
	alertify.confirm('RESULTADO',datos +"<br><br><b>ACLARACIÓN: Cualquier duda mande un mensaje al administrador</b>", 
					function(){ alertify.success('Fin de la operación')}
                , function(){ alertify.error('Se cancelo')});
			}
				visualiarRECUPERARaLUMNOfINAL();


			}else{

				


	

                alertify.error("Fallo el servidor :(");
				
			}
		}
	});

}



function RECUPERCONTRASEÑADOCENTE(){

	dnidocenteRE=$('#dnidocenteRE').val();
	nTituloDocenteRECU=$('#nTituloDocenteRECU').val();
	


	cadena="dnidocenteRE=" + dnidocenteRE +
			"&nTituloDocenteRECU=" + nTituloDocenteRECU;



	$.ajax({
		type:"POST",
		url:"php/recuperDocente.php",
		data:cadena,
		success:function(datos){

	
			
			if(datos!==""){
			
				
		

	function visualiarRECUPERARaLUMNOfINAL(){
	alertify.confirm('RESULTADO',datos +"<br><br><b>ACLARACIÓN: Cualquier duda mande un mensaje al administrador</b>", 
					function(){ alertify.success('Fin de la operación')}
                , function(){ alertify.error('Se cancelo')});
			}
				visualiarRECUPERARaLUMNOfINAL();


			}else{

				


	

                alertify.error("Fallo el servidor :(");
				
			}
		}
	});

}


function mensajeAdminsitradorTotoa(mensajeAdmins,tituloMensaje){
	alertify.confirm('Verifique el mensaje antes de aceptar',tituloMensaje+"<br><br>"+mensajeAdmins, 
					function(){ mensajeAdminsitradorT(mensajeAdmins,tituloMensaje)}
                , function(){ alertify.error('Se cancelo')});
			}

function mensajeAdminsitradorT(mensajeAdmins,tituloMensaje){

	

	cadena="mensajeAdmins=" + mensajeAdmins +
			"&tituloMensaje=" + tituloMensaje;


	$.ajax({
		type:"POST",
		url:"php/mensaje.php",
		data:cadena,
		success:function(datos){

	
			
			if(datos!==""){
			
	
	       alertify.success('Operación exitosa, a la brevedad se le mandará un mensaje');


			}else{

                alertify.error("Fallo el servidor :(");
				
			}
		}
	});

}





function limpiarCASILLE(){

	
$('#mensajeAdmins').val("");

$('#tituloMensaje').val("");
  

}
