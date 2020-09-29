<?php 
  session_start();





  if (isset($_SESSION['dniLoginT']) && $_SESSION['usuarioA']=='alumno') 
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
<link rel="shortcut icon" href="../libreriasConexion/librerias/favicon.ico">


  <!-- CSS only -->
<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="../libreriasConexion/librerias/alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="../libreriasConexion/librerias/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="../libreriasConexion/librerias/select2/css/select2.css">



  <link rel="stylesheet" type="text/css" href="../libreriasConexion/esty.css">

  

 
  
  <script src="../libreriasConexion/librerias/bootstrap/js/bootstrap.js"></script>
  <script src="../libreriasConexion/librerias/alertifyjs/alertify.js"></script>
  <script src="../libreriasConexion/librerias/select2/js/select2.js"></script>

<script src="js/funcionesEfectoMenuBedel.js"></script>
<script src="js/funcionesAlumnoCarga.js"></script>
<script src="js/funcionesAlumnoCargaAnalitico.js"></script>
<script src="js/funcionesMesaExamen.js"></script>




















</head>
<body class='borde4' >
    <!--Barra de Navegacion-->

<div class="container1">
    <div class="row">
        <div class="col-12">


     
     <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <a href="#" class="navbar-brand">ALUMNO: <?php

         require_once "../libreriasConexion/conexion.php";
          $conexion=conexion();

        $sql177="SELECT * FROM `datosalumnos` WHERE `dniAlumnos`='$dniLoginT'";
   

        $result55=mysqli_query($conexion,$sql177);
        while($ver=mysqli_fetch_row($result55)){ 

          

            $nomrAlumno=$ver[1];


      }


        echo $nomrAlumno; ?>



         -- DNI: <?php echo $dniLoginT; ?></a>
       

        <button class="navbar-toggler" title="button" data-toggle="collapse" data-target="#uno">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse justify-content-end" id="uno">
        <ul class="navbar-nav">

        

          <li class="nav-item"><a href="javascript: void(0)"  class="nav-link" onclick='cerrar();'>CERRAR SESIÓN</a></li>


        </ul>
      </div>
      </nav>       


<br><br><br>

<!-- Contenido-->

    <div class="container">
        <div class="row">
            <div class="col-md-12">

              <dir id="menuPrincipalBedel">

                 <!-- Menu-->
                <button type="button" class="btn btn-danger btn-block" onclick='menuCargaBedelNOTASASISTENCIA();'>
                  <svg class="bi bi-arrow-down-square-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 5a.5.5 0 0 0-1 0v4.793L5.354 7.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 9.793V5z"/>
                </svg>

                  ALUMNO <span class="badge badge-light">ASISTENCIA Y NOTAS </span></button><br>

                <button type="button" class="btn btn-danger btn-block" onclick='mesaExamen();'>
                  <svg class="bi bi-arrow-down-square-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 5a.5.5 0 0 0-1 0v4.793L5.354 7.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 9.793V5z"/>
                </svg>

                  CONSTANCIAS </button><br>
              </dir>


              <div id="mesaExamen">
                 <button type="button" class="btn btn-danger btn-block" onclick='menuPrincipalBedel();'>

              <svg class="bi bi-arrow-left-square-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.354 10.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L6.207 7.5H11a.5.5 0 0 1 0 1H6.207l2.147 2.146z"/>
            </svg>


                Regresar al menú principal</button>


                
                <div id="fechaInscrCursado"></div>
                <div id="fechaInscrFinal"></div>

                <div id="BuscartablaMesa"></div>
                <div id="tablaMesa"></div>
                <div id="extratablaMesa"></div>






              </div>









              <dir id="menuCargaBedelNOTASASISTENCIA">


                <!-- atras -->
                <button type="button" class="btn btn-danger btn-block" onclick='menuPrincipalBedel();'>

                  <svg class="bi bi-arrow-left-square-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.354 10.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L6.207 7.5H11a.5.5 0 0 1 0 1H6.207l2.147 2.146z"/>
                </svg>


                Atrás </button><br>

                 <!-- contenido -->
                <dir id="buscarAlumnosAsistencia"></dir>
                <dir id="tablaAlumnosAsistencia"></dir>
                <dir id="extraAlumnosAsistencia"></dir>


              </dir>

              <dir id="menuCargaBedelNotas">

                <!-- Regresar Atras -->
                <button type="button" class="btn btn-danger btn-block" onclick='menuPrincipalBedel();'>

              <svg class="bi bi-arrow-left-square-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.354 10.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L6.207 7.5H11a.5.5 0 0 1 0 1H6.207l2.147 2.146z"/>
            </svg>


                Regresar al menú principal</button><br>
                <button type="button" class="btn btn-danger btn-block" onclick='menuCargaBedelNOTASASISTENCIA();'>


                <svg class="bi bi-arrow-left-square-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.354 10.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L6.207 7.5H11a.5.5 0 0 1 0 1H6.207l2.147 2.146z"/>
              </svg>



                Atrás</button><br>




                <!-- contenido -->

                <dir id="tablaAlumnosNota"></dir>
                <dir id="extraAlumnosNota"></dir>


              </dir>
              
             
             


            </div>
           
    </div>
  </div>
 

<script type="text/javascript">
  $(document).ready(function(){
      
      menuPrincipalBedel();

      $('#tablaAlumnosAsistencia').load('cargaAlumno/alumnoTabla.php');
      $('#extraAlumnosAsistencia').load('cargaAlumno/alumnoExtras.php');

      $('#tablaAlumnosNota').load('cargaAlumno/alumnoTablaNotaAnalitico.php');
      $('#extraAlumnosNota').load('cargaAlumno/alumnoExtasNotaAnalitico.php');

    


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
    