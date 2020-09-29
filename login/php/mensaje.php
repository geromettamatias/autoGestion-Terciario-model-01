<?php 

	require_once "../../libreriasConexion/conexionPagina.php";
	$conexion=conexion();


	$mensajeAdmins=$_POST['mensajeAdmins'];
	$tituloMensaje=$_POST['tituloMensaje'];
	



	$sql="INSERT INTO `mensaje`(`mensajeT`,`tituloMensaje`) VALUES ('$mensajeAdmins','$tituloMensaje')";


	echo $result=mysqli_query($conexion,$sql);


	

 ?>