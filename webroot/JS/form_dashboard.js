//Formulaire d'ajout de membres dans la page dashboard
document.getElementById("form_add_member").onsubmit = function(e)
{	
	document.getElementById("erreur_additionnal_member_last_name").innerHTML = "";
	document.getElementById("additionnal_member_last_namet ").style.borderColor="green";
	document.getElementById("erreur_additionnal_member_last_name").innerHTML = "";
	document.getElementById("user_first_name").style.borderColor="green";

	if(document.getElementById("additionnal_member_last_name").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_additionnal_member_last_name").innerHTML = "Veuillez remplir ce champs";
		document.getElementById("erreur_additionnal_member_last_name").style.color="red";
		document.getElementById("additionnal_member_last_namet ").style.borderColor="red";
	}

	else if(document.getElementById("user_first_name").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_first_name").innerHTML = "Veuillez remplir ce champs";
		document.getElementById("erreur_first_name").style.color="red";
		document.getElementById("user_first_name").style.borderColor="red";
	}

	else if(document.getElementById("additionnal_member_mail").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_additionnal_member_mail").innerHTML = "Veuillez remplir ce champs";
		document.getElementById("erreur_additionnal_member_mail").style.color="red";
		document.getElementById("additionnal_member_mail").style.borderColor="red";
	}	
}

//Formulaire soumettre un projet
document.getElementById("form_submit_project").onsubmit = function(e)
{	
	document.getElementById("erreur_project_name").innerHTML = "";
	document.getElementById("project_name").style.borderColor="green";
	document.getElementById("erreur_project_file").innerHTML = "";
	document.getElementById("project_file").style.borderColor="green";	

	if(document.getElementById("project_name").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_project_name").innerHTML = "Veuillez remplir ce champs";
		document.getElementById("erreur_project_name").style.color="red";
		document.getElementById("project_name").style.borderColor="red";
	}

	else if(document.getElementById("project_file").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_project_file").innerHTML = "Veuillez remplir ce champs";
		document.getElementById("erreur_project_file").style.color="red";
		document.getElementById("project_file").style.borderColor="red";
	}
}