<?php

require_once "../../libreriasConexion/conexion.php";
	$conexion=conexion();

	$dniAlumnosRE=$_POST['dniAlumnosRE'];
	$cuilAlumnosRE=$_POST['cuilAlumnosRE'];
	

$datos="1";
$CONTA=0;
$query = "SELECT * FROM `datosalumnos` WHERE `dniAlumnos`='$dniAlumnosRE' and `cuilAlumnos`='$cuilAlumnosRE'";

	

 $result=mysqli_query($conexion,$query);
        while($ver=mysqli_fetch_row($result)){ 

          	$CONTA=1;

            $datos="<b><u>DATOS DEL ALUMNO</u></b><br>
            <br><b><u>NOMBRE Y APELLIDO:</u></b>".$ver[1]."
			<br><b><u>DNI:</u></b>".$ver[2]."
			<br><b><u>CUIL:</u></b>'".$ver[3]."
			<br><br><b><u>PASS:</u></b>".$ver[11];


}


if ($CONTA===1) {
	echo $datos;
}else{

	echo "NO EXISTE";
}





		   
?>
