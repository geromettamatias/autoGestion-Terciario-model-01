<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$institucionPlan=$_POST['institucionPlan'];
	$reguisCarre=$_POST['reguisCarre'];
	$nombreCarre=$_POST['nombreCarre'];
	

$sql="INSERT INTO `institucionplan`(`idPlan`, `idInstitucion`, `numeroRegis`, `nombre`) VALUES (null,'$institucionPlan','$reguisCarre','$nombreCarre')";

echo $result=mysqli_query($conexion,$sql);


	

 ?>