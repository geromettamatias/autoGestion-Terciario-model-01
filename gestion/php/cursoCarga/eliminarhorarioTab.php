
<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idhora=$_POST['idhora'];


	$sql="DELETE FROM `datoscursohora` WHERE `idhora`='$idhora'";
	echo $result=mysqli_query($conexion,$sql);
 ?>