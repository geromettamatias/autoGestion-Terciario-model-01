
<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idCorrelativa=$_POST['idCorrelativa'];

	$sql="DELETE from institucionplanasignaturacorrelativa where idCorrelativa='$idCorrelativa'";
	
	echo $result=mysqli_query($conexion,$sql);

 ?>