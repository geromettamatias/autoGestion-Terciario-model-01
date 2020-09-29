
<?php 
  session_start();
  require_once "../../libreriasConexion/conexion.php";
  $conexion=conexion();

 ?>

 
<div class="row">
  <div class="col-sm-12"><p><br><br>
<caption><button class="btn btn-primary btn-lg btn-block"  
          onclick="eliminartodosCursados()">Eliminar a todos los Alumnos del Cursado
            
          </button><br>
          <button class="btn btn-info btn-lg btn-block"  
          onclick="eliminartodosFinales()">Eliminar a todos los Alumnos de las mesas de examenes
            
          </button>
</caption>

    <br>
<h3><p style="color:#F4F6F6;"><mark>FECHA</mark></p></h3>
<caption>
      <button class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#modalEdicionCursoCargaFech">
        Agregar nueva fecha
        <span class="glyphicon glyphicon-plus"></span>
      </button>
    </caption>


    <table class="table table-secondary  table-hover">
    
      <tr>
        <td>INSC.</td>
        <td>DESDE</td>
        <td>HASTA</td>
        <td>Edi</td>
        <td>Eli</td>
  
      
      </tr>

      <?php 

    
      $sql="SELECT * FROM `fechas`";
        

        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

          $datos=$ver[0]."||".
               $ver[1]."||".
               $ver[2]."||".
               $ver[3];
       ?>

      <tr>
        <td><?php echo $ver[3] ?></td>
        <td><?php echo $ver[1] ?></td>
        <td><?php echo $ver[2] ?></td>
        
        <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicionCursoCargaFechEdiatr" onclick="agregaformCursoTERFec('<?php echo $datos ?>')">
            
          </button>
        </td>
        <td>
          <button class="btn btn-danger glyphicon glyphicon-remove" 
          onclick="preguntarSiNoCursoTerFec('<?php echo $ver[0] ?>')">
            
          </button>
        </td>
   
         
      </tr>
      <?php 
    }
       ?>
    </table>
  </p></div>
</div>
<br><br><br>