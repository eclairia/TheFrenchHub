<?php
	$nb_admins = counttable("tfh_admin");
	$admins = selecttable("tfh_admin", array(
			"orderby => article_id",
			"order => DESC"
		));

	if($admins)
	{
		//Appel de la vue correspondante
		define("APP_LANG", "fr");
		define("PAGE_TITLE", 'Liste des administrateurs');		
		include_once("app/view/admin/list.php");
	}