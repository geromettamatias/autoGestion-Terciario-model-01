<?php

  require_once  "../../libreriasConexion/conexion.php";
  $conexion=conexion();

  
	$nombreAlumnos=$_POST['nombreAlumnos'];
	$dniAlumnosTA=$_POST['dniAlumnosTA'];
	$cuilAlumnos=$_POST['cuilAlumnos'];
	$domicilioAlumnos=$_POST['domicilioAlumnos'];
	$emailAlumnos=$_POST['emailAlumnos'];
	$telefonoAlumnos=$_POST['telefonoAlumnos'];
	$discapasidadAlumnos=$_POST['discapasidadAlumnos'];
	$idPlanPRE=$_POST['idPlanPRE'];
	
	$obserbacionGeneral=$_POST['obserbacionGeneral'];
	$passLogin=$_POST['passLogin'];



  $r="";
               
$sql="SELECT * FROM `institucionplan` WHERE `idPlan`='$idPlanPRE'";
          
          $result=mysqli_query($conexion,$sql);
                  while ($ver=mysqli_fetch_row($result)) {

                       $r=$ver[3] ;

                    }

echo $r;


?>

