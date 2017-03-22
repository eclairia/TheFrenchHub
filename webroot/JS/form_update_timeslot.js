document.getElementById("form_update_timeslot").onsubmit = function(e)
{	
	document.getElementById("erreur_update_timeslot").innerHTML = "";	
	document.getElementById("update_service_duration").style.borderColor="green";		

	if(document.getElementById("update_time_slot_begin_disponibility").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_update_timeslot").innerHTML = "Veuillez remplir le champs date de commencement";
		document.getElementById("erreur_update_timeslot").style.color="red";
		document.getElementById("update_time_slot_begin_disponibility").style.borderColor="red";
	}
}