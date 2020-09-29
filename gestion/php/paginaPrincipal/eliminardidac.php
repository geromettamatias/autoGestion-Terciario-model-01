<?php 
	require_once "../../../libreriasConexion/conexionPagina.php";
  $conexion=conexion();


	$iddidactica=$_POST['iddidactica'];
	


	$sql="DELETE FROM `didactica` WHERE `iddidactica`='$iddidactica'";
	echo $result=mysqli_query($conexion,$sql);

 ?>