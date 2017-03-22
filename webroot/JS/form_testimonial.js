document.getElementById("form_testimonial").onsubmit = function(e)
{	
	document.getElementById("erreur_testimonial_first_name").innerHTML = "";	
	document.getElementById("testimonial_first_name").style.borderColor="green";
	document.getElementById("erreur_testimonial_last_name").innerHTML = "";	
	document.getElementById("testimonial_last_name").style.borderColor="green";
	document.getElementById("erreur_testimonial_file").innerHTML = "";	
	document.getElementById("testimonial_file").style.borderColor="green";
	document.getElementById("erreur_testimonial_job").innerHTML = "";	
	document.getElementById("testimonial_job").style.borderColor="green";	
	document.getElementById("erreur_testimonial_content").innerHTML = "";	
	document.getElementById("testimonial_content").style.borderColor="green";			

	if(document.getElementById("testimonial_first_name").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_testimonial_first_name").innerHTML = "Veuillez remplir ce champs";
		document.getElementById("erreur_testimonial_first_name").style.color="red";
		document.getElementById("testimonial_first_name").style.borderColor="red";
	}

	else if(document.getElementById("testimonial_last_name").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_testimonial_last_name").innerHTML = "Veuillez remplir ce champs";
		document.getElementById("erreur_testimonial_last_name").style.color="red";
		document.getElementById("testimonial_last_name").style.borderColor="red";
	}

	else if(document.getElementById("testimonial_file").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_testimonial_file").innerHTML = "Veullez remplir ce champs";
		document.getElementById("erreur_testimonial_file").style.color="red";		
		document.getElementById("testimonial_file").style.borderColor="red";
	}

	else if(document.getElementById("testimonial_job").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_testimonial_job").innerHTML = "Veullez remplir ce champs";
		document.getElementById("erreur_testimonial_job").style.color="red";		
		document.getElementById("testimonial_job").style.borderColor="red";
	}	

	else if(document.getElementById("testimonial_content").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_testimonial_content").innerHTML = "Veullez remplir ce champs";
		document.getElementById("erreur_testimonial_content").style.color="red";		
		document.getElementById("testimonial_content").style.borderColor="red";
	}	
}