<?php
	if (!defined("_BASE_URL")) die("Ressource interdite !");
	if(empty($_POST))
	{
		//Appel de la vue correspondante
		define("PAGE_TITLE", 'Insérer un utilisateur');
		include_once('app/view/users/new.php');
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
		$key = md5(uniqid(rand()));
		// var_dump($key);
		// die();
		$retour = insert_user($_POST, $user_picture_url, $key);

		if($retour)
		{
			// var_dump($retour);
			// die();		
			include_once('lib/mail.php');
            $message_html = '<html>
                                <body>
                                    <div>
                                        <p>Votre compte a bien été crée.
                                        Cliquez sur le lien ci-dessous pour valider votre compte.
                                        <a href="http://localhost/TheFrenchHub/index.php?module=users&action=validate&key='. $key .'">Validation de votre compte</a></p>
                                    </div>
                                </body>
                             </html>';

            if(sendmail(MAIL_EXPEDITEUR, NOM_EXPEDITEUR, MAIL_EXPEDITEUR, $_POST["user_mail"], '',
                'Validation de votre inscription', '', $message_html, ''))
            {
				location("users", "login", "notif=ok");
			}		
		}
		else
		{
			location("users", "new", "notif=nok");
		}
	}
