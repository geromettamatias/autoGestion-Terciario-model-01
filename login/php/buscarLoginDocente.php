<?php

require_once "../../libreriasConexion/conexion.php";
	$conexion=conexion();




	$dniLoginT=$_POST['dniLoginT'];
	$passLoginT=$_POST['passLoginT'];



$query = "SELECT * FROM `datospersonal` WHERE `dniDocente`='$dniLoginT' and `passLogin`='$passLoginT'";

	

$result = mysqli_query($conexion, $query);

		
		  $rad=0;

		  

		  while($row = mysqli_fetch_array($result)) {

		  	$rad=1;

		  }


		  if (!empty($rad)) {
		  	echo $rad;
		  }else{
		  	echo $rad;
		  }

		   
?>


