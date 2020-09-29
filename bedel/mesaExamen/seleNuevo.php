
                  <select id='idhoraFinal' name='idhoraFinal' class='form-control input-sm'>
                  <option value='0'>Seleccione la institución</option>


                <?php

                session_start();

                require_once  "../../libreriasConexion/conexion.php";
                  $conexion=conexion();


                 if (isset($_SESSION['idhoraFinal2'])){

                    $idhoraFinal2=$_SESSION['idhoraFinal2'];
                     $_SESSION['idhoraFinal2']=$idhoraFinal2;
                 
                 $sql="SELECT * FROM `datoscursohora` WHERE `idPlan`='$idhoraFinal2'";
                }else{
                   $sql="SELECT * FROM `datoscursohora`";
                }

               
                $result=mysqli_query($conexion,$sql);
                  while ($ver=mysqli_fetch_row($result)) {

                      $idHoras=$ver[0];
                      $idPlan=$ver[1];
                      $idCurso=$ver[2];
                      $idAsig=$ver[3];

                     $sql1="SELECT * FROM `datoscurso` WHERE `idcurso`='$idCurso'";
                $result1=mysqli_query($conexion,$sql1);
                  while ($ver=mysqli_fetch_row($result1)) {

                      $nombreCarrera=$ver[4];
                      $nombreCurso=$ver[5];

                  }

                    $sql11="SELECT * FROM `institucionplanasignatura` WHERE `idAsig`='$idAsig'";
                $result11=mysqli_query($conexion,$sql11);
                  while ($ver=mysqli_fetch_row($result11)) {

                      $asignatura=$ver[4];

                  }




                  ?>


                    <option value='<?php echo $idHoras ?>'><?php echo $nombreCarrera ?>--<?php echo $nombreCurso ?>--<?php echo $asignatura ?></option>';
                  

                  <?php 
                    }
                       ?>
                </select>