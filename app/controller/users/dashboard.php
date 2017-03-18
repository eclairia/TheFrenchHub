<?php
	//Faire select_table users pour récupérer les membres d'un project

	$users_project =  select_table(
        		array("table1" => "tfh_users",
        				"table2" => "tfh_projects"),
        		array(
        			"where_colum => project_ID",
        			"where_value => user_project"));

	var_dump($users_project);
	die();