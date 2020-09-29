 <?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idPlan=$_POST['idPlan'];
	
	$datos="";
	$sql="SELECT * FROM `institucionplan` WHERE `idPlan`='$idPlan'";

				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3];

				}


	echo $datos;

 ?>