
<?php 
  session_start();
  require_once  "../../libreriasConexion/conexion.php";
 $conexion=conexion();

  

 ?>

 

<div id="conteiner">
<div class="row">
  <div class="col-sm-12"><p>



    <h3><p style="color:#F4F6F6;"><mark>INSC. ALUMNO</mark></p></h3>
    <table class="table table-secondary  table-hover">
    
      <tr>
        <td>NOMBRE DEL ALUMNO</td>
        <td>D.N.I DEL ALUMNO</td>
        <td>CARRERA</td>
        <td>Agregar</td>
        <td>Editar</td>
        <td>Eliminar</td>
      </tr>

      <?php 

       


     


          if ((isset($_SESSION['curso'])) && (isset($_SESSION['idPlan']))) {


         $idPlan=$_SESSION['idPlan'];
             $_SESSION['idPlan']=$idPlan;

        $idp=$_SESSION['curso'];
             $_SESSION['curso']=$idp;


       if ($idPlan==="0") {
         $sql="SELECT * FROM `preinsdatosalumnos` WHERE `nombreAlumnos`LIKE '%$idp%' or `dniAlumnos`LIKE '%$idp%'";
       }else{


        $sql="SELECT * FROM `preinsdatosalumnos` WHERE (`idPlan`= '$idPlan') AND (`nombreAlumnos`LIKE '%$idp%' or `dniAlumnos`LIKE '%$idp%') ";

       }

        


     
      }else{


        if(isset($_SESSION['curso'])){


            $idp=$_SESSION['curso'];
             $_SESSION['curso']=$idp;
          
            $sql="SELECT * FROM `preinsdatosalumnos` WHERE `nombreAlumnos`LIKE '%$idp%' or `dniAlumnos`LIKE '%$idp%'";


          }else{


            $sql="SELECT * FROM `preinsdatosalumnos`";
          }
           }  



                

        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

          

            $datos=$ver[0]."||".
               $ver[1]."||".
               $ver[2]."||".
               $ver[3]."||".
               $ver[4]."||".
               $ver[5]."||".
               $ver[6]."||".
               $ver[7]."||".
               $ver[8]."||".
               $ver[9]."||".
               $ver[10]."||".
               $ver[11]."||".
               $ver[12]."||".
               $ver[13]."||".
               $ver[14];


          $idAlumno=$ver[0];
          $nombre=$ver[1];
          $dni=$ver[2];
          $idPlan=$ver[14];
       




       $sql1="SELECT * FROM `institucionplan` WHERE `idPlan`='$idPlan'";

        $result1=mysqli_query($conexion,$sql1);
        while($ver=mysqli_fetch_row($result1)){ 

          

            $carrera=$ver[3];
          }



            $datos.="||".
               $carrera;

          
        
          
       ?>

      <tr>
        <td><button class="btn btn-success glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalInformacionAlumno" onclick="InformacionformAlumnopa('<?php echo $datos ?>')"><?php echo $nombre ?>
            
          </button></td>
        <td><?php echo $dni ?></td>

        <td><?php echo $carrera ?></td>


          <td>
          
          <button class="btn btn-info glyphicon glyphicon-pencil" onclick="preguntarSiagregartpa('<?php echo $datos; ?>')">
          </button>
        
        

        </td>

        
        
  
        <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicionPreAlumno" onclick="agregaformALUtotalEEEpa('<?php echo $datos ?>')">
            
          </button>
        </td>
        <td>
          <button class="btn btn-danger glyphicon glyphicon-remove" 
          onclick="preguntarSiNopa('<?php echo $idAlumno ?>')">
            
          </button>
        </td>
      </tr>
      <?php 
    }


       ?>
    </table>
  </p></div>
</div>
</div>
