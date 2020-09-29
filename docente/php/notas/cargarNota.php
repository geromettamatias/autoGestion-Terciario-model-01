<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	
	$idalumno=$_POST['idalumno'];
	$idPlan=$_POST['idPlan'];
	
	$idAsig=$_POST['idAsig'];

	$situacion=$_POST['situacion'];
	$nota=$_POST['nota'];



$conf=0;

 $sql1="SELECT * FROM `notasalumno` WHERE `idAlumno`='$idalumno' AND `idPlan`='$idPlan' AND `idAsignatura`='$idAsig'";
         

        $result1=mysqli_query($conexion,$sql1);
        while($ver=mysqli_fetch_row($result1)){ 

          	$idNota=$ver[0];
        	$conf=1;

          }


$notaF="";


if ($conf==0) {


$sql="INSERT INTO `notasalumno`(`idNota`, `idAlumno`, `idPlan`, `idAsignatura`, `notaRegular`, `notaFinal`, `situacion`) VALUES (null,'$idalumno','$idPlan','$idAsig','$nota','$notaF','$situacion')";

	
}else{

$sql="UPDATE `notasalumno` SET `notaRegular`='$nota',`situacion`='$situacion' WHERE `idNota`='$idNota'";

}




	
	echo $result=mysqli_query($conexion,$sql);

 ?>