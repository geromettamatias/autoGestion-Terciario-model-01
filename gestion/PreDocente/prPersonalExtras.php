<p>
<div class="modal fade" id="modalEdicionPre" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><b><u>Actualizar datos</u></b></h4>
      </div>
      <div class="modal-body">
          <input type="text" hidden="" id="idPersonalUPre" name="">
          
          <label><b><u>Nombre y Apellido</u></b></label>
          <input type="text" name="" id="nombreDocenteUPre" class="form-control input-sm">
          <label><b><u>DNI:</u></b></label>
          <input type="text" name="" id="dniDocenteUPre" class="form-control input-sm">

       
          <label><b><u>Actividad:</u></b></label>
                <select id="actividadDocenteUPre" name="actividadDocenteUPre" class='form-control input-sm'>
                  <option value="1">Selecciona una opcion</option>
                  <option value="Directivo">Directivo</option>
                  <option value="Auxiliar">Auxiliar</option>
                  <option value="Docente">Docente</option>
                  <option value="MEP">MEP</option>
                </select>
       


          <label><b><u>Titulo:</u></b></label>
          <input type="text" name="" id="tituloDocenteUPre" class="form-control input-sm">
          <label><b><u>N° Titulo:</u></b></label>
          <input type="text" name="" id="nTituloDocenteUPre" class="form-control input-sm">
          <label><b><u>N° telefono:</u></b></label>
          <input type="text" name="" id="nTelefonicodocenteUPre" class="form-control input-sm">
          <label><b><u>Domicilio:</u></b></label>
          <input type="text" name="" id="domicilioDocenteUPre" class="form-control input-sm">
          <label><b><u>Email:</u></b></label>
          <input type="text" name="" id="emailDocenteUPre" class="form-control input-sm">

          <label><b><u>Pass:</u></b></label>
          <input type="text" name="" id="passDocenteUPre" class="form-control input-sm">
          <label><b><u>SITUACION ALTA:</u></b></label>
          <input type="text" name="" id="situacionAltaUPre" class="form-control input-sm">
          <label><b><u>OBSERBACIÓN ALTA:</u></b></label>
          <input type="text" name="" id="obserbacionAltaUPre" class="form-control input-sm">

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning btn-lg btn-block" id="actualizadatosPre" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>


</p>
<script type="text/javascript">
    $(document).ready(function(){
        



        

        $('#actualizadatosPre').click(function(){
          actualizaDatosPre();
        });

    });
</script>