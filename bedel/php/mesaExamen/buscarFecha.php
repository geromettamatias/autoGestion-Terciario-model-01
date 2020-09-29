
<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();

	$situacionCursFinalU=$_POST['situacionCursFinalU'];
	$datos=0;


   $sql="SELECT * FROM `fechas` WHERE `inscp`='$situacionCursFinalU'";
            

   $result=mysqli_query($conexion,$sql);
     while($ver=mysqli_fetch_row($result)){ 

          

            $datos=1;


	}

echo $datos;
	

 ?>