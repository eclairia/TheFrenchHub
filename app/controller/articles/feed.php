<?php
    $articles = select_table(array("table1" => "tfh_articles"));
    define("PAGE_TITLE", 'Actualités The French Hub');
    include_once("app/view/articles/feed.php");
