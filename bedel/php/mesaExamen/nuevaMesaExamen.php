<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idhoraFinal=$_POST['idhoraFinal'];
	$fech1=$_POST['fech1'];
	$fech2=$_POST['fech2'];
	$prof1=$_POST['prof1'];
	$prof2=$_POST['prof2'];


	 $sql1="SELECT * FROM `datoscursohora` WHERE `idhora`='$idhoraFinal'";
        $result1=mysqli_query($conexion,$sql1);
        while($ver=mysqli_fetch_row($result1)){ 

          

            $idcurso=$ver[2];

        }



	$sql="INSERT INTO `inscrpmesa`(`idMesa`, `idhora`, `idProfesS1`, `idProfesS2`, `fec1`, `fec2`, `idcurso`) VALUES (null,'$idhoraFinal','$prof1','$prof2','$fech1','$fech2','$idcurso')";
	echo $result=mysqli_query($conexion,$sql);


	

 ?>