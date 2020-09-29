<?php
require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();



$datos1="";

$query = "SELECT * from `preinsdatosalumnos` ";


if(!empty($_POST['dniAlumnos'])) {
	
		$datos1=$_POST["dniAlumnos"];
		
		$query = "SELECT * FROM `preinsdatosalumnos` WHERE `dniAlumnos`='$datos1'";

}	

$result = mysqli_query($conexion, $query);

		if (!$result) {
		    die("");
		  }
		  $rad="";

	

		  while($row = mysqli_fetch_array($result)) {

		  	$rad="ocupado";

		  }

		  
		  if (!empty($rad)) {
		  	echo $rad;
		  }else{
		  	echo "listo";
		  }

		   

?>