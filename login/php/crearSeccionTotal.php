<?php 
	session_start();

	$planAñoAlumnoPRET=$_POST['planAñoAlumnoPRET'];
	$especialidadAlumnoPREtt=$_POST['especialidadAlumnoPREtt'];

	$_SESSION['planAñoAlumnoPRET']=$planAñoAlumnoPRET;
	$_SESSION['especialidadAlumnoPREtt']=$especialidadAlumnoPREtt;

	echo "1";

 ?>