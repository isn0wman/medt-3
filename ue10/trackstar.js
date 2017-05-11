$(document).ready(function(){
	$('#info-box').hide();
	$('.delete').click(function() {
	  if(confirm("Soll dieses Projekt wirklich gelöscht werden?")) 
	  {
	    console.log("Löschen true: " + this.id); //this ist das span element, da an dieses dass click event gebunden wurde; alternativ: $(this).attr("id")
		$.ajax({
			url: "http://localhost/medt/ue13/trackstar.php",
			ethod: "POST",
			data: "deleteProId=" + this.id,  //Typ string
			success: function(serverResponse){
				/*console.log("Server response: " + serverResponse);*/
				if(serverResponse)
				{
					// Tabellenzeile entfernen und Infobox einblenden
					// Löschen erfolgreich einblenden
					

					
					$('#info-box').text("Löschen erfolgreich");
					$('#info-box').addClass("bg-success");
					$('#info-box').show();
				}
				else
				{
					// Löschen nicht erfolgreich einblenden
				}
			},
			error: function(){

			}
		}); //AJAX-Request mit dem Konfigurationsobjekt absetzen
	  }
	  else {
	    console.log("Löschen false: " + $(this).attr("id")); // $(this) erzeugt aus der this-referenz ein jquery-object. jetzt können alle jquery methoden genutzt werden
	  }
	});
});

$('.edit').click(function() {
  console.log("Edit");
});


