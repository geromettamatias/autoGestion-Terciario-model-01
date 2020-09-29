<?php
require_once "../../libreriasConexion/conexion.php";
	$conexion=conexion();



	$dniLoginT=$_POST['dniLoginT'];
	$passLoginT=$_POST['passLoginT'];



$query = "SELECT * FROM `preinsdatosalumnos` WHERE `dniAlumnos`='$dniLoginT' and `passLogin`='$passLoginT'";

	

$result = mysqli_query($conexion, $query);

		
		  $rad=0;

		  
		  while($row = mysqli_fetch_array($result)) {

		  	$rad=$row['situacionAlta'].'||'.$row['obserbacionAlta'];

		  }


		  if (!empty($rad)) {
		  	echo $rad;
		  }else{
		  	echo $rad;
		  }

		   
?>


