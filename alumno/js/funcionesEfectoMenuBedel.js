function menuPrincipalBedel(){

	// efectos show  hide


  $("#menuPrincipalBedel").show(100);
  
  $("#menuCargaBedelNOTASASISTENCIA").hide();

   $("#menuCargaBedelNotas").hide();

   $("#mesaExamen").hide();


}


function mesaExamen(){

  // efectos show  hide

  $("#mesaExamen").show(100);

  $("#menuPrincipalBedel").hide();
  
  $("#menuCargaBedelNOTASASISTENCIA").hide();

   $("#menuCargaBedelNotas").hide();




}



function menuCargaBedelNOTASASISTENCIA(){




   $("#mesaExamen").hide();
  $("#menuPrincipalBedel").hide();
  
  $("#menuCargaBedelNOTASASISTENCIA").show(100);


   $("#menuCargaBedelNotas").hide();




}


function menuCargaBedelNotas(datos){

  // efectos show  hide

   $("#mesaExamen").hide();
  $("#menuPrincipalBedel").hide();
  
  $("#menuCargaBedelNOTASASISTENCIA").hide();


   $("#menuCargaBedelNotas").show(100);


  d=datos.split('||');


  idAlumnos=d[0];
  idPlan=d[12];

  tablaAnaliticoNotasInscrip(idAlumnos,idPlan);
  

  



}