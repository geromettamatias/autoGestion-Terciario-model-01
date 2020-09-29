

<?php
require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
$da1="";
$TotalHora=0;

$rad='';

$query = "SELECT * from `personalasignatura` ";


if(!empty($_POST['idPersonalasignatura'])) {
	
		$idPersonalasignatura=$_POST["idPersonalasignatura"];
		
		
		$query ="SELECT * FROM `datoscursohora` WHERE `idPersonal`='$idPersonalasignatura'";

		

}	

$result = mysqli_query($conexion, $query);

		if (!$result) {
		    die('Query Failed.');
		  }
		  


				while($ver=mysqli_fetch_row($result)){ 

					$idAsig=$ver[3];
					$idPlan=$ver[1];
					$dia=$ver[5];
					$hI=$ver[6];
					$hF=$ver[7];

			




				    $sql2 ="SELECT * FROM `institucionplanasignatura` WHERE `idAsig`='$idAsig'";

		
					   $result2=mysqli_query($conexion,$sql2);
				        while($ver=mysqli_fetch_row($result2)){ 

				          $nombre=$ver[4];
							$ciclo=$ver[3];
							
						
				           }


					$sql5="SELECT * FROM `institucionplan` WHERE `idPlan`='$idPlan'";

		
					   $result5=mysqli_query($conexion,$sql5);
				        while($ver=mysqli_fetch_row($result5)){ 

				          $carrera=$ver[3];
					
				           }

			

			$rad.='<table class="table table-dark  table-hover">'.$carrera.'
    
      <tr>
        <td>Curso</td>
        <td>Asignatura</td>
        <td>Dia</td>
        <td>H-I</td>
        <td>H-F</td>

        
      </tr>';

						  
		  	$rad.="<tr>
		  				<td>".$ciclo."</td>
		  				<td>".$nombre."</td>
		  				<td>".$dia."</td>
		  				<td>".$hI."</td>
		  				<td>".$hF."</td>



		  				


		  	</tr>";

		  }


		  $rad.='</table>';

		  

		  if (!empty($rad)) {
		  	echo $rad;
		  }else{
		  	echo "No hay resultados";
		  }

		   

?>

			