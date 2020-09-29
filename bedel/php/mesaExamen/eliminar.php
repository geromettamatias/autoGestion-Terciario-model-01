
<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();

	$idFecha=$_POST['idFecha'];
	


	$sql="DELETE FROM `fechas` WHERE `idFecha`='$idFecha'";
	echo $result=mysqli_query($conexion,$sql);


	

 ?>