<?php

	protection("admin", "admin", "login", USER_ADMIN);

	if(empty($_POST))
	{
		//Appel de la vue correspondante
        $testimonial = select_table(
            array("table1" => "tfh_testimonials"),
            array("where_column" => "testimonial_ID",
                "where_value" => $_GET['id'])
        );
		define("PAGE_TITLE", "Modifier les données d'un administrateur");
		include_once('app/view/testimonials/update.php');
	}
	else
	{
		$_POST["testimonial_id"] = intval($_POST["testimonial_id"]);		
		//Appel du modele pour modifier les données d'un article
		include_once("app/model/testimonials/upload_pictures.php");
		$testimonial_picture_url = upload_pictures($_FILES);
		// var_dump($article_picture_url);
		// die();
		include_once("app/model/testimonials/update_testimonial.php");
		// var_dump($_POST);
		// var_dump($testimonial_picture_url);
		// die();
		$retour = update_testimonial($_POST, $testimonial_picture_url);
		
		if($retour)
		{
			location("testimonials", "list", "notif=ok");		
		}

		else
		{
			location("testimonials", "list", "notif=nok");
		}		
	}
