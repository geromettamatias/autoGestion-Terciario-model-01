function editarInformacionAgregandoDatos(idinformacion){

	

	cadena= "idinformacion=" + idinformacion;


	$.ajax({
		type:"POST",
		url:"php/paginaPrincipal/buscarInformacion.php",
		data:cadena,
		success:function(datos){
			
			if(datos!=''){
				
				d=datos.split('||');
				$('#idinformacion').val(d[0]);
				$('#informacionDatos').val(d[1]);

				//$('#informacionFotos').val(d[2]);

				$('#informacionTitulo').val(d[3]);


				alertify.success("Selección");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});









	
	}


function edidarinformacionJAVA(){
	var formData = new FormData($("#formLibro")[0]);


		$.ajax({
		url:'php/paginaPrincipal/editarInformacion.php',
		type:'POST',
		data:formData,
		cache:false,
		processData:false,
		contentType:false,
		success:function(resp){
			
			if(resp!==""){
				$('#paginaPrincipal').load('paginaPrincipal/elementosTambla.php');
		
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});
	
}








function institucionGaleriaGaleria(idgaleria){


	cadena= "idgaleria=" + idgaleria;



$.ajax({
		type:"POST",
		url:"php/paginaPrincipal/buscarGaleria.php",
		data:cadena,
		success:function(datos){
			
			if(datos!=''){
				
				d=datos.split('||');
			
				$('#idgaleria').val(d[0]);
				$('#galeriaDatos').val(d[1]);
				//$('#galeriaFotos').val(d[2]);
				$('#galeriaTitulo').val(d[3]);


				alertify.success("Selección");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});




	
	}



function datosedtarGaleriaJAVA(){


	var formData = new FormData($("#formLibroGALERIA")[0]);


		$.ajax({
		url:'php/paginaPrincipal/editargaleria.php',
		type:'POST',
		data:formData,
		cache:false,
		processData:false,
		contentType:false,
		success:function(resp){

			
			if(resp!==""){
				$('#paginaPrincipal').load('paginaPrincipal/elementosTambla.php');
		
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});











}





function institucionPremios(idpremio){



	cadena= "idpremio=" + idpremio;


	$.ajax({
		type:"POST",
		url:"php/paginaPrincipal/buscarPremios.php",
		data:cadena,
		success:function(datos){
			
			if(datos!=''){

				d=datos.split('||');
				$('#idpremio').val(d[0]);
				$('#premiosDatos').val(d[1]);
				//$('#premiosFotos').val(d[2]);
				$('#premiosTitulo').val(d[3]);


				alertify.success("Selección");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});



	
	}



function datosedtarpremiosJAVA(){

  
	var formData = new FormData($("#formLibroPremios")[0]);


		$.ajax({
		url:'php/paginaPrincipal/editarpremios.php',
		type:'POST',
		data:formData,
		cache:false,
		processData:false,
		contentType:false,
		success:function(resp){
	
			
			if(resp!==""){
				$('#paginaPrincipal').load('paginaPrincipal/elementosTambla.php');
		
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});









}





function agregahistoriajava(datos){

	


	cadena= "idhistoria=" + datos;


	$.ajax({
		type:"POST",
		url:"php/paginaPrincipal/buscarHistoria.php",
		data:cadena,
		success:function(datosF){
			
			if(datosF!=''){

				h=datosF.split('||');

				$('#idhistoria').val(h[0]);

				$('#historiaDatos').val(h[1]);
				$('#historiaTitulo').val(h[2]);


				alertify.success("Selección");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});















	}



function datosedtarhistoriaJAVA(){

    idhistoria=$('#idhistoria').val();
	historiaDatos=$('#historiaDatos').val();
	historiaTitulo=$('#historiaTitulo').val();

	cadena= "idhistoria=" + idhistoria +
			"&historiaDatos=" + historiaDatos +
			"&historiaTitulo=" + historiaTitulo;


	$.ajax({
		type:"POST",
		url:"php/paginaPrincipal/editarhistoria.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#paginaPrincipal').load('paginaPrincipal/elementosTambla.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}





function agregaformDatosTiii(iddatos){



	cadena= "iddatos=" + iddatos;


	$.ajax({
		type:"POST",
		url:"php/paginaPrincipal/buscarDatos.php",
		data:cadena,
		success:function(datos){
			
			if(datos!=''){

				d=datos.split('||');
				$('#iddatos').val(d[0]);
				$('#datosDatos').val(d[1]);
				$('#datosTitulo').val(d[2]);



				alertify.success("Selección");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});




	}



function datosedtardatosJAVA(){

    iddatos=$('#iddatos').val();
	datosDatos=$('#datosDatos').val();
	datosTitulo=$('#datosTitulo').val();

	cadena= "iddatos=" + iddatos +
			"&datosDatos=" + datosDatos +
			"&datosTitulo=" + datosTitulo;


	$.ajax({
		type:"POST",
		url:"php/paginaPrincipal/editardatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#paginaPrincipal').load('paginaPrincipal/elementosTambla.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}




function agregaformDidactica(iddidactica){



	cadena= "iddidactica=" + iddidactica;


	$.ajax({
		type:"POST",
		url:"php/paginaPrincipal/buscarDidactica.php",
		data:cadena,
		success:function(datos){
			
			if(datos!=''){

				d=datos.split('||');
				$('#iddidactica').val(d[0]);
				$('#titulodidactica').val(d[1]);
				$('#datosdidactica').val(d[2]);



				alertify.success("Selección");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});




	}



function agregaformMATERIALDIDACTICTiii(){

    iddidactica=$('#iddidactica').val();
	titulodidactica=$('#titulodidactica').val();
	datosdidactica=$('#datosdidactica').val();

	cadena= "iddidactica=" + iddidactica +
			"&titulodidactica=" + titulodidactica +
			"&datosdidactica=" + datosdidactica;


	$.ajax({
		type:"POST",
		url:"php/paginaPrincipal/editardidactica.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#paginaPrincipal').load('paginaPrincipal/elementosTambla.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function nuevoMaterialDidactico(titulodidacticaN,datosdidacticaN){

    titulodidacticaN=$('#titulodidacticaN').val();
	datosdidacticaN=$('#datosdidacticaN').val();


	cadena= "titulodidacticaN=" + titulodidacticaN +
			"&datosdidacticaN=" + datosdidacticaN;


	$.ajax({
		type:"POST",
		url:"php/paginaPrincipal/nuevo.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#paginaPrincipal').load('paginaPrincipal/elementosTambla.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}







function ELIMINARDidactica(iddidactica){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
					function(){ ELIMINARDidacticatotal(iddidactica) }
                , function(){ alertify.error('Se cancelo')});
}

function ELIMINARDidacticatotal(iddidactica){

	cadena="iddidactica=" + iddidactica;

		$.ajax({
		type:"POST",
		url:"php/paginaPrincipal/eliminardidac.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#paginaPrincipal').load('paginaPrincipal/elementosTambla.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});
}

