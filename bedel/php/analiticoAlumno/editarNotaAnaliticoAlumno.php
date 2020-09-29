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



	$sql="UPDATE `notasalumno` SET `notaRegular`='$notaRegular',`notaFinal`='$notaFinal',`situacion`='$situacion' WHERE `idNota`='$idNota'";
	echo $result=mysqli_query($conexion,$sql);


	

 ?>