<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idPlan=$_POST['idPlan'];
	$institucionPlanU=$_POST['institucionPlanU'];
	$reguisCarreU=$_POST['reguisCarreU'];
	$nombreCarreU=$_POST['nombreCarreU'];
	


$sql="UPDATE `institucionplan` SET `idInstitucion`='$institucionPlanU',`numeroRegis`='$reguisCarreU',`nombre`='$nombreCarreU' WHERE `idPlan`='$idPlan'";

echo $result=mysqli_query($conexion,$sql);


	

 ?>