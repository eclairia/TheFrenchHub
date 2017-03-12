<?php
	protection("admin", "admin", "login", USER_ADMIN);

	$admins = select_table(
	    array("table1" => "tfh_admin"),
			array("orderby => admin_ID",
				  "order => DESC"));

	$admins = select_table(
	 	    array("table1" => "tfh_articles"),
         	array("orderby => articles_id",
	 			  "order => DESC"));

	include_once("app/view/admin/index.php");