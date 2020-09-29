<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$dniLogin=$_POST['dniLogin'];
	$passLogin=$_POST['passLogin'];
	$tipoUsuario=$_POST['tipoUsuario'];
	

	$datos="";
	$sql="SELECT * FROM `login` WHERE `dniLogin`='$dniLogin'";

	$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){

					$datos=$ver[1];
				}

	if ($datos===$dniLogin) {
		echo "0";
	}else{

		$sql="INSERT INTO `login`(`idLogin`, `dniLogin`, `passLogin`, `tipoUsuario`) VALUES (null,'$dniLogin','$passLogin','$tipoUsuario')";
		echo $result=mysqli_query($conexion,$sql);

	}


	

 ?>