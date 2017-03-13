<?php

    $articles = select_table(
                array("table1" => "tfh_articles"),
                array("orderby => article_id",
                      "order => DESC"));

    include_once("app/view/articles/list.php");