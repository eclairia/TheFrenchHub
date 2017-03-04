<?php
    if (isset($_GET['id']))
    {
        $status = ($_GET['status'] == 'accepted') ? 1 : 0;
        include_once "app/model/projects/update_status.php";
        $retour =  update_status($_GET['id'], $status);
        if ($retour)
        {
            include_once('lib/mail.php');
            if ($status == 1)
            {
                $message_html = '<html>
                                <body>
                                    <div>
                                        <p>
                                            Bonjour <b>' . $_GET['name'] . '<b>
                                        </p>
                                        Votre projet a été accepté. Vous pouvez dès à présent profiter des offres que nous proposons. 
                                    </div>
                                </body>
                            </html>';
            }
            else
            {
                $message_html = '<html>
                                <body>
                                    <div>
                                        <p>
                                            Bonjour <b>' . $_GET['name'] . '<b>
                                        </p>
                                        Votre projet a été refusé. 
                                    </div>
                                </body>
                            </html>';
            }

            if(sendmail(MAIL_EXPEDITEUR, NOM_EXPEDITEUR, MAIL_EXPEDITEUR, $_GET["mail"], '',
                'Demande de validation de votre projet : Mise à jour', '', $message_html, ''))
            {
                location('projects', 'list', "notif=ok");
                exit;
            }
            else
            {
                location('projects', 'list', "notif=nmail");
                exit;
            }
        }
        else
        {
            location('projects', 'list', "notif=nok");
            exit;
        }
    }

    $projects = select_table( array("table1" => "tfh_projects",
                                    "table2" => "tfh_users"),
                              array("where_column" => "user_project",
                                    "where_value" => "project_ID"));

    //var_dump($projects);
    define("PAGE_TITLE", "Liste des projets");
    include_once "app/view/projects/list.php";