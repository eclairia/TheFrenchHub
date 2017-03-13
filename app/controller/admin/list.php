<?php
    protection("admin", "admin", "login", USER_ADMIN);

	$admins = select_table(
	    array("table1" => "tfh_admin"),
        array("orderby => admin_id",
			  "order => DESC"));

    //Appel de la vue correspondante
    define("PAGE_TITLE", 'Liste des administrateurs');
    include_once("app/view/admin/list.php");