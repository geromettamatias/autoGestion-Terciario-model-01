<?php

require_once "../../libreriasConexion/conexionPagina.php";
	$conexion=conexion();





 		$sql="SELECT * from premios";
       
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 
        	
		  $datos=$ver[3].'||'.$ver[1].'||'.$ver[2];

		 }

		 echo $datos;

		   
?>

