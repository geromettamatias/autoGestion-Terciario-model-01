<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();


	$idAlumnoAsistencia=$_POST['idAlumnoAsistencia'];
	$idAsistencia=$_POST['idAsistencia'];
	$cantidadInasisAlumno=$_POST['cantidadInasisAlumno'];
	$fechaInasistAlumno=$_POST['fechaInasistAlumno'];
	$justificoInasisAlumno=$_POST['justificoInasisAlumno'];




	$sql="UPDATE `asistenciaalumno` SET `cantidad`='$cantidadInasisAlumno',`fecha`='$fechaInasistAlumno',`justifico`='$justificoInasisAlumno' WHERE `idAsistencia`='$idAsistencia'";
	echo $result=mysqli_query($conexion,$sql);


	

 ?>