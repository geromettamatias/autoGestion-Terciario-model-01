
<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idLogin=$_POST['idLogin'];

	$sql="DELETE from login where idLogin='$idLogin'";
	
	echo $result=mysqli_query($conexion,$sql);

 ?>