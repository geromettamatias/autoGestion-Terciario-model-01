
<?php 
 
  require_once "../../libreriasConexion/conexion.php";
  $conexion=conexion();

  session_start();



if(isset($_SESSION['idasig3'])){


  $idasig3=$_SESSION['idasig3'];



 ?>

 
<div class="row">
  <div class="col-sm-12"><p>
    
                


    <table class="table table-secondary  table-hover">
    
      <tr>
        <td>Asignatura Corr</td>
        <td>ELIMI.</td>
      </tr>

      <?php




        
        $sql="SELECT * FROM `institucionplanasignaturacorrelativa` WHERE `idAsignatura`='$idasig3'";

        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

          $idCorrelativa=$ver[0];

          $idAsignatura=$ver[5];





        $sql1="SELECT * FROM `institucionplanasignatura` WHERE `idAsig`='$idAsignatura'";

        $result1=mysqli_query($conexion,$sql1);
        while($ver=mysqli_fetch_row($result1)){ 

          $asigna=$ver[4];

 
        }

   
               
       ?>

      <tr>
  
        <td><?php echo $asigna; ?></td>

    
      
        <td>
          <button class="btn btn-danger glyphicon glyphicon-remove" 
          onclick="preguntarSiNoTinstituionInstuconCorrelativa('<?php echo $idCorrelativa ?>')">
            
          </button>
        </td>

       





      </tr>
      <?php 
    }



       ?>
    </table>
  </p></div>
</div>
 <?php 
    }



       ?>