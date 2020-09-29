<?php 
	session_start();


	$idPlan=$_POST['idPlan'];

	$_SESSION['idPlan']=$idPlan;
	

	echo $idPlan;
	


 ?>