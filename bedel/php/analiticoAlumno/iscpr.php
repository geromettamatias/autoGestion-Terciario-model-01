<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idFinalInscp=$_POST['idFinalInscp'];
	$idPlanAnaliticoInscpF=$_POST['idPlanAnaliticoInscpF'];
	$idAlumnoAnaliticoInscpF=$_POST['idAlumnoAnaliticoInscpF'];
	$idAnaliticoInscpCursoF=$_POST['idAnaliticoInscpCursoF'];
	$notaRegular2=$_POST['notaRegular2'];
	$notaFinal2=$_POST['notaFinal2'];
	$equivalente2=$_POST['equivalente2'];
	

$idMesa="";

$sql1="SELECT * FROM `inscrpmesa` WHERE `idhora`='$idAnaliticoInscpCursoF'";

        $result1=mysqli_query($conexion,$sql1);
        while($ver=mysqli_fetch_row($result1)){ 

          

            $idMesa=$ver[0];

        }

if ($idMesa==="") {
	echo "";
}else{





$idFinal="";

$sql11="SELECT * FROM `inscrpfinal` WHERE `idAlumno`='$idAlumnoAnaliticoInscpF' AND `idMesa`='$idMesa' AND `idAsigEqui`='$equivalente2'";

        $result11=mysqli_query($conexion,$sql11);
        while($ver=mysqli_fetch_row($result11)){ 
          

            $idFinal=$ver[0];

        }



if ($idFinal==="") {
	$sql="INSERT INTO `inscrpfinal`(`idFinal`, `idAlumno`, `idMesa`, `idAsigEqui`) VALUES (null,'$idAlumnoAnaliticoInscpF','$idMesa','$equivalente2')";
	echo $result=mysqli_query($conexion,$sql);
}else{

	echo 2;
};





}
 ?>