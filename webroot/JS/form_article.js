document.getElementById("form_article").onsubmit = function(e)
{	
	document.getElementById("erreur_article").innerHTML = "";	
	document.getElementById("article_title").style.borderColor="green";
	document.getElementById("erreur_article").innerHTML = "";	
	document.getElementById("article_content").style.borderColor="green";
	document.getElementById("erreur_article").innerHTML = "";	
	document.getElementById("article_author").style.borderColor="green";
	document.getElementById("erreur_article").innerHTML = "";	
	document.getElementById("article_file").style.borderColor="green";			

	if(document.getElementById("article_title").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_article").innerHTML = "Veuillez remplir le champs titre";
		document.getElementById("erreur_article").style.color="red";
		document.getElementById("article_title").style.borderColor="red";
	}

	else if(document.getElementById("article_content").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_article").innerHTML = "Veuillez remplir le champs contenu";
		document.getElementById("erreur_article").style.color="red";
		document.getElementById("article_content").style.borderColor="red";
	}

	else if(document.getElementById("article_file").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_article").innerHTML = "Veullez remplir le champs photo";
		document.getElementById("erreur_article").style.color="red";		
		document.getElementById("article_file").style.borderColor="red";
	}
}