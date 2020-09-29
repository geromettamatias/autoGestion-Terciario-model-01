<?php 
	require_once  "../../libreriasConexion/conexion.php";
  $conexion=conexion();

 ?>


<div class="col-sm-12">


 <table class="table table-secondary  table-hover">
    
      <tr>
        <td>Seleccione un Curso</td>
      </tr>

      <tr>
        <td>


<select id='mesaSeleBuscar' name='mesaSeleBuscar' class='form-control input-sm'>
  <option value='0'>Seleccione un Carrera</option>
<?php 

$sql="SELECT * FROM `datoscurso`";
$result=mysqli_query($conexion,$sql);
  while ($ver=mysqli_fetch_row($result)) {


    $idcurso=$ver[0];
    $carrera=$ver[4];
    $siclo=$ver[5];





  ?>


    <option value='<?php echo $idcurso ?>'><?php echo $carrera ?>--<?php echo $siclo ?></option>';
  

  <?php 
    }
       ?>
     </select></td>
       
      </tr>
</table>


</div>

 
 







    <script type="text/javascript">

    $("#mesaSeleBuscar").change(function(){

      mesaSeleBuscar= $('#mesaSeleBuscar').val();

    
        $.ajax({
          type:"post",
          data:'mesaSeleBuscar=' + mesaSeleBuscar,
          url:'php/mesaExamen/secionMesaExamen2.php',
          success:function(r){
            
           $('#tablaMesa').load('mesaExamen/mesaExamen.php');
          }
        });
      });
  
  


 






  </script>
