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

	$passLoginU=$_POST['passLoginU'];
	$situacionAltaU=$_POST['situacionAltaU'];
	$obserbacionAltaU=$_POST['obserbacionAltaU'];

	$idPlan=$_POST['idPlan'];
	




	$datos="";
	$sql="SELECT * FROM `datosalumnos` WHERE `dniAlumnos`='$dniAlumnosU'";

	$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){

					$datos=$ver[2];
				}

	if ($datos===$dniAlumnosU) {
		echo "0";
	}else{

		$sql="DELETE FROM `preinsdatosalumnos` WHERE `idAlumnos`='$idAlumnosU'";
	
	
		$result=mysqli_query($conexion,$sql);



		$sql="INSERT INTO `datosalumnos`(`idAlumnos`, `nombreAlumnos`, `dniAlumnos`, `cuilAlumnos`, `domicilioAlumnos`, `emailAlumnos`, `telefonoAlumnos`, `discapasidadAlumnos`, `nLegajoAlumno`, `legajoSituacion`, `obserbacionGeneral`, `passLogin`, `idPlan`) VALUES (null,'$nombreAlumnosU','$dniAlumnosU','$cuilAlumnosU','$domicilioAlumnosU','$emailAlumnosU','$telefonoAlumnosU','$discapasidadAlumnosU','$nLegajoAlumnoU','$legajoSituacionU','$obserbacionGeneralU','$passLoginU','$idPlan')";
		echo $result=mysqli_query($conexion,$sql);


	}

?>