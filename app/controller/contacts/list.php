<?php
	if (!defined("_BASE_URL")) die("Ressource interdite !");
	$contacts = select_table_value(
					array("table1" => "tfh_contacts"),
					array("orderby" => "contact_ID",
							"order" => "DESC")
				);

    define("PAGE_TITLE", "Liste des demandes de contact");
	include_once("app/view/contacts/list.php");