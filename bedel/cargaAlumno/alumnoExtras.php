
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

<br><br>

        <div class="form-group row">
        <label for="cantidadInasisAlumno" class="col-2 col-form-label">Mensaje</label>
        <div class="col-10"><div id="mesaje"></div>
            
      </div>
      </div>
         <div class="form-group row">
        <label for="cantidadInasisAlumno" class="col-2 col-form-label">Cantidad</label>
        <div class="col-10">
            <select id="cantidadInasisAlumno" name="cantidadInasisAlumno" class='form-control input-sm'>
                  <option value="0">Selecciona una opción</option>
                  <option value="1">1</option>
                  <option value="0.5">0.5</option>
                  <option value="0.25">0.25</option>
                </select>

                </div>
      </div>
       <div class="form-group row">
        <label for="fechaInasistAlumno" class="col-2 col-form-label">Fecha</label>
        <div class="col-10">
          <input class="form-control" type="date" value="2011-08-19" id="fechaInasistAlumno">
        </div>
      </div>

          <div class="form-group row">
        <label for="justificoInasisAlumno" class="col-2 col-form-label">Justifico</label>
        <div class="col-10">
            <select id="justificoInasisAlumno" name="justificoInasisAlumno" class='form-control input-sm'>
                  <option value="0">Selecciona una opción</option>
                  <option value="1">NO</option>
                  <option value="2">SI</option>
                  <option value="3">EN ESPERA</option>
                </select>

                </div>
      </div>


        <div class="form-group row">
        <label for="fechaInasistAlumno" class="col-2 col-form-label">BOTONES</label>
        <div class="col-10">
          
        <button type="button" class="btn btn-outline-danger"  id="guardarnuevoAlumnoAsistenciaBorrar">
        Borrar los Campos
        </button>

        <button type="button" class="btn btn-outline-primary"  id="guardarnuevoAlumnoAsistenciaGuardar">
        Guardar los Datos
        </button>



        </div>
      </div>



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





    $('#guardarnuevoAlumnoAsistenciaGuardar').click(function(){
          idAlumnoAsistencia=$('#idAlumnoAsistencia').val();
          idAsistencia=$('#idAsistencia').val();
          cantidadInasisAlumno=$('#cantidadInasisAlumno').val();
          fechaInasistAlumno=$('#fechaInasistAlumno').val();
          justificoInasisAlumno=$('#justificoInasisAlumno').val();


         
if (cantidadInasisAlumno==="0" || justificoInasisAlumno==="0" || fechaInasistAlumno==="") {


alertify
  .alert('ADMINISTRADOR','Los campos estan incompletos o vacío', function(){
    alertify.message('COMPLETE LOS CAMPOS');
  });







}else{

if (idAsistencia!=="") {

  editarDatosInasistencias(idAlumnoAsistencia,idAsistencia,cantidadInasisAlumno,fechaInasistAlumno,justificoInasisAlumno);
}else{

nuevosDatosInasistencias(idAlumnoAsistencia,idAsistencia,cantidadInasisAlumno,fechaInasistAlumno,justificoInasisAlumno);

}

}





});







        $('#guardarnuevoAlumnoAsistenciaBorrar').click(function(){
          borrarcampos();
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
