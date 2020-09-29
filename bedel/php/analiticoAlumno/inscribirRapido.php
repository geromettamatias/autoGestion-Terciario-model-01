<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idPlanAnalitico=$_POST['idPlanAnalitico'];
	$idAsigAnalitico=$_POST['idAsigAnalitico'];
	
		
	$datos=0;

    $sql="SELECT * FROM `datoscursohora` WHERE `idPlan`='$idPlanAnalitico' AND `idAsig`='$idAsigAnalitico'";
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

          

            $idhora=$ver[0];
            $idcurso=$ver[2];
            $idAsig33=$ver[3];
            $carrera=$ver[4];
            $diaHorario=$ver[5];
            $hI=$ver[6];
            $hF=$ver[7];
            $idProf=$ver[8];

        

    $sql="SELECT * FROM `datoscurso` WHERE `idcurso`='$idcurso'";
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

            $curso=$ver[5];

        }
      $sql="SELECT * FROM `institucionplanasignatura` WHERE `idAsig`='$idAsig33'";
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

            $asign=$ver[4];

        }
      $sql="SELECT * FROM `datospersonal` WHERE `idPersonal`='$idProf'";
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

            $profe=$ver[1];

        }

         $datos=$idhora."||".
               $carrera."||".
               $curso."||".
               $asign."||".
               $profe."||".
               $diaHorario."||".
               $hI."||".
               $hF;

    }

        echo $datos;

	

 ?>