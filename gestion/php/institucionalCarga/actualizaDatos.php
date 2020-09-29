<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idInstitucion=$_POST['idInstitucion'];
	$nombreU=$_POST['nombreU'];
	$domicilioU=$_POST['domicilioU'];
	$telU=$_POST['telU'];
	$emailU=$_POST['emailU'];
	


	$sql="UPDATE `institucion` SET `nombre`='$nombreU',`domicilio`='$domicilioU',`tel`='$telU',`email`='$emailU' WHERE `idInstitucion`='$idInstitucion'";
	echo $result=mysqli_query($conexion,$sql);

 ?>
