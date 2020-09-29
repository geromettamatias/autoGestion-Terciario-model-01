

 <div class="modal fade" id="modalGALERIAGaleria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h2 class="modal-title">GALERÍA</h2>
                            </div>
                            <div class="modal-body">
                             
                                <form class="form-horizontal" id="formLibroGALERIA">
                                  
                                    <div class="form-group">
                                      
                                        <div class="col-xs-5">
                                            <input id="idgaleria" name="idgaleria" hidden="" type="text" class="form-control" placeholder="ID">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="galeriaTitulo" class="control-label col-xs-5">TITULO :</label>
                                        <div class="col-xs-5">
                                            <input id="galeriaTitulo" name="galeriaTitulo"  type="text" class="form-control" placeholder="Titulo">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="galeriaDatos" class="control-label col-xs-5">TEXTOS:</label>
                                        <div class="col-xs-5">
                                          <textarea name="galeriaDatos" id="galeriaDatos" rows="10" cols="80" class="form-control input-sm"></textarea>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="galeriaFotos" class="control-label col-xs-5">Portada:</label>
                                        <div class="col-xs-5">
                                            <input id="galeriaFotos" name="galeriaFotos" type="file">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-5">
                                            <input name="boton" type="hidden" value="guardar">
                                        </div>
                                    </div>
                                </form>
                            </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal" id="guardarnuevoadminGaleriaEgresado" >
                               ACTUALIZAR
                              </button>
                             
                            </div>


                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>
















<div class="modal fade" id="modalPremiosPremios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h2 class="modal-title">PREMIOS</h2>
                            </div>
                            <div class="modal-body">
                             
                                <form class="form-horizontal" id="formLibroPremios">
                                  
                                    <div class="form-group">
                                      
                                        <div class="col-xs-5">
                                            <input id="idpremio" name="idpremio" hidden=""  type="text" class="form-control" placeholder="ID">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="premiosTitulo" class="control-label col-xs-5">TITULO :</label>
                                        <div class="col-xs-5">
                                            <input id="premiosTitulo" name="premiosTitulo"  type="text" class="form-control" placeholder="Titulo">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="premiosDatos" class="control-label col-xs-5">TEXTOS:</label>
                                        <div class="col-xs-5">
                                          <textarea name="premiosDatos" id="premiosDatos" rows="10" cols="80" class="form-control input-sm"></textarea>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="premiosFotos" class="control-label col-xs-5">Portada:</label>
                                        <div class="col-xs-5">
                                            <input id="premiosFotos" name="premiosFotos" type="file">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-5">
                                            <input name="boton" type="hidden" value="guardar">
                                        </div>
                                    </div>
                                </form>
                            </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal" id="guardarnuevoadminpremios" >
                               ACTUALIZAR
                              </button>
                             
                            </div>


                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>













<div class="modal fade" id="modalhISTORIA" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">HISTORIA</h4>
      </div>
      <div class="modal-body">

         <input type="text" hidden="" name="idhistoria" id="idhistoria" >
          <label>DATOS</label>

          <textarea name="historiaDatos" id="historiaDatos" rows="10" cols="80" class="form-control input-sm"></textarea>


          
          <label>TITULO</label>
          <input type="text" name="historiaTitulo" id="historiaTitulo" class="form-control input-sm">

          

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal" id="guardarnuevoadminhistoria">
         ACTUALIZAR
        </button>
       
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="modaldATOS" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">DATOS INSTITUCIONAL</h4>
      </div>
      <div class="modal-body">

          <input type="text" hidden="" name="iddatos" id="iddatos" >
          <label>DATOS</label>
          <textarea name="datosDatos" id="datosDatos" rows="10" cols="80" class="form-control input-sm"></textarea>
           <label>TITULO</label>
          <input type="text" name="datosTitulo" id="datosTitulo" class="form-control input-sm">

          

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal" id="datosedtardaros">
        ACTUALIZAR
        </button>
       
      </div>
    </div>
  </div>
</div>






 <div class="modal fade" id="modaliNFORMACON" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h2 class="modal-title">INFORMACIÓN</h2>
                            </div>
                            <div class="modal-body">
                             
                                <form class="form-horizontal" id="formLibro">
                                  
                                    <div class="form-group">
                                      
                                        <div class="col-xs-5">
                                            <input id="idinformacion" name="idinformacion" hidden="" type="text" class="form-control" placeholder="ID">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="informacionTitulo" class="control-label col-xs-5">TITULO :</label>
                                        <div class="col-xs-5">
                                            <input id="informacionTitulo" name="informacionTitulo"  type="text" class="form-control" placeholder="Titulo">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="informacionDatos" class="control-label col-xs-5">TEXTOS:</label>
                                        <div class="col-xs-5">
                                          <textarea name="informacionDatos" id="informacionDatos" rows="10" cols="80" class="form-control input-sm"></textarea>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="imagen" class="control-label col-xs-5">Portada:</label>
                                        <div class="col-xs-5">
                                            <input id="imagen" name="imagen" type="file">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-5">
                                            <input name="boton" type="hidden" value="guardar">
                                        </div>
                                    </div>
                                </form>
                            </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal" id="edidarinformacion" >
                               ACTUALIZAR
                              </button>
                             
                            </div>


                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>










<div class="modal fade" id="modalDIDACTICO" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">MATERIAL DIDACTICO</h4>
      </div>
      <div class="modal-body">

          <input type="text" hidden="" name="iddidactica" id="iddidactica" >
          
          <label>TITULO</label>
          <input type="text" name="titulodidactica" id="titulodidactica" class="form-control input-sm">

          <label>DATOS</label>
          <textarea name="datosdidactica" id="datosdidactica" rows="10" cols="80" class="form-control input-sm"></textarea>
           

          

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal" id="edtiarMaterialDidactico">
        ACTUALIZAR
        </button>
       
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="modalDIDACTICONuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">MATERIAL DIDACTICO</h4>
      </div>
      <div class="modal-body">

         
          
          <label>TITULO</label>
          <input type="text" name="titulodidacticaN" id="titulodidacticaN" class="form-control input-sm">

          <label>DATOS</label>
          <textarea name="datosdidacticaN" id="datosdidacticaN" rows="10" cols="80" class="form-control input-sm"></textarea>
           

          

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal" id="nuevoMaterialDidactico">
        GUARDAR
        </button>
       
      </div>
    </div>
  </div>
</div>



<script type="text/javascript">
    $(document).ready(function(){
        
        $('#edidarinformacion').click(function(){
          edidarinformacionJAVA();
        });


         $('#guardarnuevoadminGaleriaEgresado').click(function(){
          datosedtarGaleriaJAVA();
        });


         $('#guardarnuevoadminpremios').click(function(){
          datosedtarpremiosJAVA();
        });

         $('#guardarnuevoadminhistoria').click(function(){
          datosedtarhistoriaJAVA();
        });

         $('#datosedtardaros').click(function(){
          datosedtardatosJAVA();
        });

          $('#edtiarMaterialDidactico').click(function(){
          agregaformMATERIALDIDACTICTiii();
        });





          $('#nuevoMaterialDidactico').click(function(){
          titulodidacticaN=$('#titulodidacticaN').val();
          datosdidacticaN=$('#datosdidacticaN').val();
       

            nuevoMaterialDidactico(titulodidacticaN,datosdidacticaN);



        });








    });







</script>

