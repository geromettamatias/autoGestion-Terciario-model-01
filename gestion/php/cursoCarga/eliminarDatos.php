
<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idcurso=$_POST['idcurso'];


	$sql="DELETE FROM `datoscurso` WHERE `idcurso`='$idcurso'";
	echo $result=mysqli_query($conexion,$sql);
 ?>