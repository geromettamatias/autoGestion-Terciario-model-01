<?php 
	require_once  "../../libreriasConexion/conexion.php";
  $conexion=conexion();

  $sql="SELECT * FROM `datoscurso`";
        $result=mysqli_query($conexion,$sql);

 ?>

<br><br>

<div class="col-sm-12"> 


 <button type="button" class="btn btn-info btn-block" onclick='menuPrincipal();'>REGRESAR <span class="badge badge-light"> MENU PRINCIPAL </span></button>
                  <button type="button" class="btn btn-info btn-block" onclick='menuCarga();'>REGRESAR <span class="badge badge-light"> ATRAS </span></button><br><br>
    
 

</div>



<div class="col-sm-12">


 <table class="table table-secondary  table-hover">
    
      <tr>
        <td>Seleccione un Curso</td>
      </tr>

      <tr>
        <td><select id='cursoAvBusHORARIO' name='cursoAvBusHORARIO' class='form-control input-sm'>
  <option value='0'>Seleccione un Curso</option>
<?php 

$sql="SELECT * FROM `datoscurso`";
$result=mysqli_query($conexion,$sql);
  while ($ver=mysqli_fetch_row($result)) {

  ?>


    <option value='<?php echo $ver[0] ?>'><?php echo $ver[4] ?>--<?php echo $ver[5] ?></option>';
  

  <?php 
    }
       ?>
     </select></td>
        
      </tr>
</table>


  <br>
</div>

 
 



    <script type="text/javascript">

    $("#cursoAvBusHORARIO").change(function(){

      valorhora= $('#cursoAvBusHORARIO').val();

    
        $.ajax({
          type:"post",
          data:'valorhora=' + valorhora,
          url:'horarios/cessionhorario.php',
          success:function(r){

           $('#tablahorariotommte').load('horarios/tablaHorario.php');
          }
        });
      });

    function regresarTablaHorario() {

          valorhora= $('#cursoAvBusHORARIO').val("0");

    
        $.ajax({
          type:"post",
          data:'valorhora=' + valorhora,
          url:'horarios/cessionhorario.php',
          success:function(r){

           $('#tablahorariotommte').load('horarios/tablaHorario.php');
          }
        });


      
    }


  </script>
