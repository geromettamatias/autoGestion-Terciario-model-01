<!-- Agregar  -->
<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Datos de la Institución</h4>
      </div>
      <div class="modal-body">
          
          <label>CUE de la institución</label>
          <input type="text" name="cue" id="cue" class="form-control input-sm">
          <label>Nombre de la institución</label>
          <input type="text" name="nombre" id="nombre" class="form-control input-sm">

          <label>Domicilio de la institución</label>
          <input type="text" name="domicilio" id="domicilio" class="form-control input-sm">
          <label>Telefono de la institución</label>
          <input type="text" name="tel" id="tel" class="form-control input-sm">
          <label>Email de la institución</label>
          <input type="text" name="email" id="email" class="form-control input-sm">

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal" id="guardarnuevo">
        Agregar
        </button>
       
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
      <div class="modal-body">
          <input type="text" hidden="" id="idInstitucion" name="idInstitucion">
          

          <label>Nombre de la institución</label>
          <input type="text" name="nombreU" id="nombreU" class="form-control input-sm">

          <label>Domicilio de la institución</label>
          <input type="text" name="domicilioU" id="domicilioU" class="form-control input-sm">
          <label>Telefono de la institución</label>
          <input type="text" name="telU" id="telU" class="form-control input-sm">
          <label>Email de la institución</label>
          <input type="text" name="emailU" id="emailU" class="form-control input-sm">

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning btn-lg btn-block" id="actualizadatos" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>




<!-- Plan de estudio -->





<div class="modal fade" id="modalNuevoPlan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Plan de Estudio</h4>
      </div>
      <div class="modal-body">



        <select id='institucionPlan' name='institucionPlan' class='form-control input-sm'>
                  <option value='0'>Seleccione la institución</option>


                <?php

                require_once  "../../libreriasConexion/conexion.php";
                  $conexion=conexion();
                $sql="SELECT * FROM `institucion`";
                $result=mysqli_query($conexion,$sql);
                  while ($ver=mysqli_fetch_row($result)) {

                  ?>


                    <option value='<?php echo $ver[1] ?>'><?php echo $ver[1] ?></option>';
                  

                  <?php 
                    }
                       ?>
                </select>


              



          
          <label>N° Registro de la Carrera</label>
          <input type="text" name="reguisCarre" id="reguisCarre" class="form-control input-sm">

          <label>Nombre de la Carrera</label>
          <input type="text" name="nombreCarre" id="nombreCarre" class="form-control input-sm">

          
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal" id="guardarnuevoPlan">
        Agregar
        </button>
       
      </div>
    </div>
  </div>
 
      </div>


<div class="modal fade" id="modalEditarPlan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Plan de Estudio</h4>
      </div>
      <div class="modal-body">

        <input type="text" name="idPlan" id="idPlan" hidden="">


        <label>CUE de la Institución</label>

        <select id='institucionPlanU' name='institucionPlanU' class='form-control input-sm'>
                  <option value='0'>Seleccione la institución</option>


                <?php

                require_once  "../../libreriasConexion/conexion.php";
                  $conexion=conexion();
                $sql="SELECT * FROM `institucion`";
                $result=mysqli_query($conexion,$sql);
                  while ($ver=mysqli_fetch_row($result)) {

                  ?>


                    <option value='<?php echo $ver[1] ?>'><?php echo $ver[1] ?></option>';
                  

                  <?php 
                    }
                       ?>
                </select>


             



          
          <label>N° Registro de la Carrera</label>
          <input type="text" name="reguisCarreU" id="reguisCarreU" class="form-control input-sm">

          <label>Nombre de la Carrera</label>
          <input type="text" name="nombreCarreU" id="nombreCarreU" class="form-control input-sm">
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal" id="guardarEditarPlan">
        Editar
        </button>
       
      </div>
    </div>
  </div>

</div>




<!-- Asignatura -->

<div class="modal fade" id="modalNuevoPlanAsignatura" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Asignaturas</h4>
      </div>
      <div class="modal-body">

        <input type="text" name="idPlan1" id="idPlan1" hidden="">
        <input type="text" id="idInstitucion1" name="idInstitucion1" hidden="">

              <div class="col-sm-12">
          <div class="input-group-prepend">
            <label class="input-group-text" for="ciclo">AÑO</label>
          </div>

          <select id="ciclo" name="ciclo" class='form-control'>
                  <option value="1er AÑO">"1er AÑO"</option>
                  <option value="2do AÑO">"2do AÑO"</option>
                  <option value="3ro AÑO">"3ro AÑO"</option>
                  <option value="4to AÑO">"4to AÑO"</option>
                  <option value="5to AÑO">"5to AÑO"</option>
                </select>
          </div>

          <div class="col-sm-12">
          <div class="input-group-prepend">
            <label class="input-group-text" for="nombreAsig">Nombre de la Asignatura</label>
          </div>
          <input type="text" name="nombreAsig" id="nombreAsig" class="form-control input-sm">
          </div>

            <div class="col-sm-12">
          <div class="input-group-prepend">
            <label class="input-group-text" for="duracionCarrera">Duración</label>
          </div>
          <input type="text" name="duracionCarrera" id="duracionCarrera" class="form-control input-sm">
          </div>

             <div class="col-sm-12">
          <div class="input-group-prepend">
            <label class="input-group-text" for="horaAsig">Cantidad de hora</label>
          </div>
          <input type="text" name="horaAsig" id="horaAsig" class="form-control input-sm">
          </div>


          
       
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal" id="guardarNuevoPlanAsignatura">
        Guardar
        </button>
       
      </div>
    </div>
  </div>

</div>









<div class="modal fade" id="modalNuevoPlanAsignaturaEditarTOO" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Asignaturas</h4>
      </div>
      <div class="modal-body">

        <input type="text" name="idasig2" id="idasig2" hidden="">
        <input type="text" id="idInstitucion2" name="idInstitucion2" hidden="">
        <input type="text" id="idPlan2" name="idPlan2" hidden="">

              <div class="col-sm-12">
          <div class="input-group-prepend">
            <label class="input-group-text" for="ciclo2">AÑO</label>
          </div>

          <select id="ciclo2" name="ciclo2" class='form-control'>
                  <option value="1er AÑO">"1er AÑO"</option>
                  <option value="2do AÑO">"2do AÑO"</option>
                  <option value="3ro AÑO">"3ro AÑO"</option>
                  <option value="4to AÑO">"4to AÑO"</option>
                  <option value="5to AÑO">"5to AÑO"</option>
                </select>
          </div>

          <div class="col-sm-12">
          <div class="input-group-prepend">
            <label class="input-group-text" for="nombreAsig2">Nombre de la Asignatura</label>
          </div>
          <input type="text" name="nombreAsig2" id="nombreAsig2" class="form-control input-sm">
          </div>

            <div class="col-sm-12">
          <div class="input-group-prepend">
            <label class="input-group-text" for="duracionCarrera2">Duración</label>
          </div>
          <input type="text" name="duracionCarrera2" id="duracionCarrera2" class="form-control input-sm">
          </div>

             <div class="col-sm-12">
          <div class="input-group-prepend">
            <label class="input-group-text" for="horaAsig2">Cantidad de hora</label>
          </div>
          <input type="text" name="horaAsig2" id="horaAsig2" class="form-control input-sm">
          </div>


          
       
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal" id="guardarEditarPlanAsignatura">
        Guardar
        </button>
       
      </div>
    </div>
  </div>

</div>











<!-- Correlativa -->




<div class="modal fade" id="modalEditaPlanAsignatura" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Correlativas</h4>
      </div>
      <div class="modal-body">
        
        <div id="tablaselecTotal"></div>

        <button type="button" class="btn btn-primary btn-lg btn-block" id="guardarNuevoPlanAsignaturaCorrespo">
        Guardar
        </button>


        <div id="tablMirar"></div>




          
       
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal" >
        Cerrar
        </button>
       
      </div>
    </div>
  </div>

</div>












<script type="text/javascript">
    $(document).ready(function(){
        


        $('#guardarnuevo').click(function(){

          nombre=$('#nombre').val();
          cue=$('#cue').val();
          domicilio=$('#domicilio').val();
          tel=$('#tel').val();
          email=$('#email').val();

          if (nombre!=="" && cue!=="" && domicilio!=="" && tel!=="" && email!=="") {

         if (confirm("El CUE ES CORRECTO PORQUE DESPUES NO PODRAS MODIFICAR")) {agregardatosinstitu(nombre,cue,domicilio,tel,email);}

          }else{

            camposVaciosIns();
          }

            
        });

        $('#actualizadatos').click(function(){
          actualizaDatosnnnn();

        });


          $('#guardarnuevoPlan').click(function(){
          institucionPlan=$('#institucionPlan').val();
          reguisCarre=$('#reguisCarre').val();
          nombreCarre=$('#nombreCarre').val();
      
         
            agregardatosinstituPlan(institucionPlan,reguisCarre,nombreCarre);
        });

        $('#guardarEditarPlan').click(function(){
          actualizaDatosnnnnPlan();

        });




        $('#guardarNuevoPlanAsignatura').click(function(){
          idPlan1=$('#idPlan1').val();
          idInstitucion1=$('#idInstitucion1').val();
          ciclo=$('#ciclo').val();
          nombreAsig=$('#nombreAsig').val();
          duracionCarrera=$('#duracionCarrera').val();
          horaAsig=$('#horaAsig').val();

         
            agregardatosinstituAsignaturato(idPlan1,idInstitucion1,ciclo,nombreAsig,duracionCarrera,horaAsig);
        });

        $('#guardarEditarPlanAsignatura').click(function(){
          actualizaDatosnnnnAsignaturaTor();

        });




         $('#guardarNuevoPlanAsignaturaCorrespo').click(function(){
          idasig3=$('#idasig3').val();
          idPlan3=$('#idPlan3').val();
          idInstitucion3=$('#idInstitucion3').val();
          asignaturaCo1=$('#asignaturaCo1').val();
          asignaturaCo2=$('#asignaturaCo2').val();
         

         
            agregardatosinstituAsignaturatoCorrelativa(idasig3,idPlan3,idInstitucion3,asignaturaCo1,asignaturaCo2);
        });

       



          

    });
</script>



