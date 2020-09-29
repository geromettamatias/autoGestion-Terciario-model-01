<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idCurs=$_POST['idCurs'];
	$carreraCargaCursoU=$_POST['carreraCargaCursoU'];
	$cursoCargaCursoU=$_POST['cursoCargaCursoU'];
    $idInstut2="";
    $nresul="";



    $sql3="SELECT * FROM `institucionplan` WHERE `nombre`='$carreraCargaCursoU'";

        $result3=mysqli_query($conexion,$sql3);
        while($ver=mysqli_fetch_row($result3)){ 
            $idPlan=$ver[0];
        	$idInstut2=$ver[1];
        	$nresul=$ver[2];

        }


        $sql="UPDATE `datoscurso` SET `idInstitucion`='$idInstut2',`idPlan`='$idPlan',`nResol`='$nresul',`nombCarre`='$carreraCargaCursoU',`nombreCurso`='$cursoCargaCursoU' WHERE `idcurso`='$idCurs'";
        
        mysqli_query($conexion,$sql);



echo "1";



 ?>