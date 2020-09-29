<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$dato=$_POST['dato'];


$desde=0;
$hasta=0;

	$sql23315="SELECT * FROM `fechas` WHERE `inscp`='$dato'";
        $result223225=mysqli_query($conexion,$sql23315);
           while ($ver=mysqli_fetch_row($result223225)) {
                
          $desde=$ver[1];
          $hasta=$ver[2];
        
           
           }

$tiemP=0;

$time = time();

$tiemP= date("Y-m-d", $time);

$r=0;
if ($desde<=$tiemP && $hasta>=$tiemP) {

$r=1;

}


echo $r;




 ?>




