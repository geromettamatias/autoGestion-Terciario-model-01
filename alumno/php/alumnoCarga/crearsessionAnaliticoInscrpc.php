<?php 
	session_start();


	$idAlumnos=$_POST['idAlumnos'];
	$idPlan=$_POST['idPlan'];

	$_SESSION['idAlumnoAnalitico']=$idAlumnos;
	$_SESSION['idPlanAnalitico']=$idPlan;

	echo '1';

 ?>