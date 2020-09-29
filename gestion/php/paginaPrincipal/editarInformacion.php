<?php 
	require_once "../../../libreriasConexion/conexionPagina.php";
  $conexion=conexion();


	require_once("informacion.php");
	$boton= $_POST['boton'];
	

	
	if ($boton==='guardar') {
		$inst = new libros();
		$idinformacion=$_POST['idinformacion'];
		$informacionDatos=$_POST['informacionDatos'];
		$informacionTitulo=$_POST['informacionTitulo'];

		
if ($idinformacion === "1"  &&  empty($_FILES["imagen"]["name"])) {
					
$sql="UPDATE `informacion` SET `datos`='$informacionDatos',`titulo`='$informacionTitulo' WHERE `idinformacion`='$idinformacion'";
	echo $result=mysqli_query($conexion,$sql);

echo("Se actualizo solo los datos");




}else{

			if ($idinformacion === "1") {





  $sql="SELECT * from informacion where 1";
       
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

	
$datos=$ver[2];

}





unlink($datos);









			$nombre_imagen = uniqid()."-".$_FILES["imagen"]["name"];
			$ruta = "img/".$nombre_imagen;



			if ($_FILES['imagen']['type'] ==="image/jpg" || $_FILES['imagen']['type']==="image/jpeg") {
				if(move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta))
				{
					if($inst->guardar($idinformacion,$informacionDatos,$informacionTitulo,$ruta)){

						echo 'exito'."-".$_FILES["imagen"]["type"];
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
		
	}

	
?>