<?php 

	require_once "../../libreriasConexion/conexion.php";
	$conexion=conexion();


	$nombreAlumnos=$_POST['nombreAlumnos'];
	$dniAlumnosTA=$_POST['dniAlumnosTA'];
	$cuilAlumnos=$_POST['cuilAlumnos'];
	$domicilioAlumnos=$_POST['domicilioAlumnos'];
	$emailAlumnos=$_POST['emailAlumnos'];
	$telefonoAlumnos=$_POST['telefonoAlumnos'];
	$discapasidadAlumnos=$_POST['discapasidadAlumnos'];
	$idPlanPRE=$_POST['idPlanPRE'];
	
	$obserbacionGeneral=$_POST['obserbacionGeneral'];
	$passLogin=$_POST['passLogin'];



	$sql="INSERT INTO `preinsdatosalumnos`(`idAlumnos`, `nombreAlumnos`, `dniAlumnos`, `cuilAlumnos`, `domicilioAlumnos`, `emailAlumnos`, `telefonoAlumnos`, `discapasidadAlumnos`, `obserbacionGeneral`, `passLogin`, `situacionAlta`, `obserbacionAlta`, `idPlan`) VALUES (null,'$nombreAlumnos','$dniAlumnosTA','$cuilAlumnos','$domicilioAlumnos','$emailAlumnos','$telefonoAlumnos','$discapasidadAlumnos','$obserbacionGeneral','$passLogin','EN TRAMITE','EN TRAMITE','$idPlanPRE')";



	
	echo $result=mysqli_query($conexion,$sql);


	

 ?>