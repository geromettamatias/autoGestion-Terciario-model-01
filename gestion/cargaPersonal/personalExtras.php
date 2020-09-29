<p>
<div class="modal fade" id="modalNuevoPlantel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">AGREGAR UN PERSONAL</h4>
      </div>
      <div class="modal-body">
          <label>Nombre y Apellido</label>
          <input type="text" name="" id="nombreDocente" class="form-control input-sm">
          <label>DNI</label>
          <input type="text" name="" id="dniDocente" class="form-control input-sm">
        
            <label>Actividad que Realiza</label>
                <select id="actividadDocente" name="actividadDocente" class='form-control input-sm'>
                  <option value="1">Selecciona una opcion</option>
                  <option value="Directivo">Directivo</option>
                  <option value="Auxiliar">Auxiliar</option>
                  <option value="Docente">Docente</option>
                  <option value="MEP">MEP</option>
                </select>
             
            

          <label>Titulo Docente o habilitante</label>
          <input type="text" name="" id="tituloDocente" class="form-control input-sm">
          <label>N° de Registro</label>
          <input type="text" name="" id="nTituloDocente" class="form-control input-sm">
          <label>N° Telefonico</label>
          <input type="text" name="" id="nTelefonicodocente" class="form-control input-sm">
          <label>Domicilio Actual</label>
          <input type="text" name="" id="domicilioDocente" class="form-control input-sm">
          <label>Email</label>
          <input type="text" name="" id="emailDocente" class="form-control input-sm">



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal" id="guardarnuevoPlantel">
        Agregar
        </button>
       
      </div>
    </div>
  </div>
</div>

<!-- Modal para iNFORMACION de datos -->



<div class="modal fade" id="modalEdicionPlantel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">EDITAR DATOS DEL PERSONAL</h4>
      </div>
      <div class="modal-body">
          <input type="text" hidden="" id="idPersonalU" name="">
          
          <label>Nombre y Apellido</label>
          <input type="text" name="" id="nombreDocenteU" class="form-control input-sm">
          <label>DNI</label>
          <input type="text" name="" id="dniDocenteU" class="form-control input-sm">

       
          <label>Actividad que Realiza</label>
                <select id="actividadDocenteU" name="actividadDocente" class='form-control input-sm'>
                  <option value="1">Selecciona una opcion</option>
                  <option value="Directivo">Directivo</option>
                  <option value="Auxiliar">Auxiliar</option>
                  <option value="Docente">Docente</option>
                  <option value="MEP">MEP</option>
                </select>
       


          <label>Titulo Docente o habilitante</label>
          <input type="text" name="" id="tituloDocenteU" class="form-control input-sm">
          <label>N° de Registro</label>
          <input type="text" name="" id="nTituloDocenteU" class="form-control input-sm">
          <label>N° Telefonico</label>
          <input type="text" name="" id="nTelefonicodocenteU" class="form-control input-sm">
          <label>Domicilio Actual</label>
          <input type="text" name="" id="domicilioDocenteU" class="form-control input-sm">
          <label>Email</label>
          <input type="text" name="" id="emailDocenteU" class="form-control input-sm">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning btn-lg btn-block" id="actualizadatosPlantel" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>





<!-- Modal para edicion de datos -->










<div class="modal fade" id="modalInformacionPlantel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">INFORMACIÓN</h4>
      </div>
      <div class="modal-body">
          <input type="text" hidden="" id="idPersonalUx" name=""><br>
          <label>Apellido y Nombre:</label>
          <div id="nombreDocenteUx"></div>
          <label>DNI:</label>
          <div id="dniDocenteUx"></div>
          <label>Actividad:</label>
          <div id="actividadDocenteUx"></div>
          <label>Titulo:</label>
          <div id="tituloDocenteUx"></div>
          <label>N° Titulo:</label>
          <div id="nTituloDocenteUx"></div>
          <label>N° teléfono:</label>
          <div id="nTelefonicodocenteUx"></div>
          <label>Domicilio:</label>
          <div id="domicilioDocenteUx"></div>
          <label>Email:</label>
          <div id="emailDocenteUx"></div>


  
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success btn-lg btn-block" data-dismiss="modal" aria-label="Close">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>


<!-- Modal para asignatura de datos -->










<div class="modal fade" id="modalAsignaturaPlantel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">INFORMACIÓN</h4>
      </div>
      <div class="modal-body">
   
       

<div class="col-sm-12">



    
  <div id="resultadoBusqueda"></div>
      

    
 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success btn-lg btn-block" data-dismiss="modal" aria-label="Close">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
</div>
</p>



<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevoPlantel').click(function(){
          nombreDocente=$('#nombreDocente').val();
          dniDocente=$('#dniDocente').val();
          actividadDocente=$('#actividadDocente').val();
         
          tituloDocente=$('#tituloDocente').val();
          nTituloDocente=$('#nTituloDocente').val();
          nTelefonicodocente=$('#nTelefonicodocente').val();
          domicilioDocente=$('#domicilioDocente').val();
          emailDocente=$('#emailDocente').val();

            agregardatosPLANTEL(nombreDocente,dniDocente,actividadDocente,tituloDocente,nTituloDocente,nTelefonicodocente,domicilioDocente,emailDocente);
        });



      
        


        $('#actualizadatosPlantel').click(function(){
          actualizaDatosPLANTEL();
        });

    });
</script>




<!-- lista -->
