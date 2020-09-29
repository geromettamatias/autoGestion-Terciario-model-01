
 <?php 
  session_start();
  require_once "../../../libreriasConexion/conexion.php";
  $conexion=conexion();

 ?>

<div id="conteiner">
<div class="row">
  <div class="col-sm-12">

    <table class="table table-secondary  table-hover">
    
      <tr>
        <td>Asignatura</td>
        <td>Dia</td>
        <td>Ed</td>
        <td>EL</td>
      </tr>

      <?php 

        if(isset($_SESSION['idPlan'])){

          $idPlan=$_SESSION['idPlan'];  


          $idcurso=$_SESSION['idcurso'];


          $idhora="";
          $Asignatura="";
          $dias="";

       

          
            $idPlan=$_SESSION['idPlan'];
            $sql="SELECT * FROM `datoscursohora` WHERE `idcurso`='$idcurso' and `idPlan`='$idPlan'";
         
          

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


          $idhora=$ver[0];
          $idAsigTO=$ver[3];

          $dias=$ver[5];






                 $sql3="SELECT * FROM `institucionplanasignatura` WHERE `idAsig`='$idAsigTO'";
         
          

                    $result3=mysqli_query($conexion,$sql3);
                    while($ver=mysqli_fetch_row($result3)){ 

                      $Asignatura=$ver[4];

                        }


       ?>

      <tr>
        <td><button class="btn btn-success" 
          onclick="infoTablaEdit('<?php echo $idhora ?>')">
            <?php echo $Asignatura ?>
          </button></td>
        <td><?php echo $dias ?></td>
        <td>
          <button class="btn btn-warning" 
          onclick="agregarDatosEdiTbla('<?php echo $idhora ?>')">
            
          </button>
        </td>
        <td>
          <button class="btn btn-danger" 
          onclick="eliminarHorariCorso('<?php echo $idhora ?>')">
            
          </button>
        </td>
       
      </tr>
      <?php 
    }}
       ?>
    </table>
</div></div></div>
