document.getElementById("form_update_testimonial").onsubmit = function(e)
{	
	document.getElementById("erreur_update_testimonial").innerHTML = "";	
	document.getElementById("update_testimonial_first_name").style.borderColor="green";
	document.getElementById("erreur_update_testimonial").innerHTML = "";	
	document.getElementById("update_testimonial_last_name").style.borderColor="green";
	document.getElementById("erreur_update_testimonial").innerHTML = "";	
	document.getElementById("update_testimonial_file").style.borderColor="green";
	document.getElementById("erreur_update_testimonial").innerHTML = "";	
	document.getElementById("update_testimonial_job").style.borderColor="green";	
	document.getElementById("erreur_update_testimonial").innerHTML = "";	
	document.getElementById("update_testimonial_content").style.borderColor="green";			

	if(document.getElementById("update_testimonial_first_name").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_update_testimonial").innerHTML = "Veuillez remplir le champs nom";
		document.getElementById("erreur_update_testimonial").style.color="red";
		document.getElementById("update_testimonial_first_name").style.borderColor="red";
	}

	else if(document.getElementById("update_testimonial_last_name").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_update_testimonial").innerHTML = "Veuillez remplir le champs prénom";
		document.getElementById("erreur_update_testimonial").style.color="red";
		document.getElementById("update_testimonial_last_name").style.borderColor="red";
	}

	else if(document.getElementById("update_testimonial_file").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_update_testimonial").innerHTML = "Veuillez remplir le champs photo";
		document.getElementById("erreur_update_testimonial").style.color="red";		
		document.getElementById("update_testimonial_file").style.borderColor="red";
	}

	else if(document.getElementById("update_testimonial_job").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_update_testimonial").innerHTML = "Veuillez remplir le champs job";
		document.getElementById("erreur_update_testimonial").style.color="red";		
		document.getElementById("update_testimonial_job").style.borderColor="red";
	}	

	else if(document.getElementById("update_testimonial_content").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_update_testimonial").innerHTML = "Veuillez remplir le champs témoignage";
		document.getElementById("erreur_update_testimonial").style.color="red";		
		document.getElementById("update_testimonial_content").style.borderColor="red";
	}	
}