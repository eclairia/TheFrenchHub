<?php
    protection("admin", "admin", "login", USER_ADMIN);
    if (!isset($_POST['project_refusal_justification']))
    {
        $infos_mail = select_table(array(
                                    'table1' => 'tfh_users',
                                    'table2' => 'tfh_projects'),
                                   array(
                                    'where_column' => 'user_project',
                                    'where_value'  => 'project_ID'),
                                   array(
                                    'and_column1' => 'project_ID',
                                    'and_value1'  => $_GET['projectid']));
        //var_dump($projects);
        define("PAGE_TITLE", "Justification du refus");
        include_once "app/view/projects/justification.php";
    }
    else
    {
        //var_dump($_POST); exit;
        include_once "app/model/projects/insert_justification.php";
        $retour =  insert_justification($_POST);
        if ($retour)
        {
            include_once('lib/mail.php');
            $message_html = '<html>
                                <body>
                                    <div>
                                        <p>'. $_POST['project_refusal_justification'] .'</p>
                                    </div>
                                </body>
                             </html>';

            if(sendmail(MAIL_EXPEDITEUR, NOM_EXPEDITEUR, MAIL_EXPEDITEUR, $_POST["user_mail"], '',
                'Demande de validation de votre projet : Refus', '', $message_html, ''))
            {
                include_once "app/model/users/prevent_user.php";
                $retour =  prevent_user($_POST);
                if ($retour)
                {
                    location('projects', 'list', 'notif=ok');
                }
                else
                {
                    location('projects', 'list', 'notif=noPreventUpdate');
                }
            }
            else
            {
                location('projects', 'justification', 'projectid='. $_POST["project_ID"] .'&notif=nmail');
            }
        }
        else
        {
            location('projects', 'justification', 'projectid='. $_POST['project_ID'] .'&notif=nok');
        }
    }