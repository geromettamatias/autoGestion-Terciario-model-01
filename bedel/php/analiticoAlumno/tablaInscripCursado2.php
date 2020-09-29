
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


        
  


  
      </tr>
      <?php 
    }}


       ?>
    </table>
  </div>