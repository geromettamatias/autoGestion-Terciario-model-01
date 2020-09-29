
<?php 
  
  session_start();
  require_once "../../libreriasConexion/conexion.php";
  $conexion=conexion();


     if (isset($_SESSION['idhora'])) {


        $idhora=$_SESSION['idhora'];

        $nom="";

      $sql="SELECT * FROM `datoscursohora` WHERE `idhora`='$idhora'";
   

        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

          

            $asig2=$ver[3];


      }

      $sql="SELECT * FROM `institucionplanasignatura` WHERE `idAsig`='$asig2'";
   

        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

          

            $nom=$ver[4];


      }

    }

 ?>




    <h5><p style="color:#F4F6F6;"><mark>Calificador  -  Asignatura: <?php echo $nom ?></mark></p></h5> 

<br>

<div class="table-responsive">
    <table class="table table-secondary  table-hover">
    <thead><tr>
        <td>Apellido y Nombre</td>
        <td>DNI</td>
         <td>SITUACIÓN</td>
          <td>NOTAS</td>
      
        <td>CALIFICADOR</td>
      </tr></thead>
      
      <tbody>
      <?php 





      if (isset($_SESSION['idhora'])) {


        $idhora=$_SESSION['idhora'];

    

      $sql="SELECT * FROM `inscrpcursado` WHERE `idhora`='$idhora'";
   

        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

          

            $idAlumno=$ver[1];


$apellinom="";
$dni="";

$sql1="SELECT * FROM `datosalumnos` WHERE `idAlumnos`='$idAlumno'";

 if (isset($_SESSION['valorA'])) {


        $valorA=$_SESSION['valorA'];

$sql1="SELECT * FROM `datosalumnos` WHERE `idAlumnos`='$idAlumno' AND `nombreAlumnos`LIKE '%$valorA%'";  

      }

        $result1=mysqli_query($conexion,$sql1);
        while($ver=mysqli_fetch_row($result1)){ 

          

            $apellinom=$ver[1];
            $dni=$ver[2];

          }



           $sql1="SELECT * FROM `datoscursohora` WHERE `idhora`='$idhora'";
         

        $result1=mysqli_query($conexion,$sql1);
        while($ver=mysqli_fetch_row($result1)){ 

          

            $idPlan=$ver[1];
            $idAsig=$ver[3];

          }
           


          $datos=$idAlumno.'||'.$idPlan.'||'.$idAsig;





            $situa="-";
            $nota="-";


           $sql1="SELECT * FROM `notasalumno` WHERE `idAlumno`='$idAlumno' AND `idPlan`='$idPlan' AND `idAsignatura`='$idAsig'";
         

        $result1=mysqli_query($conexion,$sql1);
        while($ver=mysqli_fetch_row($result1)){ 

          

            $situa=$ver[6];
            $nota=$ver[4];

            if ($nota==="") {
              $nota="-";
            }

          }
        


        if ($apellinom!=="") {
          # code...
        
          
       ?>


      <tr>

        <td><?php echo $apellinom ?></td>
         <td><?php echo $dni ?></td>
         <td><?php echo $situa ?></td>
         <td><?php echo $nota ?></td>


       

      <td><button class="btn btn-info"  onclick="notastota('<?php echo $datos ?>')">



        <svg class="bi bi-paperclip" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
      </svg>


            
          </button></td>


      </tr>
      <?php 
    } } } 


       ?></tbody>
    </table>
  </div>

