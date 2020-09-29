<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();



	$idalumno=$_POST['idalumno'];
	$idPlan=$_POST['idPlan'];	
	$idAsig=$_POST['idAsig'];



	$situ="0";
	$nota="0";
	$datos1="";


        $sql1="SELECT * FROM `notasalumno` WHERE `idAlumno`='$idalumno' AND `idPlan`='$idPlan' AND `idAsignatura`='$idAsig'";
         

        $result1=mysqli_query($conexion,$sql1);
        while($ver=mysqli_fetch_row($result1)){ 

          

            $situ=$ver[6];
            $nota=$ver[4];

          }

          $datos1=$situ.'||'.$nota;
        

echo $datos1;
 ?>