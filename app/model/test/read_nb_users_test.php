<?php

	include("../pdo.inc.php");
	include ("../users/lire_nb_users.php");

	$nb_users = lire_nb_users();
	var_dump($nb_users);
	