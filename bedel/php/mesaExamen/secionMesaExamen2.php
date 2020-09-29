<?php 
	session_start();

	$mesaSeleBuscar=$_POST['mesaSeleBuscar'];
	$_SESSION['mesaSeleBuscar']=$mesaSeleBuscar;

	echo $mesaSeleBuscar;
	


 ?>