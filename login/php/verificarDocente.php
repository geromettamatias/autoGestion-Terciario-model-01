<?php

require_once "../../libreriasConexion/conexion.php";
	$conexion=conexion();


$datos1="";

$query = "SELECT * from `preinsdatospersonal` ";

if(!empty($_POST['da1'])) {
	
		$datos1=$_POST["da1"];
		
		$query = "SELECT * FROM `preinsdatospersonal` WHERE `dniDocente` LIKE '%$datos1%'";

}	

$result = mysqli_query($conexion, $query);

		if (!$result) {
		    die(0);
		  }
		  $rad=2;

		  

		  while($row = mysqli_fetch_array($result)) {

		  	$rad=1;

		  }


		  if (!empty($rad)) {
		  	echo $rad;
		  }else{
		  	echo $rad;
		  }

		   

?>


