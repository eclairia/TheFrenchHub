<?php
	protection("admin", "admin", "login", USER_ADMIN);

	$admins = selecttable("tfh_admin", "orderby => admin_ID", "order => DESC");

	$articles = selecttable("tfh_articles",
							array(
								"orderby" => "article_id",
								"order" => "DESC"						
							));

	include_once("app/view/admin/index.php");