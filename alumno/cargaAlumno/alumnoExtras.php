
<!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicionAlumno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos del Alumno</h4>
      </div>
      <div class="modal-body">

       
      

          <input type="text" hidden="" id="idAlumnosU" name="idAlumnosU">


          <label>Apellido y Nombre del alumno:</label>

          <input type="text" name="nombreAlumnosU" id="nombreAlumnosU" class="form-control input-sm" placeholder="Apellido y Nombre del Alumno" disabled>

          <label>DNI del alumno</label>
       
          <input type="text" name="dniAlumnosU" id="dniAlumnosU" class="form-control input-sm" placeholder="D.N.I. del Alumno" disabled>

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

          <input type="text" name="nLegajoAlumnoU" id="nLegajoAlumnoU" class="form-control input-sm" placeholder="N° legajo del Alumno" disabled>

             <label>Situacion del Legajo</label>

          <input type="text" name="legajoSituacionU" id="legajoSituacionU" class="form-control input-sm" placeholder="Situacion del legajo" disabled>


          <label>Observaciones</label>

          <input type="text" name="obserbacionGeneralU" id="obserbacionGeneralU" class="form-control input-sm" placeholder="Observaciones" disabled>
           <label>Pass</label>                


          <input type="text" name="passU" id="passU" class="form-control input-sm" placeholder="Contraseña">
              <label>Carrera</label>
           <select id='idplanU' name='idplanU' class='form-control input-sm' disabled>
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









<!-- asistencia -->


<div class="modal fade" id="modalAlumnoAsistencia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">TABLA DE INASISTENCIAS</h4>
      </div>
      <div class="modal-body">


          <input type="text" name="idAsistencia" id="idAsistencia" hidden="">
       
          <input type="text" name="idAlumnoAsistencia" id="idAlumnoAsistencia" hidden="">



      <dir id="tablaInasistenciaPorAlumno"></dir>
                   
       
  


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal">
        Cerrar
        </button>
       
      </div>
    </div>
  </div>
</div>





<!-- fin asistencia -->











<script type="text/javascript">


$('#tablaInasistenciaPorAlumno').load('cargaAlumno/alumnoTablaInasistencia.php');

    $(document).ready(function(){




        $('#actualizadatosAlumno').click(function(){
          actualizaDatosAlumnoAlumnoterR();
        });























    });






$("#dniAlumnos").keyup(function(){

  var dniAlumnos=document.getElementById('dniAlumnos').value;


      buscarDNIAlumnoNuevoAlumno(dniAlumnos);

        });





$("#idAsistencia").keyup(function(){

idAsistencia=document.getElementById('idAsistencia').value;

if (idAsistencia!=="") {

  $('#mesaje').html('<font color="#E74C3C">SE EDITARA EL REGISTRO SELECCIONADO</font>');
}else{

  $('#mesaje').html('<font color="#2E86C1">AGREGE UN NUEVO REGISTRO</font>');
}


});





</script>
