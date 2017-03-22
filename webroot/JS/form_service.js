document.getElementById("form_service").onsubmit = function(e)
{	
	document.getElementById("erreur_service").innerHTML = "";	
	document.getElementById("service_description").style.borderColor="green";
	document.getElementById("erreur_service").innerHTML = "";	
	document.getElementById("service_price").style.borderColor="green";
	document.getElementById("erreur_service").innerHTML = "";	
	document.getElementById("service_duration").style.borderColor="green";		

	if(document.getElementById("service_description").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_service").innerHTML = "Veuillez remplir le champs description";
		document.getElementById("erreur_service").style.color="red";
		document.getElementById("service_description").style.borderColor="red";
	}

	else if(document.getElementById("service_price").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_service").innerHTML = "Veuillez remplir le champs prix";
		document.getElementById("erreur_service").style.color="red";
		document.getElementById("service_price").style.borderColor="red";
	}

	else if(document.getElementById("service_duration").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_service").innerHTML = "Veuillez remplir le champs durée";
		document.getElementById("erreur_service").style.color="red";
		document.getElementById("service_duration").style.borderColor="red";
	}
}