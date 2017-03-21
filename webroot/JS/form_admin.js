document.getElementById("form_admin").onsubmit = function(e)
{	
	document.getElementById("erreur_admin_name").innerHTML = "";	
	document.getElementById("admin_name").style.borderColor="green";
	document.getElementById("erreur_admin_mail").innerHTML = "";	
	document.getElementById("admin_mail").style.borderColor="green";
	document.getElementById("erreur_admin_login").innerHTML = "";	
	document.getElementById("admin_login").style.borderColor="green";
	document.getElementById("erreur_admin_password").innerHTML = "";	
	document.getElementById("admin_password").style.borderColor="green";
	document.getElementById("erreur_admin_level").innerHTML = "";	
	document.getElementById("admin_level").style.borderColor="green";				

	if(document.getElementById("admin_name").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_admin_name").innerHTML = "Veuillez remplir ce champs";
		document.getElementById("erreur_admin_name").style.color="red";
		document.getElementById("admin_name").style.borderColor="red";
	}

	else if(document.getElementById("admin_mail").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_admin_mail").innerHTML = "Veuillez remplir ce champs";
		document.getElementById("erreur_admin_mail").style.color="red";
		document.getElementById("admin_mail").style.borderColor="red";
	}

	else if(document.getElementById("admin_login").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_admin_login").innerHTML = "Veuillez remplir ce champs";
		document.getElementById("erreur_admin_login").style.color="red";
		document.getElementById("admin_login").style.borderColor="red";
	}	

	else if(document.getElementById("admin_password").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_admin_password").innerHTML = "8 caractères minimum";
		document.getElementById("erreur_admin_password").style.color="red";		
		document.getElementById("admin_password").style.borderColor="red";
	}

	else if(document.getElementById("admin_password").value.length < 8)
	{
		e.preventDefault();
		document.getElementById("erreur_admin_password").innerHTML = "8 caractères minimum";
		document.getElementById("erreur_admin_password").style.color="red";		
		document.getElementById("admin_password").style.borderColor="red";
	}	
}