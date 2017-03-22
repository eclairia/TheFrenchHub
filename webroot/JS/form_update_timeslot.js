document.getElementById("form_update_timeslot").onsubmit = function(e)
{	
	document.getElementById("erreur_update_service_duration").innerHTML = "";	
	document.getElementById("update_service_duration").style.borderColor="green";		

	if(document.getElementById("update_time_slot_begin_disponibility").value < "2017-01-01")
	{
		e.preventDefault();
		document.getElementById("erreur_time_slot_begin_disponibility").innerHTML = "Veuillez remplir ce champs";
		document.getElementById("erreur_time_slot_begin_disponibility").style.color="red";
		document.getElementById("update_time_slot_begin_disponibility").style.borderColor="red";
	}
}