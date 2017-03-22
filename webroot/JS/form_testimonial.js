document.getElementById("form_testimonial").onsubmit = function(e)
{	
	document.getElementById("erreur_testimonial").innerHTML = "";	
	document.getElementById("testimonial_first_name").style.borderColor="green";
	document.getElementById("erreur_testimonial").innerHTML = "";	
	document.getElementById("testimonial_last_name").style.borderColor="green";
	document.getElementById("erreur_testimonial").innerHTML = "";	
	document.getElementById("testimonial_file").style.borderColor="green";
	document.getElementById("erreur_testimonial").innerHTML = "";	
	document.getElementById("testimonial_job").style.borderColor="green";	
	document.getElementById("erreur_testimonial").innerHTML = "";	
	document.getElementById("testimonial_content").style.borderColor="green";			

	if(document.getElementById("testimonial_first_name").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_testimonial").innerHTML = "Veuillez remplir le champs prénom";
		document.getElementById("erreur_testimonial").style.color="red";
		document.getElementById("testimonial_first_name").style.borderColor="red";
	}

	else if(document.getElementById("testimonial_last_name").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_testimonial").innerHTML = "Veuillez remplir le champs nom";
		document.getElementById("erreur_testimonial").style.color="red";
		document.getElementById("testimonial_last_name").style.borderColor="red";
	}

	else if(document.getElementById("testimonial_file").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_testimonial").innerHTML = "Veullez remplir le champs photo";
		document.getElementById("erreur_testimonial").style.color="red";		
		document.getElementById("testimonial_file").style.borderColor="red";
	}

	else if(document.getElementById("testimonial_job").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_testimonial").innerHTML = "Veullez remplir le champs job";
		document.getElementById("erreur_testimonial").style.color="red";		
		document.getElementById("testimonial_job").style.borderColor="red";
	}	

	else if(document.getElementById("testimonial_content").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_testimonial").innerHTML = "Veullez remplir le champs témoignage";
		document.getElementById("erreur_testimonial").style.color="red";		
		document.getElementById("testimonial_content").style.borderColor="red";
	}	
}