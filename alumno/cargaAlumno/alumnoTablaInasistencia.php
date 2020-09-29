
<?php 
  
  session_start();
  require_once "../../libreriasConexion/conexion.php";
  $conexion=conexion();

 ?>

 

<br><br><br>

<div class="table-responsive">
    <table class="table table-secondary table-sm table-hover">
    
      <tr>
        <td>FECHA</td>
        <td>CANT.</td>
        <td>JUSTI</td> 

      </tr>

      <?php 


      if (isset($_SESSION['InasistenciaAlumno'])) {

        $cantidad=0;


        $InasistenciaAlumno=$_SESSION['InasistenciaAlumno'];
        $_SESSION['InasistenciaAlumno']=$InasistenciaAlumno;

            $sql="SELECT * FROM `asistenciaalumno` WHERE `idAlumnos`='$InasistenciaAlumno' ORDER BY `fecha`";
       
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

          

            $datos=$ver[0]."||".
               $ver[1]."||".
               $ver[2]."||".
               $ver[3]."||".
               $ver[4];


               $fecha = date_create($ver[3]);

               if ($ver[4]=="1") {
                 $jus="NO";
               }
               if ($ver[4]=="2") {
                 $jus="SI";
               }
                if ($ver[4]=="3") {
                 $jus="EN ESPERA";
               }


               $cantidad=$cantidad+$ver[2];
           
          
        
          
       ?>

      <tr>
        <td><?php echo date_format($fecha,"d/m/Y"); ?></td>
        <td><?php echo $ver[2]; ?></td>
        <td><?php echo $jus; ?></td>


        
  
      
      </tr>
      <?php 
    }}


       ?>
    </table>

<h5>TOTAL DE INASISTENCIA: <?php echo $cantidad; ?></h5>

  </div>