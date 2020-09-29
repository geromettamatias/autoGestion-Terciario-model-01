<?php 
	session_start();
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();

  $idAlumnoAnaliticoInscpF=$_POST['idAlumnoAnaliticoInscpF'];
	$equivalente2=$_POST['equivalente2'];
  $idPlanAnaliticoInscpF=$_POST['idPlanAnaliticoInscpF'];



$datos=0;
if ($equivalente2 > 0) {
  
$notaReg='0';
$notaFinal='0';
$sql2331="SELECT * FROM `institucionplanasignatura` WHERE `idAsig`='$equivalente2'";
        $result22322=mysqli_query($conexion,$sql2331);
           while ($ver=mysqli_fetch_row($result22322)) {
          $asig=$ver[4];
          $idPlan=$ver[2];
           }

$sql2331="SELECT * FROM `notasalumno` WHERE `idPlan`='$idPlan' AND `idAsignatura`='$equivalente2' AND `idAlumno`='$idAlumnoAnaliticoInscpF'";
        $result22322=mysqli_query($conexion,$sql2331);
           while ($ver=mysqli_fetch_row($result22322)) {
          $notaReg=$ver[4];
          $notaFinal=$ver[5];
           }


$datos=$asig.'||'.$notaReg.'||'.$notaFinal;






}else{

  $datos=0;
}


echo $datos;






 ?>