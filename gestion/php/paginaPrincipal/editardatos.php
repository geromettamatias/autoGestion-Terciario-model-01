<?php 
	require_once "../../../libreriasConexion/conexionPagina.php";
  $conexion=conexion();


	$iddatos=$_POST['iddatos'];
	$datosDatos=$_POST['datosDatos'];
	$datosTitulo=$_POST['datosTitulo'];



	$sql="UPDATE `datos` SET `institucionDatos`='$datosDatos',`datosTitulo`='$datosTitulo' WHERE `iddatos`='$iddatos'";
	echo $result=mysqli_query($conexion,$sql);

 ?>