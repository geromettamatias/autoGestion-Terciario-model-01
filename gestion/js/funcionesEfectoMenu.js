function menuPrincipal(){

	// efectos show  hide


  $("#menuPrincipal").show(100);
  
  $("#horarioTotal").hide();
  $("#menuCarga").hide();
  $("#menuCargaInstitucion").hide();
  $("#menuCargaCurso").hide();
  $("#menuCargaPeronal").hide();
  $("#menuCargaAlumno").hide();
  
  $("#menuAuxiliar").hide();
  $("#menuAuxiliarControlAsistencia").hide();
  $("#asignaturaCarrera").hide();
  
  $("#menuAuxiliarPreinscri").hide();
  $("#menuAuxiliarPreinscriaLUMNO").hide();
  $("#menuAuxiliarPreinscridOCENTE").hide();
  $("#menuUsuarios").hide();
  $("#menuPaginaPrincipal").hide();
  $("#menuAuxiliarASGNATURAMATERIAS").hide();
  $('#asignaturaCarrera').load('cargaInstitucional/Asignatura.php');


	$("#menuMensajes").hide();
}


function menuCarga(){

	// efectos show  hide
  $("#menuMensajes").hide();
  $("#menuPrincipal").hide();
  $("#menuCarga").show(100);
  $("#menuCargaInstitucion").hide();
  $("#menuCargaCurso").hide();
  $("#menuCargaPeronal").hide();
  $("#menuCargaAlumno").hide();
  
  $("#menuAuxiliar").hide();
  $("#menuAuxiliarControlAsistencia").hide();
  $("#asignaturaCarrera").hide();


  
  $("#horarioTotal").hide();
  $("#menuAuxiliarPreinscri").hide();
  $("#menuAuxiliarPreinscriaLUMNO").hide();
  $("#menuAuxiliarPreinscridOCENTE").hide();
  $("#menuUsuarios").hide();
  $("#menuPaginaPrincipal").hide();
  
  $("#menuAuxiliarASGNATURAMATERIAS").hide();
  
}


function menuDirectivo(){

	// efectos show  hide
  $("#menuMensajes").hide();
  
  $("#menuPrincipal").hide();
  $("#menuCarga").hide();
  $("#menuCargaInstitucion").hide();
  $("#menuCargaCurso").hide();
  $("#menuCargaPeronal").hide();
  $("#menuCargaAlumno").hide();
  $("#menuDirectivo").show(100);
  $("#menuDirectivoCrearMesaExamen").hide();
  $("#menuDirectivoInscripcionMesa").hide();
  $("#menuDirectivoActaBolante").hide();
  $("#menuSecretaria").hide();
  $("#menuAuxiliar").hide();
  $("#menuAuxiliarControlAsistencia").hide();
  $("#asignaturaCarrera").hide();

  
  
  $("#horarioTotal").hide();
  $("#menuAuxiliarPreinscri").hide();
	$("#menuAuxiliarPreinscriaLUMNO").hide();
  $("#menuAuxiliarPreinscridOCENTE").hide();
  $("#menuUsuarios").hide();
  $("#menuPaginaPrincipal").hide();
  $("#menuAuxiliarASGNATURAMATERIAS").hide();
  
}

function menuSecretaria(){

	// efectos show  hide
  $("#menuMensajes").hide();
  
  $("#menuPrincipal").hide();
  $("#menuCarga").hide();
  $("#menuCargaInstitucion").hide();
  $("#menuCargaCurso").hide();
  $("#menuCargaPeronal").hide();
  $("#menuCargaAlumno").hide();
  $("#menuDirectivo").hide();
  $("#menuDirectivoCrearMesaExamen").hide();
  $("#menuDirectivoInscripcionMesa").hide();
  $("#menuDirectivoActaBolante").hide();
  $("#menuSecretaria").show(100);
  $("#menuAuxiliar").hide();
  $("#menuAuxiliarControlAsistencia").hide();
  $("#asignaturaCarrera").hide();

  
  
  $("#horarioTotal").hide();
  $("#menuAuxiliarPreinscri").hide();
	$("#menuAuxiliarPreinscriaLUMNO").hide();
  $("#menuAuxiliarPreinscridOCENTE").hide();
  $("#menuUsuarios").hide();
  $("#menuPaginaPrincipal").hide();
  $("#menuAuxiliarASGNATURAMATERIAS").hide();
  

}

function menuAuxiliar(dniLoginT){

cadena="dniLoginTbedel=" + dniLoginT + 
      "&usuarioAbedel=" + "bedel";
$.ajax({
      url:'php/login/bedel.php',
      type:'POST',
      data:cadena,
  }).done(function(resp){
      //alert(resp);
      window.location.href = "../bedel/index.php";
  });



}

function menuCargaInstitucion(){

	// efectos show  hide
  $("#menuMensajes").hide();
  

  $("#menuPrincipal").hide();
  $("#menuCarga").hide();
  $("#menuCargaInstitucion").show(100);
  $("#menuCargaCurso").hide();
  $("#menuCargaPeronal").hide();
  $("#menuCargaAlumno").hide();
  
  $("#menuAuxiliar").hide();
  $("#menuAuxiliarControlAsistencia").hide();
  $("#asignaturaCarrera").hide();

  
  $('#asignaturaCarrera').load('cargaInstitucional/Asignatura.php');

  
  $("#horarioTotal").hide();
  $("#menuAuxiliarPreinscri").hide();
	$("#menuAuxiliarPreinscriaLUMNO").hide();
  $("#menuAuxiliarPreinscridOCENTE").hide();
  $("#menuUsuarios").hide();
  $("#menuPaginaPrincipal").hide();
  $("#menuAuxiliarASGNATURAMATERIAS").hide();
  
}

function menuCargaCurso(){

	// efectos show  hide
  $("#menuMensajes").hide();
  

  $("#menuPrincipal").hide();
  $("#menuCarga").hide();
  $("#menuCargaInstitucion").hide();
  $("#menuCargaCurso").show(100);
  $("#menuCargaPeronal").hide();
  $("#menuCargaAlumno").hide();
  
  $("#menuAuxiliar").hide();
  $("#menuAuxiliarControlAsistencia").hide();
  $("#asignaturaCarrera").hide();

  
  
  $("#horarioTotal").hide();
  $("#menuAuxiliarPreinscri").hide();
	$("#menuAuxiliarPreinscriaLUMNO").hide();
  $("#menuAuxiliarPreinscridOCENTE").hide();
  $("#menuUsuarios").hide();
  $("#menuPaginaPrincipal").hide();
  $("#menuAuxiliarASGNATURAMATERIAS").hide();
  
}

function menuCargaPeronal(){

	// efectos show  hide
  $("#menuMensajes").hide();
  
  $("#menuPrincipal").hide();
  $("#menuCarga").hide();
  $("#menuCargaInstitucion").hide();
  $("#menuCargaCurso").hide();
  $("#menuCargaPeronal").show(100);
  $("#menuCargaAlumno").hide();
  
  $("#menuAuxiliar").hide();
  $("#menuAuxiliarControlAsistencia").hide();
  $("#asignaturaCarrera").hide();

 
  $("#horarioTotal").hide();

  $("#menuAuxiliarPreinscri").hide();
	$("#menuAuxiliarPreinscriaLUMNO").hide();
  $("#menuAuxiliarPreinscridOCENTE").hide();
  $("#menuUsuarios").hide();
  $("#menuPaginaPrincipal").hide();
  $("#menuAuxiliarASGNATURAMATERIAS").hide();
  

  iniciarPanelPersonal();

}


function menuCargaAlumno(){

	// efectos show  hide
  $("#menuMensajes").hide();
  
  $("#menuPrincipal").hide();
  $("#menuCarga").hide();
  $("#menuCargaInstitucion").hide();
  $("#menuCargaCurso").hide();
  $("#menuCargaPeronal").hide();
  $("#menuCargaAlumno").show(100);
  
  $("#menuAuxiliar").hide();
  $("#menuAuxiliarControlAsistencia").hide();
  $("#asignaturaCarrera").hide();

 
  
  $("#horarioTotal").hide();
  $("#menuAuxiliarPreinscri").hide();
	$("#menuAuxiliarPreinscriaLUMNO").hide();
  $("#menuAuxiliarPreinscridOCENTE").hide();
  $("#menuUsuarios").hide(); 
  $("#menuPaginaPrincipal").hide();
  $("#menuAuxiliarASGNATURAMATERIAS").hide();
  


busqueda=$('#busqueda').val("");
    cursoAvBus=$('#cursoAvBus').val("0");


    $.ajax({
          type:"post",
          data:'valor=' + "",
          url:'php/alumnoCarga/crearsession.php',
          success:function(r){
           $('#AlumnoPlanta').load('cargaAlumno/alumnoTabla.php');
          }
        });


    $.ajax({
          type:"post",
          data:'valor2=' + "0",
          url:'php/alumnoCarga/crearsessionCurso.php',
          success:function(r){
           $('#AlumnoPlanta').load('cargaAlumno/alumnoTabla.php');
          }
        });





}
















function preInscricionesAlumno(){

  // efectos show  hide
  $("#menuMensajes").hide();
  
  $("#menuPrincipal").hide();
  $("#menuCarga").hide();
  $("#menuCargaInstitucion").hide();
  $("#menuCargaCurso").hide();
  $("#menuCargaPeronal").hide();
  $("#menuCargaAlumno").hide();
  
  $("#menuAuxiliar").hide();
  $("#menuAuxiliarControlAsistencia").hide();
  $("#asignaturaCarrera").hide();

  
  
  $("#horarioTotal").hide();
  $("#menuAuxiliarPreinscriaLUMNO").show(100);
  $("#menuAuxiliarPreinscridOCENTE").hide();
  $("#menuUsuarios").hide();
  $("#menuPaginaPrincipal").hide();
  $("#menuAuxiliarASGNATURAMATERIAS").hide();
  



  RecargarBuscadoresPreInscAlumno();
}


function preInscricionesDOCENTE(){

  // efectos show  hide
  $("#menuMensajes").hide();
  
  $("#menuPrincipal").hide();
  $("#menuCarga").hide();
  $("#menuCargaInstitucion").hide();
  $("#menuCargaCurso").hide();
  $("#menuCargaPeronal").hide();
  $("#menuCargaAlumno").hide();
  
  $("#menuAuxiliar").hide();
  $("#menuAuxiliarControlAsistencia").hide();
  $("#asignaturaCarrera").hide();

  
  
  $("#horarioTotal").hide();
  $("#menuAuxiliarPreinscriaLUMNO").hide();
  $("#menuAuxiliarPreinscridOCENTE").show(100);
  $("#menuUsuarios").hide();
  
  $("#menuPaginaPrincipal").hide();
  $("#menuAuxiliarASGNATURAMATERIAS").hide();
  
}



function MENUDEuSUARIO(){

  // efectos show  hide
  $("#menuMensajes").hide();
  
  $("#menuPrincipal").hide();
  $("#menuCarga").hide();
  $("#menuCargaInstitucion").hide();
  $("#menuCargaCurso").hide();
  $("#menuCargaPeronal").hide();
  $("#menuCargaAlumno").hide();
  
  $("#menuAuxiliar").hide();
  $("#menuAuxiliarControlAsistencia").hide();
  $("#asignaturaCarrera").hide();

  
  
  $("#horarioTotal").hide();
  $("#menuAuxiliarPreinscriaLUMNO").hide();
  $("#menuAuxiliarPreinscridOCENTE").hide();
  $("#menuUsuarios").show(100);

  $("#menuPaginaPrincipal").hide();
  $("#menuAuxiliarASGNATURAMATERIAS").hide();
  
  $("#menuMensajes").hide();
}



function menuMensajes(){

  // efectos show  hide
  $("#menuMensajes").show(100);
  
  $("#menuPrincipal").hide();
  $("#menuCarga").hide();
  $("#menuCargaInstitucion").hide();
  $("#menuCargaCurso").hide();
  $("#menuCargaPeronal").hide();
  $("#menuCargaAlumno").hide();
  
  $("#menuAuxiliar").hide();
  $("#menuAuxiliarControlAsistencia").hide();
  $("#asignaturaCarrera").hide();

  
  
  $("#horarioTotal").hide();
  $("#menuAuxiliarPreinscri").hide();
  $("#menuAuxiliarPreinscriaLUMNO").hide();
  $("#menuAuxiliarPreinscridOCENTE").hide();
  $("#menuUsuarios").hide();

  $("#menuPaginaPrincipal").hide();
  $("#menuAuxiliarASGNATURAMATERIAS").hide();
  
}





function menuPaginaPrincipal(){

  // efectos show  hide
  $("#menuMensajes").hide();
  
  $("#menuPrincipal").hide();
  $("#menuCarga").hide();
  $("#menuCargaInstitucion").hide();
  $("#menuCargaCurso").hide();
  $("#menuCargaPeronal").hide();
  $("#menuCargaAlumno").hide();
  
  $("#menuAuxiliar").hide();
  $("#menuAuxiliarControlAsistencia").hide();
  $("#asignaturaCarrera").hide();

  
  $("#horarioTotal").hide();
  
  $("#menuAuxiliarPreinscri").hide();
  $("#menuAuxiliarPreinscriaLUMNO").hide();
  $("#menuAuxiliarPreinscridOCENTE").hide();
  $("#menuUsuarios").hide();

  $("#menuPaginaPrincipal").show(100);
  $("#menuAuxiliarASGNATURAMATERIAS").hide();
  
}




function menuaSIGNATURAnotasMATERIAS(){

  // efectos show  hide
  $("#menuMensajes").hide();
  
  $("#menuPrincipal").hide();
  $("#menuCarga").hide();
  $("#menuCargaInstitucion").hide();
  $("#menuCargaCurso").hide();
  $("#menuCargaPeronal").hide();
  $("#menuCargaAlumno").hide();
  
  $("#menuAuxiliar").hide();
  $("#menuAuxiliarControlAsistencia").hide();
  $("#asignaturaCarrera").hide();

  
  $("#horarioTotal").hide();
  
  $("#menuAuxiliarPreinscri").hide();
  $("#menuAuxiliarPreinscriaLUMNO").hide();
  $("#menuAuxiliarPreinscridOCENTE").hide();
  $("#menuUsuarios").hide();

  $("#menuPaginaPrincipal").hide();


  $("#menuAuxiliarASGNATURAMATERIAS").show(100);
  
}


function menuPrincipalMATERIAS(){

  // efectos show  hide
  $("#menuMensajes").hide();
  $("#menuPrincipal").hide();
  $("#horarioTotal").hide(); 
  $("#menuCarga").hide();
  $("#menuCargaInstitucion").hide();
  $("#menuCargaCurso").hide();
  $("#menuCargaPeronal").hide();
  $("#menuCargaAlumno").hide();
  
  $("#menuAuxiliar").hide();
  $("#menuAuxiliarControlAsistencia").hide();
  $("#asignaturaCarrera").hide();

  
  
  $("#horarioTotal").hide();
  $("#menuAuxiliarPreinscri").hide();
  $("#menuAuxiliarPreinscriaLUMNO").hide();
  $("#menuAuxiliarPreinscridOCENTE").hide();
  $("#menuUsuarios").hide();
  $("#menuPaginaPrincipal").hide();
  $("#menuAuxiliarASGNATURAMATERIAS").show(100);
  
  
  
}




function menuPrincipalMATERIASCalif(){

  // efectos show  hide
  $("#menuMensajes").hide();
  $("#menuPrincipal").hide();
  
  $("#menuCarga").hide();
  $("#menuCargaInstitucion").hide();
  $("#menuCargaCurso").hide();
  $("#menuCargaPeronal").hide();
  $("#menuCargaAlumno").hide();
  
  $("#menuAuxiliar").hide();
  $("#menuAuxiliarControlAsistencia").hide();
  $("#asignaturaCarrera").hide();

  
    $("#horarioTotal").hide();

  $("#menuAuxiliarPreinscri").hide();
  $("#menuAuxiliarPreinscriaLUMNO").hide();
  $("#menuAuxiliarPreinscridOCENTE").hide();
  $("#menuUsuarios").hide();
  $("#menuPaginaPrincipal").hide();
  $("#menuAuxiliarASGNATURAMATERIAS").hide();
  $("#menuAuxiliarASGNATURAMATERIASCalificacion").show(100);
  
  
}



function menuPrincipalMATERIASCalifAsignauraCarrera(){

  // efectos show  hide
  $("#menuMensajes").hide();
  $("#menuPrincipal").hide();
  
  $("#menuCarga").hide();
  $("#menuCargaInstitucion").hide();
  $("#menuCargaCurso").hide();
  $("#menuCargaPeronal").hide();
  $("#menuCargaAlumno").hide();
  
  $("#menuAuxiliar").hide();
  $("#menuAuxiliarControlAsistencia").hide();
  $("#asignaturaCarrera").show(100);

  

  $("#horarioTotal").hide();
  $("#menuAuxiliarPreinscri").hide();
  $("#menuAuxiliarPreinscriaLUMNO").hide();
  $("#menuAuxiliarPreinscridOCENTE").hide();
  $("#menuUsuarios").hide();
  $("#menuPaginaPrincipal").hide();
  $("#menuAuxiliarASGNATURAMATERIAS").hide();
  $("#menuAuxiliarASGNATURAMATERIASCalificacion").hide();
  
  
}
function horarioTotal544(){
  $('#tablahorariotommte').load('horarios/tablaHorario.php');
  regresarTablaHorario();

  
  // efectos show  hide
  $("#menuMensajes").hide();
  $("#menuPrincipal").hide();
  
  $("#menuCarga").hide();
  $("#menuCargaInstitucion").hide();
  $("#menuCargaCurso").hide();
  $("#menuCargaPeronal").hide();
  $("#menuCargaAlumno").hide();
  
  $("#menuAuxiliar").hide();
  $("#menuAuxiliarControlAsistencia").hide();
  $("#asignaturaCarrera").hide();

  $("#horarioTotal").show(100);

  $("#menuAuxiliarPreinscri").hide();
  $("#menuAuxiliarPreinscriaLUMNO").hide();
  $("#menuAuxiliarPreinscridOCENTE").hide();
  $("#menuUsuarios").hide();
  $("#menuPaginaPrincipal").hide();
  $("#menuAuxiliarASGNATURAMATERIAS").hide();
  $("#menuAuxiliarASGNATURAMATERIASCalificacion").hide();
  
  
}
