<?php 
	require_once "../../libreriasConexion/conexion.php";
	 $conexion=conexion();

  $sql="SELECT * 
            from datospersonal";
        $result=mysqli_query($conexion,$sql);

 ?>
<br><br>
<div id="conteinerBusarDoetre">
<div class="row">

<div class="col-sm-12">

  <table class="table table-secondary  table-hover">
    
      <tr>
        <td>Buscar por Nombre, Apellido, DNI</td>
       
      </tr>

    
      <tr>
        <td><input type="text" id="busquedaYTPre"/></td>
  
      </tr>
  </table>


</div>
</div>
</div>

  <script type="text/javascript">
    

    $("#busquedaYTPre").keyup(function(){

    
        $.ajax({
          type:"post",
          data:'valor=' + $('#busquedaYTPre').val(),
          url:'php/preDocente/crearsession.php',
          success:function(r){
            $('#preDocenteTabla').load('PreDocente/prPersonalTabla.php');
          }
        });
      });
  </script>