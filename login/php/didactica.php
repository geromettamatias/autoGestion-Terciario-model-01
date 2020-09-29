<?php

require_once "../../libreriasConexion/conexionPagina.php";
	$conexion=conexion();



$datos="";


 		$sql="SELECT * from didactica";
       
        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

        $datos.="<div id='acordion'>
  				<div class='card'>
    			<div class='card-header'>
      <a href='javascript: void(0)' class='card-link' data-toggle='collapse' data-parent='#acordion'>".$ver[1]."</a></div>
      <div id='javascript: void(0)' class='collapse show'>
        <div class='card-body'>".$ver[2]."
        </div>
      </div>
  </div>

</div> <br>";	
        	
		  

		 }

		 echo $datos;






  
?>