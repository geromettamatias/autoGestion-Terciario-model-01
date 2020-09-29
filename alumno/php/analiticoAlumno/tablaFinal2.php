
<?php 
  
  session_start();
  require_once "../../../libreriasConexion/conexion.php";
  $conexion=conexion();

 ?>


   <p style="color:#F4F6F6;"><mark>ASIGNATURAS INSCRIPTAS A FINALES</mark></p> 


<div class="table-responsive">
    <table class="table table-secondary  table-hover">
    
      <tr>
        <td>AÑO-ASIGNATURA-FECHAS</td>
      
      </tr>

      <?php 



      $nombreAsig="";
      $ciclo="";
      $f1="";
      $f2="";


        if(isset($_SESSION['BuscarValorAlumno'])){


            $idp=$_SESSION['BuscarValorAlumno'];
             $_SESSION['BuscarValorAlumno']=$idp;
          
            $sql="SELECT * FROM `inscrpfinal` WHERE `idAlumno`='$idp'";

   

        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

          

            $datos=$ver[0]."||".
               $ver[1]."||".
               $ver[2]."||".
               $ver[3];

            $idMesa=$ver[2];






          $sql1="SELECT * FROM `inscrpmesa` WHERE `idMesa`='$idMesa'";

   

        $result1=mysqli_query($conexion,$sql1);
        while($ver=mysqli_fetch_row($result1)){ 

     
            $idhora=$ver[1];

            $f1=$ver[4];
            $f2=$ver[5];


        }
          


       $sql12="SELECT * FROM `datoscursohora` WHERE `idhora`='$idhora'";

   

        $result12=mysqli_query($conexion,$sql12);
        while($ver=mysqli_fetch_row($result12)){ 

     
            $idAsig=$ver[3];

            

        }


       $sql12="SELECT * FROM `institucionplanasignatura` WHERE `idAsig`='$idAsig'";

   

        $result12=mysqli_query($conexion,$sql12);
        while($ver=mysqli_fetch_row($result12)){ 

            $ciclo=$ver[3];
            $nombreAsig=$ver[4];

            

        }
        
          
       ?>

      <tr>
        <td><?php echo $ciclo."--".$nombreAsig."--".$f1."--".$f1; ?></td>

              </tr>
      <?php 
    }}


       ?>
    </table>
  </div>
 