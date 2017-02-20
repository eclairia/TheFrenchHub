<?php

	include("../pdo.inc.php");
	include ("../article/lire_nb_commentaires.php");
	include ("../article/lire_commentaires.php");


	$id = 1;
	$nb_commentaires = lire_nb_commentaires($id);
	$nb_commentaires_par_page = ceil($nb_commentaires/6);	
	$commentaires = lire_commentaires($id, $nb_commentaires_par_page);
	var_dump($commentaires);
