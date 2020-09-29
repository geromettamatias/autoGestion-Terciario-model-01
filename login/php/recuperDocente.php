<?php

require_once "../../libreriasConexion/conexion.php";
	$conexion=conexion();

	$dnidocenteRE=$_POST['dnidocenteRE'];
	$nTituloDocenteRECU=$_POST['nTituloDocenteRECU'];




$datos="1";
$CONTA=0;
$query = "SELECT * FROM `datospersonal` WHERE `dniDocente`='$dnidocenteRE' and `nTituloDocente`='$nTituloDocenteRECU'";

	

 $result=mysqli_query($conexion,$query);
        while($ver=mysqli_fetch_row($result)){ 

          	$CONTA=1;

            $datos="<b><u>DATOS DEL ALUMNO</u></b><br>
            <br><b><u>NOMBRE Y APELLIDO:</u></b>".$ver[1]."
			<br><b><u>DNI:</u></b>".$ver[2]."
			<br><br><b><u>PASS:</u></b>".$ver[9];


}


if ($CONTA===1) {
	echo $datos;
}else{

	echo "NO EXISTE";
}





		   
?>
