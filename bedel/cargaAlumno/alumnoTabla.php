
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


        <svg class="bi bi-person-plus-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
        <path fill-rule="evenodd" d="M13 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/>
      </svg>





      </button>
    </caption>

<div class="table-responsive">
    <table class="table table-secondary  table-hover">
    
      <tr>
        <td>NOMBRE DEL ALUMNO</td>
        <td>D.N.I DEL ALUMNO</td>
        
        <td>Editar</td>
        <td>Eliminar</td>
        <td>Asistencia</td>
        <td>Notas</td>
      </tr>

      <?php 





      if ((isset($_SESSION['BuscarCurso'])) && (isset($_SESSION['BuscarValor']))) {


         $idpC=$_SESSION['BuscarCurso'];
             $_SESSION['BuscarCurso']=$idpC;

        $idp=$_SESSION['BuscarValor'];
             $_SESSION['BuscarValor']=$idp;


       if ($idpC==="0") {
         $sql="SELECT * FROM `datosalumnos` WHERE `nombreAlumnos`LIKE '%$idp%' or `dniAlumnos`LIKE '%$idp%' ORDER BY `nombreAlumnos`";
       }else{


        $sql="SELECT * FROM `datosalumnos` WHERE (`idPlan`= '$idpC') AND (`nombreAlumnos`LIKE '%$idp%' or `dniAlumnos`LIKE '%$idp%') ORDER BY `nombreAlumnos`";

       }

        


     
      }else{


        if(isset($_SESSION['BuscarValor'])){


            $idp=$_SESSION['BuscarValor'];
             $_SESSION['BuscarValor']=$idp;
          
            $sql="SELECT * FROM `datosalumnos` WHERE `nombreAlumnos`LIKE '%$idp%' or `dniAlumnos`LIKE '%$idp%' ORDER BY `nombreAlumnos`";


          }else{


            $sql="SELECT * FROM `datosalumnos`  ORDER BY `nombreAlumnos`";
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



        <svg class="bi bi-paperclip" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
      </svg>









            
          </button></td>
        <td><?php echo $ver[2] ?></td>


        
  
        <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicionAlumno" onclick="agregaformALUAlumno('<?php echo $datos ?>')">



            <svg class="bi bi-pencil-square" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg>







            
          </button>
        </td>
        <td>
          <button class="btn btn-danger glyphicon glyphicon-remove" 
          onclick="preguntarSiNoAlumno('<?php echo $ver[0] ?>')">


          <svg class="bi bi-trash-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
        </svg>








            
          </button>
        </td>
        <td>
          <button class="btn btn-info glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalAlumnoAsistencia" onclick="agregaformALUAlumnoAsistencia('<?php echo $ver[0] ?>')">



                <svg class="bi bi-clipboard" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
              </svg>












            
          </button>
        </td>
        <td>
          <button class="btn btn-success glyphicon glyphicon-remove" 
          onclick="menuCargaBedelNotas('<?php echo $datos ?>')">

          <svg class="bi bi-clipboard" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
          <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
        </svg>





            
          </button>
        </td>
      </tr>
      <?php 
    }


       ?>
    </table>
  </div>
 