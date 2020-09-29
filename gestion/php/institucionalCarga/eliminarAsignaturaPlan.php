
<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idAsig=$_POST['idAsig'];


	
$sql2="DELETE FROM `institucionplanasignaturacorrelativa` WHERE `idAsignatura`='$idAsig'";
	
	$result2=mysqli_query($conexion,$sql2);


	$sql="DELETE from institucionplanasignatura where idAsig='$idAsig'";
	
	echo $result=mysqli_query($conexion,$sql);

 ?>