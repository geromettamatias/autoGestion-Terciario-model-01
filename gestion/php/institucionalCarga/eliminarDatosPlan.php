
<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idPlan=$_POST['idPlan'];

	$sql="DELETE from institucionplan where idPlan='$idPlan'";
	
	$result=mysqli_query($conexion,$sql);

	$sql="DELETE FROM `institucionplanasignatura` WHERE `idPlan`='$idPlan'";
	
	$result=mysqli_query($conexion,$sql);

	$sql="DELETE FROM `institucionplanasignaturacorrelativa` WHERE `idPlan`='$idPlan'";
	
	echo $result=mysqli_query($conexion,$sql);

 ?>