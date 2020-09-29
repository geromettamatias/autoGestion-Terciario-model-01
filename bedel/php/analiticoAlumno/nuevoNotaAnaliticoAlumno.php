<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idNota=$_POST['idNota'];
	$idAlumnoAnalitico=$_POST['idAlumnoAnalitico'];
	$idPlanAnalitico=$_POST['idPlanAnalitico'];
	$idAsigAnalitico=$_POST['idAsigAnalitico'];
	$notaRegular=$_POST['notaRegular'];
	$notaFinal=$_POST['notaFinal'];
	$situacion=$_POST['situacion'];


	$sql="INSERT INTO `notasalumno`(`idNota`, `idAlumno`, `idPlan`, `idAsignatura`, `notaRegular`, `notaFinal`, `situacion`) VALUES (null,'$idAlumnoAnalitico','$idPlanAnalitico','$idAsigAnalitico','$notaRegular','$notaFinal','$situacion')";
	echo $result=mysqli_query($conexion,$sql);


	

 ?>