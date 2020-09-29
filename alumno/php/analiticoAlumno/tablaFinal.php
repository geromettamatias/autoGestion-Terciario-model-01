
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
        <td>ELI.</td>
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


        
        <td>
          <button class="btn btn-danger glyphicon glyphicon-remove" 
          onclick="preguntarSiNoAlumnoTRIFinal('<?php echo $datos ?>')">


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
 