<?php 
	require_once "../../../libreriasConexion/conexionPagina.php";
  $conexion=conexion();


	$idhistoria=$_POST['idhistoria'];
	$historiaDatos=$_POST['historiaDatos'];
	$historiaTitulo=$_POST['historiaTitulo'];





	$sql="UPDATE `historia` SET `historiaDatos`='$historiaDatos',`historiaTitulo`='$historiaTitulo' WHERE `idhistoria`='$idhistoria'";
	echo $result=mysqli_query($conexion,$sql);

 ?>


