<?php 
	session_start();

	$idhora=$_POST['idhora'];
	$_SESSION['idhora']=$idhora;

	echo $idhora;
	


 ?>