 <?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	


	$idAsig=$_POST['idAsig'];


	$datos="";
	$sql="SELECT * FROM `institucionplanasignatura` WHERE `idAsig`='$idAsig'";

				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
						   $ver[4]."||".
						   $ver[5]."||".
						   $ver[6];

				}



	echo $datos;

 ?>