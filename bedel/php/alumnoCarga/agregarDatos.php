<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$nombreAlumnos=$_POST['nombreAlumnos'];
	$dniAlumnos=$_POST['dniAlumnos'];
	$cuilAlumnos=$_POST['cuilAlumnos'];
	$domicilioAlumnos=$_POST['domicilioAlumnos'];
	$emailAlumnos=$_POST['emailAlumnos'];
	$telefonoAlumnos=$_POST['telefonoAlumnos'];
	$discapasidadAlumnos=$_POST['discapasidadAlumnos'];
	$nLegajoAlumno=$_POST['nLegajoAlumno'];
	$legajoSituacion=$_POST['legajoSituacion'];
	$obserbacionGeneral=$_POST['obserbacionGeneral'];
	$pass=$_POST['pass'];
	$idplan=$_POST['idplan'];

	$sql="INSERT INTO `datosalumnos`(`idAlumnos`, `nombreAlumnos`, `dniAlumnos`, `cuilAlumnos`, `domicilioAlumnos`, `emailAlumnos`, `telefonoAlumnos`, `discapasidadAlumnos`, `nLegajoAlumno`, `legajoSituacion`, `obserbacionGeneral`, `passLogin`, `idPlan`) VALUES (null,'$nombreAlumnos','$dniAlumnos','$cuilAlumnos','$domicilioAlumnos','$emailAlumnos','$telefonoAlumnos','$discapasidadAlumnos','$nLegajoAlumno','$legajoSituacion','$obserbacionGeneral','$pass','$idplan')";
	echo $result=mysqli_query($conexion,$sql);


	

 ?>