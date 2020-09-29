<?php 
	session_start();

	$valorA=$_POST['valorA'];
	$_SESSION['valorA']=$valorA;

	echo $valorA;
	


 ?>