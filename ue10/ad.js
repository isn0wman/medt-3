$(document).ready(function(){
	$('#info-box').hide();
	$(".glyphicon-asterisk").click(function(){
	console.log("CLICK!!!");
	if(confirm("??")){
		console.log("true bei ID:" + this.id); //span element da an dieses das click Element gebunden wurde
	
	$.ajax({
			url:"http://localhost/medt/ue10/index.php",
			method: "POST",
			data:"deleteProId=" + $(this).parent().parent().attr("id"),
			//data: {deleteProId: this.id},
			success: function(serverresponse){
				console.log("Server response" + serverresponse);
				if (serverresponse) {
					//Tabellenzeile entfernen und Infobox
					//Löschen erfolgreich einblenden
					$('#info-box').text("Löschen erfolgreich").fadeIn("Slow");
					$('#info-box').addClass("bg-success");
					$('#info-box').show().fadeOut("Slow");
					$('#'+serverresponse).remove();
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
	    console.log("Löschen false: " + $(this).parent().parent().attr("id")); // $(this) erzeugt aus der this-referenz ein jquery-object. jetzt können alle jquery methoden genutzt werden
	  }
	});
});

$('.edit').click(function() {
  console.log("Edit");
});

