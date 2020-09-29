<?php 
  
  require_once "../../libreriasConexion/conexion.php";
  $conexion=conexion();

  session_start();




 ?>

<div id="conteiner">
<div class="row">
  <div class="col-sm-12">

    


    <table class="table table-secondary  table-hover">
    
      <tr>
        <td>LUNES</td>
        <td>MARTES</td>
        <td>MIERCOLES</td>
        <td>JUEVES</td>
        <td>VIERNES</td>
        <td>SABADO</td>
      </tr>

      <?php 

        if(isset($_SESSION['valorhora'])){

          $valorhora=$_SESSION['valorhora'];  
          $_SESSION['valorhora']=$valorhora;

          $LUNES='';
          $MARTES='';
          $MIERCOLES='';
          $JUEVES='';
          $VIERNES='';
          $SABADO='';

        
        if($valorhora!=="0"){
     
          $idhora="";
          $Asignatura="";
          $dias="";

       

            $sql1="SELECT * FROM `datoscursohora` WHERE `idcurso`='$valorhora' ORDER BY `horarioI`";
         
          

        $result1=mysqli_query($conexion,$sql1);
        while($ver=mysqli_fetch_row($result1)){ 

          $datos=$ver[0]."||".
               $ver[1]."||".
               $ver[2]."||".
               $ver[3]."||".
               $ver[4]."||".
               $ver[5]."||".
               $ver[6]."||".
               $ver[7]."||".
               $ver[8];


          $idhora=$ver[0];
          $idAsigTO=$ver[3];
          $idprofesor=$ver[8];
          $dias=$ver[5];
          $horaI=$ver[6];
          $horaF=$ver[7];
          $carrera=$ver[4];


                 $sql3="SELECT * FROM `institucionplanasignatura` WHERE `idAsig`='$idAsigTO'";
         
          

                    $result3=mysqli_query($conexion,$sql3);
                    while($ver=mysqli_fetch_row($result3)){ 

                      $Asignatura=$ver[4];

                        }

                 $sql31="SELECT * FROM `datospersonal` WHERE `idPersonal`='$idprofesor'";
         
          

                    $result31=mysqli_query($conexion,$sql31);
                    while($ver=mysqli_fetch_row($result31)){ 

                      $profesor=$ver[1];

                        }


            if ($dias==="LUNES") {
              
              $LUNES.=$Asignatura.' <br>Horarios<br>'.$horaI.' <br>'.$horaF.' <br>'.$profesor."<br>--------<br>";
            }
            if ($dias==="MARTES") {
              
              $MARTES.=$Asignatura.' <br>Horarios<br>'.$horaI.' <br>'.$horaF.' <br>'.$profesor."<br>--------<br>";
            }
            if ($dias==="MIERCOLES") {
              
              $MIERCOLES.=$Asignatura.' <br>Horarios<br>'.$horaI.' <br>'.$horaF.' <br>'.$profesor."<br>--------<br>";
            }
            if ($dias==="JUEVES") {
              
              $JUEVES.=$Asignatura.' <br>Horarios<br>'.$horaI.' <br>'.$horaF.' <br>'.$profesor."<br>--------<br>";
            }
            if ($dias==="VIERNES") {
              
              $VIERNES.=$Asignatura.' <br>Horarios<br>'.$horaI.' <br>'.$horaF.' <br>'.$profesor."<br>--------<br>";
            }
            if ($dias==="SABADO") {
              
              $SABADO.=$Asignatura.' <br>Horarios<br>'.$horaI.' <br>'.$horaF.' <br>'.$profesor."<br>--------<br>";
            }


      



  }
       








       ?>
   <tr>
        <td><?php echo $LUNES ?></td>
        <td><?php echo $MARTES ?></td>
        <td><?php echo $MIERCOLES ?></td>
        <td><?php echo $JUEVES ?></td>
        <td><?php echo $VIERNES ?></td>
        <td><?php echo $SABADO ?></td>
        
        
       
      </tr>

<?php 
  }}
       ?>
    </table>
</div></div></div>
