
<div class="modal fade" id="modalNuevoCursoCarga" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega nuevo Curso</h4>
      </div>
      <div class="modal-body">

      <div class="col-sm-12">
          <div class="input-group-prepend">
            <label class="input-group-text" for="carreraCargaCurso">Carrera</label>
          </div>


          <select id='carreraCargaCurso' name='carreraCargaCurso' class='form-control input-sm'>
                <option value='0'>Seleccione la Carrera</option>
                    <?php
                    require_once  "../../libreriasConexion/conexion.php";
                      $conexion=conexion();
                    $sql="SELECT * FROM `institucionplan`";
                    $result=mysqli_query($conexion,$sql);
                      while ($ver=mysqli_fetch_row($result)) {
                      ?>
                <option value='<?php echo $ver[3] ?>'><?php echo $ver[3] ?></option>';
                    <?php } ?>
          </select>



      </div>

      <div class="col-sm-12">
          <div class="input-group-prepend">
            <label class="input-group-text" for="cursoCargaCurso">Nombre de la curso</label>
          </div>

          <input type="text" name="cursoCargaCurso" id="cursoCargaCurso" class="form-control input-sm">

           
      </div>


      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal" id="guardarnuevoCursoNuevo">
        Agregar
        </button>
       
      </div>
    </div>
  </div>
</div>

<!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicionCursoCarga" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
      <div class="modal-body">

        <input type="text" name="idCurs" id="idCurs" hidden="">


      <div class="col-sm-12">
          <div class="input-group-prepend">
            <label class="input-group-text" for="carreraCargaCursoU">Carrera</label>
          </div>


          <select id='carreraCargaCursoU' name='carreraCargaCursoU' class='form-control input-sm'>
                <option value='0'>Seleccione la Carrera</option>
                    <?php
                    require_once  "../../libreriasConexion/conexion.php";
                      $conexion=conexion();
                    $sql="SELECT * FROM `institucionplan`";
                    $result=mysqli_query($conexion,$sql);
                      while ($ver=mysqli_fetch_row($result)) {
                      ?>
                <option value='<?php echo $ver[3] ?>'><?php echo $ver[3] ?></option>';
                    <?php } ?>
          </select>



      </div>

      <div class="col-sm-12">
          <div class="input-group-prepend">
            <label class="input-group-text" for="cursoCargaCursoU">Nombre de la Asignatura</label>
          </div>

          <input type="text" name="cursoCargaCursoU" id="cursoCargaCursoU" class="form-control input-sm">

           
      </div>










        
      </div>

  

      
      <div class="modal-footer">
        <button type="button" class="btn btn-warning btn-lg btn-block" id="actualizadatosCursoNuevo" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>



<!-- Modal asignatura -->





<div class="modal fade" id="modalNombreAsignaturaCursoCarga" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Información</h4>
      </div>
      <div class="modal-body">
   
   
 
          <input type="text"  id="idhora" name="idhora" hidden="">
 
  

            <div class="col-sm-12">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="idPersonal">Asignatura</label>
                    </div>  

              <dir class="col-sm-12" id="idAsig"></dir>

           </div>




          <div class="col-sm-12">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="diaHorario">Horarios</label>
                    </div> 

            <select id="diaHorario" name="diaHorario" class='form-control input-sm'>
                  <option value="1">Selecciona una opcion</option>
                  <option value="LUNES">LUNES</option>
                  <option value="MARTES">MARTES</option>
                  <option value="MIERCOLES">MIERCOLES</option>
                  <option value="JUEVES">JUEVES</option>
                  <option value="VIERNES">VIERNES</option>
                  <option value="SABADO">SABADO</option>
                </select>
              </div>
             




            <div class="col-sm-12">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="horarioI">Horario Inicial</label>
                    </div> 

            <input type="time" id="horarioI" name="horarioI" placeholder="Horarios" class="form-control"/>
              </div>
              <div class="col-sm-12">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="horarioF">Horario Final</label>
                    </div> 

            <input type="time" id="horarioF" name="horarioF" placeholder="Horarios" class="form-control"/>
              </div>
           
               <div class="col-sm-12">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="idPersonal">Profesor</label>
                    </div>


                    <select id='idPersonal' name='idPersonal' class='form-control input-sm'>
                          <option value='SIN PROFESOR'>SIN PROFESOR</option>
                              <?php
                              require_once  "../../libreriasConexion/conexion.php";
                                $conexion=conexion();
                              $sql="SELECT * FROM `datospersonal`";
                              $result=mysqli_query($conexion,$sql);
                                while ($ver=mysqli_fetch_row($result)) {
                                ?>
                          <option value='<?php echo $ver[0] ?>'><?php echo $ver[1] ?></option>';
                              <?php } ?>
                    </select>



                </div>

            
            </div>
             <div class="col-sm-12">
                <button type="button" class="btn btn-warning btn-lg btn-block" id="asignHorario" >Actualizar</button>
        
              </div><br><br>

               <div class="col-12">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="idPersonal">Horarios</label>
                    </div>  
           

                <dir class="col-sm-12" id="tablahorarios"></dir>
        
            </div>  



   
      <div class="modal-footer">
        <button type="button" class="btn btn-success btn-lg btn-block" data-dismiss="modal" aria-label="Close">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>



<script type="text/javascript">
    $(document).ready(function(){
        

        $('#guardarnuevoCursoNuevo').click(function(){
          carreraCargaCurso=$('#carreraCargaCurso').val();
          cursoCargaCurso=$('#cursoCargaCurso').val();

          if (carreraCargaCurso!=="0" && cursoCargaCurso!=="") {
            agregardatosCursoCursoNuevoTER(carreraCargaCurso,cursoCargaCurso);
          }else{
            camposVacios();
          }

            
        });



        $('#actualizadatosCursoNuevo').click(function(){
          actualizaDatosCursoCursoNuevoTER();
        });

    });










  $('#guardarnuevoAsignaturaCURSO').click(function(){
          idAsignaturaUT=$('#idAsignaturaUT').val();
          idCursoUT=$('#idCursoUT').val();
          cursoA=$('#cursoA').val();
          horasCatedrasA=$('#horasCatedrasA').val();
          horarioA=$('#horarioA').val();


            agregardatosAsignaturaCURSO(idAsignaturaUT,idCursoUT,cursoA,horasCatedrasA,horarioA);


        });




  $('#asignHorario').click(function(){
          idhora=$('#idhora').val();
          idAsigD=$('#idAsigD').val();
     
          diaHorario=$('#diaHorario').val();
          horarioI=$('#horarioI').val();
          horarioF=$('#horarioF').val();
          idPersonal=$('#idPersonal').val();



            agregarhoracorsoEditar(idhora,idAsigD,diaHorario,horarioI,horarioF,idPersonal);


        });




</script>

