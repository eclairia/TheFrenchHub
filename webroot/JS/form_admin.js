document.getElementById("form_admin").onsubmit = function(e)
{	
	document.getElementById("erreur_admin").innerHTML = "";	
	document.getElementById("admin_name").style.borderColor="green";
	document.getElementById("erreur_admin").innerHTML = "";	
	document.getElementById("admin_mail").style.borderColor="green";
	document.getElementById("erreur_admin").innerHTML = "";	
	document.getElementById("admin_login").style.borderColor="green";
	document.getElementById("erreur_admin").innerHTML = "";	
	document.getElementById("admin_password").style.borderColor="green";				

	if(document.getElementById("admin_name").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_admin").innerHTML = "Veuillez remplir le champs admin name";
		document.getElementById("erreur_admin").style.color="red";
		document.getElementById("admin_name").style.borderColor="red";
	}

	else if(document.getElementById("admin_mail").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_admin").innerHTML = "Veuillez remplir le champs admin mail";
		document.getElementById("erreur_admin").style.color="red";
		document.getElementById("admin_mail").style.borderColor="red";
	}

	else if(document.getElementById("admin_login").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_admin").innerHTML = "Veuillez remplir le champs admin login";
		document.getElementById("erreur_admin").style.color="red";
		document.getElementById("admin_login").style.borderColor="red";
	}	

	else if(document.getElementById("admin_password").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_admin").innerHTML = "Veuilez remplir le champs admin password";
		document.getElementById("erreur_admin").style.color="red";		
		document.getElementById("admin_password").style.borderColor="red";
	}
}