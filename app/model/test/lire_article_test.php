<?php

	include("../pdo.inc.php");
	include ("../article/lire_nb_articles.php");
	include("../article/lire_article.php");

	$id = 1;
	$article = lire_article($id);
	var_dump($article);