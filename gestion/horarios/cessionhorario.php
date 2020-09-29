<?php 
	session_start();

	$idper=$_POST['valorhora'];
	$_SESSION['valorhora']=$idper;

	echo $idper;
	


 ?>