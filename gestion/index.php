<?php 
  session_start();





  if (isset($_SESSION['dniLoginT']) && $_SESSION['usuarioA']=='admin') 
  {

    $dniLoginT=$_SESSION['dniLoginT'];
    $usuarioA=$_SESSION['usuarioA'];

    $_SESSION['dniLoginT']=$dniLoginT;
    $_SESSION['usuarioA']=$usuarioA;


 ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>TERCIARIO</title>
<link rel="shortcut icon" href="librerias/favicon.ico">


  <!-- CSS only -->
<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="librerias/select2/css/select2.css">



  <link rel="stylesheet" type="text/css" href="../libreriasConexion/esty.css">

  

 
  
  <script src="librerias/bootstrap/js/bootstrap.js"></script>
  <script src="librerias/alertifyjs/alertify.js"></script>
  <script src="librerias/select2/js/select2.js"></script>

  <script src="js/funcionesInstitucionCarga.js"></script>
  <script src="js/funcionesCursoCarga.js"></script>  
  <script src="js/funcionesPersonalCarga.js"></script>
  <script src="js/funcionesAlumnoCarga.js"></script>

  
  <script src="js/funcionesPreAlumnoCarga.js"></script>
  <script src="js/funcionesPreDocenteCarga.js"></script>
  <script src="js/funcionesUsuarioSistema.js"></script>



  <script src="js/funcionespaginaPrincipal.js"></script>
<script src="js/funcionesEfectoMenu.js"></script>
<script src="js/funcionesEliminarMnsaje.js"></script>



</head>
<body class='borde4' >
    <!--Barra de Navegacion-->

<div class="container1">
    <div class="row">
        <div class="col-12">


     
     <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <a href="#" class="navbar-brand">Administrador (DNI: <?php echo $dniLoginT; ?>)</a>
        

        <button class="navbar-toggler" title="button" data-toggle="collapse" data-target="#uno">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse justify-content-end" id="uno">
        <ul class="navbar-nav">

           <li class="nav-item"><a href="javascript: void(0)" class="nav-link" onclick='menuMensajes();'>
          Mensajes</a></li>
    
          <li class="nav-item"><a href="javascript: void(0)" class="nav-link" onclick='menuPaginaPrincipal();'>
          Pagina Principal</a></li>


          <li class="nav-item"><a href="javascript: void(0)"  class="nav-link" onclick='cerrar();'>CERRAR SESIÓN</a></li>


        </ul>
      </div>
      </nav>       


<br><br><br>

<!-- Contenido-->

    <div class="container">
        <div class="row">
            <div class="col-md-12">

              
              <dir id="menuPrincipal">
                <button type="button" class="btn btn-danger btn-block" onclick='menuCarga();'>PRIMER PASO <span class="badge badge-light"> CARGA </span></button><br>
                <button type="button" class="btn btn-danger btn-block" onclick='menuAuxiliar(<?php echo $dniLoginT; ?>);' >GESTIÓN <span class="badge badge-light"> AUXILIAR </span></button>
                <button type="button" class="btn btn-danger btn-block" onclick='menuDirectivo();' disabled>GESTIÓN <span class="badge badge-light"> DIRECTIVO </span></button>
                <button type="button" class="btn btn-danger btn-block" onclick='menuSecretaria();' disabled >GESTIÓN <span class="badge badge-light"> SECRETARIA </span></button>
                

              </dir>

              <dir id="menuCarga">
                  <button type="button" class="btn btn-info btn-block" onclick='menuPrincipal();'>REGRESAR <span class="badge badge-light"> MENU PRINCIPAL </span></button><br>

                  <button type="button" class="btn btn-info btn-block" onclick='menuCargaInstitucion();'>INSTITUCIÓN <span class="badge badge-light"> CARGA </span></button>
                <button type="button" class="btn btn-info btn-block" onclick='menuCargaCurso();'>CURSO <span class="badge badge-light"> CARGA </span></button>
                <button type="button" class="btn btn-info btn-block" onclick='horarioTotal544();'>HORARIOS <span class="badge badge-light"> HORARIOS </span></button>
                <button type="button" class="btn btn-info btn-block" onclick='menuCargaPeronal();'>PERSONAL <span class="badge badge-light"> CARGA </span></button>
                <button type="button" class="btn btn-info btn-block" onclick='menuCargaAlumno();'>ALUMNOS <span class="badge badge-light"> CARGA </span></button>

                <button type="button" class="btn btn-info btn-block" onclick='preInscricionesAlumno();'>PREINSCRIPCIÓN <span class="badge badge-light"> ALUMNO </span></button>

                <button type="button" class="btn btn-info btn-block" onclick='preInscricionesDOCENTE();'>PREINSCRIPCIÓN <span class="badge badge-light"> DOCENTE </span></button>
                 <button type="button" class="btn btn-info btn-block" onclick='MENUDEuSUARIO();'>USUARIOS <span class="badge badge-light"> SISTEMA </span></button>


              </dir>

              <dir id="menuCargaInstitucion"></dir>

              <dir id="asignaturaCarrera"></dir>
              <dir id="EXTRASCARGAINSTITUCION"></dir>

              <dir id="menuCargaCurso"></dir>

              <dir id="EXTRASCARGACURSO"></dir>

              <dir id="menuCargaPeronal">

                 <button type="button" class="btn btn-info btn-block" onclick='menuPrincipal();'>REGRESAR <span class="badge badge-light"> MENU PRINCIPAL </span></button>
                  <button type="button" class="btn btn-info btn-block" onclick='menuCarga();'>REGRESAR <span class="badge badge-light"> ATRAS </span></button><br>
    



                <div id="PersonalPlantaBuscador"></div>
                <dir id="PersonalPlanta"></dir>
              </dir>
              <dir id="EXTRASCARGAPANTEL"></dir>


              <dir id="menuCargaAlumno">
                <div id="AlumnoPlantaBuscador"></div>
                <dir id="AlumnoPlanta"></dir>
                <dir id="EXTRASCARGAALUMNO"></dir>
              </dir>
              

           

            
              <dir id="horarioTotal">
                
                <dir id="buscarHorarios"></dir>
                <dir id="tablahorariotommte"></dir>

               
              </dir>
              <dir id="menuSecretaria"></dir>



           
              
                       



              <dir id="menuAuxiliarPreinscriaLUMNO">
              <button type="button" class="btn btn-info btn-block" onclick='regresarPrincipalpa();'>REGRESAR <span class="badge badge-light"> MENU PRINCIPAL </span></button>
                  <button type="button" class="btn btn-info btn-block" onclick='regresaratraspa();'>REGRESAR <span class="badge badge-light"> ATRAS </span></button><br>
                 

                 <div id="preAlumnoBuscador"></div>
                 <dir id="preAlumnoTabla"></dir> 
                 <dir id="preAlumnoExtras"></dir>


            </dir>




              <dir id="menuAuxiliarPreinscridOCENTE"><button type="button" class="btn btn-info btn-block" onclick='menuPrincipal();'>REGRESAR <span class="badge badge-light"> MENU PRINCIPAL </span></button>
                  <button type="button" class="btn btn-info btn-block" onclick='menuCarga();'>REGRESAR <span class="badge badge-light"> ATRAS </span></button><br>
                


                <div id="preDocenteBuscador"></div>
                 <dir id="preDocenteTabla"></dir> 
                 <dir id="preDocenteExtras"></dir>



              </dir>

              <dir id="menuUsuarios">
              <button type="button" class="btn btn-info btn-block" onclick='ResectDatosMenuPrincipal();'>REGRESAR <span class="badge badge-light"> MENU PRINCIPAL </span></button>
                  <button type="button" class="btn btn-info btn-block" onclick='ResectDatosMenuCarga();'>REGRESAR <span class="badge badge-light"> ATRAS </span></button><br>


                 <dir id="UsuarioSistemaBUSCAR"></dir> 
                 <dir id="usuarioSistemaTabla"></dir> 
                 <dir id="usuarioSistemaExtras"></dir>

               </dir>



              <dir id="menuPaginaPrincipal">
              <button type="button" class="btn btn-info btn-block" onclick='menuPrincipal();'>REGRESAR <span class="badge badge-light"> MENU PRINCIPAL </span></button>
                  <br>
                

                <dir id="paginaPrincipal"></dir>
                <dir id="elementosEstras"></dir>

              </dir>


              <dir id="menuMensajes"><br>
              <button type="button" class="btn btn-info btn-block" onclick='menuPrincipal();'>REGRESAR <span class="badge badge-light">MENÚ PRINCIPAL </span></button>
                  <br>
 
                <dir id="menuMensajesTT"></dir>

              </dir>


                


            </div>
           
    </div>
  </div>
 

<script type="text/javascript">
  $(document).ready(function(){
// Carga div



$('#buscarHorarios').load('horarios/buscarHorario.php');


$('#tablahorariotommte').load('horarios/tablaHorario.php');


$('#asignaturaCarrera').load('cargaInstitucional/Asignatura.php');

$('#menuCargaInstitucion').load('cargaInstitucional/institucionTabla.php');
$('#EXTRASCARGAINSTITUCION').load('cargaInstitucional/institucionExtras.php');

$('#menuCargaCurso').load('cargaCurso/cursoTabla.php');
$('#EXTRASCARGACURSO').load('cargaCurso/cursoExtras.php');

$('#AlumnoPlantaBuscador').load('cargaAlumno/alumnoTablaBUSCAR.php');
$('#AlumnoPlanta').load('cargaAlumno/alumnoTabla.php');
$('#EXTRASCARGAALUMNO').load('cargaAlumno/alumnoExtras.php');

$('#PersonalPlantaBuscador').load('cargaPersonal/personalTablaBUSCAR.php');
$('#PersonalPlanta').load('cargaPersonal/personalTabla.php');
$('#EXTRASCARGAPANTEL').load('cargaPersonal/personalExtras.php');



$('#preAlumnoBuscador').load('preAlumno/prAlumnoTablaBUSCAR.php');
$('#preAlumnoTabla').load('preAlumno/prAlumnoTabla.php');
$('#preAlumnoExtras').load('preAlumno/prAlumnoExtras.php');


  



$('#preDocenteBuscador').load('PreDocente/prPersonalTablaBUSCAR.php');
$('#preDocenteTabla').load('PreDocente/prPersonalTabla.php');
$('#preDocenteExtras').load('PreDocente/prPersonalExtras.php');

$('#UsuarioSistemaBUSCAR').load('UsuarioSistema/UsuarioSistemaBUSCAR.php');
$('#usuarioSistemaTabla').load('UsuarioSistema/UsuarioSistemaTabla.php');
$('#usuarioSistemaExtras').load('UsuarioSistema/UsuarioSistemaExtras.php');







$('#paginaPrincipal').load('paginaPrincipal/elementosTambla.php');

$('#elementosEstras').load('paginaPrincipal/elementosEstras.php');


$('#menuMensajesTT').load('mensajes/mensajes.php');




    //$('#buscador').load('componentes/buscador.php');

// efectos show  hide
  $("#menuPrincipal").show(100);
  $("#menuCarga").hide();
  $("#horarioTotal").hide();
  $("#menuCargaInstitucion").hide();
  $("#menuCargaCurso").hide();
  $("#menuCargaPeronal").hide();
  $("#menuCargaAlumno").hide();
  $("#menuDirectivo").hide();
  $("#menuDirectivoCrearMesaExamen").hide();
  $("#menuDirectivoInscripcionMesa").hide();
  $("#menuDirectivoActaBolante").hide();
  $("#menuSecretaria").hide();
  $("#menuAuxiliar").hide();
  $("#menuAuxiliarControlAsistencia").hide();
  $("#asignaturaCarrera").hide();
  

  $("#menuAuxiliarASGNATURA").hide();
  $("#menuAuxiliarPreinscriaLUMNO").hide();
  $("#menuAuxiliarPreinscridOCENTE").hide();
  $("#menuUsuarios").hide();
  $("#menuMensajes").hide();
  $("#menuAuxiliarASGNATURAMATERIAS").hide();
  $("#menuPaginaPrincipal").hide();

  
         

  });
</script>


    <script>


        function cerrar()
        {
            $.ajax({
                url:'../libreriasConexion/cerrar.php',
                type:'POST',
                data:"mensaje=mensaje&boton=cerrar"
            }).done(function(resp){
                //alert(resp);
                window.location.href = "../login/index.php";
            });
        }
    </script>


   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.14.4/dist/sweetalert2.all.min.js"></script> 


<script src="../libreriasConexion/librerias/jquery-3.2.1.min.js"></script>

</body>
</html>

<?php

  }
  else
  {
    header("location:../login/index.php");
  }
 ?>
    