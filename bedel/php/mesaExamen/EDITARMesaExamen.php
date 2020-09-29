<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();

	$idmesa=$_POST['idmesa'];
	$fech1U=$_POST['fech1U'];
	$fech2U=$_POST['fech2U'];
	$prof1U=$_POST['prof1U'];
	$prof2U=$_POST['prof2U'];


	$sql="UPDATE `inscrpmesa` SET `idProfesS1`='$prof1U',`idProfesS2`='$prof2U',`fec1`='$fech1U',`fec2`='$fech2U' WHERE `idMesa`='$idmesa'";
	echo $result=mysqli_query($conexion,$sql);


	

 ?>