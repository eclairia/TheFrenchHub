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
		// var_dump($_POST);
		// var_dump($_FILES);
		// die();
		//Appel du modele pour insérer un témoignage
		include_once("app/model/testimonials/upload_pictures.php");
		$testimonial_picture_url = upload_pictures($_FILES);

        if($testimonial_picture_url == false)
        {
            location('testimonials', 'new', 'notif=badimg');
        }
        else
        {
            include_once("app/model/testimonials/insert_testimonial.php");
            $retour = insert_testimonial($_POST, $_FILES, $testimonial_picture_url);
            
            if($retour)
            {
                location("testimonials", "list", "notif=ok");
            }
            else
            {
                location("testimonials", "new", "notif=nok");
            }
        }		
	}
