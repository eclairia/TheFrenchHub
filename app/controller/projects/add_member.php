<?php
	if(empty($_POST))
	{
		//Appel de la vue correspondante
		define("PAGE_TITLE", 'Ajouter un utilisateur à un projet');
		include_once('app/view/projects/add_member.php');
	}
	else
	{
		//Appel du modele pour insérer un administrateur
		include_once("app/model/projects/insert_member.php");
		$key = $key = md5(uniqid(rand()));
		$retour = insert_member($_POST, $key);

		if($retour)
		{
			include_once('lib/mail.php');
            $message_html = '<html>
                                <body>
                                    <div>
                                        <p>Le chef de projet du projet ' . $_POST['project_id'] . ' vous invite à rejoindre son projet. Cliquez sur le lien si vous voulez faire partie du projet.
                                        <a href="http://localhost/TheFrenchHub/index.php?module=projects&action=validate&id='. $_POST['project_id'] .'&key='. $key.'">Rejoindre le projet</a></p>
                                    </div>
                                </body>
                             </html>';

            if(sendmail(MAIL_EXPEDITEUR, NOM_EXPEDITEUR, MAIL_EXPEDITEUR, $_POST["user_mail"], '',
                'Invitation à un projet', '', $message_html, ''))
            {			
				location("users", "dashboard", "notif=ok");
			}					
		}
		else
		{
			location("projects", "add_member", "notif=nok");
		}
	}