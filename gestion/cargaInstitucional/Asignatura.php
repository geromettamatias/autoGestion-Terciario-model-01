
<?php 
  session_start();
  require_once "../../libreriasConexion/conexion.php";
  $conexion=conexion();



 ?>

 
<div class="row">
  <div class="col-sm-12"><p>
    
                  <button type="button" class="btn btn-info btn-block" onclick='menuPrincipal();'>REGRESAR <span class="badge badge-light"> MENU PRINCIPAL </span></button>
                  <button type="button" class="btn btn-info btn-block" onclick='menuCargaInstitucion();'>REGRESAR <span class="badge badge-light"> ATRAS </span></button><br>


<table class="table table-secondary  table-hover">
    
      <tr>
        <td>CUE</td>
        <td>N° RES</td>
        <td>CARRERA</td>
      </tr>
      <tr>
        <?php 

        if(isset($_SESSION['idPlan'])){

        $idPlan=$_SESSION['idPlan'];

        $_SESSION['idPlan']=$idPlan;
        

        $sql3="SELECT * FROM `institucionplan`";

        $result3=mysqli_query($conexion,$sql3);
        while($ver=mysqli_fetch_row($result3)){

          if ($ver[0]=="$idPlan") {
            
         

               

          ?>

        <td><?php echo $ver[1] ?></td>
        <td><?php echo $ver[2] ?></td>
        <td><?php echo $ver[3] ?></td>

        <?php

            }  }  }

          ?>
      </tr>
</table>


       <h3><p style="color:#F4F6F6;"><mark>Institución</mark></p></h3>

<caption><button class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#modalNuevoPlanAsignatura">Agregar</button>

    </caption>


    <table class="table table-secondary  table-hover">
    
      <tr>
        <td>Año</td>
        <td>Nombre</td>
        <td>Duración</td>
        <td>C.hora</td>
        <td>Correlativas</td>
        <td>Edi</td>
        <td>Elim</td>
      </tr>

      <?php 





      if(isset($_SESSION['idPlan'])){


        $sql2="SELECT * FROM `institucionplanasignatura`";

        $Primer="";
        $Segundo="";
        $Tercero="";
        $Cuarto="";
        $Quinto="";
 

        $result2=mysqli_query($conexion,$sql2);
        while($ver=mysqli_fetch_row($result2)){ 

     
        
      
          $datos=$ver[0]."||".
               $ver[1]."||".
               $ver[2]."||".
               $ver[3]."||".
               $ver[4]."||".
               $ver[5]."||".
               $ver[6];


       if ($ver[2]==$idPlan) {         

          if ($ver[3]==="1er AÑO") {
            $Primer.='
      <tr>

        <td>'.$ver[3].'</td>
        <td>'.$ver[4].'</td>
        <td>'.$ver[5].'</td>
        <td>'.$ver[6].'</td>

        <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEditaPlanAsignatura" onclick="agregaAsignaturasPlanInstitucionAsignaturaEditarCorrelatica('.$ver[0].')">
            
          </button>
        </td>


         <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalNuevoPlanAsignaturaEditarTOO" onclick="agregaAsignaturasPlanInstitucionAsignaturaEditar('.$ver[0].')">
            
          </button>
        </td>

        <td>
          <button class="btn btn-danger glyphicon glyphicon-remove" 
          onclick="eliminarAsignaturaCursoTot('.$ver[0].')">
          </button>
        </td>

      </tr>';
          }
          if ($ver[3]==="2do AÑO") {
            $Segundo.='
      <tr>

        <td>'.$ver[3].'</td>
        <td>'.$ver[4].'</td>
        <td>'.$ver[5].'</td>
        <td>'.$ver[6].'</td>


          <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEditaPlanAsignatura" onclick="agregaAsignaturasPlanInstitucionAsignaturaEditarCorrelatica('.$ver[0].')">
            
          </button>
        </td>


         <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalNuevoPlanAsignaturaEditarTOO" onclick="agregaAsignaturasPlanInstitucionAsignaturaEditar('.$ver[0].')">
            
          </button>
        </td>

        <td>
          <button class="btn btn-danger glyphicon glyphicon-remove" 
          onclick="eliminarAsignaturaCursoTot('.$ver[0].')">
          </button>
        </td>

      </tr>';
          }
          if ($ver[3]==="3ro AÑO") {
            $Tercero.='
      <tr>

        <td>'.$ver[3].'</td>
        <td>'.$ver[4].'</td>
        <td>'.$ver[5].'</td>
        <td>'.$ver[6].'</td>

          <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEditaPlanAsignatura" onclick="agregaAsignaturasPlanInstitucionAsignaturaEditarCorrelatica('.$ver[0].')">
            
          </button>
        </td>


         <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalNuevoPlanAsignaturaEditarTOO" onclick="agregaAsignaturasPlanInstitucionAsignaturaEditar('.$ver[0].')">
            
          </button>
        </td>

        <td>
          <button class="btn btn-danger glyphicon glyphicon-remove" 
          onclick="eliminarAsignaturaCursoTot('.$ver[0].')">
          </button>
        </td>

      </tr>';
          }
          if ($ver[3]==="4to AÑO") {
            $Cuarto.='
      <tr>

        <td>'.$ver[3].'</td>
        <td>'.$ver[4].'</td>
        <td>'.$ver[5].'</td>
        <td>'.$ver[6].'</td>

          <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEditaPlanAsignatura" onclick="agregaAsignaturasPlanInstitucionAsignaturaEditarCorrelatica('.$ver[0].')">
            
          </button>
        </td>


         <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalNuevoPlanAsignaturaEditarTOO" onclick="agregaAsignaturasPlanInstitucionAsignaturaEditar('.$ver[0].')">
            
          </button>
        </td>

        <td>
          <button class="btn btn-danger glyphicon glyphicon-remove" 
          onclick="eliminarAsignaturaCursoTot('.$ver[0].')">
          </button>
        </td>

      </tr>';
    }
          if ($ver[3]==="5to AÑO") {


            $Quinto.='
      <tr>

        <td>'.$ver[3].'</td>
        <td>'.$ver[4].'</td>
        <td>'.$ver[5].'</td>
        <td>'.$ver[6].'</td>

          <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEditaPlanAsignatura" onclick="agregaAsignaturasPlanInstitucionAsignaturaEditarCorrelatica('.$ver[0].')">
            
          </button>
        </td>


         <td>
          <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalNuevoPlanAsignaturaEditarTOO" onclick="agregaAsignaturasPlanInstitucionAsignaturaEditar('.$ver[0].')">
            
          </button>
        </td>

        <td>
          <button class="btn btn-danger glyphicon glyphicon-remove" 
          onclick="eliminarAsignaturaCursoTot('.$ver[0].')">
          </button>
        </td>

      </tr>';
          }

      
     
    }}}



    echo $Primer.$Segundo.$Tercero.$Cuarto.$Quinto;


       ?>
    </table>
  </p></div>
</div>