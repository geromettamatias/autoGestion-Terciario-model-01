<?php 
	session_start();

	$idper2=$_POST['valor2'];
	$_SESSION['idPlan']=$idper2;

	echo $idper2;
	


 ?>