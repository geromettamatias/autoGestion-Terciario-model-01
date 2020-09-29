
<?php 
  
  session_start();
  require_once "../../libreriasConexion/conexion.php";
  $conexion=conexion();


  if (isset($_SESSION['idPlanAnalitico']) && isset($_SESSION['idAlumnoAnalitico'])) {

    $idPlanAnalitico=$_SESSION['idPlanAnalitico'];
    $_SESSION['idPlanAnalitico']=$idPlanAnalitico;;

    $idAlumnoAnalitico=$_SESSION['idAlumnoAnalitico'];
    $_SESSION['idAlumnoAnalitico']=$idAlumnoAnalitico;


      $sql1="SELECT * FROM `institucionplan` WHERE `idPlan`='$idPlanAnalitico'";
       
        $result1=mysqli_query($conexion,$sql1);
        while($ver=mysqli_fetch_row($result1)){ 

          

            $nResolu=$ver[2];
            $carrera=$ver[3];

            }

      $inscrp=$idAlumnoAnalitico."||".$idPlanAnalitico;
            


 ?>

 

<br><br><br>

   

<div class="table-responsive">


  


   <table class="table table-secondary table table-hover">
    
      <tr>
        <td>N°RESOLUCIÓN</td>
        <td>CARRERA</td>
          
      </tr>
       <tr>
        <td><?php echo $nResolu; ?></td>
        <td><?php echo $carrera; ?></td>    
      </tr>

    </table>


    <table class="table table-secondary table table-hover">
    
     
       <tr>
        <td>

          <button class="btn btn-outline-primary" data-toggle="modal" data-target="#modalAlumnoInscripcionCursado" onclick="editarNotaAlumnoInscripcionCursado('<?php echo $inscrp ?>')">INSCRIPCIÓN CURSADO



                <svg class="bi bi-clipboard" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
              </svg>

      
          </button>
     
        </td>


        <td>

                <button class="btn btn-outline-danger" data-toggle="modal" data-target="#modalAlumnoInscripcionFinal" onclick="editarNotaAlumnoInscripcionMesa('<?php echo $inscrp ?>')">INSCRIPCIÓN FINALES



                <svg class="bi bi-clipboard" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
              </svg>

      
          </button>
          

        </td>    
      </tr>


    </table>



    <table class="table table-secondary table table-hover">
    
      <tr>
        <td>CICLO</td>
        <td>ASIGNATURA</td> 
        <td>SITUACIÓN</td>
        <td>NOTA-REGULAR</td>
        <td>NOTA-FINAL</td>
  
      </tr>

      <?php 


$desde=0;
$hasta=0;

$datos="INSCRIPCIÓN CURSADO";

  $sql23315="SELECT * FROM `fechas` WHERE `inscp`='$datos'";
        $result223225=mysqli_query($conexion,$sql23315);
           while ($ver=mysqli_fetch_row($result223225)) {
                
          $desde=$ver[1];
          $hasta=$ver[2];
        
           
           }

$tiemP=0;

$time = time();

$tiemP= date("Y-m-d", $time);

$r=0;





$desde1=0;
$hasta1=0;

$datos1="INSCRIPCIÓN FINAL";

  $sql23315g="SELECT * FROM `fechas` WHERE `inscp`='$datos1'";
        $result223225g=mysqli_query($conexion,$sql23315g);
           while ($ver=mysqli_fetch_row($result223225g)) {
                
          $desde1=$ver[1];
          $hasta1=$ver[2];
        
           
           }

$tiemP1=0;

$time1 = time();

$tiemP1= date("Y-m-d", $time1);

$r1=0;












      $sql="SELECT * FROM `institucionplanasignatura` WHERE `idPlan`='$idPlanAnalitico' ORDER BY `ciclo`";
       
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

          

            $idAsigAnalitico=$ver[0];
            $cicloAnalitico=$ver[3];
            $asignaturaAnalitico=$ver[4];


         if ($cicloAnalitico==="1er AÑO") {

              $cicloAnalitico='<b style="color:#2471A3;">'.$cicloAnalitico.'</b>';
              $asignaturaAnalitico='<b style="color:#2471A3;">'.$asignaturaAnalitico.'</b>';
              
            }

          if ($cicloAnalitico==="2do AÑO") {

              $cicloAnalitico='<b style="color:#BA4A00;">'.$cicloAnalitico.'</b>';
              $asignaturaAnalitico='<b style="color:#BA4A00;">'.$asignaturaAnalitico.'</b>';
              
            }
          if ($cicloAnalitico==="3ro AÑO") {

              $cicloAnalitico='<b style="color:#8E44AD;">'.$cicloAnalitico.'</b>';
              $asignaturaAnalitico='<b style="color:#8E44AD;">'.$asignaturaAnalitico.'</b>';
              
            }
          if ($cicloAnalitico==="4to AÑO") {

              $cicloAnalitico='<b style="color:#2874A6;">'.$cicloAnalitico.'</b>';
              $asignaturaAnalitico='<b style="color:#2874A6;">'.$asignaturaAnalitico.'</b>';
              
            }
          if ($cicloAnalitico==="5to AÑO") {

              $cicloAnalitico='<b style="color:#C0392B;">'.$cicloAnalitico.'</b>';
              $asignaturaAnalitico='<b style="color:#C0392B;">'.$asignaturaAnalitico.'</b>';
              
            }        


                     

        $notaRegular="-";
        $notaFinal="";
        $situacion='';

       $sql12="SELECT * FROM `notasalumno` WHERE `idAlumno`='$idAlumnoAnalitico' AND `idPlan`='$idPlanAnalitico' AND `idAsignatura`='$idAsigAnalitico'";
       
        $result12=mysqli_query($conexion,$sql12);
        while($ver=mysqli_fetch_row($result12)){ 

            $notaRegular=$ver[4];
            $notaFinal=$ver[5];
            $situacion=$ver[6];

        }

        $estado='<b style="color:#1A5276;">PENDIENTE</b>';

        if ($situacion!=="") {
          $estado='<b style="color:#B7950B;">'.$situacion.'</b>';
        }

        if ($notaFinal >= 6) {
          $estado='<b style="color:#196F3D;">APROBADO</b>';
        }

        if ($notaRegular==="" && $notaFinal==="") {
          $estado='<b style="color:#1A5276;">PENDIENTE</b>';
        }



        $AsignaturaCurso="";
      $sql12334="SELECT * FROM `datoscursohora` WHERE `idPlan`='$idPlanAnalitico' AND `idAsig`='$idAsigAnalitico'";
       
        $result12334=mysqli_query($conexion,$sql12334);
        while($ver=mysqli_fetch_row($result12334)){ 

            $idhora3=$ver[0];



         $sql1233="SELECT * FROM `inscrpcursado` WHERE `idhora`=$idhora3 AND `idPlan`='$idPlanAnalitico' AND `idAlumno`='$idAlumnoAnalitico'";
       
        $result1233=mysqli_query($conexion,$sql1233);
        while($ver=mysqli_fetch_row($result1233)){ 

            $AsignaturaCurso="EN CURSO";
          
        }
          
        }




if ($desde<=$tiemP && $hasta>=$tiemP) {



        if ($estado==='<b style="color:#1A5276;">PENDIENTE</b>' && $AsignaturaCurso!=="EN CURSO") {
            $AsignaturaCurso='<button class="btn btn-info" onclick="inscriCursaApm('.$idAlumnoAnalitico.','.$idPlanAnalitico.','.$idAsigAnalitico.')">INS-CUR

                     <svg class="bi bi-clipboard" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
              </svg>

      
          </button>
';
          }  


}



$editarAnalitico=$idAlumnoAnalitico."||".$idPlanAnalitico."||".$idAsigAnalitico;
        

  
       ?>

      <tr>
    
        <td><?php echo $cicloAnalitico; ?></td>
        <td><?php echo $asignaturaAnalitico; ?></td>
        <td><?php echo $estado."-".$AsignaturaCurso ?></td>
        <td><?php echo $notaRegular; ?></td>
        <td><?php echo $notaFinal; ?></td>

       



      
      </tr>
      <?php 
    }


       ?>
    </table>


  </div>


    <?php 
    }


       ?>