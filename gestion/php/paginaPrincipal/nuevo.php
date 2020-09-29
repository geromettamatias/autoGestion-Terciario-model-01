<?php 
	require_once "../../../libreriasConexion/conexionPagina.php";
  $conexion=conexion();


	$titulodidacticaN=$_POST['titulodidacticaN'];
	$datosdidacticaN=$_POST['datosdidacticaN'];


	$sql="INSERT INTO `didactica`(`iddidactica`, `titulodidactica`, `datosdidactica`) VALUES (null,'$titulodidacticaN','$datosdidacticaN')";
	echo $result=mysqli_query($conexion,$sql);

 ?>