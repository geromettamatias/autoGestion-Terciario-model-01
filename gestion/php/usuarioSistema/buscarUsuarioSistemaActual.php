<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();


	session_start();
    $dniLoginT=$_SESSION['dniLoginT'];
    $_SESSION['dniLoginT']=$dniLoginT;
    $idLogin=$_POST['idLogin'];

	

    $datos="";

	 $sql="SELECT * FROM `login` WHERE `idLogin`='$idLogin'";
     
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

        	$datos=$ver[1];

        	


        }

   			if ($dniLoginT === $datos) {
        		$cont=1;
        	}else{
        		$cont=0;
        	}


        	echo $cont;
      
        




 ?>