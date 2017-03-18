<?php
    protection("admin", "admin", "login", USER_ADMIN);

	$testimonials = select_table(
	    array("table1" => "tfh_testimonials"),
        array("orderby => testimonial_id",
			  "order => DESC"));

    //Appel de la vue correspondante
    define("PAGE_TITLE", 'Liste des témoignages');
    include_once("app/view/testimonials/list.php");