<?php 
	session_start();

	$valor2=$_POST['valor2'];
	$_SESSION['BuscarValor']=$valor2;

	echo $valor2;
	


 ?>