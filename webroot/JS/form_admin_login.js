document.getElementById("form_login").onsubmit = function(e)
{	
	document.getElementById("erreur_admin_login").innerHTML = "";	
	document.getElementById("admin_login").style.borderColor="green";
	document.getElementById("erreur_admin_password").innerHTML = "";	
	document.getElementById("admin_password").style.borderColor="green";	

	if(document.getElementById("admin_login").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_admin_login").innerHTML = "Veuillez remplir ce champs";
		document.getElementById("erreur_admin_login").style.color="red";
		document.getElementById("admin_login").style.borderColor="red";
	}

	else if(document.getElementById("admin_password").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_admin_password").innerHTML = "Veuillez remplir ce champs";
		document.getElementById("erreur_admin_password").style.color="red";
		document.getElementById("admin_password").style.borderColor="red";
	}
}