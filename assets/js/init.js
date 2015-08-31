 $('.modal-trigger').leanModal();

 $('.button-collapse').sideNav({
      menuWidth: 240, // Default is 240
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    }
  );

 function modalterminos () {
 	$("#modalterminos").removeClass("no-mostrar");
 	$("#modalterminos").addClass("mostrar");
 	
 }
 function ocultamodal() {
 	$("#modalterminos").removeClass("mostrar");
 	$("#modalterminos").addClass("no-mostrar");
 	
 }