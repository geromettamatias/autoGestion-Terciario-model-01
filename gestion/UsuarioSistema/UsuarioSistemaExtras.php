<p>
<div class="modal fade" id="modalNuevoadmin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega nuevo Personal</h4>
      </div>
      <div class="modal-body">
          <label>DNI</label>
          <input type="text" name="dniLoginadmin" id="dniLoginadmin" class="form-control input-sm">
          <label>PASS</label>
          <input type="text" name="passLoginadmin" id="passLoginadmin" class="form-control input-sm">
        
            <label>Actividad que Realiza</label>
                <select id="tipoUsuarioadmin" name="tipoUsuarioadmin" class='form-control input-sm'>
                  <option value="secretaria">Secretaria</option>
                  <option value="auxiliar">Auxiliar</option>
                  <option value="admin">Administrador</option>
                </select>
             
             
            

          

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal" id="guardarnuevoadmin">
        Agregar
        </button>
       
      </div>
    </div>
  </div>
</div>

</div>

<!-- Modal para iNFORMACION de datos -->



<div class="modal fade" id="modalEdicionadmin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
      <div class="modal-body">
          <input type="text" hidden="" id="idLoginUadmin" name="idLoginUadmin">
          
          <label>DNI</label>
          <input type="text" name="dniLoginUadmin" id="dniLoginUadmin" class="form-control input-sm">
          <label>PASS</label>
          <input type="text" name="passLoginUadmin" id="passLoginUadmin" class="form-control input-sm">
        
            <label>Actividad que Realiza</label>
                <select id="tipoUsuarioUadmin" name="tipoUsuarioUadmin" class='form-control input-sm'>
                  <option value="secretaria">Secretaria</option>
                  <option value="auxiliar">Auxiliar</option>
                  <option value="admin">Administrador</option>
                </select>
             
       


        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning btn-lg btn-block" id="actualizadatosadmin" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>


</p>

<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevoadmin').click(function(){
          dniLogin=$('#dniLoginadmin').val();
          passLogin=$('#passLoginadmin').val();
          tipoUsuario=$('#tipoUsuarioadmin').val();
         
            agregardatosjjjadmin(dniLogin,passLogin,tipoUsuario);
        });



     



        $('#actualizadatosadmin').click(function(){
          actualizaDatosnnnnadmin();
        });

    });
</script>
