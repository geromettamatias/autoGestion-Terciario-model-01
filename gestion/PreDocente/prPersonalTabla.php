
<?php 
  session_start();
  require_once "../../libreriasConexion/conexion.php";
  $conexion=conexion();

 ?>

 

 
<div class="row">
  <div class="col-sm-12"><p>
    


    <h3><p style="color:#F4F6F6;"><mark>INSC. DOCENTE</mark></p></h3>

    <table class="table table-secondary  table-hover">
    
      <tr>
        <td>APELLIDO Y NOMBRE</td>
        <td>D.N.I.</td>
        <td>TAREA</td>
        <td>ELIMI.</td>
        <td>AGREGAR</td>
      </tr>

      <?php 

        if(isset($_SESSION['consulta'])){
        
            $idp=$_SESSION['consulta'];
          
            $sql="SELECT * from preinsdatospersonal where`nombreDocente`LIKE '%$idp%' or `dniDocente`LIKE '%$idp%'";
          }else{
            $sql="SELECT * 
            from preinsdatospersonal";
          }
        

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
               $ver[9]."||".
               $ver[10]."||".
               $ver[11];

               
       ?>

      <tr>
        <td><button class="btn btn-success glyphicon glyphicon-pencil"  onclick="InformacionformPre('<?php echo $datos ?>')">
            
          <?php echo $ver[1] ?></button></td>
        <td><button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicionPre" onclick="agregaformDPre('<?php echo $datos ?>')">
            
          <?php echo $ver[2] ?></button></td>
        <td><?php echo $ver[3] ?></td>

        
        


        <td>
          <button class="btn btn-danger glyphicon glyphicon-remove" 
          onclick="preguntarSiNoTPre('<?php echo $ver[0] ?>')">
            
          </button>
        </td>

        <td>
          <button class="btn btn-info glyphicon glyphicon-pencil" 
          onclick="preguntarSiagregarPre('<?php echo $datos ?>')">
            
          </button>
        
        </td>





      </tr>
      <?php 
    }
       ?>
    </table>
  </p></div>
</div>