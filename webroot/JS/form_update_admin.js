document.getElementById("form_update_admin").onsubmit = function(e)
{	
	document.getElementById("erreur_update_admin_name").innerHTML = "";	
	document.getElementById("update_admin_name").style.borderColor="green";
	document.getElementById("erreur_update_admin_mail").innerHTML = "";	
	document.getElementById("update_admin_mail").style.borderColor="green";
	document.getElementById("update_admin_login").innerHTML = "";	
	document.getElementById("update_admin_login").style.borderColor="green";
	document.getElementById("erreur_update_admin_password").innerHTML = "";	
	document.getElementById("update_admin_password").style.borderColor="green";
	document.getElementById("erreur_update_admin_id").innerHTML = "";	
	document.getElementById("update_admin_id").style.borderColor="green";	
	document.getElementById("erreur_update_admin_level").innerHTML = "";	
	document.getElementById("update_admin_level").style.borderColor="green";				

	if(document.getElementById("update_admin_name").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_update_admin_name").innerHTML = "Veuillez remplir ce champs";
		document.getElementById("erreur_update_admin_name").style.color="red";
		document.getElementById("update_admin_name").style.borderColor="red";
	}

	else if(document.getElementById("update_admin_mail").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_update_admin_mail").innerHTML = "Veuillez remplir ce champs";
		document.getElementById("erreur_update_admin_mail").style.color="red";
		document.getElementById("update_admin_mail").style.borderColor="red";
	}

	else if(document.getElementById("update_admin_login").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_update_admin_login").innerHTML = "Veuillez remplir ce champs";
		document.getElementById("erreur_update_admin_login").style.color="red";
		document.getElementById("update_admin_login").style.borderColor="red";
	}

	else if(document.getElementById("update_admin_password").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_update_admin_password").innerHTML = "Veuillez remplir ce champs";
		document.getElementById("erreur_update_admin_password").style.color="red";
		document.getElementById("update_admin_password").style.borderColor="red";
	}	

	else if(document.getElementById("update_admin_id").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_update_admin_id").innerHTML = "8 caractères minimum";
		document.getElementById("erreur_update_admin_id").style.color="red";		
		document.getElementById("update_admin_id").style.borderColor="red";
	}

	else if(document.getElementById("update_admin_level").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_update_admin_level").innerHTML = "Veuillez remplir ce champs";
		document.getElementById("erreur_update_admin_level").style.color="red";		
		document.getElementById("update_admin_level").style.borderColor="red";
	}	
}