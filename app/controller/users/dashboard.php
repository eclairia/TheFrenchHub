<?php
	//Faire select_table users pour récupérer les membres d'un project
	define("PAGE_TITLE", "Votre espace utilisateur The French Hub");
	include_once("app/view/users/dashboard.php");

	$_GET['id'] = intval($_GET['id']);
	$users_project =  select_table(
        		array("table1" => "tfh_users",
        				"table2" => "tfh_projects"),
        		array(
        			"where_colum" => "project_ID",
        			"where_value" => $_GET['id']));

<<<<<<< HEAD
	//var_dump($users_project);
	//die();
=======
	// var_dump($users_project);
	// die();

	// $project_service =  select_table(
 	//        		array("table1" => "tfh_users",
 	//        				"table2" => "tfh_projects"),
 	//        		array(
 	//        			"where_colum => project_ID",
 	//        			"where_value => user_project"));	

	include_once("app/view/users/dashboard.php");
>>>>>>> f533660843ab8326dcc0dfd3ace88db196531b3d
