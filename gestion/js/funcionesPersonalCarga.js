

function agregardatosPLANTEL(nombreDocente,dniDocente,actividadDocente,tituloDocente,nTituloDocente,nTelefonicodocente,domicilioDocente,emailDocente){

	cadena="nombreDocente=" + nombreDocente + 
			"&dniDocente=" + dniDocente +
			"&actividadDocente=" + actividadDocente +
			"&tituloDocente=" + tituloDocente+
			"&nTituloDocente=" + nTituloDocente+
			"&nTelefonicodocente=" + nTelefonicodocente+
			"&domicilioDocente=" + domicilioDocente+
			"&emailDocente=" + emailDocente;

	$.ajax({
		type:"POST",
		url:"php/personalCarga/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#PersonalPlantaBuscador').load('cargaPersonal/personalTablaBUSCAR.php');
				$('#PersonalPlanta').load('cargaPersonal/personalTabla.php');
				alertify.success("agregado con exito :)");
				limpiezaPersonalPLANTEL();
				buscarPLANTELt();

			}else{

				if(r==0){
				$('#PersonalPlantaBuscador').load('cargaPersonal/personalTablaBUSCAR.php');
				$('#PersonalPlanta').load('cargaPersonal/personalTabla.php');

				 alertify.confirm('Registro de usuarios', 'Usuario ya existe, no se puede registrar más de una vez', 
					function(){ alertify.error('Operación cancelada')}
                , function(){ alertify.error('Se cancelo')});

				 limpiezaPersonalPLANTEL();

				}else{

					alertify.error("Fallo el servidor :(");

					limpiezaPersonalPLANTEL();

				}

				
			}
		}
	});

}



	

function agregaformDPLANTEL(datos){

	d=datos.split('||');

	$('#idPersonalU').val(d[0]);
	$('#nombreDocenteU').val(d[1]);
	$('#dniDocenteU').val(d[2]);
	$('#actividadDocenteU').val(d[3]);
	$('#tituloDocenteU').val(d[4]);
	$('#nTituloDocenteU').val(d[5]);
	$('#nTelefonicodocenteU').val(d[6]);
	$('#domicilioDocenteU').val(d[7]);
	$('#emailDocenteU').val(d[8]);
	


}



function InformacionformPLANTEL(datos){

	d=datos.split('||');

	$('#idPersonalUx').html(d[0]);
	$('#nombreDocenteUx').html(d[1]);
	$('#dniDocenteUx').html(d[2]);
	$('#actividadDocenteUx').html(d[3]);
	$('#tituloDocenteUx').html(d[4]);
	$('#nTituloDocenteUx').html(d[5]);
	$('#nTelefonicodocenteUx').html(d[6]);
	$('#domicilioDocenteUx').html(d[7]);
	$('#emailDocenteUx').html(d[8]);
	

}




function actualizaDatosPLANTEL(){


	idPersonal=$('#idPersonalU').val();
	nombreDocente=$('#nombreDocenteU').val();
	dniDocente=$('#dniDocenteU').val();
	actividadDocente=$('#actividadDocenteU').val();
	tituloDocente=$('#tituloDocenteU').val();
	nTituloDocente=$('#nTituloDocenteU').val();
	nTelefonicodocente=$('#nTelefonicodocenteU').val();
	domicilioDocente=$('#domicilioDocenteU').val();
	emailDocente=$('#emailDocenteU').val();

	cadena= "idPersonal=" + idPersonal +
			"&nombreDocente=" + nombreDocente + 
			"&dniDocente=" + dniDocente +
			"&actividadDocente=" + actividadDocente +
			"&tituloDocente=" + tituloDocente+
			"&nTituloDocente=" + nTituloDocente+
			"&nTelefonicodocente=" + nTelefonicodocente+
			"&domicilioDocente=" + domicilioDocente+
			"&emailDocente=" + emailDocente;


	$.ajax({
		type:"POST",
		url:"php/personalCarga/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				
				$('#PersonalPlanta').load('cargaPersonal/personalTabla.php');
				alertify.success("Actualizado con exito :)");
				limpiezaPersonalUPLANTEL();
			}else{
				alertify.error("Fallo el servidor :(");
				limpiezaPersonalUPLANTEL();
			}
		}
	});

}


function preguntarSiNoTPLANTEL(idPersonal){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ eliminarDatosPLANTEL(idPersonal) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatosPLANTEL(idPersonal){

	cadena="idPersonal=" + idPersonal;

		$.ajax({
			type:"POST",
			url:"php/personalCarga/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					
				$('#PersonalPlanta').load('cargaPersonal/personalTabla.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}

 function idPersonalPLANTELTercia(idPersonalasignatura){

   
    var dato="idPersonalasignatura="+idPersonalasignatura;
    
    $.ajax({
      url: 'php/personalCarga/proceso.php',
      type: 'POST',
      data: dato,
    })
    .done(function(res){
      $('#resultadoBusqueda').html(res);
    })
    .fail(function(){
      console.log("error");
    })
    .always(function(){
      console.log("completo");
    })




};






function limpiezaPersonalUPLANTEL(){

	var limpiezaPersonal="";
	$('#idPersonalU').val(limpiezaPersonal);
	$('#nombreDocenteU').val(limpiezaPersonal);
	$('#dniDocenteU').val(limpiezaPersonal);
	$('#actividadDocenteU').val("1");
	$('#tituloDocenteU').val(limpiezaPersonal);
	$('#nTituloDocenteU').val(limpiezaPersonal);
	$('#nTelefonicodocenteU').val(limpiezaPersonal);
	$('#domicilioDocenteU').val(limpiezaPersonal);
	$('#emailDocenteU').val(limpiezaPersonal);
	


}



 function limpiezaPersonalPLANTEL(){

	var limpiezaPersonalU="";
	
	$('#nombreDocente').val(limpiezaPersonalU);
	$('#dniDocente').val(limpiezaPersonalU);
	$('#actividadDocente').val("1");
	$('#tituloDocente').val(limpiezaPersonalU);
	$('#nTituloDocente').val(limpiezaPersonalU);
	$('#nTelefonicodocente').val(limpiezaPersonalU);
	$('#domicilioDocente').val(limpiezaPersonalU);
	$('#emailDocente').val(limpiezaPersonalU);
	


}