
<?php 
	require_once "../../../libreriasConexion/conexionPagina.php";
  $conexion=conexion();


		require_once("galeria.php");



		$inst = new galeria();
		$idgaleria=$_POST['idgaleria'];
		$galeriaDatos=$_POST['galeriaDatos'];
		$galeriaTitulo=$_POST['galeriaTitulo'];


if ($idgaleria === "1"  &&  empty($_FILES["galeriaFotos"]["name"])) {
					
$sql="UPDATE `galeria` SET `galeriaDatos`='$galeriaDatos',`galeriaTitulo`='$galeriaTitulo' WHERE  `idgaleria`='$idgaleria'";
	echo $result=mysqli_query($conexion,$sql);

echo("Se actualizo solo los datos");




}else{
	


			if ($idgaleria === "1") {




				



			  $sql="SELECT * from galeria where 1";
			       
			        $result=mysqli_query($conexion,$sql);
			        while($ver=mysqli_fetch_row($result)){ 

				
			$datos=$ver[2];

			}





unlink($datos);







			$nombre_imagen = uniqid()."-".$_FILES["galeriaFotos"]["name"];
			$ruta = "img/".$nombre_imagen;



			if ($_FILES['galeriaFotos']['type'] ==="image/jpg" || $_FILES['galeriaFotos']['type']==="image/jpeg") {
				if(move_uploaded_file($_FILES["galeriaFotos"]["tmp_name"], $ruta))
				{
					if($inst->guardarGaleria($idgaleria,$galeriaDatos,$galeriaTitulo,$ruta)){

						echo 'exito'."-".$_FILES["galeriaFotos"]["type"];
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