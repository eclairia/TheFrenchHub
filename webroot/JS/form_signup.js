document.getElementById("forminscription").onsubmit = function(e)
{	
	document.getElementById("erreur_last_name").innerHTML = "";
	document.getElementById("user_last_name").style.borderColor="green";
	document.getElementById("erreur_first_name").innerHTML = "";
	document.getElementById("user_first_name").style.borderColor="green";
	document.getElementById("erreur_birth").innerHTML = "";
	document.getElementById("user_birth").style.borderColor="green";
	document.getElementById("erreur_mail").innerHTML = "";
	document.getElementById("user_mail").style.borderColor="green";
	document.getElementById("erreur_login").innerHTML = "";
	document.getElementById("user_login").style.borderColor="green";		
	document.getElementById("erreur_password").innerHTML = "";	
	document.getElementById("user_password").style.borderColor="green";
	document.getElementById("user_password2").innerHTML = "";	
	document.getElementById("user_password2").style.borderColor="green";	

	if(document.getElementById("user_last_name").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_last_name").innerHTML = "Veuillez remplir ce champs";
		document.getElementById("erreur_last_name").style.color="red";
		document.getElementById("user_last_name").style.borderColor="red";
	}

	else if(document.getElementById("user_first_name").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_first_name").innerHTML = "Veuillez remplir ce champs";
		document.getElementById("erreur_first_name").style.color="red";
		document.getElementById("user_first_name").style.borderColor="red";
	}

	else if(document.getElementById("user_birth").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_birth").innerHTML = "Veuillez remplir ce champs";
		document.getElementById("erreur_birth").style.color="red";
		document.getElementById("user_birth").style.borderColor="red";
	}	

	else if(document.getElementById("user_mail").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_mail").innerHTML = "Veuillez remplir ce champs";
		document.getElementById("erreur_mail").style.color="red";
		document.getElementById("user_mail").style.borderColor="red";
	}

	else if(document.getElementById("user_login").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_login").innerHTML = "Veuillez remplir ce champs";
		document.getElementById("erreur_login").style.color="red";
		document.getElementById("user_login").style.borderColor="red";
	}	

	else if(document.getElementById("user_password").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_password").innerHTML = "Veuillez remplir ce champs";
		document.getElementById("erreur_password").style.color="red";
		document.getElementById("user_password").style.borderColor="red";
	}

	else if(document.getElementById("user_password").value.length < 8)
	{
		e.preventDefault();
		document.getElementById("erreur_password").innerHTML = "8 caractères minimum";
		document.getElementById("erreur_password").style.color="red";		
		document.getElementById("user_password").style.borderColor="red";
	}

	else if(document.getElementById("user_password2").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_password2").innerHTML = "Veuillez remplir ce champs";
		document.getElementById("erreur_password2").style.color="red";
		document.getElementById("user_password2").style.borderColor="red";
	}

	else if(document.getElementById("user_password2").value != document.getElementById("user_password").value)
	{
		e.preventDefault();
		document.getElementById("erreur_password2").innerHTML = "Les 2 mots de passe ne correspondent pas";
		document.getElementById("erreur_password2").style.color="red";
		document.getElementById("user_password2").style.borderColor="red";
	}		

	else
	{
		document.getElementById("user_password").style.borderColor="green";
	}	
}