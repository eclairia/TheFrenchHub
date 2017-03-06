<?php

	$nb_admins = counttable("tfh_admin");
	//Appel du modèle pour obtenir la liste des utilisateurs
	$admins = selecttable("tfh_admin", 
						array("orderby" => "admin_ID",
								"order" => "DESC"));

	//Appel de la vue correspondante
	define("APP_LANG", "fr");
	define("PAGE_TITLE", 'Liste des administrateur de The French Hub');
	include_once('app/view/admin/list.php');