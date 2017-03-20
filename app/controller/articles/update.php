<?php
	protection("admin", "admin", "login", "USER_ADMIN");

	if((empty($_GET['id'])) && (!isset($_POST['article_ID'])))
	{
		location("articles", "list", "notif=noid");
	}

	if(!isset($_POST["article_title"]))
	{
		$article = select_table(
                            array("table1" => "tfh_articles",
                                  "table2" => "tfh_admin"),
                            array("where_column" => "article_ID",
                                  "where_value" => $_GET['id']),
                            array("and_column1" => "admin_ID",
                                  "and_value1" => "article_author")
        );

        // var_dump($article);
        // die();

		//Appel de la vue correspondante
		define("PAGE_TITLE", "Modifier les données d'un article");
		include_once("app/view/articles/update.php");
	}
	else
	{
		$_POST["article_ID"] = intval($_POST["article_ID"]);

		include_once("app/model/articles/upload_pictures.php");
		$article_picture_url = upload_pictures($_FILES);

        if($article_picture_url == false)
        {
            location('articles', 'update', 'id='. $_GET['id'] .'&notif=badimg');
        }
        else
        {
            //Appel du modele pour modifier les données d'un article
            include_once("app/model/articles/update_article.php");
            $retour = update_article($_POST, $article_picture_url);

            if($retour)
            {
                location("articles", "list", "notif=ok");
            }

            else
            {
                location("articles", "list", "notif=nok");
            }
        }

	}
