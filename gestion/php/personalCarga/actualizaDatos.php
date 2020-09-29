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

	$sql="UPDATE datospersonal set nombreDocente='$nombreDocente',
								dniDocente='$dniDocente',
								actividadDocente='$actividadDocente',
								tituloDocente='$tituloDocente',
								nTituloDocente='$nTituloDocente',
								nTelefonicodocente='$nTelefonicodocente',
								domicilioDocente='$domicilioDocente',
								emailDocente='$emailDocente'
				where idPersonal='$idPersonal'";
	echo $result=mysqli_query($conexion,$sql);

 ?>