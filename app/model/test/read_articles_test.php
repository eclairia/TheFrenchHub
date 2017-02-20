<?php

	include("../pdo.inc.php");
	include ("../article/lire_nb_articles.php");
	include("../article/lire_articles.php");

	$nb_articles = lire_nb_articles();
	$nb_articles_par_page = lire_articles(2, 2);
	var_dump($nb_articles_par_page);