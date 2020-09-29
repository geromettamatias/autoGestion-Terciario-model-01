
<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();

	$idAlumnos=$_POST['idAlumnos'];

	$sql="DELETE FROM `preinsdatosalumnos` WHERE `idAlumnos`='$idAlumnos'";
	echo $result=mysqli_query($conexion,$sql);
 ?>