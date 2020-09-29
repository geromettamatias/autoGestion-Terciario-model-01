
<?php 
	require_once "../../../libreriasConexion/conexionPagina.php";
  $conexion=conexion();


	$iddidactica=$_POST['iddidactica'];
	

	  $sql="SELECT * FROM `didactica` WHERE `iddidactica`='$iddidactica'";
       
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

          $datos=$ver[0]."||".
                $ver[1]."||".
               $ver[2];

         }

	echo $datos;

 ?>