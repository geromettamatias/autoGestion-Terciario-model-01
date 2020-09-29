<div class="modal fade" id="modalEdicionCursoCargaFech" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nuevo </h4>
      </div>
      <div class="modal-body">



             <div class="col-sm-12">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="situacionCursFinal">SITUACIÓN</label>
                    </div> 

            <select id="situacionCursFinal" name="situacionCursFinal" class='form-control input-sm'>
                  <option value="1">Selecciona una opcion</option>
                  <option value="INSCRIPCIÓN CURSADO">INSCRIPCIÓN CURSADO</option>
                  <option value="INSCRIPCIÓN FINAL">INSCRIPCIÓN FINAL</option>
                 
                </select>
              </div>
                



           <div class="form-group row">
        <label for="desdeF" class="col-2 col-form-label">DESDE</label>
        <div class="col-10">
          <input class="form-control" type="date" value="2020-06-19" id="desdeF">
        </div>
      </div>
       <div class="form-group row">
        <label for="hastaF" class="col-2 col-form-label">HASTA</label>
        <div class="col-10">
          <input class="form-control" type="date" value="2020-06-19" id="hastaF">
        </div>
      </div>

  




      </div>
  <dir id="botonNuevo">
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal" id="guardarnuevoAlumnoMesaFecha">
        Agregar
        </button>
       
      </div>
  </dir>
    </div>
  </div>
</div>






<div class="modal fade" id="modalEdicionCursoCargaFechEdiatr" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar </h4>
      </div>
      <div class="modal-body">

        <input class="form-control" type="text" id="idFecha" hidden="">

             <div class="col-sm-12">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="situacionCursFinal">SITUACIÓN</label>
                    </div> 

            <select id="situacionCursFinalU" name="situacionCursFinalU" class='form-control input-sm'>
                  <option value="1">Selecciona una opcion</option>
                  <option value="INSCRIPCIÓN CURSADO">INSCRIPCIÓN CURSADO</option>
                  <option value="INSCRIPCIÓN FINAL">INSCRIPCIÓN FINAL</option>
                 
                </select>
              </div>
                



           <div class="form-group row">
        <label for="desdeFU" class="col-2 col-form-label">DESDE</label>
        <div class="col-10">
          <input class="form-control" type="date" value="2020-06-19" id="desdeFU">
        </div>
      </div>
       <div class="form-group row">
        <label for="hastaFU" class="col-2 col-form-label">HASTA</label>
        <div class="col-10">
          <input class="form-control" type="date" value="2020-06-19" id="hastaFU">
        </div>
      </div>

  




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal" id="guardarnuevoAlumnoMesaFechaEdi">
        Agregar
        </button>
       
      </div>
    </div>
  </div>
</div>










<script type="text/javascript">

$("#botonNuevo").hide();
 $("#situacionCursFinal").change(function(){




situacionCursFinalU= $('#situacionCursFinal').val();

if (situacionCursFinalU=="1") {


  $("#botonNuevo").hide();

}else{

        $.ajax({
          type:"post",
          data:'situacionCursFinalU=' + situacionCursFinalU,
          url:'php/mesaExamen/buscarFecha.php',
          success:function(r){

            if (r==1) {
              $("#botonNuevo").hide();
            }else{

              $("#botonNuevo").show();
            }
           






          }
        });



}


      });









  
$(document).ready(function(){

$('#guardarnuevoAlumnoMesaFecha').click(function(){
          
          situacionCursFinal=$('#situacionCursFinal').val();
          desdeF=$('#desdeF').val();
          hastaF=$('#hastaF').val();
        
         

agregardatFechasMesas(situacionCursFinal,desdeF,hastaF);

$("#botonNuevo").hide();


});




$('#guardarnuevoAlumnoMesaFechaEdi').click(function(){

          idFecha=$('#idFecha').val();
          
          situacionCursFinalU=$('#situacionCursFinalU').val();
          desdeFU=$('#desdeFU').val();
          hastaFU=$('#hastaFU').val();
        
         

agregardatFechasMesasEdi(idFecha,situacionCursFinalU,desdeFU,hastaFU);




});

 
});

 

  </script>
