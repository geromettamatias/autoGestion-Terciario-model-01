 <select id='idPlanPRE' name='idPlanPRE' class='form-control'>
                 <option value='0'>Seleccione una Orientación</option>

<?php

                require_once  "../../libreriasConexion/conexion.php";
                  $conexion=conexion();


               
$sql="SELECT * FROM `institucionplan`";
          
          $result=mysqli_query($conexion,$sql);
                  while ($ver=mysqli_fetch_row($result)) {

                                     
                       ?>

                       <option value='<?php echo $ver[0]; ?>'><?php echo $ver[3] ?></option>

                       

              <?php
                
                    }
                       ?>

</select>