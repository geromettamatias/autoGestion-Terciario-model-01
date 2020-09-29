<?php 
	session_start();

	$idper=$_POST['idPlanAnaliticoInscpF'];
	$_SESSION['idPlanCarreraF']=$idper;


	$idper=$_POST['idAlumnoAnaliticoInscpF'];
	$_SESSION['tablaInscripCursadoIdAlumnoF']=$idper;

	echo "1";
	
	
 ?>