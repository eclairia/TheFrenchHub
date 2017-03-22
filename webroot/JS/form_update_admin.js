document.getElementById("form_update_admin").onsubmit = function(e)
{	
	document.getElementById("erreur_update_admin").innerHTML = "";	
	document.getElementById("update_admin_name").style.borderColor="green";
	document.getElementById("erreur_update_admin").innerHTML = "";	
	document.getElementById("update_admin_mail").style.borderColor="green";
	document.getElementById("erreur_update_admin").innerHTML = "";	
	document.getElementById("update_admin_login").style.borderColor="green";
	document.getElementById("erreur_update_admin").innerHTML = "";	
	document.getElementById("update_admin_password").style.borderColor="green";	
	document.getElementById("erreur_update_admin").innerHTML = "";	
	document.getElementById("update_admin_level").style.borderColor="green";				

	if(document.getElementById("update_admin_name").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_update_admin").innerHTML = "Veuillez remplir le champs admin name";
		document.getElementById("erreur_update_admin").style.color="red";
		document.getElementById("update_admin_name").style.borderColor="red";
	}

	else if(document.getElementById("update_admin_mail").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_update_admin").innerHTML = "Veuillez remplir le champs admin mail";
		document.getElementById("erreur_update_admin").style.color="red";
		document.getElementById("update_admin_mail").style.borderColor="red";
	}

	else if(document.getElementById("update_admin_login").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_update_admin").innerHTML = "Veuillez remplir le champs admin login";
		document.getElementById("erreur_update_admin").style.color="red";
		document.getElementById("update_admin_login").style.borderColor="red";
	}

	else if(document.getElementById("update_admin_password").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_update_admin").innerHTML = "Veuillez remplir le champs admin password";
		document.getElementById("erreur_update_admin").style.color="red";
		document.getElementById("update_admin_password").style.borderColor="red";
	}

	else if(document.getElementById("update_admin_level").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_update_admin").innerHTML = "Veuillez remplir le champs admin level";
		document.getElementById("erreur_update_admin").style.color="red";		
		document.getElementById("update_admin_level").style.borderColor="red";
	}
}