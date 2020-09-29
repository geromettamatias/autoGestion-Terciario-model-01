
<?php 
  
  session_start();
  require_once "../../libreriasConexion/conexion.php";
  $conexion=conexion();

 ?>

 


    <h4><p style="color:#F4F6F6;"><mark>DATOS DEL ALUMNADO</mark></p></h4> 
<caption>
      <button class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#modalNuevoAlumno">
        Agregar nuevo 
        <span class="glyphicon glyphicon-plus"></span>
      </button>
    </caption>


    <table class="table table-secondary  table-hover">
    
      <tr>
        <td>NOMBRE DEL ALUMNO</td>
        <td>D.N.I DEL ALUMNO</td>
   
        <td>Editar</td>
        <td>Eliminar</td>
      </tr>

      <?php 





      if ((isset($_SESSION['BuscarCurso'])) && (isset($_SESSION['BuscarValor']))) {


         $idpC=$_SESSION['BuscarCurso'];
             $_SESSION['BuscarCurso']=$idpC;

        $idp=$_SESSION['BuscarValor'];
             $_SESSION['BuscarValor']=$idp;


       if ($idpC==="0") {
         $sql="SELECT * FROM `datosalumnos` WHERE `nombreAlumnos`LIKE '%$idp%' or `dniAlumnos`LIKE '%$idp%'";
       }else{


        $sql="SELECT * FROM `datosalumnos` WHERE (`idPlan`= '$idpC') AND (`nombreAlumnos`LIKE '%$idp%' or `dniAlumnos`LIKE '%$idp%') ";

       }

        


     
      }else{


        if(isset($_SESSION['BuscarValor'])){


            $idp=$_SESSION['BuscarValor'];
             $_SESSION['BuscarValor']=$idp;
          
            $sql="SELECT * FROM `datosalumnos` WHERE `nombreAlumnos`LIKE '%$idp%' or `dniAlumnos`LIKE '%$idp%'";


          }else{


            $sql="SELECT * FROM `datosalumnos`";
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
               $ver[12];
          
        
          
       ?>

      <tr>
        <td><button class="btn btn-success glyphicon glyphicon-pencil"  onclick="InformacionformAlumnoTAlumnoTerr('<?php echo $datos ?>')"><?php echo $ver[1] ?>
            
          </button></td>
        <td><?php echo $ver[2] ?></td>


        
  
        <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicionAlumno" onclick="agregaformALUAlumno('<?php echo $datos ?>')">
            
          </button>
        </td>
        <td>
          <button class="btn btn-danger glyphicon glyphicon-remove" 
          onclick="preguntarSiNoAlumno('<?php echo $ver[0] ?>')">
            
          </button>
        </td>
      </tr>
      <?php 
    }


       ?>
    </table>
 