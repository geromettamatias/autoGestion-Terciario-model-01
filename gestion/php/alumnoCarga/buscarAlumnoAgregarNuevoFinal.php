

<?php

require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();

$datos1="";

$query = "SELECT * from `t_persona1` ";


if(!empty($_POST['dniAlumnos'])) {
	
		$datos1=$_POST["dniAlumnos"];
		
		$query = "SELECT * FROM `datosalumnos` WHERE `dniAlumnos`='$datos1'";

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