
<div class="modal fade" id="modalNuevoAlumno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega nuevo Alumno</h4>
      </div>
      <div class="modal-body">
          <input type="text" name="nombreAlumnos" id="nombreAlumnos" class="form-control input-sm" placeholder="Apellido y Nombre del Alumno">
       
          <input type="text" name="dniAlumnos" id="dniAlumnos" class="form-control input-sm" placeholder="D.N.I. del Alumno">


          <div id="resultadoBusquedaDniAlumnoAgregar"></div>


      
          <input type="text" name="cuilAlumnos" id="cuilAlumnos" class="form-control input-sm" placeholder="Cuil del Alumno">
          
          <input type="text" name="domicilioAlumnos" id="domicilioAlumnos" class="form-control input-sm" placeholder="Domicilio del Alumno">

          <input type="text" name="emailAlumnos" id="emailAlumnos" class="form-control input-sm" placeholder="Email del Alumno">

          <input type="text" name="telefonoAlumnos" id="telefonoAlumnos" class="form-control input-sm" placeholder="Telefono del Alumno">

          <input type="text" name="discapasidadAlumnos" id="discapasidadAlumnos" class="form-control input-sm" placeholder="Discapacidad del Alumno">

   

          <input type="text" name="nLegajoAlumno" id="nLegajoAlumno" class="form-control input-sm" placeholder="N° legajo del Alumno">

          <input type="text" name="legajoSituacion" id="legajoSituacion" class="form-control input-sm" placeholder="Situacion del legajo">

     

          <input type="text" name="obserbacionGeneral" id="obserbacionGeneral" class="form-control input-sm" placeholder="Observaciones">

           <input type="text" name="pass" id="pass" class="form-control input-sm" placeholder="Contraseña">

           <select id='idplan' name='idplan' class='form-control input-sm'>
                  <option value='0'>Seleccione la institución</option>


                <?php

                require_once  "../../libreriasConexion/conexion.php";
                  $conexion=conexion();
                $sql="SELECT * FROM `institucionplan`";
                $result=mysqli_query($conexion,$sql);
                  while ($ver=mysqli_fetch_row($result)) {

                  ?>


                    <option value='<?php echo $ver[0] ?>'><?php echo $ver[3] ?></option>';
                  

                  <?php 
                    }
                       ?>
                </select>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal" id="guardarnuevoAlumno">
        Agregar
        </button>
       
      </div>
    </div>
  </div>
</div>

<!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicionAlumno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos del Alumno</h4>
      </div>
      <div class="modal-body">

       
      

          <input type="text" hidden="" id="idAlumnosU" name="idAlumnosU">


          <label>Apellido y Nombre del alumno:</label>

          <input type="text" name="nombreAlumnosU" id="nombreAlumnosU" class="form-control input-sm" placeholder="Apellido y Nombre del Alumno">

          <label>DNI del alumno</label>
       
          <input type="text" name="dniAlumnosU" id="dniAlumnosU" class="form-control input-sm" placeholder="D.N.I. del Alumno">

           <label>Cuil del alumno</label>
      
          <input type="text" name="cuilAlumnosU" id="cuilAlumnosU" class="form-control input-sm" placeholder="Cuil del Alumno">

          <label>Domicilio del alumno:</label>
          
          <input type="text" name="domicilioAlumnosU" id="domicilioAlumnosU" class="form-control input-sm" placeholder="Domicilio del Alumno">

             <label>Email del alumno</label>

          <input type="text" name="emailAlumnosU" id="emailAlumnosU" class="form-control input-sm" placeholder="Email del Alumno">

          <label>N° telefono del almno</label>

          <input type="text" name="telefonoAlumnosU" id="telefonoAlumnosU" class="form-control input-sm" placeholder="Telefono del Alumno">

          <label>Problemas o discapacidad del alumno</label>

          <input type="text" name="discapasidadAlumnosU" id="discapasidadAlumnosU" class="form-control input-sm" placeholder="Discapacidad del Alumno">


    

            

         <label>N° Legajo del alumno</label>

          <input type="text" name="nLegajoAlumnoU" id="nLegajoAlumnoU" class="form-control input-sm" placeholder="N° legajo del Alumno">

             <label>Situacion del Legajo</label>

          <input type="text" name="legajoSituacionU" id="legajoSituacionU" class="form-control input-sm" placeholder="Situacion del legajo">


          <label>Observaciones</label>

          <input type="text" name="obserbacionGeneralU" id="obserbacionGeneralU" class="form-control input-sm" placeholder="Observaciones">
           <label>Pass</label>


          <input type="text" name="passU" id="passU" class="form-control input-sm" placeholder="Contraseña">
              <label>Carrera</label>
           <select id='idplanU' name='idplanU' class='form-control input-sm'>
                  <option value='0'>Seleccione la institución</option>


                <?php

                require_once  "../../libreriasConexion/conexion.php";
                  $conexion=conexion();
                $sql="SELECT * FROM `institucionplan`";
                $result=mysqli_query($conexion,$sql);
                  while ($ver=mysqli_fetch_row($result)) {

                  ?>


                    <option value='<?php echo $ver[0] ?>'><?php echo $ver[3] ?></option>';
                  

                  <?php 
                    }
                       ?>

            </select>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning btn-lg btn-block" id="actualizadatosAlumno" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>






















<script type="text/javascript">
    $(document).ready(function(){


        $('#guardarnuevoAlumno').click(function(){
          nombreAlumnos=$('#nombreAlumnos').val();
          dniAlumnos=$('#dniAlumnos').val();
          cuilAlumnos=$('#cuilAlumnos').val();
          domicilioAlumnos=$('#domicilioAlumnos').val();
          emailAlumnos=$('#emailAlumnos').val();
          telefonoAlumnos=$('#telefonoAlumnos').val();
          discapasidadAlumnos=$('#discapasidadAlumnos').val();
          nLegajoAlumno=$('#nLegajoAlumno').val();
          legajoSituacion=$('#legajoSituacion').val();     
          obserbacionGeneral=$('#obserbacionGeneral').val();
          pass=$('#pass').val();   
          idplan=$('#idplan').val();




agregardatosAlumnosAlumnoTER(nombreAlumnos,dniAlumnos,cuilAlumnos,domicilioAlumnos,emailAlumnos,telefonoAlumnos,discapasidadAlumnos,nLegajoAlumno,legajoSituacion,obserbacionGeneral,pass,idplan);




LimpiezaAlumnoTotalAlumno();
$('#resultadoBusquedaDniAlumnoAgregar').html("");


});



        $('#actualizadatosAlumno').click(function(){
          actualizaDatosAlumnoAlumnoterR();
        });

    });






$("#dniAlumnos").keyup(function(){

  var dniAlumnos=document.getElementById('dniAlumnos').value;


      buscarDNIAlumnoNuevoAlumno(dniAlumnos);

        });




</script>
