function menuPrincipalBedel(){

	// efectos show  hide


  $("#menuPrincipalBedel").show(100);
  
  $("#menuCargaBedelNOTASASISTENCIA").hide();

   

   $("#mesaExamen").hide();

    $("#mesaExamenNota").hide();


}


function mesaExamen(){

  // efectos show  hide

  $("#mesaExamen").show(100);

  $("#menuPrincipalBedel").hide();
  
  $("#menuCargaBedelNOTASASISTENCIA").hide();

   $("#mesaExamenNota").hide();




}



function menuCargaBedelNOTASASISTENCIA(){

  // efectos show  hide

   $("#mesaExamen").hide();
  $("#menuPrincipalBedel").hide();
  
  $("#menuCargaBedelNOTASASISTENCIA").show(100);


   $("#mesaExamenNota").hide();


}



function mesaExamenNota(){

  // efectos show  hide

   $("#mesaExamen").hide();
  $("#menuPrincipalBedel").hide();
  
  $("#menuCargaBedelNOTASASISTENCIA").hide();


   $("#mesaExamenNota").show(100);



}