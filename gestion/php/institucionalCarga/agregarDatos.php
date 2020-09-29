<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$nombre=$_POST['nombre'];
	$cue=$_POST['cue'];
	$domicilio=$_POST['domicilio'];
	$tel=$_POST['tel'];
	$email=$_POST['email'];

	

$sql="INSERT INTO `institucion`(`idInstitucion`, `cue`, `nombre`, `domicilio`, `tel`, `email`) VALUES (null,'$cue','$nombre','$domicilio','$tel','$email')";

echo $result=mysqli_query($conexion,$sql);


	

 ?>