<?php
	protection("admin", "admin", "new", USER_ADMIN);
	
	if(empty($_POST))
	{
		//Appel de la vue correspondante
		define("PAGE_TITLE", 'Ajouter un témoignage');
		include_once('app/view/testimonials/new.php');
	}
	else
	{

	}
