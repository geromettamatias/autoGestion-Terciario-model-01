<select id='idAnaliticoInscpCurso' name='idAnaliticoInscpCurso' class='form-control input-sm'>
                  <option value='0'>Seleccione la institución</option>


                <?php

                require_once  "../../../libreriasConexion/conexion.php";
                  $conexion=conexion();
                session_start();

                  $idper=$_SESSION['idPlanCarrera'];
                  $_SESSION['idPlanCarrera']=$idper;

                   $idAlum=$_SESSION['tablaInscripCursadoIdAlumno'];
                  $_SESSION['tablaInscripCursadoIdAlumno']=$idAlum;


                $sql="SELECT * FROM `datoscursohora` WHERE `idPlan`='$idper'";
                $result=mysqli_query($conexion,$sql);
                  while ($ver=mysqli_fetch_row($result)) {

                    $idhora=$ver[0];
                    $idcurso=$ver[2];
                    $idAsignatura=$ver[3];
                    $dia=$ver[5];
                    $hI=$ver[6];
                    $hF=$ver[7];

                    $idAlumno='';


            $sql41="SELECT * FROM `notasalumno` WHERE `idPlan`='$idper' AND `idAsignatura`='$idAsignatura'";
                $result41=mysqli_query($conexion,$sql41);
                  while ($ver=mysqli_fetch_row($result41)) {

                    $idAlumno=$ver[1];   
                    $notaRegular=$ver[4];
                    $notaFinal=$ver[5];

                  }



                  if ($idAlum===$idAlumno) {
                  
                  if ($notaRegular>=6) {
                    
                  }else{
                    if ($notaFinal>=6) {
                      
                    }else{









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



                  ?>


               <option value='<?php echo $idhora ?>'><?php echo $curso; ?>--<?php echo $Asignatura; ?>--<?php echo $dia.": ".$hI."/".$hF; ?></option>';
                  

                  <?php 
                    






                    }
                  }





                  }else{
                    
                 






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



                  ?>


               <option value='<?php echo $idhora ?>'><?php echo $curso; ?>--<?php echo $Asignatura; ?>--<?php echo $dia.": ".$hI."/".$hF; ?></option>';
                  

                  <?php 
                    } }
                       ?>
                </select>

