<?php 
	session_start();

	$dniLoginTbedel=$_POST['dniLoginTbedel'];
	$usuarioAbedel=$_POST['usuarioAbedel'];

	$_SESSION['dniLoginTbedel']=$dniLoginTbedel;
	$_SESSION['usuarioAbedel']=$usuarioAbedel;

	echo "1";

 ?>