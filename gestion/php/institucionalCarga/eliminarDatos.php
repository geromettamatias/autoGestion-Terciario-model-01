
<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idInstitucion=$_POST['idInstitucion'];

	$sql="DELETE from institucion where idInstitucion='$idInstitucion'";
	
	$result=mysqli_query($conexion,$sql);

	$sql="DELETE FROM `institucionplan` WHERE `idInstitucion`='$idInstitucion'";
	
	$result=mysqli_query($conexion,$sql);

	$sql="DELETE FROM `institucionplanasignatura` WHERE `idInstitucion`='$idInstitucion'";
	
	$result=mysqli_query($conexion,$sql);

	$sql="DELETE FROM `institucionplanasignaturacorrelativa` WHERE `idInstitucion`='$idInstitucion'";
	
	echo $result=mysqli_query($conexion,$sql);

 ?>
  