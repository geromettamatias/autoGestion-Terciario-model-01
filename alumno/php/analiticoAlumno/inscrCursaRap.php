<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();

	$idAlumnoAnalitico=$_POST['idAlumnoAnalitico'];
	$idhora=$_POST['idhora'];
	$idPlanAnalitico=$_POST['idPlanAnalitico'];
	
$idAlumnoAnalitico=trim($idAlumnoAnalitico);
$idhora=trim($idhora);
$idPlanAnalitico=trim($idPlanAnalitico);



$idAsigCorre="";
$idAsig="";
$notaRegular="";

$sql112="SELECT * FROM `datoscursohora` WHERE `idhora`='$idhora'";

        $result112=mysqli_query($conexion,$sql112);
        while($ver=mysqli_fetch_row($result112)){ 
      
            $idAsig=$ver[3];

        }

$sql112="SELECT * FROM `institucionplanasignaturacorrelativa` WHERE `idPlan`='$idPlanAnalitico' AND `idAsignatura`='$idAsig'";

        $result112=mysqli_query($conexion,$sql112);
        while($ver=mysqli_fetch_row($result112)){ 
      
            $idAsigCorre=$ver[5];

        }



$sql112="SELECT * FROM `notasalumno` WHERE `idAlumno`='$idAlumnoAnalitico' AND `idPlan`='$idPlanAnalitico' AND `idAsignatura`='$idAsigCorre'";

        $result112=mysqli_query($conexion,$sql112);
        while($ver=mysqli_fetch_row($result112)){ 
      
            $notaRegular=$ver[4];

        }




if ($idAsigCorre==="") {
	$sql="INSERT INTO `inscrpcursado`(`idCursado`, `idAlumno`, `idhora`, `idPlan`) VALUES (null,'$idAlumnoAnalitico','$idhora','$idPlanAnalitico')";
	echo $result=mysqli_query($conexion,$sql);
}else{

if ($notaRegular>=6) {
	$sql="INSERT INTO `inscrpcursado`(`idCursado`, `idAlumno`, `idhora`, `idPlan`) VALUES (null,'$idAlumnoAnalitico','$idhora','$idPlanAnalitico')";
	echo $result=mysqli_query($conexion,$sql);
}else{

	echo 5;
}



}

	



 ?>