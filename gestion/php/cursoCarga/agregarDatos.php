<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$carreraCargaCurso=$_POST['carreraCargaCurso'];
	$cursoCargaCurso=$_POST['cursoCargaCurso'];
    $idInstut2="";
    $nresul="";



    $sql3="SELECT * FROM `institucionplan` WHERE `nombre`='$carreraCargaCurso'";

        $result3=mysqli_query($conexion,$sql3);
        while($ver=mysqli_fetch_row($result3)){
            $idPlan=$ver[0]; 
        	$idInstut2=$ver[1];
        	$nresul=$ver[2];

        }


        $sql="INSERT INTO `datoscurso`(`idcurso`, `idInstitucion`, `idPlan`, `nResol`, `nombCarre`, `nombreCurso`) VALUES (null,'$idInstut2','$idPlan','$nresul','$carreraCargaCurso','$cursoCargaCurso')";
        
        mysqli_query($conexion,$sql);



echo "1";



 ?>