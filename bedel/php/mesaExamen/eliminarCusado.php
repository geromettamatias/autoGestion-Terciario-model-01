<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();

	$idFecha=$_POST['idFecha'];
	


	$sql="DELETE FROM `inscrpcursado`";
	$result=mysqli_query($conexion,$sql);

	$sql="ALTER TABLE inscrpcursado AUTO_INCREMENT = 1";
	echo $result=mysqli_query($conexion,$sql);


	

 ?>