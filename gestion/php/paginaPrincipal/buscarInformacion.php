
<?php 
	require_once "../../../libreriasConexion/conexionPagina.php";
  $conexion=conexion();


	$idinformacion=$_POST['idinformacion'];
	

	  $sql="SELECT * FROM `informacion` WHERE `idinformacion`='$idinformacion'";
       
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

          $datos=$ver[0]."||".
                $ver[1]."||".
               $ver[2]."||".
               $ver[3];

         }

	echo $datos;

 ?>