document.getElementById("form_timeslot").onsubmit = function(e)
{	
	document.getElementById("erreur_time_slot_begin_disponibility").innerHTML = "";	
	document.getElementById("erreur_time_slot_begin_disponibility").style.borderColor="green";		

	if(document.getElementById("time_slot_begin_disponibility").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_time_slot_begin_disponibility").innerHTML = "Veuillez remplir ce champs";
		document.getElementById("erreur_time_slot_begin_disponibility").style.color="red";
		document.getElementById("time_slot_begin_disponibility").style.borderColor="red";
	}
}