<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idasig2=$_POST['idasig2'];
	$idInstitucion2=$_POST['idInstitucion2'];
	$idPlan2=$_POST['idPlan2'];
	$ciclo2=$_POST['ciclo2'];

	$nombreAsig2=$_POST['nombreAsig2'];
	$duracionCarrera2=$_POST['duracionCarrera2'];
	$horaAsig2=$_POST['horaAsig2'];




$sql="UPDATE `institucionplanasignatura` SET `idInstitucion`='$idInstitucion2',`ciclo`='$ciclo2',`nombre`='$nombreAsig2',`duracion`='$duracionCarrera2',`hora`='$horaAsig2' WHERE `idAsig`='$idasig2'";

echo $result=mysqli_query($conexion,$sql);


	

 ?>