<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idPersonal=$_POST['idPersonal'];
	$apelliNombre=$_POST['apelliNombre'];
	
	$tituloDocen=$_POST['tituloDocen'];
	$nRegistro=$_POST['nRegistro'];
	$telefoDO=$_POST['telefoDO'];
	$domicDo=$_POST['domicDo'];
	$emaiDoc=$_POST['emaiDoc'];
	$passDoc=$_POST['passDoc'];


	$sql="UPDATE datospersonal set nombreDocente='$apelliNombre',
								
								tituloDocente='$tituloDocen',
								nTituloDocente='$nRegistro',
								nTelefonicodocente='$telefoDO',
								domicilioDocente='$domicDo',
								emailDocente='$emaiDoc',
								passLogin='$passDoc'
				where idPersonal='$idPersonal'";
	echo $result=mysqli_query($conexion,$sql);

 ?>