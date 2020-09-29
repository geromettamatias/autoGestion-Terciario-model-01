<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idPersonal=$_POST['idPersonal'];
	$nombreDocente=$_POST['nombreDocente'];
	$dniDocente=$_POST['dniDocente'];
	$actividadDocente=$_POST['actividadDocente'];
	$tituloDocente=$_POST['tituloDocente'];
	$nTituloDocente=$_POST['nTituloDocente'];
	$nTelefonicodocente=$_POST['nTelefonicodocente'];
	$domicilioDocente=$_POST['domicilioDocente'];
	$emailDocente=$_POST['emailDocente'];
	$passDocente=$_POST['passDocente'];



	$datos="";
	$sql="SELECT * FROM `datospersonal` WHERE `dniDocente`='$dniDocente'";

	$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){

					$datos=$ver[2];
				}

	if ($datos===$nombreDocente) {
		echo "0";
	}else{

		$sql="DELETE from preinsdatospersonal where idPersonal='$idPersonal'";
	
	
		$result=mysqli_query($conexion,$sql);

		$sql="INSERT INTO `datospersonal`(`idPersonal`, `nombreDocente`, `dniDocente`, `actividadDocente`, `tituloDocente`, `nTituloDocente`, `nTelefonicodocente`, `domicilioDocente`, `emailDocente`, `passLogin`) VALUES (null,'$nombreDocente','$dniDocente','$actividadDocente','$tituloDocente','$nTituloDocente','$nTelefonicodocente','$domicilioDocente','$emailDocente','$passDocente')";
		echo $result=mysqli_query($conexion,$sql);


	}


	
