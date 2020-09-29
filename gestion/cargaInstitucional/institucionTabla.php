
<?php 
  session_start();
  require_once "../../libreriasConexion/conexion.php";
  $conexion=conexion();

 ?>

 
<div class="row">
  <div class="col-sm-12"><p>
    
                  <button type="button" class="btn btn-info btn-block" onclick='menuPrincipal();'>REGRESAR <span class="badge badge-light"> MENU PRINCIPAL </span></button>
                  <button type="button" class="btn btn-info btn-block" onclick='menuCarga();'>REGRESAR <span class="badge badge-light"> ATRAS </span></button><br>

<?php 
        $conta=0;
        $datos2="";

        $sql2="SELECT * FROM `institucion`";

        $result2=mysqli_query($conexion,$sql2);
        while($ver=mysqli_fetch_row($result2)){

      
          $datos2=$ver[0];

                } 

    
       

               
       ?>

       <h3><p style="color:#F4F6F6;"><mark>Institución</mark></p></h3>

<caption><button class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#modalNuevo" onclick="AGREGARDAOTOSInstut('<?php echo $datos2 ?>')">Agregar</button>

    </caption>


    <table class="table table-secondary  table-hover">
    
      <tr>
        <td>CUE</td>
        <td>EDITAR</td>
        <td>ELIMI.</td>
      </tr>

      <?php 

        
        $sql="SELECT * FROM `institucion`";

        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

          $datos=$ver[0]."||".
               $ver[1]."||".
               $ver[2]."||".
               $ver[3]."||".
               $ver[4]."||".
               $ver[5];

               
       ?>

      <tr>
  
        <td><button class="btn btn-info glyphicon glyphicon-pencil" onclick="infoInstutucionPRINCIPIO('<?php echo $ver[0] ?>')">
            
          <?php echo $ver[1] ?></button></td>

    
        <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformDffinstitucionInstitucion('<?php echo $ver[0] ?>')">
            
          </button>
        </td>
        <td>
          <button class="btn btn-danger glyphicon glyphicon-remove" 
          onclick="preguntarSiNoTinstituionInstucon('<?php echo $ver[0] ?>')">
            
          </button>
        </td>

       





      </tr>
      <?php 
    }
       ?>
    </table>
  </p></div>
</div>





<div class="row">
  <div class="col-sm-12"><p>
    
  

<?php 
        $conta=0;
        $datos2="";

        $sql2="SELECT * FROM `institucion`";

        $result2=mysqli_query($conexion,$sql2);
        while($ver=mysqli_fetch_row($result2)){

      
          $datos2=$ver[0];

                } 

    
       

               
       ?>

       <h3><p style="color:#F4F6F6;"><mark>Carreras</mark></p></h3>

<caption><button class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#modalNuevoPlan">Agregar Plan</button>

    </caption>


    <table class="table table-secondary  table-hover">
    
      <tr>
        <td>N° Reg</td>
        <td>Nombre Carrera</td>
        <td>Carg Asigna</td>
        <td>EDITAR</td>
        <td>ELIMI.</td>
      </tr>

      <?php 

        
        $sql="SELECT * FROM `institucionplan`";

        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

          $datos=$ver[0]."||".
               $ver[1]."||".
               $ver[2]."||".
               $ver[3];

               
       ?>
       

      <tr>
  
        <td><?php echo $ver[2] ?></td>
        <td><?php echo $ver[3] ?></td>

         <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil" onclick="cessionAsignaturaTotal('<?php echo $ver[0] ?>')">
            
          </button>
        </td>

    
        <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEditarPlan" onclick="agregaformDffinstitucionInstitucionPlan('<?php echo $ver[0] ?>')">
            
          </button>
        </td>
        <td>
          <button class="btn btn-danger glyphicon glyphicon-remove" 
          onclick="preguntarSiNoTinstituionInstuconPlan('<?php echo $ver[0] ?>')">
            
          </button>
        </td>

       





      </tr>
      <?php 
    }
       ?>
    </table>
  </p></div>
</div>