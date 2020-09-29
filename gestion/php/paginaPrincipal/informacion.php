<?php 
	class libros
	{
		private $conexion;
		public function __construct()
		{
			require_once('conexion.php');
			$this->conexion= new conexion();
			$this->conexion->conectar();
		}



		
		function guardar($idinformacion,$informacionDatos,$informacionTitulo,$ruta)
		{

			$sql= "UPDATE `informacion` SET `datos`='$informacionDatos',`fotos`='$ruta',`titulo`='$informacionTitulo' WHERE `idinformacion`='$idinformacion'";
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