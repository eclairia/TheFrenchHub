<?php
	
	//protection("admin", "admin", "new", "USER_LAMBDA");
	
	if(empty($_POST))
	{
		//Appel de la vue correspondante
		define("APP_LANG", "fr");
		define("PAGE_TITLE", 'Inscrivez-vous à The French Hub');
		include_once('app/view/users/signup.php');
	}

	else
	{
		$_POST["user_level"] = intval($_POST["user_level"]);
		$_POST["user_password"] = md5($_POST["user_password"] . SALT);
		//Appel du fichier d'upload pour upload une image
		include_once("app/model/users/upload_pictures.php");
		$user_picture_url = upload_pictures($_POST, $_FILES);	
		//Appel du modele pour insérer un administrateur
		include_once("app/model/users/insert_user.php");
		
		$retour = insert_user($_POST, $user_picture_url);

		if(!$retour)
		{
			location("users", "new", "notif=ok");		
		}

		else
		{
			location("projects", "new", "notif=nok");
		}
	}
