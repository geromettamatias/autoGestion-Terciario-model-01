

<?php 
  session_start();
  require_once "../../libreriasConexion/conexionPagina.php";
  $conexion=conexion();

 ?>

<div class="col-10">

    <h3><p style="color:#F4F6F6;"><mark>INFORMACIÓN</mark></p></h3>

<table class="table table-secondary  table-hover">
    
      <tr>
        <td>FOTOS</td>
        <td>DATOS</td>
        <td>TITULO</td>
        <td>EDITAR</td>
      </tr>
      <?php 

            $sql="SELECT * from informacion";
       
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

       
       ?>

      <tr>
        <td><img  src="php/paginaPrincipal/<?php echo $ver[2] ?>" style="max-width:30%;width:auto;height:auto;"></td>
        <td><?php echo $ver[1] ?></td>
        <td><?php echo $ver[3] ?></td>
     

        <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modaliNFORMACON" onclick="editarInformacionAgregandoDatos('<?php echo $ver[0]; ?>')">
            
          </button>
        </td>
     
      </tr>
      <?php 
    }
       ?>
    </table>

<br><br>

</div>



<div class="col-10">
    <h3><p style="color:#F4F6F6;"><mark>CARGA DE MATERIAL DIDÁCTICO POR LINK</mark></p></h3>

<button class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#modalDIDACTICONuevo">NUEVO</button>

<table class="table table-secondary  table-hover">
    
      <tr>
        <td>DATOS</td>
        <td>TITULO</td>
        <td>EDITAR</td>
        <td>ELIMINAR</td>
      </tr>
      <?php 

            $sql="SELECT * from didactica";
       
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

       
       ?>

      <tr>
        <td><?php echo $ver[1] ?></td>
        <td><?php echo $ver[2] ?></td>
     

        <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalDIDACTICO" onclick="agregaformDidactica('<?php echo $ver[0] ?>')">
            
          </button>
        </td>
        <td>
          <button class="btn btn-danger glyphicon glyphicon-pencil"  onclick="ELIMINARDidactica('<?php echo $ver[0] ?>')">
            
          </button>
        </td>
     
      </tr>
      <?php 
    }
       ?>
    </table>

</div>
















<div class="col-10">

<h3><p style="color:#F4F6F6;"><mark>GALERÍA </mark></p></h3>

<table class="table table-secondary  table-hover">
    
      <tr>
        <td>FOTO</td>
        <td>DATOS</td>
       
        <td>TITULO</td>
        <td>EDITAR</td>
      </tr>
      <?php 

            $sql="SELECT * from galeria";
       
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

       
       ?>

      <tr>
        <td><img  src="php/paginaPrincipal/<?php echo $ver[2] ?>" style="max-width:30%;width:auto;height:auto;"></td>
        <td><?php echo $ver[1] ?></td>
        <td><?php echo $ver[3] ?></td>

        <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalGALERIAGaleria" onclick="institucionGaleriaGaleria('<?php echo $ver[0]; ?>')">
            
          </button>
        </td>
     
      </tr>
      <?php 
    }
       ?>
    </table>

</div>

   <br><br>

<div class="col-10">
<h3><p style="color:#F4F6F6;"><mark>PREMIOS </mark></p></h3>

<table class="table table-secondary  table-hover">
    
      <tr>
        <td>FOTO</td>
        <td>DATOS</td>
       
        <td>TITULO</td>
        <td>EDITAR</td>
      </tr>
      <?php 

            $sql="SELECT * from premios";
       
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

       
       ?>

      <tr>
        <td><img  src="php/paginaPrincipal/<?php echo $ver[2] ?>" style="max-width:30%;width:auto;height:auto;"></td>
        <td><?php echo $ver[1] ?></td>
        
        <td><?php echo $ver[3] ?></td>

        <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalPremiosPremios" onclick="institucionPremios('<?php echo $ver[0] ?>')">
            
          </button>
        </td>
     
      </tr>
      <?php 
    }
       ?>
    </table>

</div>
   <br><br>

<div class="col-10">
<h3><p style="color:#F4F6F6;"><mark>HISTORIA</mark></p></h3>

<table class="table table-secondary  table-hover">
    
      <tr>
        <td>DATOS</td>
        <td>TITULO</td>
        <td>EDITAR</td>
      </tr>
      <?php 

            $sql="SELECT * from historia";
       
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

          $datos=$ver[0];
       
       ?>

      <tr>
        <td><?php echo $ver[1] ?></td>
        <td><?php echo $ver[2] ?></td>
        

        <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalhISTORIA" onclick="agregahistoriajava('<?php echo $datos; ?>')">
            
          </button>
        </td>
     
      </tr>
      <?php 
    }
       ?>
    </table>

<br><br>

</div>


<div class="col-10">
    <h3><p style="color:#F4F6F6;"><mark>DATOS</mark></p></h3>

<table class="table table-secondary  table-hover">
    
      <tr>
        <td>DATOS</td>
        <td>TITULO</td>
        <td>EDITAR</td>
      </tr>
      <?php 

            $sql="SELECT * from datos";
       
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

       
       ?>

      <tr>
        <td><?php echo $ver[1] ?></td>
        <td><?php echo $ver[2] ?></td>
     

        <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modaldATOS" onclick="agregaformDatosTiii('<?php echo $ver[0] ?>')">
            
          </button>
        </td>
     
      </tr>
      <?php 
    }
       ?>
    </table>

</div>