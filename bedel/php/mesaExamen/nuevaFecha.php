<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();

	$situacionCursFinal=$_POST['situacionCursFinal'];
	$desdeF=$_POST['desdeF'];
	$hastaF=$_POST['hastaF'];
	



	$sql="INSERT INTO `fechas`(`idFecha`, `desde`, `hasta`, `inscp`) VALUES (null,'$desdeF','$hastaF','$situacionCursFinal')";
	echo $result=mysqli_query($conexion,$sql);


	

 ?>