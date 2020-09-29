<?php
require_once "../../libreriasConexion/conexion.php";
	$conexion=conexion();



	$dniLoginT=$_POST['dniLoginT'];
	$passLoginT=$_POST['passLoginT'];



$query = "SELECT * FROM `login` WHERE `dniLogin`='$dniLoginT' and `passLogin`='$passLoginT'";

	

$result = mysqli_query($conexion, $query);

		  $rad2="";
		  $rad=0;

		  

		  while($row = mysqli_fetch_array($result)) {

		  	$rad2=$row['tipoUsuario'];

		  }

		  if ($rad2==="admin") {
		  	$rad=1;
		  }else{
		  	if ($rad2==="auxiliar") {
		  		$rad=2;
		  	}else{

		  		if ($rad2==="secretaria") {
		  		$rad=3;
		  	}

		  	}
		  }


		  if (!empty($rad)) {
		  	echo $rad;
		  }else{
		  	echo $rad;
		  }

		   
?>


