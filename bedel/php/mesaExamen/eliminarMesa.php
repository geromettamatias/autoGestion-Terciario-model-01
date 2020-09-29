<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	
	$idMesa=$_POST['idMesa'];


	$sql="DELETE FROM `inscrpmesa` WHERE `idMesa`='$idMesa'";
	echo $result=mysqli_query($conexion,$sql);



 ?>