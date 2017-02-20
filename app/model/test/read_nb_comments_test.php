<?php

	include("../pdo.inc.php");
	include ("../article/lire_nb_commentaires.php");


	$id = 2;
	$nb_commentaires = lire_nb_commentaires($id);
	$nb_commentaires_par_page = ceil($nb_commentaires/6);
	var_dump($nb_commentaires_par_page);
