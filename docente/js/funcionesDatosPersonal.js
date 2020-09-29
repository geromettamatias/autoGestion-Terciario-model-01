function InformacionDocente(datos){

	d=datos.split('||');




alertify.confirm('DATOS PERSONALES', '<b><u>APELLIDO Y NOMBRE:</u></b>'+d[1]+'<br>'
						+'<b><u>DNI:</u></b>'+ d[2]
						+'<br><b><u>ACTIVIDAD:</u></b>'+ d[3]
						+'<br><b><u>TITULO:</u></b>'+ d[4]
						+'<br><b><u>N° REGISTRO:</u></b>'+d[5]
						+'<br><b><u>TELEF:</u></b>'+d[6]
						+'<br><b><u>DOMICILIO:</u></b>'+d[7]
						+'<br><b><u>EMAIL:</u></b>'+d[8]
						+'<br><b><u>CONTRASEÑA:</u></b>'+d[9], 
					function(){ alertify.success('Fin de la operación')}
                , function(){ alertify.error('Se cancelo')});







}



function editarDocente(datos){

	d=datos.split('||');
	idPersonal=d[0];  
   apelliNombre =d[1];  
   tituloDocen = d[4];
   nRegistro = d[5];
   telefoDO = d[6];
   domicDo = d[7];
   emaiDoc = d[8];
   passDoc = d[9];

Swal.fire({
        title: 'EDITAR',
        html:'<div class="form-group"><div class="row"><label class="col-sm-3 col-form-label">APELL. Y NOMB.</label><div class="col-sm-7"><input id="apelliNombre" value="'+apelliNombre+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">TITULO</label><div class="col-sm-7"><input id="tituloDocen" value="'+tituloDocen+'" type="text" class="form-control"></div></div>     <div class="row">       <label class="col-sm-3 col-form-label">N° REGI.</label><div class="col-sm-7"><input id="nRegistro" value="'+nRegistro+'" type="text" min="0" class="form-control"></div></div> <div class="row"><label class="col-sm-3 col-form-label">TELEFONO</label><div class="col-sm-7"><input id="telefoDO" value="'+telefoDO+'" type="text" min="0" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">DOMICILIO</label><div class="col-sm-7"><input id="domicDo" value="'+domicDo+'" type="text" min="0" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">EMAIL</label><div class="col-sm-7"><input id="emaiDoc" value="'+emaiDoc+'" type="text" min="0" class="form-control"></div></div><div class="row"><label class="col-sm-3 col-form-label">CONTR.</label><div class="col-sm-7"><input id="passDoc" value="'+passDoc+'" type="text" min="0" class="form-control"></div></div></div>', 
        

        focusConfirm: false,
        showCancelButton: true,                         
        }).then((result) => {
          if (result.value) {                                             
            apelliNombre = document.getElementById('apelliNombre').value,    
            tituloDocen = document.getElementById('tituloDocen').value,
            nRegistro = document.getElementById('nRegistro').value,

            telefoDO = document.getElementById('telefoDO').value,
            domicDo = document.getElementById('domicDo').value,
            emaiDoc = document.getElementById('emaiDoc').value,
            passDoc = document.getElementById('passDoc').value,                     
            
            editarDoncete(idPersonal,apelliNombre,tituloDocen,nRegistro,telefoDO,domicDo,passDoc,emaiDoc);

            Swal.fire(
              '¡Actualizado!',
              'El registro ha sido actualizado.',
              'success'
            )                  
          }
        });






}


function editarDoncete(idPersonal,apelliNombre,tituloDocen,nRegistro,telefoDO,domicDo,passDoc,emaiDoc){


cadena= "idPersonal=" + idPersonal +
			"&apelliNombre=" + apelliNombre + 
			"&tituloDocen=" + tituloDocen +
			"&nRegistro=" + nRegistro +
			"&telefoDO=" + telefoDO+
			"&domicDo=" + domicDo+
			"&passDoc=" + passDoc+
			"&emaiDoc=" + emaiDoc;


	$.ajax({
		type:"POST",
		url:"php/datos/editarDocente.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				
				$('#tablaDocente').load('datos/tabladocente.php');


			}else{
				alertify.error("Fallo el servidor :(");
			
			}
		}
	});

}