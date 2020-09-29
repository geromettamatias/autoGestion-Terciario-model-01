<?php 
	session_start();

	$idper=$_POST['valor'];
	$_SESSION['curso']=$idper;

	echo $idper;
	


 ?>