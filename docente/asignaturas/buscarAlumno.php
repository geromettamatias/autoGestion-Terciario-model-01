<?php 
	require_once  "../../libreriasConexion/conexion.php";
  $conexion=conexion();

  $sql="SELECT * FROM `datoscurso`";
        $result=mysqli_query($conexion,$sql);

 ?>

<div class="col-sm-12">


 <table class="table table-secondary  table-hover">
    
      <tr>
        <td>BUSCAR POR NOMBRE Y APELLIDO</td>
      </tr>

      <tr>

        <td><input type="text" id="busquedaA"/></td>
      </tr>
</table>


  <br>
</div>

 

  <script type="text/javascript">

    $("#busquedaA").keyup(function(){

    
        $.ajax({
          type:"post",
          data:'valorA=' + $('#busquedaA').val(),
          url:'php/notas/crearsession.php',
          success:function(r){
           $('#tablaAsignaturaNota').load('asignaturas/tablacalificador.php');
          }
        });
      });
  
  

  </script>


