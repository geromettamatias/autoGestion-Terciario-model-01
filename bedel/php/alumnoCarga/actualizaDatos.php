<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();

	$idAlumnosU=$_POST['idAlumnosU'];
	$nombreAlumnosU=$_POST['nombreAlumnosU'];
	$dniAlumnosU=$_POST['dniAlumnosU'];
	$cuilAlumnosU=$_POST['cuilAlumnosU'];
	$domicilioAlumnosU=$_POST['domicilioAlumnosU'];
	$emailAlumnosU=$_POST['emailAlumnosU'];
	$telefonoAlumnosU=$_POST['telefonoAlumnosU'];
	$discapasidadAlumnosU=$_POST['discapasidadAlumnosU'];
	$nLegajoAlumnoU=$_POST['nLegajoAlumnoU'];
	$legajoSituacionU=$_POST['legajoSituacionU'];
	$obserbacionGeneralU=$_POST['obserbacionGeneralU'];
	$passU=$_POST['passU'];
	$idplanU=$_POST['idplanU'];



	$sql="UPDATE `datosalumnos` SET `nombreAlumnos`='$nombreAlumnosU',`dniAlumnos`='$dniAlumnosU',`cuilAlumnos`='$cuilAlumnosU',`domicilioAlumnos`='$domicilioAlumnosU',`emailAlumnos`='$emailAlumnosU',`telefonoAlumnos`='$telefonoAlumnosU',`discapasidadAlumnos`='$discapasidadAlumnosU',`nLegajoAlumno`='$nLegajoAlumnoU',`legajoSituacion`='$legajoSituacionU',`obserbacionGeneral`='$obserbacionGeneralU',`passLogin`='$passU',`idPlan`='$idplanU' WHERE `idAlumnos`='$idAlumnosU'";

	echo $result=mysqli_query($conexion,$sql);


	


 ?>