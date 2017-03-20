<?php
	if(!isset($_POST['contact_first_name']))
	{
		//Appel de la vue correspondante
		define("PAGE_TITLE", 'Contacter The French Hub');
		include_once('app/view/contacts/new.php');
	}
	else
	{
		//Appel du modele pour insérer un administrateur
		include_once("app/model/contacts/insert_contact.php");
		$contact = insert_contact($_POST);

		if(!$contact)
		{
			location("contacts", "new", "notif=nok");		
		}
		else
		{
			include_once('lib/mail.php');
            $message_html = '<html>
                                <body>
                                    <div>
                                        <p>Prénom: ' . $_POST['contact_first_name'] . '</p>
                                        <p>Nom: ' . $_POST['contact_last_name'] . '</p>
                                        <p>Mail de l\'utilisateur: '. $_POST['contact_mail'] .'</p>
                                        <p>Objet du message: '. $_POST['contact_object'] .'</p>
                                        <p>Message: '. $_POST['contact_message'] .'</p>
                                    </div>
                                </body>
                             </html>';

            if(sendmail(MAIL_EXPEDITEUR, NOM_EXPEDITEUR, MAIL_EXPEDITEUR, MAIL_EXPEDITEUR, '',
                'Confirmation de l\'envoi de message à The French Hub', '', $message_html, ''))
            {			
				location("static", "home", "notif=ok");
			}
		}		
	}