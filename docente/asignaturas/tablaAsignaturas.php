
<?php 
  
  session_start();
  require_once "../../libreriasConexion/conexion.php";
  $conexion=conexion();

 ?>


<br><br>

    <h5><p style="color:#F4F6F6;"><mark>Asignaturas</mark></p></h5> 

<br>

<div class="table-responsive">
    <table  class="table table-secondary  table-hover">
    <thead><tr>
        <td>CARRERA</td>
        <td>CURSO</td>
        <td>ASIGNATURA</td>
        <td>CALIFICADOR</td>
      </tr></thead>
      
      <tbody>
      <?php 


      if (isset($_SESSION['dniLoginT'])) {


        $dniLoginT=$_SESSION['dniLoginT'];

       

         $sql19="SELECT * FROM `datospersonal` WHERE `dniDocente`='$dniLoginT'";
         
         $idPersonal="";
        $result19=mysqli_query($conexion,$sql19);
        while($ver=mysqli_fetch_row($result19)){ 

            $idPersonal=$ver[0];

             }

            $idAsig=""; 
            $Carrera=""; 
            $idCurso=""; 
            $curso="";
            $asignatura=""; 

      $sql="SELECT * FROM `datoscursohora` WHERE `idPersonal`='$idPersonal'";
         

        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

          

            $datos=$ver[0]."||".
               $ver[1]."||".
               $ver[2]."||".
               $ver[3]."||".
               $ver[4]."||".
               $ver[5]."||".
               $ver[6]."||".
               $ver[7]."||".
               $ver[8];

            $idAsig=$ver[3];
            $Carrera=$ver[4];
            $idCurso=$ver[2];

   

       $sql1="SELECT * FROM `datoscurso` WHERE `idcurso`='$idCurso'";
         

        $result1=mysqli_query($conexion,$sql1);
        while($ver=mysqli_fetch_row($result1)){ 

            $curso=$ver[5];

             }


       $sql11="SELECT * FROM `institucionplanasignatura` WHERE `idAsig`='$idAsig'";
         

        $result11=mysqli_query($conexion,$sql11);
        while($ver=mysqli_fetch_row($result11)){ 

            $asignatura=$ver[4];

             }


          
        
          
       ?>


      <tr>

        <td><?php echo $Carrera ?></td>
         <td><?php echo $curso ?></td>


        <td><button class="btn btn-success glyphicon glyphicon-pencil"  onclick="InformacionAsignatura('<?php echo $datos ?>')"><?php echo $asignatura ?>



        <svg class="bi bi-paperclip" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
      </svg>


            
          </button></td>
       

        <td><button class="btn btn-info"  onclick="planillacalificador('<?php echo $datos ?>')">



        <svg class="bi bi-paperclip" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
      </svg>


            
          </button></td>


      </tr>
      <?php 
    } }  


       ?></tbody>
    </table>
  </div>



 