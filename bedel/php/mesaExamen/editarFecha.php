
<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();

	$idFecha=$_POST['idFecha'];
	$situacionCursFinalU=$_POST['situacionCursFinalU'];
	$desdeFU=$_POST['desdeFU'];
	$hastaFU=$_POST['hastaFU'];
	



	$sql="UPDATE `fechas` SET `desde`='$desdeFU',`hasta`='$hastaFU',`inscp`='$situacionCursFinalU' WHERE `idFecha`='$idFecha'";
	echo $result=mysqli_query($conexion,$sql);


	

 ?>