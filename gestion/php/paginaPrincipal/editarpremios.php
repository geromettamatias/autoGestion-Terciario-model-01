

<?php 
	require_once "../../../libreriasConexion/conexionPagina.php";
  $conexion=conexion();


		require_once("premios.php");



		$inst = new premiosT();
		$idpremio=$_POST['idpremio'];
		$premiosDatos=$_POST['premiosDatos'];
		$premiosTitulo=$_POST['premiosTitulo'];


if ($idpremio === "1"  &&  empty($_FILES["premiosFotos"]["name"])) {
					
$sql="UPDATE `premios` SET `premiosDatos`='$premiosDatos',`premiosTitulo`='$premiosTitulo' WHERE  `idpremios`='$idpremio'";
	echo $result=mysqli_query($conexion,$sql);

echo("Se actualizo solo los datos");



}else{
	


			if ($idpremio === "1") {




				



			  $sql="SELECT * FROM `premios` WHERE 1";
			       
			        $result=mysqli_query($conexion,$sql);
			        while($ver=mysqli_fetch_row($result)){ 

				
			$datos=$ver[2];

			}





unlink($datos);







			$nombre_imagen = uniqid()."-".$_FILES["premiosFotos"]["name"];
			$ruta = "img/".$nombre_imagen;



			if ($_FILES['premiosFotos']['type'] ==="image/jpg" || $_FILES['premiosFotos']['type']==="image/jpeg") {
				if(move_uploaded_file($_FILES["premiosFotos"]["tmp_name"], $ruta))
				{
					if($inst->guardarPremio($idpremio,$premiosDatos,$premiosTitulo,$ruta)){

						echo 'exito'."-".$_FILES["premiosFotos"]["type"]." ruta: ".$ruta ;
					}
					else{
						echo "No se Guardo los datos";
					}
				}
				else{
					echo "No se pudo subir el archivo";
				}
			}
			else{
				echo "La extension del archivo no es permitido";
			}
			
		}else{
			echo "Error";
		}





}
		
	

	
?>


