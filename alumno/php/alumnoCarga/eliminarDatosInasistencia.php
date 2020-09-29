<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();

	$idAsistencia=$_POST['idAsistencia'];


	$sql="DELETE FROM `asistenciaalumno` WHERE `idAsistencia`='$idAsistencia'";
	echo $result=mysqli_query($conexion,$sql);


	

 ?>