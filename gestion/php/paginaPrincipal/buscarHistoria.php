
<?php 
	require_once "../../../libreriasConexion/conexionPagina.php";
  $conexion=conexion();


	$idhistoria=$_POST['idhistoria'];
	

	  $sql="SELECT * FROM `historia` WHERE `idhistoria`='$idhistoria'";
       
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

          $datosF=$ver[0]."||".
                  $ver[1]."||".
               $ver[2];

         }

	echo $datosF;

 ?>






   
