 <?php 
	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idhora=$_POST['idhora'];
	
	$datos="";
	$sql="SELECT * FROM `datoscursohora` WHERE `idhora`='$idhora'";

				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
						   $ver[4]."||".
						   $ver[5]."||".
						   $ver[6]."||".
						   $ver[7]."||".
						   $ver[8];

				}


	echo $datos;

 ?>