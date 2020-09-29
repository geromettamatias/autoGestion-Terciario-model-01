
<?php 
	require_once "../../../libreriasConexion/conexionPagina.php";
  $conexion=conexion();


	$iddatos=$_POST['iddatos'];
	

	  $sql="SELECT * FROM `datos` WHERE `iddatos`='$iddatos'";
       
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

          $datos=$ver[0]."||".
                $ver[1]."||".
               $ver[2];

         }

	echo $datos;

 ?>