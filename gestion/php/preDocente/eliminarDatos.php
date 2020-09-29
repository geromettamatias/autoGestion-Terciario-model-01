
<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idPersonal=$_POST['idPersonal'];

	$sql="DELETE from preinsdatospersonal where idPersonal='$idPersonal'";
	
	
	echo $result=mysqli_query($conexion,$sql);

 ?>