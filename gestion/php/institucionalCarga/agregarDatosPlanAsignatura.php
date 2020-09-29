<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idPlan1=$_POST['idPlan1'];
	$idInstitucion1=$_POST['idInstitucion1'];
	$ciclo=$_POST['ciclo'];
	$nombreAsig=$_POST['nombreAsig'];

	$duracionCarrera=$_POST['duracionCarrera'];
	$horaAsig=$_POST['horaAsig'];


$sql="INSERT INTO `institucionplanasignatura`(`idAsig`, `idInstitucion`, `idPlan`, `ciclo`, `nombre`, `duracion`, `hora`) VALUES (null,'$idInstitucion1','$idPlan1','$ciclo','$nombreAsig','$duracionCarrera','$horaAsig')";

echo $result=mysqli_query($conexion,$sql);


	

 ?>