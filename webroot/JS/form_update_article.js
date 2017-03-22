document.getElementById("form_update_article").onsubmit = function(e)
{	
	document.getElementById("erreur_update_article").innerHTML = "";	
	document.getElementById("update_article_title").style.borderColor="green";
	document.getElementById("erreur_update_article").innerHTML = "";	
	document.getElementById("update_article_content").style.borderColor="green";
	document.getElementById("erreur_update_article").innerHTML = "";	
	document.getElementById("update_article_file").style.borderColor="green";			

	if(document.getElementById("update_article_title").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_update_article").innerHTML = "Veuillez remplir le champs titre";
		document.getElementById("erreur_update_article").style.color="red";
		document.getElementById("update_article_title").style.borderColor="red";
	}

	else if(document.getElementById("update_article_content").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_update_article").innerHTML = "Veuillez remplir le champs contenu";
		document.getElementById("erreur_update_article").style.color="red";
		document.getElementById("update_article_content").style.borderColor="red";
	}

	else if(document.getElementById("update_article_file").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_update_article").innerHTML = "Veullez remplir le champs photo";
		document.getElementById("erreur_update_article").style.color="red";		
		document.getElementById("update_article_file").style.borderColor="red";
	}
}