


<div class="modal fade" id="modalAlumnoInscripcionCursado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">INSCRIPCIÓN</h4>
      </div>
      <div class="modal-body">
         <dir id="fechaInsCursa">


        <!-- datos de la tabla -->
         

          <input type="text" name="idCursadoInscp" id="idCursadoInscp" hidden="">

          <input type="text" name="idAlumnoAnaliticoInscp" id="idAlumnoAnaliticoInscp" hidden="">
          <input type="text" name="idPlanAnaliticoInscp" id="idPlanAnaliticoInscp" hidden="">
          <br><br>

        <!-- Agregar datos nuevos o editar -->
        <label>AÑO - ASIGNATURA -HORARIO</label>
        <dir id="selecCarrera"></dir>
        <br>

        <button type="button" class="btn btn-outline-primary btn-lg btn-block"  id="notaAnaliticoInscripcionCursado">
        Guardar
        </button><br>
        <dir id="tablainscpCursa"></dir>
        </dir>

        <dir id="fechaInsCursa2">
        <dir id="tablainscpCursa2"></dir>
        </dir>



        
      </div>
      <div class="modal-footer">
        
         <button type="button" class="btn btn-outline-danger btn-lg btn-block" data-dismiss="modal">
        Salir sin Guardar
        </button>
       
      </div>
    </div>
  </div>
</div>











<div class="modal fade" id="modalAlumnoInscripcionFinal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">INSCRIPCIÓN FINAL</h4>
      </div>
      <div class="modal-body">
        <dir id="fechaIns">


        <!-- datos de la tabla -->
         

          <input type="text" name="idFinalInscp" id="idFinalInscp" hidden="">

          <input type="text" name="idAlumnoAnaliticoInscpF" id="idAlumnoAnaliticoInscpF" hidden="">
          <input type="text" name="idPlanAnaliticoInscpF" id="idPlanAnaliticoInscpF" hidden="">
          <br><br>

        <!-- Agregar datos nuevos o editar -->
        <label>AÑO - ASIGNATURA -HORARIO</label>
        <dir id="selecCarreraF"></dir>
        <br>

        <dir id="situacionCursadoFinal"></dir>
        <br>

        <button type="button" class="btn btn-outline-primary btn-lg btn-block"  id="notaAnaliticoInscripcionFinal">
        INSCRIBIR
        </button><br>

        <dir id="tablainscpCursaFinal"></dir>
        
 



        </dir>

        <dir id="fechaIns2">

        <dir id="tablainscpCursaFinal2"></dir>

        </dir>

      </div>
      
      <div class="modal-footer">
        
         <button type="button" class="btn btn-outline-danger btn-lg btn-block" data-dismiss="modal">
        Salir sin Guardar
        </button>
       
      </div>
    </div>
  </div>
</div>






















<script type="text/javascript">
    $(document).ready(function(){


     

      $('#tablainscpCursaFinal').load('php/analiticoAlumno/tablaFinal.php');
      $('#tablainscpCursaFinal2').load('php/analiticoAlumno/tablaFinal2.php');

      $('#selecCarrera').load('php/analiticoAlumno/seleccionaCurso.php');


        $('#selecCarreraF').load('php/analiticoAlumno/seleccionaFinal.php');

      $('#tablainscpCursa').load('php/analiticoAlumno/tablaInscripCursado.php');
       $('#tablainscpCursa2').load('php/analiticoAlumno/tablaInscripCursado2.php');






      $('#notaAnaliticoInscripcionFinal').click(function(){

          idFinalInscp=$('#idFinalInscp').val();
          idPlanAnaliticoInscpF=$('#idPlanAnaliticoInscpF').val();
          idAlumnoAnaliticoInscpF=$('#idAlumnoAnaliticoInscpF').val();
          idAnaliticoInscpCursoF=$('#idAnaliticoInscpCursoF').val();
          notaRegular2=$('#notaRegular2').val();
          notaFinal2=$('#notaFinal2').val();
          equivalente2=$('#equivalente2').val();

          
 


          if (idFinalInscp!=="") {
            
            alert("Proceso deshabilitado");
          }else{
            nuevaNotaAnaliticoAlumnoFin(idFinalInscp,idPlanAnaliticoInscpF,idAlumnoAnaliticoInscpF,idAnaliticoInscpCursoF,notaRegular2,notaFinal2,equivalente2);
          }




      
       
            
        });













    });



   $('#notaAnaliticoInscripcionCursado').click(function(){

          idCursadoInscp=$('#idCursadoInscp').val();
          idAlumnoAnaliticoInscp=$('#idAlumnoAnaliticoInscp').val();
          idPlanAnaliticoInscp=$('#idPlanAnaliticoInscp').val();
          idAnaliticoInscpCurso=$('#idAnaliticoInscpCurso').val();
        

    if (idAnaliticoInscpCurso!=="0") {

          if (idCursadoInscp!=="") {
            editarNotaAnaliticoAlumnoInscripCursado(idCursadoInscp,idAlumnoAnaliticoInscp,idPlanAnaliticoInscp,idAnaliticoInscpCurso);
          }else{
            nuevaNotaAnaliticoAlumnoInscripCursado(idCursadoInscp,idAlumnoAnaliticoInscp,idPlanAnaliticoInscp,idAnaliticoInscpCurso);
          }
    }else{


alertify
  .alert('ADMINISTRADOR','Los campos estan incompletos o vacío', function(){
    alertify.message('COMPLETE LOS CAMPOS');
  });


    } 
  
        });



  $("#selecCarreraF").change(function(){

idAnaliticoInscpCursoF=$('#idAnaliticoInscpCursoF').val(); 

if (idAnaliticoInscpCursoF!=="0") { 

cadena='idAlumnoAnaliticoInscpF=' + $('#idAlumnoAnaliticoInscpF').val()+
      '&idPlanAnaliticoInscpF=' + $('#idPlanAnaliticoInscpF').val()+
      '&idAnaliticoInscpCursoF=' + $('#idAnaliticoInscpCursoF').val();





  
        $.ajax({
          type:"post",
          data:cadena,
          url:'php/analiticoAlumno/crearsessionSituacionAlumnp.php',
          success:function(r){
           $('#situacionCursadoFinal').html(r);




          }
        });




}  

      });
  




  $("#situacion").change(function(){

     situacion=$('#situacion').val();

if (situacion==="LIBRE") {
  $("#libre").hide();
  $('#notaRegular').val('');
}else{

 $("#libre").show();

}
  
      
      });








</script>

