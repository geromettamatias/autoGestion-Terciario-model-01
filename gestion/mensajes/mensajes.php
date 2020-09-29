<?php 
  session_start();
  require_once "../../libreriasConexion/conexionPagina.php";
  $conexion=conexion();

 ?>

<div class="col-12">

    <h3><p style="color:#F4F6F6;"><mark>MENSAJES</mark></p></h3>

<table class="table table-secondary  table-hover">
    
      <tr>
        <td>DATOS</td>
        <td>MENSAJES</td>
        <td>ELIMINAR</td>
      </tr>
      <?php 

            $sql="SELECT * from mensaje";
       
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

       
       ?>

      <tr>
        <td><?php echo $ver[1] ?></td>
        <td><?php echo $ver[2] ?></td>
     

        <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil" onclick="eliminarMensaje('<?php echo $ver[0]; ?>')">
            
          </button>
        </td>
     
      </tr>
      <?php 
    }
       ?>
    </table>

<br><br>

</div>
