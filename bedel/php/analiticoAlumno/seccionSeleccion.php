<?php 
	session_start();

	$idper=$_POST['idPlanAnaliticoInscp'];
	$_SESSION['idPlanCarrera']=$idper;


	$idper=$_POST['idAlumnoAnaliticoInscp'];
	$_SESSION['tablaInscripCursadoIdAlumno']=$idper;

	echo "1";
	


 ?>