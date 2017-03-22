<?php
	if (!defined("_BASE_URL")) die("Ressource interdite !");
	if(!isset($_POST['user_mail']))
	{
		//Appel de la vue correspondante
		define("PAGE_TITLE", 'Réinitialisation de votre mot de passe');
		include_once('app/view/users/reset.php');		
	}

	else
	{
		include_once('lib/mail.php');
        $message_html = '<html>
                            <body>
                                <div>
                                    <p>
                                    Cliquez sur ce lien pour réinitialiser votre mot de passe.
                                    <a href="http://localhost/TheFrenchHub/index.php?module=users&action=update_password&mail='. $_POST['user_mail'] .'">Réinitialisation de votre mot de passe</a></a></p>
                                </div>
                            </body>
                         </html>';

        if(sendmail(MAIL_EXPEDITEUR, NOM_EXPEDITEUR, MAIL_EXPEDITEUR, $_POST["user_mail"], '',
            'Validation de votre inscription', '', $message_html, ''))
        {
			location("users", "login", "notif=ok");
		}		
	}