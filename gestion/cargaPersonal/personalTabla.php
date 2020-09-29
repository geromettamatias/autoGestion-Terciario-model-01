
<?php 
  session_start();
  require_once "../../libreriasConexion/conexion.php";
  $conexion=conexion();

 ?>

 

<div class="onteinerPersona">
<div class="row">
  <div class="col-sm-12"><p>

    
<h3><p style="color:#F4F6F6;"><mark>DATOS DEL PERSONAL</mark></p></h3>
<caption>
      <button class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#modalNuevoPlantel">
        Agregar nuevo 
        <span class="glyphicon glyphicon-plus"></span>
      </button>
    </caption>


    <table class="table table-secondary  table-hover">
    
      <tr>
        <td>APELLIDO Y NOMBRE</td>
        <td>D.N.I.</td>
        <td>TAREA</td>
        <td>INFOR.</td>
        <td>EDITAR</td>
        <td>ELIMI.</td>
        <td>ASIGN.</td>
      </tr>

      <?php 

        if(isset($_SESSION['consulta'])){
        
            $idp=$_SESSION['consulta'];
          
            $sql="SELECT * from datospersonal where`nombreDocente`LIKE '%$idp%' or `dniDocente`LIKE '%$idp%'";
          }else{
            $sql="SELECT * 
            from datospersonal";
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
               $ver[8];

               
       ?>

      <tr>
        <td><?php echo $ver[1] ?></td>
        <td><?php echo $ver[2] ?></td>
        <td><?php echo $ver[3] ?></td>

        
        <td>
          <button class="btn btn-success glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalInformacionPlantel" onclick="InformacionformPLANTEL('<?php echo $datos ?>')">
            
          </button>
        </td>


        <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicionPlantel" onclick="agregaformDPLANTEL('<?php echo $datos ?>')">
            
          </button>
        </td>
        <td>
          <button class="btn btn-danger glyphicon glyphicon-remove" 
          onclick="preguntarSiNoTPLANTEL('<?php echo $ver[0] ?>')">
            
          </button>
        </td>

        <td>
          <button class="btn btn-info glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalAsignaturaPlantel" onclick="idPersonalPLANTELTercia('<?php echo $ver[0] ?>')">
          </button>
        
        </td>





      </tr>
      <?php 
    }
       ?>
    </table>
  </p></div>
</div>
</div>
