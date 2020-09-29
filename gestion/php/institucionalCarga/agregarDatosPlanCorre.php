<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idasig3=$_POST['idasig3'];
	$idPlan3=$_POST['idPlan3'];
	$idInstitucion3=$_POST['idInstitucion3'];
	$asignaturaCo1=$_POST['asignaturaCo1'];
	$asignaturaCo2=$_POST['asignaturaCo2'];


$sql="INSERT INTO `institucionplanasignaturacorrelativa`(`idCorrelativa`, `idInstitucion`, `idPlan`, `idAsignatura`, `nombreAsigPre`, `nombreAsigPos`) VALUES (null,'$idInstitucion3','$idPlan3','$idasig3','$asignaturaCo1','$asignaturaCo2')";

echo $result=mysqli_query($conexion,$sql);


	

 ?>