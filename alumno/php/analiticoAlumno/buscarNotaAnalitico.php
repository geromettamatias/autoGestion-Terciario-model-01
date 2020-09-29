<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	
	$idAlumnoAnalitico=$_POST['idAlumnoAnalitico'];
	$idPlanAnalitico=$_POST['idPlanAnalitico'];
	$idAsigAnalitico=$_POST['idAsigAnalitico'];
	
$datos="";
	$sql="SELECT * FROM `notasalumno` WHERE `idAlumno`='$idAlumnoAnalitico' AND `idPlan`='$idPlanAnalitico' AND `idAsignatura`='$idAsigAnalitico'";
            

        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

          

            $datos=$ver[0]."||".$ver[4]."||".
               $ver[5]."||".
               $ver[6];

         }


     echo $datos;


 ?>