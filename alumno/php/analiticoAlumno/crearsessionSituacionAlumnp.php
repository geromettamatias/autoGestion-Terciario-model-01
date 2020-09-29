<?php 
	session_start();
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();

	$idAnaliticoInscpCursoF=$_POST['idAnaliticoInscpCursoF'];
	$idAlumnoAnaliticoInscpF=$_POST['idAlumnoAnaliticoInscpF'];
	$idPlanAnaliticoInscpF=$_POST['idPlanAnaliticoInscpF'];



$regula=0;
$final=0;
$equivalenteNombre="NO TIENE CORRELATIVA";
$equivalente="";
$notaRegular='<p style="color:red;">SIN NOTA</p>';
$notaFinal='<p style="color:red;">SIN NOTA</p>';




	 $sql233="SELECT * FROM `datoscursohora` WHERE `idhora`='$idAnaliticoInscpCursoF'";
                $result2232=mysqli_query($conexion,$sql233);
                  while ($ver=mysqli_fetch_row($result2232)) {
                

                    $idAsig=$ver[3];
                 
                   }




	 $sql23="SELECT * FROM `notasalumno` WHERE `idAlumno`='$idAlumnoAnaliticoInscpF' AND `idPlan`='$idPlanAnaliticoInscpF' AND`idAsignatura`='$idAsig'";
                $result223=mysqli_query($conexion,$sql23);
                  while ($ver=mysqli_fetch_row($result223)) {
                	
                	$regula=1;

                    $notaRegular=$ver[4];
                    $notaFinal=$ver[5];

                    if ($notaRegular>=6) {
                	$regula=1;
                    	
                    }

                     if ($notaFinal>=6) {
                	$final=1;
                    	
                    }

                    



                   }
	




$sql2331="SELECT * FROM `institucionplanasignaturacorrelativa` WHERE `idPlan`='$idPlanAnaliticoInscpF' AND `idAsignatura`='$idAsig'";
        $result22322=mysqli_query($conexion,$sql2331);
           while ($ver=mysqli_fetch_row($result22322)) {
                
          $equivalente=$ver[5];


                 
           
           }





$sql233111="SELECT * FROM `institucionplanasignatura` WHERE `idAsig`='$equivalente'";
        $result2232222=mysqli_query($conexion,$sql233111);
           while ($ver=mysqli_fetch_row($result2232222)) {
                
          $equivalenteNombre=$ver[4];


                 
           
           }


echo '<div class="table-responsive">INFORMACIÓN DE LA ASIGNATURA
    <table class="table table-secondary  table-hover">
    
      <tr>
        <td><input type="text" name="notaRegular2" id="notaRegular2" value="'.$regula.'" hidden="">Nota Regular: '.$notaRegular.'</td>
        <td><input type="text" name="notaFinal2" id="notaFinal2" value="'.$final.'" hidden="">Nota Final: '.$notaFinal.'</td>
      </tr>
    </table>
    </div>';


echo '<div class="table-responsive">INFORMACIÓN CORRELATIVA
    <table class="table table-secondary  table-hover">
    
      <tr>
        <td><input type="text" name="equivalente2" id="equivalente2" value="'.$equivalente.'" hidden="">Asignatura que es correlativa con :<br>'.$equivalenteNombre.'</td>

      </tr>
    </table>
    </div>';

	

 





 ?>