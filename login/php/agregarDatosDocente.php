<?php 

	require_once "../../libreriasConexion/conexion.php";
	$conexion=conexion();


	$nombreDocente=$_POST['nombreDocente'];
	$dniDocente=$_POST['dniDocente'];
	$actividadDocente=$_POST['actividadDocente'];
	$tituloDocente=$_POST['tituloDocente'];
	$nTituloDocente=$_POST['nTituloDocente'];
	$nTelefonicodocente=$_POST['nTelefonicodocente'];
	$domicilioDocente=$_POST['domicilioDocente'];
	$emailDocente=$_POST['emailDocente'];

	$passDocente=$_POST['passDocente'];
	

$sql="INSERT INTO `preinsdatospersonal`(`idPersonal`, `nombreDocente`, `dniDocente`, `actividadDocente`, `tituloDocente`, `nTituloDocente`, `nTelefonicodocente`, `domicilioDocente`, `emailDocente`, `passDocente`,`situacionAlta`,`obserbacionAlta`) VALUES (null,'$nombreDocente','$dniDocente','$actividadDocente','$tituloDocente','$nTituloDocente','$nTelefonicodocente','$domicilioDocente','$emailDocente','$passDocente','Inicio de Tramite','En espera')";
		echo $result=mysqli_query($conexion,$sql);

	


	

 ?>