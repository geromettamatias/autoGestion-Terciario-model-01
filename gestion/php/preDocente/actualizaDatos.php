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
	$situacionAlta=$_POST['situacionAlta'];
	$obserbacionAlta=$_POST['obserbacionAlta'];


	$sql="UPDATE preinsdatospersonal set nombreDocente='$nombreDocente',
								dniDocente='$dniDocente',
								actividadDocente='$actividadDocente',
								tituloDocente='$tituloDocente',
								nTituloDocente='$nTituloDocente',
								nTelefonicodocente='$nTelefonicodocente',
								domicilioDocente='$domicilioDocente',
								emailDocente='$emailDocente',
								passDocente='$passDocente',
								situacionAlta='$situacionAlta',
								obserbacionAlta='$obserbacionAlta'
				where idPersonal='$idPersonal'";
	echo $result=mysqli_query($conexion,$sql);

 ?>