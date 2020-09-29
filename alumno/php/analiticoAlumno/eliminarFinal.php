<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idFinal=$_POST['idFinal'];



	$sql="DELETE FROM `inscrpfinal` WHERE `idFinal`='$idFinal'";
	echo $result=mysqli_query($conexion,$sql);


	

 ?>