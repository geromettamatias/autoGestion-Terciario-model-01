<?php 
	class premiosT
	{
		private $conexion;
		public function __construct()
		{
			require_once('conexion.php');
			$this->conexion= new conexion();
			$this->conexion->conectar();
		}



		
		function guardarPremio($idpremio,$premiosDatos,$premiosTitulo,$ruta)
		{

			$sql= "UPDATE `premios` SET `idpremios`='$idpremio',`premiosDatos`='$premiosDatos',`premiosFotos`='$ruta',`premiosTitulo`='$premiosTitulo' WHERE `idpremios`='$idpremio'";
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