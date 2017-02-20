<?php

	include("../pdo.inc.php");
	include ("../users/lire_nb_users.php");
	include ("../users/lire_users.php");

	$nb_users = lire_nb_users();
	$users = lire_users();
	var_dump($users);
