<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
    $idhora=$_POST['idhora'];
	$idAsig=$_POST['idAsig'];
	$diaHorario=$_POST['diaHorario'];
	$horarioI=$_POST['horarioI'];
    $horarioF=$_POST['horarioF'];
    $idPersonal=$_POST['idPersonal'];

       

        $sql="UPDATE `datoscursohora` SET `diaHorario`='$diaHorario',`horarioI`='$horarioI',`horarioF`='$horarioF',`idPersonal`='$idPersonal' WHERE `idhora`='$idhora'";
        
        mysqli_query($conexion,$sql);



echo "1";



 ?>