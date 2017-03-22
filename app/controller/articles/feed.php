<?php
	if (!defined("_BASE_URL")) die("Ressource interdite !");
    $articles = select_table(array("table1" => "tfh_articles"));
    define("PAGE_TITLE", 'Actualités The French Hub');
    include_once("app/view/articles/feed.php");
