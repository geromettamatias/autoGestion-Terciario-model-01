<select id='idAnaliticoInscpCursoF' name='idAnaliticoInscpCursoF' class='form-control input-sm'>
                  <option value='0'>Seleccione la institución</option>


                <?php

                require_once  "../../../libreriasConexion/conexion.php";
                  $conexion=conexion();
                session_start();

                  $idper=$_SESSION['idPlanCarreraF'];
                  $_SESSION['idPlanCarreraF']=$idper;


                $sql="SELECT * FROM `datoscursohora` WHERE `idPlan`='$idper'";
                $result=mysqli_query($conexion,$sql);
                  while ($ver=mysqli_fetch_row($result)) {

                    $idhora=$ver[0];
                    $idcurso=$ver[2];
                    $idAsignatura=$ver[3];
                    $dia=$ver[5];
                    $hI=$ver[6];
                    $hF=$ver[7];



              $sql1="SELECT * FROM `datoscurso` WHERE `idcurso`='$idcurso'";
                $result11=mysqli_query($conexion,$sql1);
                  while ($ver=mysqli_fetch_row($result11)) {
                    $curso=$ver[5];
                   }
              $sql2="SELECT * FROM `institucionplanasignatura` WHERE `idAsig`='$idAsignatura'";
                $result22=mysqli_query($conexion,$sql2);
                  while ($ver=mysqli_fetch_row($result22)) {
                    $Asignatura=$ver[4];
                   }


                $mesaCreada=0;
                $sql23="SELECT * FROM `inscrpmesa` WHERE `idhora`='$idhora'";
                $result223=mysqli_query($conexion,$sql23);
                  while ($ver=mysqli_fetch_row($result223)) {
                    $mesaCreada=1;

                    $fe1=$ver[4];
                    $fe2=$ver[5];

                   }








                   if ($mesaCreada===1) {
                     
                 


                  ?>






               <option value='<?php echo $idhora ?>'><?php echo $curso; ?>--<?php echo $Asignatura; ?>--<?php echo "MESA".$fe1."/".$fe2; ?></option>';
                  

                  <?php 
                    }}

                       ?>
                </select>

