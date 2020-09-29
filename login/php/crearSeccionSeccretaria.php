<?php 
	session_start();

	$dniLoginT=$_POST['dniLoginT'];
	$usuarioA=$_POST['usuarioA'];

	$_SESSION['dniLoginT']=$dniLoginT;
	$_SESSION['usuarioA']=$usuarioA;

	echo "1";

 ?>