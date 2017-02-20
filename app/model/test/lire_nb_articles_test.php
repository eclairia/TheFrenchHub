<?php

	include("../pdo.inc.php");
	include ("../article/lire_nb_articles.php");


	$nb_articles = lire_nb_articles();
	var_dump($nb_articles);
