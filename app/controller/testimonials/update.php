<?php

	protection("admin", "admin", "login", USER_SUPER_ADMIN);

	if(empty($_POST))
	{
		//Appel de la vue correspondante
        $testimonial = select_table(
            array("table1" => "tfh_testimonials"),
            array("where_column" => "testimonials_ID",
                "where_value" => $_GET['id'])
        );
		define("PAGE_TITLE", "Modifier les données d'un administrateur");
		include_once('app/view/testimonials/update.php');
	}
	else
	{

	}
