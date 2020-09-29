<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$nombreDocente=$_POST['nombreDocente'];
	$dniDocente=$_POST['dniDocente'];
	$actividadDocente=$_POST['actividadDocente'];
	$tituloDocente=$_POST['tituloDocente'];
	$nTituloDocente=$_POST['nTituloDocente'];
	$nTelefonicodocente=$_POST['nTelefonicodocente'];
	$domicilioDocente=$_POST['domicilioDocente'];
	$emailDocente=$_POST['emailDocente'];

	$datos="";
	$sql="SELECT * FROM `datospersonal` WHERE `dniDocente`='$dniDocente'";

	$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){

					$datos=$ver[2];
				}

	if ($datos===$nombreDocente) {
		echo "0";
	}else{

		$sql="INSERT into datospersonal (nombreDocente,dniDocente,actividadDocente,tituloDocente,nTituloDocente,nTelefonicodocente,domicilioDocente,emailDocente)
								values ('$nombreDocente','$dniDocente','$actividadDocente','$tituloDocente','$nTituloDocente','$nTelefonicodocente','$domicilioDocente','$emailDocente')";
		echo $result=mysqli_query($conexion,$sql);

	}


	

 ?>