<?php

require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();



//$connection = mysqli_connect('localhost', 'mati', '123', 'institucion');

$datos1="";

$query = "SELECT * from `preinsdatosalumnos` ";


if(!empty($_POST['dniAlumnos'])) {
	
		$datos1=$_POST["dniAlumnos"];
		
		$query = "SELECT * FROM `preinsdatosalumnos` WHERE `dniAlumnos`='$datos1'";

}	

$result = mysqli_query($conexion, $query);

		if (!$result) {
		    die("<p style='color:#2980B9';>Verificado...</p>");
		  }
		  $rad="";

	

		  while($row = mysqli_fetch_array($result)) {

		  	$rad="<p style='color:#FF0000';>EL DNI ya se encuentra régistrado al nombre de :".$row['nombreAlumnos']."y no proda registrarlo nuevamente</p>";

		  }

		  
		  if (!empty($rad)) {
		  	echo $rad;
		  }else{
		  	echo "<p style='color:#27AE60';>Verificado y listo para registrar</p>";
		  }

		   

?>