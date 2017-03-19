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
		$retour = insert_member($_POST);

		if($retour)
		{
			location("projects", "add_member", "notif=nok");		
		}
		else
		{
			include_once('lib/mail.php');
            $message_html = '<html>
                                <body>
                                    <div>
                                        <p>' . '<?= $_POST["project_id"] ?>' . '</p>
                                    </div>
                                </body>
                             </html>';

            if(sendmail(MAIL_EXPEDITEUR, NOM_EXPEDITEUR, MAIL_EXPEDITEUR, $_POST["user_mail"], '',
                'Invitation à un projet', '', $message_html, ''))
            {			
				location("users", "dashboard", "notif=ok");
			}
		}
	}