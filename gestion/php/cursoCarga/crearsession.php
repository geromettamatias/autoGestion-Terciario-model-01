<?php 
	

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();

	session_start();
	$idcurso=$_POST['idcurso'];

	


	$sql="SELECT * FROM `datoscurso` WHERE `idcurso`='$idcurso'";
         
          

        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 
        	$idPlan=$ver[2];
      
             }


	
	$_SESSION['idcurso']=$idcurso;


	$_SESSION['idPlan']=$idPlan;   



	echo '1';

 ?>