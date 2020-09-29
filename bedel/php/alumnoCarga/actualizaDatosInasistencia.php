<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idAlumnoAsistencia=$_POST['idAlumnoAsistencia'];
	$idAsistencia=$_POST['idAsistencia'];
	$cantidadInasisAlumno=$_POST['cantidadInasisAlumno'];
	$fechaInasistAlumno=$_POST['fechaInasistAlumno'];
	$justificoInasisAlumno=$_POST['justificoInasisAlumno'];




	$sql="INSERT INTO `asistenciaalumno`(`idAsistencia`, `idAlumnos`, `cantidad`, `fecha`, `justifico`) VALUES (null,'$idAlumnoAsistencia','$cantidadInasisAlumno','$fechaInasistAlumno','$justificoInasisAlumno')";
	echo $result=mysqli_query($conexion,$sql);


	

 ?>