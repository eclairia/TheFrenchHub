<?php
	if (!defined("_BASE_URL")) die("Ressource interdite !");
    protection("admin", "admin", "login", USER_ADMIN);

    $articles = select_table(
                array("table1" => "tfh_articles"),
                array("orderby => article_ID",
                      "order => DESC"));

    define("PAGE_TITLE", 'Liste des articles');
    include_once("app/view/articles/list.php");

