
<?php 
  
  session_start();
  require_once "../../../libreriasConexion/conexion.php";
  $conexion=conexion();

 ?>




    <h4><p style="color:#F4F6F6;"><mark>DATOS DEL ALUMNADO</mark></p></h4> 

<div class="table-responsive">
    <table class="table table-secondary  table-hover">
    
      <tr>
        <td>CURSO-ASIG-HORARIO</td>
        <td>Editar</td>
        <td>Eliminar</td>
  
      </tr>

      <?php 



$idCusado="";
$idhora="";
$idcurso="";
$idAsignatura="";
$dia="";
$hI="";
$hF="";
$curso="";
$Asignatura="";
if(isset($_SESSION['tablaInscripCursadoIdAlumno'])){


            $tablaInscripCursadoIdAlumno=$_SESSION['tablaInscripCursadoIdAlumno'];
             $_SESSION['tablaInscripCursadoIdAlumno']=$tablaInscripCursadoIdAlumno;
         
      $sql8="SELECT * FROM `inscrpcursado` WHERE `idAlumno`='$tablaInscripCursadoIdAlumno'";


           

        $result8=mysqli_query($conexion,$sql8);
        while($ver=mysqli_fetch_row($result8)){ 

          

            $datos=$ver[0]."||".
               $ver[1]."||".
               $ver[2]."||".
               $ver[3];

             $idCusado=$ver[0];
             $idhora=$ver[2];


         $sql9="SELECT * FROM `datoscursohora` WHERE `idhora`='$idhora'";
                $result9=mysqli_query($conexion,$sql9);
                  while ($ver=mysqli_fetch_row($result9)) {

    
                    $idcurso=$ver[2];
                    $idAsignatura=$ver[3];
                    $dia=$ver[5];
                    $hI=$ver[6];
                    $hF=$ver[7];
                  }

              $sql1="SELECT * FROM `datoscurso` WHERE `idcurso`='$idcurso'";
                $result11=mysqli_query($conexion,$sql1);
                  while ($ver=mysqli_fetch_row($result11)){
                    $curso=$ver[5];
                   }
              $sql2="SELECT * FROM `institucionplanasignatura` WHERE `idAsig`='$idAsignatura'";
                $result22=mysqli_query($conexion,$sql2);
                  while ($ver=mysqli_fetch_row($result22)){
                    $Asignatura=$ver[4];
                   }
          
       ?>

      <tr>
     
        <td><?php echo $curso; ?>--<?php echo $Asignatura; ?>--<?php echo $dia.": ".$hI."/".$hF; ?></td>


        
  
        <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil"   onclick="agregaformALUAlumnoInscripCursado('<?php echo $datos ?>')">



            <svg class="bi bi-pencil-square" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg>







            
          </button>
        </td>
        <td>
          <button class="btn btn-danger glyphicon glyphicon-remove" 
          onclick="preguntarSiNoAlumnoInscripCursado('<?php echo $idCusado ?>')">


          <svg class="bi bi-trash-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
        </svg>








            
          </button>
        </td>

  
      </tr>
      <?php 
    }}


       ?>
    </table>
  </div>
 