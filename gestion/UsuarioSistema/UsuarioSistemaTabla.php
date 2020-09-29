
<?php 
  session_start();
  require_once "../../libreriasConexion/conexion.php";
  $conexion=conexion();

 ?>

 

 
<div class="row">
  <div class="col-sm-12"><p>
    
<h3><p style="color:#F4F6F6;"><mark>USUARIO DEL SISTEMA ADMIN</mark></p></h3>
<caption>
      <button class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#modalNuevoadmin">
        Agregar nuevo 
        <span class="glyphicon glyphicon-plus"></span>
      </button>
    </caption>

    
    <table class="table table-secondary  table-hover">
    
      <tr>
    
        <td>D.N.I.</td>
        <td>PASS</td>
        <td>GESTIÓN</td>
        <td>EDITAR</td>
        <td>ELIMI.</td>
      
      </tr>

      <?php 

        if(isset($_SESSION['consulta'])){


        
            $idp=$_SESSION['consulta'];
            $_SESSION['consulta']=$idp;
          
            $sql="SELECT * from login where`dniLogin`LIKE '%$idp%'";
            
          }else{
            $sql="SELECT * 
            from login";
          }
        

        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

          $datos=$ver[0]."||".
               $ver[1]."||".
               $ver[2]."||".
               $ver[3];

               
       ?>

      <tr>
        <td><?php echo $ver[1] ?></td>
        <td><?php echo $ver[2] ?></td>
        <td><?php echo $ver[3] ?></td>

    


        <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicionadmin" onclick="agregaformDffadmin('<?php echo $datos ?>')">
            
          </button>
        </td>
        <td>
          <button class="btn btn-danger glyphicon glyphicon-remove" 
          onclick="preguntarSiNoTadmin('<?php echo $ver[0] ?>')">
            
          </button>
        </td>






      </tr>
      <?php 
    }
       ?>
    </table>
  </p></div>
</div>