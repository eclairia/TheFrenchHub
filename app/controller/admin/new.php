<?php
	protection("admin", "admin", "new", "USER_SUPER_ADMIN");
	
	if(empty($_POST))
	{
		//Appel de la vue correspondante
		define("PAGE_TITLE", 'Insérer un administrateur');
		include_once('app/view/admin/new.php');
	}
	else
	{
		$_POST["admin_level"] = intval($_POST["admin_level"]);
		$_POST["admin_password"] = md5($_POST["admin_password"] . SALT);
		//Appel du modele pour insérer un administrateur
		include_once("app/model/admin/insert_admin.php");
		$retour = insert_admin($_POST);

		if(!$retour)
		{
			location("admin", "new", "notif=nok");		
		}
		else
		{
			include_once('lib/mail.php');
            $message_html = '<html>
                                <body>
                                    <div>
                                        <p>Votre création de compte administrateur a bien fonctionné. Veuillez contacter la personne adéquate pour qu\'il puisse vous donner vos identifiants de connexion.</p>
                                    </div>
                                </body>
                             </html>';

            if(sendmail(MAIL_EXPEDITEUR, NOM_EXPEDITEUR, MAIL_EXPEDITEUR, $_POST["admin_mail"], '',
                'Confirmation de la création du compte administrateur', '', $message_html, ''))
            {			
				location("admin", "list", "notif=ok");
			}
		}
	}
