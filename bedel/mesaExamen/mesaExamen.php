
<?php 
  
  session_start();
  require_once "../../libreriasConexion/conexion.php";
  $conexion=conexion();

 ?>

 
<br><br>

    <h4><p style="color:#F4F6F6;"><mark>MESAS DE EXAMEN</mark></p></h4> 
<caption>
      <button class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#modalNuevoAlumnoMesa">
        Agregar nuevo 
        <span class="glyphicon glyphicon-plus"></span>
      </button>
    </caption>


    <table class="table table-secondary  table-hover">
    
      <tr>
        <td>CARRERA-CURSO-ASIGNATURA</td>
        <td>F-M</td>
        <td>F-M</td>
        <td>Editar</td>
        <td>Eliminar</td>
      </tr>

      <?php 




      if (isset($_SESSION['mesaSeleBuscar'])){


         $idcurso=$_SESSION['mesaSeleBuscar'];
         $_SESSION['mesaSeleBuscar']=$idcurso;
  
      $sql="SELECT * FROM `inscrpmesa` WHERE `idcurso`='$idcurso'";


      if ($idcurso==="0") {
       $sql="SELECT * FROM `inscrpmesa`";
      }

    }else{

      $sql="SELECT * FROM `inscrpmesa`";
    }




        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

          

            $datos=$ver[0]."||".
               $ver[1]."||".
               $ver[2]."||".
               $ver[3]."||".
               $ver[4]."||".
               $ver[5]."||".
               $ver[6];

            $idMesa=$ver[0];
            $idhora=$ver[1];
            $idProf1=$ver[2];
            $idProf2=$ver[3];


            $fec1=$ver[4];
            $fec2=$ver[5];
          



      $sql1="SELECT * FROM `datoscursohora` WHERE `idhora`='$idhora'";
        $result1=mysqli_query($conexion,$sql1);
        while($ver=mysqli_fetch_row($result1)){ 

            $idPlan=$ver[1];
            $idcurso=$ver[2];
            $idAsig=$ver[3];
            $carrera=$ver[4];
            $idProf0=$ver[8];
        
          }

            $datos.="||".$idPlan."||".
               $idcurso."||".
               $idAsig."||".
               $carrera."||".
               $idProf0;



        
      $sql12="SELECT * FROM `institucionplanasignatura` WHERE `idAsig`='$idAsig'";
        $result12=mysqli_query($conexion,$sql12);
        while($ver=mysqli_fetch_row($result12)){ 

            $ciclo=$ver[3];
            $asignatura=$ver[4];
         
        
          }

      $sql122="SELECT * FROM `datoscurso` WHERE `idcurso`='$idcurso'";
        $result122=mysqli_query($conexion,$sql122);
        while($ver=mysqli_fetch_row($result122)){ 

            $carrera=$ver[4];

         
        
          }


              $datos.="||".$carrera."||".
               $ciclo."||".
               $asignatura;

  
     
            $fec10 = date_create($fec1);
            $fec20 = date_create($fec2);
          

       ?>

      <tr>
      
        <td><?php echo $carrera ?>--<?php echo $ciclo ?>--<?php echo $asignatura ?></td>
        <td><?php echo date_format($fec10,"d/m/Y"); ?></td>
        <td><?php echo date_format($fec20,"d/m/Y"); ?></td>



        
  
        <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdarAlumnoMesa" onclick="agregaformALUAlumnoMesaTOTA('<?php echo $datos ?>')">
            
          </button>
        </td>
        <td>
          <button class="btn btn-danger glyphicon glyphicon-remove" 
          onclick="eliminardatosAlumnosAlumnoTERMesa('<?php echo $idMesa ?>')">
            
          </button>
        </td>
      </tr>
      <?php 
    } 

       ?>
    </table>
 