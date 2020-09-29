<?php 
	class galeria
	{
		private $conexion;
		public function __construct()
		{
			require_once('conexion.php');
			$this->conexion= new conexion();
			$this->conexion->conectar();
		}



		
		function guardarGaleria($idgaleria,$galeriaDatos,$galeriaTitulo,$ruta)
		{

			$sql= "UPDATE `galeria` SET `galeriaDatos`='$galeriaDatos',`galeriaFoto`='$ruta',`galeriaTitulo`='$galeriaTitulo' WHERE `idgaleria`='$idgaleria'";
			//$sql="UPDATE libros SET isbn_libro = '$isbn',titulo_libro='$titulo',autor_libro='$autor',publicacion_libro='$añop', paginas_libro='$nrop', ediccion_libro='$ediccion',idioma_libro='$idioma' WHERE id_libro='$idlib'";
			if($this->conexion->conexion->query($sql)){
				return true;
			}
			else{
				return false;
			}
			$this->conexion->cerrar();
		}

	}

	
	
?>

