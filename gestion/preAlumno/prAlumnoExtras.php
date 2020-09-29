

<!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicionPreAlumno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos del Alumno</h4>
      </div>
      <div class="modal-body">





         <div id="cursoAlumnosUpa"></div><br>





       

      

          <input type="text" hidden="" id="idAlumnosUpa" name="idAlumnosUpa">

      

          <br><b><u>LEGAJO</u></b><br><br>

          <label>N° Legajo del alumno</label>

          <input type="text" name="nLegajoAlumnoUpa" id="nLegajoAlumnoUpa" class="form-control input-sm" placeholder="N° legajo del Alumno">

             <label>Situacion del Legajo</label>

          <input type="text" name="legajoSituacionUpa" id="legajoSituacionUpa" class="form-control input-sm" placeholder="Situacion del legajo">

          <br><br><b><u>DATOS QUE SE REGISTRAN</u></b><br><br>


          <label>Apellido y Nombre del alumno:</label>

          <input type="text" name="nombreAlumnosUpa" id="nombreAlumnosUpa" class="form-control input-sm" placeholder="Apellido y Nombre del Alumno">

          <label>DNI del alumno</label>
       
          <input type="text" name="dniAlumnosUpa" id="dniAlumnosUpa" class="form-control input-sm" placeholder="D.N.I. del Alumno">

           <label>Cuil del alumno</label>
      
          <input type="text" name="cuilAlumnosUpa" id="cuilAlumnosUpa" class="form-control input-sm" placeholder="Cuil del Alumno">

          <label>Domicilio del alumno:</label>
          
          <input type="text" name="domicilioAlumnosUpa" id="domicilioAlumnosUpa" class="form-control input-sm" placeholder="Domicilio del Alumno">

             <label>Email del alumno</label>

          <input type="text" name="emailAlumnosUpa" id="emailAlumnosUpa" class="form-control input-sm" placeholder="Email del Alumno">

          <label>N° telefono del alumno</label>

          <input type="text" name="telefonoAlumnosUpa" id="telefonoAlumnosUpa" class="form-control input-sm" placeholder="Telefono del Alumno">

          <label>Problemas o discapacidad del alumno</label>

          <input type="text" name="discapasidadAlumnosUpa" id="discapasidadAlumnosUpa" class="form-control input-sm" placeholder="Discapacidad del Alumno">

          

        

          <label>Observaciones</label>

          <input type="text" name="obserbacionGeneralUpa" id="obserbacionGeneralUpa" class="form-control input-sm" placeholder="Observaciones">

           <label>Pass</label>

          <input type="text" name="passLoginUpa" id="passLoginUpa" class="form-control input-sm" placeholder="Observaciones">

          <label>Situación Alta</label>

          <input type="text" name="situacionAltaUpa" id="situacionAltaUpa" class="form-control input-sm" placeholder="Observaciones">

          <label>Observación Alta</label>

          <input type="text" name="obserbacionAltaUpa" id="obserbacionAltaUpa" class="form-control input-sm" placeholder="Observaciones">

           <label>Carrera</label>

         
           <select id='idPlanU' name='idPlanU' class='form-control input-sm'>
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
        <button type="button" class="btn btn-warning btn-lg btn-block" id="actualizadatospa" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>


</p>

<script type="text/javascript">
    $(document).ready(function(){



        $('#actualizadatospa').click(function(){
          actualizaDatosAlumnototal1pa();
        });

     

    });






$("#dniAlumnospa").keyup(function(){

  var dniAlumnospa=document.getElementById('dniAlumnospa').value;


      buscarDNIAlumnoNuevopa(dniAlumnospa);

        });





$("#especialidadAlumnoPREtt").change(function(){




  var lanAñoAlumnoPRET2=$('#lanAñoAlumnoPRET2').val();
  var especialidadAlumnoPRE2=$('#especialidadAlumnoPRE2').val();

    // detener todo    return false;


  if ((lanAñoAlumnoPRET2!=="0") && (especialidadAlumnoPRE2!=="0")) {

    cursobuscarTotal2(lanAñoAlumnoPRET2,especialidadAlumnoPRE2);

  }
 


 });


$("#lanAñoAlumnoPRET2").change(function(){




  var lanAñoAlumnoPRET2=$('#lanAñoAlumnoPRET2').val();
  var especialidadAlumnoPRE2=$('#especialidadAlumnoPRE2').val();

    // detener todo    return false;


  if ((lanAñoAlumnoPRET2!=="0") && (especialidadAlumnoPRE2!=="0")) {

    cursobuscarTotal2(lanAñoAlumnoPRET2,especialidadAlumnoPRE2);

  }

        });




</script>









