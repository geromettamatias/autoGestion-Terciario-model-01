
<?php 
  
  session_start();
  require_once "../../libreriasConexion/conexion.php";
  $conexion=conexion();

 ?>




    <h4><p style="color:#F4F6F6;"><mark>DATOS PERSONALES</mark></p></h4> 

<br>

<div class="table-responsive">
    <table class="table table-secondary  table-hover">
    
      <tr>
        <td>NOMBRE DEL DOCENTE</td>
        <td>D.N.I DEL DOCENTE</td>
        <td>EDITAR</td>
      </tr>

      <?php 


      if (isset($_SESSION['dniLoginT'])) {


        $dniLoginT=$_SESSION['dniLoginT'];


      $sql="SELECT * FROM `datospersonal` WHERE `dniDocente`='$dniLoginT'";
         

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
               $ver[8]."||".
               $ver[9];
          
        
          
       ?>

      <tr>
        <td><button class="btn btn-success glyphicon glyphicon-pencil"  onclick="InformacionDocente('<?php echo $datos ?>')"><?php echo $ver[1] ?>



        <svg class="bi bi-paperclip" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
      </svg>


            
          </button></td>
        <td><?php echo $ver[2] ?></td>

        <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil"  onclick="editarDocente('<?php echo $datos ?>')">



            <svg class="bi bi-pencil-square" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg>

            
          </button>
        </td>


      </tr>
      <?php 
    } }  


       ?>
    </table>
  </div>
 