<?php 
	require_once "../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$sql="SELECT * 
						from datospersonal";
				$result=mysqli_query($conexion,$sql);

 ?>

<div class="conteinerPeronalBuscar">
 <div class="row">


    <table class="table table-secondary  table-hover">
    
      <tr>
        <td>BUSCAR POR NOMBRE, APELLIDO, DNI</td>
     
       
      </tr>
      <tr>
        <td><div class="col-sm-4"><input type="text" id="busquedaYT"/></td>
        
       
      </tr>
    </table>

 
</div>
</div>


	<script type="text/javascript">
    

    $("#busquedaYT").keyup(function(){

    
        $.ajax({
          type:"post",
          data:'valor=' + $('#busquedaYT').val(),
          url:'php/personalCarga/crearsession.php',
          success:function(r){
           
        $('#PersonalPlanta').load('cargaPersonal/personalTabla.php');
          }
        });

      });

      function iniciarPanelPersonal() {
        $.ajax({
          type:"post",
          data:'valor=' + "",
          url:'php/personalCarga/crearsession.php',
          success:function(r){
           
        $('#PersonalPlanta').load('cargaPersonal/personalTabla.php');
          }
        });
      }
  </script>