document.getElementById("form_article").onsubmit = function(e)
{	
	document.getElementById("erreur_article_title").innerHTML = "";	
	document.getElementById("article_title").style.borderColor="green";
	document.getElementById("erreur_article_content").innerHTML = "";	
	document.getElementById("article_content").style.borderColor="green";
	document.getElementById("erreur_article_author").innerHTML = "";	
	document.getElementById("article_author").style.borderColor="green";
	document.getElementById("erreur_article_file").innerHTML = "";	
	document.getElementById("article_file").style.borderColor="green";			

	if(document.getElementById("article_title").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_article_title").innerHTML = "Veuillez remplir ce champs";
		document.getElementById("erreur_article_title").style.color="red";
		document.getElementById("article_title").style.borderColor="red";
	}

	else if(document.getElementById("article_content").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_article_content").innerHTML = "Veuillez remplir ce champs";
		document.getElementById("erreur_article_content").style.color="red";
		document.getElementById("article_content").style.borderColor="red";
	}

	else if(document.getElementById("article_file").value == "")
	{
		e.preventDefault();
		document.getElementById("erreur_article_file").innerHTML = "Veullez remplir ce champs";
		document.getElementById("erreur_article_file").style.color="red";		
		document.getElementById("article_file").style.borderColor="red";
	}
}