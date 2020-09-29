<?php 
	require_once  "../../libreriasConexion/conexion.php";
  $conexion=conexion();

  $sql="SELECT * FROM `datoscurso`";
        $result=mysqli_query($conexion,$sql);

 ?>



<div class="col-sm-12"> 



    
                  <button type="button" class="btn btn-info btn-block" onclick='menuPrincipal();'>REGRESAR <span class="badge badge-light"> MENU PRINCIPAL </span></button>
                  <button type="button" class="btn btn-info btn-block" onclick='menuCarga();'>REGRESAR <span class="badge badge-light"> ATRAS </span></button><br><br>
    
 

</div>



<div class="col-sm-12">


 <table class="table table-secondary  table-hover">
    
      <tr>
        <td>Seleccione un Curso</td>
        <td>BUSCAR POR NOMBRE, APELLIDO, DNI</td>
      </tr>

      <tr>
        <td><select id='cursoAvBus' name='cursoAvBus' class='form-control input-sm'>
  <option value='0'>Seleccione un Carrera</option>
<?php 

$sql="SELECT * FROM `institucionplan`";
$result=mysqli_query($conexion,$sql);
  while ($ver=mysqli_fetch_row($result)) {

  ?>


    <option value='<?php echo $ver[0] ?>'><?php echo $ver[3] ?></option>';
  

  <?php 
    }
       ?>
     </select></td>
        <td><input type="text" id="busqueda"/></td>
      </tr>
</table>


  <br>
</div>

 
 




  <script type="text/javascript">

    $("#busqueda").keyup(function(){

    
        $.ajax({
          type:"post",
          data:'valor=' + $('#busqueda').val(),
          url:'php/alumnoCarga/crearsession.php',
          success:function(r){
           $('#AlumnoPlanta').load('cargaAlumno/alumnoTabla.php');
          }
        });
      });
  
  

  </script>


    <script type="text/javascript">

    $("#cursoAvBus").change(function(){

      cursoAvBus= $('#cursoAvBus').val();

    
        $.ajax({
          type:"post",
          data:'valor2=' + cursoAvBus,
          url:'php/alumnoCarga/crearsessionCurso.php',
          success:function(r){
           $('#AlumnoPlanta').load('cargaAlumno/alumnoTabla.php');
          }
        });
      });
  
  

 






  </script>
