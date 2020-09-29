 <?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	
  session_start();


  $idAsigC=$_POST['idAsigC'];

  $_SESSION['idAsigC']=$idAsigC;

	

$r="";
$plan="";


	$datos="";
	$sql="SELECT * FROM `institucionplanasignatura` WHERE `idAsig`='$idAsigC'";

				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$plan=$ver[2];

			


$r.='<input type="text" name="idasig3" id="idasig3" value="'.$ver[0].'" hidden="">
        <input type="text" name="idPlan3" id="idPlan3" value="'.$ver[2].'" hidden="">
        <input type="text"  id="idInstitucion3" name="idInstitucion3" value="'.$ver[1].'" hidden="">
        <input type="text"  id="asignaturaCo1" name="asignaturaCo1" value="'.$ver[4].'" class="form-control input-sm" disabled>';


}


 $r.="<select id='asignaturaCo2' name='asignaturaCo2' class='form-control input-sm'>
                  <option value='0'>Seleccione un Orientación</option>";

   

  $sql7="SELECT * FROM `institucionplanasignatura` WHERE `idPlan`='$plan'";

  $result7=mysqli_query($conexion,$sql7);
  while ($ver=mysqli_fetch_row($result7)) {

   $r.="<option value='".$ver[0]."'>".$ver[4]."</option>";
                  
        $id=$ver[0];
        }





    $r.="</select>";



	echo $r;











 ?>