<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idCursadoInscp=$_POST['idCursadoInscp'];
	$idAlumnoAnaliticoInscp=$_POST['idAlumnoAnaliticoInscp'];
	$idPlanAnaliticoInscp=$_POST['idPlanAnaliticoInscp'];
	
	$idAnaliticoInscpCurso=$_POST['idAnaliticoInscpCurso'];
	



$idPlan="";
$idAsig="";
$idCorrelati=0;

$idNota=0;

$idAsigCorre=0;
$notaRegular=0;


$notaRegular22=0;
$notaFinal22=0;















$sql112="SELECT * FROM `datoscursohora` WHERE `idhora`='$idAnaliticoInscpCurso'";

        $result112=mysqli_query($conexion,$sql112);
        while($ver=mysqli_fetch_row($result112)){ 
      
            $idAsig=$ver[3];

        }




// saco o no

$sql112teet="SELECT * FROM `notasalumno` WHERE `idAlumno`='$idAlumnoAnaliticoInscp' AND `idPlan`='$idPlanAnaliticoInscp' AND `idAsignatura`='$idAsig'";

        $result112tggt=mysqli_query($conexion,$sql112teet);
        while($ver=mysqli_fetch_row($result112tggt)){ 
          
        	$notaRegular22=$ver[4];
        	$notaFinal22=$ver[5];

  
         

        }



// 

if ($notaRegular22 < 6) {
if ($notaFinal22 < 6) {


$sql112t="SELECT * FROM `institucionplanasignaturacorrelativa` WHERE `idPlan`='$idPlanAnaliticoInscp' AND `idAsignatura`='$idAsig'";

        $result112t=mysqli_query($conexion,$sql112t);
        while($ver=mysqli_fetch_row($result112t)){ 
          
        	$idCorrelati=$ver[0];
        	$idAsigCorre=$ver[5];
         

        }

$sql112tee="SELECT * FROM `notasalumno` WHERE `idAlumno`='$idAlumnoAnaliticoInscp' AND `idPlan`='$idPlanAnaliticoInscp' AND `idAsignatura`='$idAsigCorre'";

        $result112tgg=mysqli_query($conexion,$sql112tee);
        while($ver=mysqli_fetch_row($result112tgg)){ 
          
        	$notaRegular=$ver[4];

  
         

        }




if ($idCorrelati === 0 ) {
	

$idCursado="";

$sql11="SELECT * FROM `inscrpcursado` WHERE `idAlumno`='$idAlumnoAnaliticoInscp' AND `idhora`='$idAnaliticoInscpCurso' AND `idPlan`='$idPlanAnaliticoInscp'";

        $result11=mysqli_query($conexion,$sql11);
        while($ver=mysqli_fetch_row($result11)){ 
          

            $idCursado=$ver[0];

        }



if ($idCursado==="") {
	
	$sql="INSERT INTO `inscrpcursado`(`idCursado`, `idAlumno`, `idhora`, `idPlan`) VALUES (null,'$idAlumnoAnaliticoInscp','$idAnaliticoInscpCurso','$idPlanAnaliticoInscp')";
	echo $result=mysqli_query($conexion,$sql);


}else{

	echo 2;
}


}else{



if ($notaRegular >=6) {


				$idCursado="";

		$sql11="SELECT * FROM `inscrpcursado` WHERE `idAlumno`='$idAlumnoAnaliticoInscp' AND `idhora`='$idAnaliticoInscpCurso' AND `idPlan`='$idPlanAnaliticoInscp'";

		        $result11=mysqli_query($conexion,$sql11);
		        while($ver=mysqli_fetch_row($result11)){ 
		          

		            $idCursado=$ver[0];

		        }



		if ($idCursado==="") {
			
			$sql="INSERT INTO `inscrpcursado`(`idCursado`, `idAlumno`, `idhora`, `idPlan`) VALUES (null,'$idAlumnoAnaliticoInscp','$idAnaliticoInscpCurso','$idPlanAnaliticoInscp')";
			echo $result=mysqli_query($conexion,$sql);


		}else{

			echo 2;
		}



	

	}else{

	echo 3;

	}





}




}else{


echo 5;


}








}else{


echo 5;


}



 ?>