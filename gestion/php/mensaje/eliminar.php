
<?php 
	require_once "../../../libreriasConexion/conexionPagina.php";
	$conexion=conexion();
	$idMensaje=$_POST['idMensaje'];


	$sql="DELETE FROM `mensaje` WHERE `idMensaje`='$idMensaje'";
	echo $result=mysqli_query($conexion,$sql);
 ?>