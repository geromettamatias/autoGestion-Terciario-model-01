<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idcurso=$_POST['idcurso'];
	

    $sql="SELECT * FROM `datoscurso` WHERE `idcurso`='$idcurso'";
    $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

          $idPlan=$ver[2];

    }



$res='';
 

$res.="

<select id='idAsigD' name='idAsigD' class='form-control input-sm'>
                <option value='0'>Seleccione la Carrera</option>";
                    
               
                    $sql="SELECT * FROM `institucionplanasignatura` WHERE `idPlan`='$idPlan'";
                    $result=mysqli_query($conexion,$sql);
                      while ($ver=mysqli_fetch_row($result)) {
                     
                $res.="<option value='".$ver[0]."'>".$ver[4]."--".$ver[3]."</option>";
                    } 



$res.="</select>";



echo $res;



 ?>