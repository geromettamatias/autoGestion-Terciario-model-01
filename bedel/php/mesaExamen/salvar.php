<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idhoraFinalU=$_POST['idhoraFinalU'];


	  $sql="SELECT * FROM `datoscursohora` WHERE `idhora`='$idhoraFinalU'";
            $result=mysqli_query($conexion,$sql);
             while ($ver=mysqli_fetch_row($result)) {

             $idPlan=$ver[1];

        }

	echo $idPlan;


	

 ?>