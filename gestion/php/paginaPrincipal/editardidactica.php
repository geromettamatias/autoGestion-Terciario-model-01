<?php 
	require_once "../../../libreriasConexion/conexionPagina.php";
  $conexion=conexion();


	$iddidactica=$_POST['iddidactica'];
	$titulodidactica=$_POST['titulodidactica'];
	$datosdidactica=$_POST['datosdidactica'];



	$sql="UPDATE `didactica` SET `titulodidactica`='$titulodidactica',`datosdidactica`='$datosdidactica' WHERE `iddidactica`='$iddidactica'";
	echo $result=mysqli_query($conexion,$sql);

 ?>