<?php

require_once "../../libreriasConexion/conexionPagina.php";
	$conexion=conexion();





 		$sql="SELECT * from datos";
       
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 
        	
		  $datos=$ver[2].'||'.$ver[1];

		 }

		 echo $datos;

		   
?>

