document.getElementById("form_service").onsubmit = function(e)
{	
	document.getElementById("erreur_service_description").innerHTML = "";	
	document.getElementById("service_description").style.borderColor="green";
	document.getElementById("erreur_service_price").innerHTML = "";	
	document.getElementById("service_price").style.borderColor="green";
	document.getElementById("erreur_service_duration").innerHTML = "";	
	document.getElementById("service_duration").style.borderColor="green";		

	if(document.getElementById("service_description").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_service_description").innerHTML = "Veuillez remplir ce champs";
		document.getElementById("erreur_service_description").style.color="red";
		document.getElementById("service_description").style.borderColor="red";
	}

	else if(document.getElementById("service_price").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_service_price").innerHTML = "Veuillez remplir ce champs";
		document.getElementById("erreur_service_price").style.color="red";
		document.getElementById("service_price").style.borderColor="red";
	}

	else if(document.getElementById("service_duration").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_service_duration").innerHTML = "Veuillez remplir ce champs";
		document.getElementById("erreur_service_duration").style.color="red";
		document.getElementById("service_duration").style.borderColor="red";
	}
}