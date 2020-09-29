<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idCusado=$_POST['idCusado'];




	$sql="DELETE FROM `inscrpcursado` WHERE `idCursado`='$idCusado'";
	echo $result=mysqli_query($conexion,$sql);


	

 ?>