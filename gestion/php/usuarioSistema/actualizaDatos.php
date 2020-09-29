<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idLoginU=$_POST['idLoginU'];
	$dniLoginU=$_POST['dniLoginU'];
	$passLoginU=$_POST['passLoginU'];
	$tipoUsuarioU=$_POST['tipoUsuarioU'];

	$sql="UPDATE login set idLogin='$idLoginU',
								dniLogin='$dniLoginU',
								passLogin='$passLoginU',
								tipoUsuario='$tipoUsuarioU'
				where idLogin='$idLoginU'";
	echo $result=mysqli_query($conexion,$sql);

 ?>