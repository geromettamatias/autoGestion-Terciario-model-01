<?php 

	require_once "../../../libreriasConexion/conexion.php";
	$conexion=conexion();
	$idAsig=$_POST['idAsig'];
	$diaHorario=$_POST['diaHorario'];
	$horarioI=$_POST['horarioI'];
    $horarioF=$_POST['horarioF'];
    $idPersonal=$_POST['idPersonal'];
    session_start();

   
    $idPlan=$_SESSION['idPlan'];  


    $idcurso=$_SESSION['idcurso'];

       



    $sql3="SELECT * FROM `institucionplan` WHERE `idPlan`='$idPlan'";

        $result3=mysqli_query($conexion,$sql3);
        while($ver=mysqli_fetch_row($result3)){ 
            $carrera=$ver[3];
        

        }


        $sql="INSERT INTO `datoscursohora`(`idhora`, `idPlan`, `idcurso`, `idAsig`, `carrera`, `diaHorario`, `horarioI`, `horarioF`, `idPersonal`) VALUES (null,'$idPlan','$idcurso','$idAsig','$carrera','$diaHorario','$horarioI','$horarioF','$idPersonal')";
        
        mysqli_query($conexion,$sql);



echo "1";



 ?>