<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idCursadoInscp=$_POST['idCursadoInscp'];
	$idAlumnoAnaliticoInscp=$_POST['idAlumnoAnaliticoInscp'];
	$idPlanAnaliticoInscp=$_POST['idPlanAnaliticoInscp'];
	
	$idAnaliticoInscpCurso=$_POST['idAnaliticoInscpCurso'];
	




	$sql="UPDATE `inscrpcursado` SET `idAlumno`='$idAlumnoAnaliticoInscp',`idhora`='$idAnaliticoInscpCurso',`idPlan`='$idPlanAnaliticoInscp' WHERE `idCursado`='$idCursadoInscp'";
	echo $result=mysqli_query($conexion,$sql);


	

 ?>