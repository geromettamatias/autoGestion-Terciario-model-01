 <?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idInstitucion=$_POST['idInstitucion'];
	
	$datos="";
	$sql="SELECT * FROM `institucion` WHERE `idInstitucion`='$idInstitucion'";

				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
						   $ver[4]."||".
						   $ver[5];

				}


	echo $datos;

 ?>