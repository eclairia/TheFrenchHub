document.getElementById("formlogin").onsubmit = function(e)
{	
	if(document.getElementById("user_login").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_login").innerHTML = "Veuillez remplir ce champs";
		document.getElementById("erreur_login").style.color="red";
		document.getElementById("user_login").style.borderColor="red";
	}

	else
	{
		document.getElementById("user_login").style.borderColor="green";
	}

	if(document.getElementById("user_password").value == "")
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

	else
	{
		document.getElementById("user_password").style.borderColor="green";
	}	
}