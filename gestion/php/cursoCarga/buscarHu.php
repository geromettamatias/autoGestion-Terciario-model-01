<?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idhora=$_POST['idhora'];

$idAsig="";
$horariI="";
$horariF="";
$idProfesor="";

	$sql="SELECT * FROM `datoscursohora` WHERE `idhora`='$idhora'";

				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

				
					$idAsig=$ver[3];
					$horariI=$ver[6];
					$horariF=$ver[7];
					$diaHorario=$ver[5];
					$idProfesor=$ver[8];

				}




	$Asignatura="";
	$sql="SELECT * FROM `institucionplanasignatura` WHERE `idAsig`='$idAsig'";

				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$Asignatura=$ver[4];

				}

	$Profeso="";


		$sql2="SELECT * FROM `datospersonal` WHERE `idPersonal`='$idProfesor'";
              $result2=mysqli_query($conexion,$sql2);
                while ($ver=mysqli_fetch_row($result2)) {


					$Profeso=$ver[1];

				}

				$datos=$Asignatura."||".$horariI."||".$horariF."||".$Profeso."||".$diaHorario;

				echo $datos;



 ?>