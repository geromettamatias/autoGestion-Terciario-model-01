<div class="modal fade" id="modalNuevoAlumnoMesa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega una nueva mesa de examen</h4>
      </div>
      <div class="modal-body">

                  <select id='idhoraFinal2' name='idhoraFinal2' class='form-control input-sm'>
                  <option value='0'>Seleccione la institución</option>


                <?php

                require_once  "../../libreriasConexion/conexion.php";
                  $conexion=conexion();

                $sql="SELECT * FROM `institucionplan`";
                $result=mysqli_query($conexion,$sql);
                  while ($ver=mysqli_fetch_row($result)) {

                      $idPlan=$ver[0];
                  

                  ?>

                    <option value='<?php echo $ver[0] ?>'><?php echo $ver[3] ?></option>';
                  

                  <?php 
                    }
                       ?>
                </select>



          <dir id="nuevoSele"></dir>


           <div class="form-group row">
        <label for="fech1" class="col-2 col-form-label">1er Fecha</label>
        <div class="col-10">
          <input class="form-control" type="date" value="2020-06-19" id="fech1">
        </div>
      </div>
       <div class="form-group row">
        <label for="fech2" class="col-2 col-form-label">2da Fecha</label>
        <div class="col-10">
          <input class="form-control" type="date" value="2020-06-19" id="fech2">
        </div>
      </div>





            <select id='prof1' name='prof1' class='form-control input-sm'>
                  <option value='0'>Seleccione la institución</option>


  

                <?php

                require_once  "../../libreriasConexion/conexion.php";
                  $conexion=conexion();
                $sql4="SELECT * FROM `datospersonal`";
                $result4=mysqli_query($conexion,$sql4);
                  while ($ver=mysqli_fetch_row($result4)) {

                  ?>


                    <option value='<?php echo $ver[0] ?>'><?php echo $ver[1] ?></option>';
                  

                  <?php 
                    }
                       ?>
                </select>

              <select id='prof2' name='prof2' class='form-control input-sm'>
               <option value='0'>Seleccione la institución</option>


  

                <?php

                require_once  "../../libreriasConexion/conexion.php";
                  $conexion=conexion();
                $sql5="SELECT * FROM `datospersonal`";
                $result5=mysqli_query($conexion,$sql5);
                  while ($ver=mysqli_fetch_row($result5)) {

                  ?>


                    <option value='<?php echo $ver[0] ?>'><?php echo $ver[1] ?></option>';
                  

                  <?php 
                    }
                       ?>
                </select>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal" id="guardarnuevoAlumnoMesa">
        Agregar
        </button>
       
      </div>
    </div>
  </div>
</div>








<div class="modal fade" id="modalEdarAlumnoMesa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar una nueva mesa de examen</h4>
      </div>
      <div class="modal-body">

                <input type="text" name="idmesa" id="idmesa" hidden="">


          <dir id="asignaturacompet23"></dir>


           <div class="form-group row">
        <label for="fech1U" class="col-2 col-form-label">1er Fecha</label>
        <div class="col-10">
          <input class="form-control" type="date" value="2020-06-19" id="fech1U">
        </div>
      </div>
       <div class="form-group row">
        <label for="fech2U" class="col-2 col-form-label">2da Fecha</label>
        <div class="col-10">
          <input class="form-control" type="date" value="2020-06-19" id="fech2U">
        </div>
      </div>



            <select id='prof1U' name='prof1U' class='form-control input-sm'>
                  <option value='0'>Seleccione la institución</option>

    

                <?php

                require_once  "../../libreriasConexion/conexion.php";
                  $conexion=conexion();
                $sql4="SELECT * FROM `datospersonal`";
                $result4=mysqli_query($conexion,$sql4);
                  while ($ver=mysqli_fetch_row($result4)) {

                  ?>


                    <option value='<?php echo $ver[0] ?>'><?php echo $ver[1] ?></option>';
                  

                  <?php 
                    }
                       ?>
                </select>

              <select id='prof2U' name='prof2U' class='form-control input-sm'>
               <option value='0'>Seleccione la institución</option>


  

                <?php

                require_once  "../../libreriasConexion/conexion.php";
                  $conexion=conexion();
                $sql5="SELECT * FROM `datospersonal`";
                $result5=mysqli_query($conexion,$sql5);
                  while ($ver=mysqli_fetch_row($result5)) {

                  ?>


                    <option value='<?php echo $ver[0] ?>'><?php echo $ver[1] ?></option>';
                  

                  <?php 
                    }
                       ?>
                </select>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal" id="guardarEditarAlumnoMesa">
        Editar
        </button>
       
      </div>
    </div>
  </div>
</div>








<script type="text/javascript">



    $("#idhoraFinal2").change(function(){

      idhoraFinal2= $('#idhoraFinal2').val();

    
        $.ajax({
          type:"post",
          data:'idhoraFinal2=' + idhoraFinal2,
          url:'php/mesaExamen/secionNuevo.php',
          success:function(r){
           $('#nuevoSele').load('mesaExamen/seleNuevo.php');

 
          }
        });
      });
  
  
 $(document).ready(function(){


        $('#guardarnuevoAlumnoMesa').click(function(){
          
          idhoraFinal=$('#idhoraFinal').val();
          fech1=$('#fech1').val();
          fech2=$('#fech2').val();
          prof1=$('#prof1').val();
          prof2=$('#prof2').val();
         

agregardatosAlumnosAlumnoTERMesa(idhoraFinal,fech1,fech2,prof1,prof2);




});




$('#guardarEditarAlumnoMesa').click(function(){
          idmesa=$('#idmesa').val();
          fech1U=$('#fech1U').val();
          fech2U=$('#fech2U').val();
          prof1U=$('#prof1U').val();
          prof2U=$('#prof2U').val();
         


editardatosAlumnosAlumnoTERMesa(idmesa,fech1U,fech2U,prof1U,prof2U);




});


 
});

 

  </script>
