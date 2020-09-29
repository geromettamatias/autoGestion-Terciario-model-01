<?php 
	session_start();

	$idper=$_POST['valor'];
	$_SESSION['BuscarValor']=$idper;

	echo $idper;
	


 ?>