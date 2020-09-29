<p><?php 
	require_once "../../libreriasConexion/conexion.php";
	$conexion=conexion();

	$sql="SELECT * from login";
				$result=mysqli_query($conexion,$sql);

 ?>
<br><br>



<div id="conteiner2">
<div class="row">

<div class="col-sm-12">

	 <table class="table table-secondary  table-hover">
    
      <tr>
    
        <td>Buscar por Nombre, Apellido, DNI .</td>
       
        
      
      </tr>
       <tr>
    
        <td><input type="text" id="busquedaYTadmin"/></td>
       
      
      </tr>
  </table>



</div>
</div>
</div>

	<script type="text/javascript">
		

		$("#busquedaYTadmin").keyup(function(){

		
				$.ajax({
					type:"post",
					data:'valor=' + $('#busquedaYTadmin').val(),
					url:'php/usuarioSistema/crearsession.php',
					success:function(r){
						$('#usuarioSistemaTabla').load('UsuarioSistema/UsuarioSistemaTabla.php');
					}
				});
			});

		function ResectDatosMenuCarga(){




			$.ajax({
					type:"post",
					data:'valor=' + "",
					url:'php/usuarioSistema/crearsession.php',
					success:function(r){
						$('#usuarioSistemaTabla').load('UsuarioSistema/UsuarioSistemaTabla.php');
					}
				});

			$('#busquedaYTadmin').val("");
			menuCarga();

}


function ResectDatosMenuPrincipal(){




			$.ajax({
					type:"post",
					data:'valor=' + "",
					url:'php/usuarioSistema/crearsession.php',
					success:function(r){
						$('#usuarioSistemaTabla').load('UsuarioSistema/UsuarioSistemaTabla.php');
					}
				});

			$('#busquedaYTadmin').val("");
			menuPrincipal();

}

function ResectDatosElimina(){




			$.ajax({
					type:"post",
					data:'valor=' + "",
					url:'php/usuarioSistema/crearsession.php',
					success:function(r){
						$('#usuarioSistemaTabla').load('UsuarioSistema/UsuarioSistemaTabla.php');
					}
				});

			$('#busquedaYTadmin').val("");
			

}
	</script>