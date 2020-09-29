
<?php 
	require_once "../../../libreriasConexion/conexionPagina.php";
  $conexion=conexion();


	$idgaleria=$_POST['idgaleria'];
	

	  $sql="SELECT * FROM `galeria` WHERE `idgaleria`='$idgaleria'";
       
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

          $datos=$ver[0]."||".
                $ver[1]."||".
               $ver[2]."||".
               $ver[3];

         }

	echo $datos;

 ?>